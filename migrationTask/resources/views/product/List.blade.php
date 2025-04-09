@extends('layout.master')
@section('content')
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        .section{
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
        }

        .product-card {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 15px;
            width: 300px;
            text-align: center;
        }

        .product-card img {
            max-width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .product-card h3 {
            color: #333;
            margin-bottom: 10px;
        }

        .product-card p {
            color: #555;
            margin-bottom: 10px;
        }

        .product-card .price {
            font-weight: bold;
            margin-bottom: 15px;
        }

        .order-btn {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .order-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class = "section">
    @foreach ($pro as $p) 
        <div class="product-card">
            <form action="/order/add" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $p['id'] }}">
                <img src={{ $p['picture'] }} alt="Product{{ $p['id'] }}">
                <h3>{{ $p['type'] }}</h3>
                <p>{{ $p['name'] }}</p>
                <p class="price">{{ $p['price'] }}</p>
                <button type="submit" class="order-btn">افزودن به سبد خرید</button>
            </form>
        </div> 
    @endforeach
    </div>
    
</body>
</html>
@endsection

