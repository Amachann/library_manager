<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library;
use Illuminate\Support\Facades\Auth;

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
}