<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle"></button>
            <span class="navbar-brand" id="page-title">Borrow</span>
        </div>
    </div>
</nav>
<div id="area-book-list" class="area content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Borrow book data</h4>
                    </div>
                    <div class="content">
                        <form action="library/borrow" method="POST">
                            @csrf
                            <div class="author">
                                {{ $library->name}}
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="exampleInputEmail1">return date</label>
                                <!--name属性追加-->
                                <input type="date" class="form-control border-input" name="return_due_date" placeholder="date">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success btn-fill btn-wd">borrow!</button>
                                <input type="hidden" name="id" value="{{$library->id}}">
                            </div>
                            <div class="clearfix"></div>
                        </form>
                        <a href="library/index">戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>