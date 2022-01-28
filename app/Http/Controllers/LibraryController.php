<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library;
use Illuminate\Support\Facades\Auth;
use App\Log;
use Carbon\Carbon;

class LibraryController extends Controller
{
    // indexメソッドに処理を追加していきます
    public function __construct()
    {
        // 認証機能有効化
        $this->middleware("auth");
    }

    public function index()
    {
        $libraries = Library::all();

        return view("library.index",
            ["libraries" => $libraries,
            "user" => Auth::user()]);
    }

    public function borrowingForm(Request $request)
    {
        $library = Library::find($request->id);
        return view("library.borrow", [
            "library" => $library,
            "user" => Auth::user()]);
    }

    public function borrow(Request $request)
    {
        $library = Library::find($request->id);
        $library->user_id = Auth::id();
        $library->save();

        $log = new Log();
        $log->user_id = Auth::id();
        $log->library_id = $request->id;
        $log->ret_date = Carbon::now();
        $log->return_due_date = $request->return_due_date;
        $log->return_date = null;
        $log->save();

        return redirect("library/index");
    }
}