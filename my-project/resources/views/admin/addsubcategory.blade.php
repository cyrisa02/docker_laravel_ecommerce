@extends('admin.layouts.template')
@section('page_title')
    Add Sub Category - Single Ecom
@endsection
<span>Add Sub Category</span>
@section('content')
    <div class="container">
        <h4>Page/ Add Sub Category</h4>
        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Sub Category Name</label>
                <input type="text" class="form-control" id="subcategory_name" name="subcategory_name"
                    aria-describedby="categoryHelp" placeholder="Electronics">
                <small id="categoryHelp" class="form-text text-muted">Input Information</small>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1" class="mb-2">Select Category</label>
                <div class="col-sm-10">
                    <select class="form-select" name="category" id="category" aria-label="Default select">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-sm-10 mt-4">
                    <button type="submit" class="btn btn-primary">Add Sub Category</button>
                </div>
            </div>
        </form>

    </div>
@endsection
