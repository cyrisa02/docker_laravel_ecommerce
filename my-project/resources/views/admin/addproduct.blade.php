@extends('admin.layouts.template')
@section('page_title')
    Add Product - Single Ecom
@endsection
<span>Add Product</span>
@section('content')
    <div class="container">
        <h4>Page/ Add Product</h4>
        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" class="form-control" id="subcategory_name" name="subcategory_name"
                    aria-describedby="categoryHelp" placeholder="Electronics">
                <small id="categoryHelp" class="form-text text-muted">Input Information</small>
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Product Short Description</label>
                <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Product Long Description</label>
                <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Product Price</label>
                <input type="number" class="form-control" id="subcategory_name" name="subcategory_name"
                    aria-describedby="categoryHelp" placeholder="12">
                <small id="categoryHelp" class="form-text text-muted">Input Information</small>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Product Quantity</label>
                <input type="number" class="form-control" id="subcategory_name" name="subcategory_name"
                    aria-describedby="categoryHelp" placeholder="1000">
                <small id="categoryHelp" class="form-text text-muted">Input Information</small>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1" class="mb-2">Select Sub Category</label>
                <div class="col-sm-10">
                    <select class="form-select" name="category" id="category" aria-label="Default select">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Upload Product Image</label>
                <input type="file" class="form-control" id="formFile" />
            </div>

            <div class="row justify-content-end">
                <div class="col-sm-10 mt-4">
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </div>
            </div>
        </form>

    </div>
@endsection
