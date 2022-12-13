@extends('admin.layouts.template')
@section('page_title')
    Category - Single Ecom
@endsection
<span>Hello from all Category</span>
@section('content')
    <div class="container">
        <h4>Page/ All Category</h4>
        <h5>Available Category Information</h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Sub Category</th>
                    <th scope="col">Product</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Electronics</td>
                    <td>10</td>
                    <td>100</td>
                    <td>
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-warning">Delete</a>
                    </td>
                </tr>

            </tbody>
        </table>



    </div>
@endsection
