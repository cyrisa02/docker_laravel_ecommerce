<title>@yield('page_title')</title>

<div class="">

    @yield('content')

    <a href="#"><span>SingleEcom</span></a>

    <ul>
        <li><a href="{{ route('admindashboard') }}">Dashboard</a></li>
        <li>Category</li>

        <li><a href="{{ route('addcategory') }}">Add Category</a></li>
        <li><a href="{{ route('allcategory') }}">All Category</a></li>

        <li>Sub Category</li>

        <li><a href="{{ route('addsubcategory') }}">Add Sub Category</a></li>
        <li><a href="{{ route('allsubcategory') }}">All Sub Category</a></li>

        <li>Product</li>

        <li><a href="{{ route('addproduct') }}">Add Product</a></li>
        <li><a href="{{ route('allproducts') }}">All Product</a></li>

        <li>Orders</li>

        <li><a href="{{ route('pendingorder') }}">Pending Orders</a></li>
        <li><a href="">Completed Orders</a></li>
        <li><a href="">Cancel Orders</a></li>
    </ul>
</div>
