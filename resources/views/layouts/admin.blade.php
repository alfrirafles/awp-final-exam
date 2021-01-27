<?php
if (isset($customers) | isset($customer)) {
    $GLOBALS['content'] = 'Customer';
} else if (isset($products) | isset($product)) {
    $GLOBALS['content'] = 'Product';
} else if (isset($orders) | isset($order)) {
    $GLOBALS['content'] = 'Order';
}
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage <?php echo $GLOBALS['content'];?>s</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{asset('/css/admin.css')}}">
</head>
<body>
<div class="container-fluid">
    <nav class="page-breadcrumbs" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="#"><?php echo $GLOBALS['content'] . 's'?></a></li>
        </ol>
    </nav>
    <h1><?php echo $GLOBALS['content'] . 's'; ?></h1>
    <hr class="solid">
    <div class="row">
        <div class="col-md-2">
            <ul class="navigation-lists">
                <li><a href="/products">Products</a></li>
                <li><a href="#">Product Lines</a></li>
                <li><a href="/orders">Orders</a></li>
                <li><a href="/customers">Customers</a></li>
                <li><a href="#">Employees</a></li>
                <li><a href="#">Offices</a></li>
            </ul>
        </div>
        <div class="col-md-10">
            @yield('content')
        </div>
    </div>
</div>
