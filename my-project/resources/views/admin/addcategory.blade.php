@extends('admin.layouts.template')
@section('page_title')
    Add Category - Single Ecom
@endsection

<span>Add Category</span>
@section('content')
    <div class="container">
        <h4>Page/ Add Category</h4>
        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Category Name</label>
                <input type="text" class="form-control" id="category_name" name="category_name"
                    aria-describedby="categoryHelp" placeholder="Electronics">
                <small id="categoryHelp" class="form-text text-muted">Input Information</small>
            </div>

            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>

    </div>
@endsection
