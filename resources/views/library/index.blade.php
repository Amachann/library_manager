@extends('main')
@include('sidebar')
@include('footer')
@section('contents')
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle"></button>
            <span class="navbar-brand" id="page-title">Book List</span>
        </div>
    </div>
</nav>
<div id="area-book-list" class="area content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Library</h4>
                    </div>
                    <div class="content table-responsive table-full-width">
                    <table class="table table-hover">
                            <thead>
                                <th>ID</th>
                                <th>Title</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <?php foreach($libraries as $library): ?>
                                    <tr class="">
                                        <td>{{$library->id}}</td>
                                        <td>{{$library->name}}</td>
                                        <?php if ($library->user_id === 0): ?>
                                            <td>
                                                <form action="borrow" method="get">
                                                    <input type="submit" value="borrow" class="btn btn-info">
                                                    <input type="hidden" name="id" value="{{$library->id}}" >
                                                </form>
                                            </td>
                                        <?php elseif ($library->user_id === $user["id"]): ?>
                                            <td>
                                                <form action="return" method="post">
                                                    @csrf
                                                    <input type="submit" value="return" class="btn btn-danger">
                                                    <input type="hidden" name="id" value="{{$library->id}}" >
                                                </form>
                                            </td>
                                        <?php else: ?>
                                            <td>
                                                <div class="btn btn-success">borrowing</div>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection