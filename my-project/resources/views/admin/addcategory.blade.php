@extends('admin.layouts.template')
@section('page_title')
    Add Category - Single Ecom
@endsection

<!doctype html>
<html>

<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <h1>This is example from LaravelTuts.com</h1>

    <div class="container">
        <h4>Add New category</h4>
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" id="category_name" name="category_name"
                    aria-describedby="nameHelp" placeholder="Electronics">
                <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
    </div>
</body>

</html>
<span>Add Category</span>


@section('content')
@endsection
