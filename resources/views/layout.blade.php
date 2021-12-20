<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        img.slider-img{
            height: 400px !important
        }
        .trending-products{
            margin: 30px;
        }
        .trending-image{
            height: 100px;
        }
        .trending-items{
            float: left;
            width: 20%;
        }
        .detail-img{
            height: 300px;
        }
        .cart-item{
            margin: 2px;
            border-bottom: 1px solid gray;
            padding: 30px
        }
    </style>
</head>
<body>
    {{View::make('header')}}
    @yield('content')

</body>
</html>