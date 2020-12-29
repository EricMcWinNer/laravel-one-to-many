<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>One to Many</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>
        body,
        .nunito {
            font-family: 'Nunito';
            background-color: #efefef;
        }

        img.product-image {
            width: 100%
        }

        .sidebar {
            display: flex;
            flex-direction: column;
            min-width: 270px;
        }

        .sidebar a {
            text-decoration: none;
            margin-bottom: 8px;
        }

        .sidebar p {
            font-size: 1.4rem;
            font-weight: 600;
        }

        .sidebar a.selected {
            font-weight: bold;
        }

        .one-to-many {
            display: flex;
        }

        .content-wrapper {
            margin-left: 15px
        }

        .thumbnail {
            height: 120px;
        }

        .thumbnail img {
            object-fit: contain;
            height: 120px;
        }

        .main-nav {
            display: flex;
            justify-content: space-between;
            padding: 11px 30px;
            background-color: blue;
            margin-bottom: 30px;
        }

        .main-nav a {
            text-decoration: none;
            color: white;
            font-weight: 600;
        }

        .push-right {
            display: flex;
        }

        .push-right *:not(:last-child) {
            margin-right: 10px;
        }

        .product {
            width: 100%;
            background-color: white;
            padding: 16px 16px 4px;
            border-radius: 4px;
            box-shadow: 0 0 4px rgba(0, 0, 0, .15);
            cursor: pointer;
        }

        .product p {
            font-weight: 600;
        }

        h5 {
            font-weight: 700;
            margin-bottom: .9rem;
        }

    </style>

    @yield('extra-head')
</head>


<body>
    <div class="main-nav">
        <a href="/"><i class="fas fa-fw fa-tb"></i>Electronics Product List</a>
        <div class="push-right">
            <a href="/new/category"><i class="fas fa-fw fa-plus"></i> New Category</a>
            <a href="/new/product"><i class="fas fa-fw fa-plus"></i> New Product</a>
        </div>
    </div>
    @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/fa4a01622d.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @if (session()->has('status'))
        @php
        $icon = session()->get('status');
        $title = session()->get('title');
        $message = session()->get('message');
        @endphp
        <script>
            Swal.fire({
                title: "{{ $title }}",
                icon: "{{ $icon }}",
                text: "{{ $message }}",
                confirmButtonText: "Sweet!"
            })

        </script>
    @endif
</body>

</html>
