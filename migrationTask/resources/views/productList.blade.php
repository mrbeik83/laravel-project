@include('layout.header')
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
            <form action="">
                <img src={{ $p['picture'] }} alt="Product ">
                <h3>{{ $p['type'] }}</h3>
                <p>{{ $p['name'] }}</p>
                <p class="price">{{ $p['price'] }}</p>
                <button class="order-btn">افزودن به سبد خرید</button>
            </form>
        </div> 
    @endforeach
    </div>
    
    <!-- <div class="product-card">
        <img src="path/to/image1.jpg" alt="Product 1">
        <h3>Product Title 1</h3>
        <p>Some description about product 1.</p>
        <p class="price">$10</p>
        <button class="order-btn">Order Now</button>
    </div>

    <div class="product-card">
        <img src="path/to/image2.jpg" alt="Product 2">
        <h3>Product Title 2</h3>
        <p>Some description about product 2.</p>
        <p class="price">$20</p>
        <button class="order-btn">Order Now</button>
    </div>
    <div class="product-card">
        <img src="path/to/image2.jpg" alt="Product 2">
        <h3>Product Title 2</h3>
        <p>Some description about product 2.</p>
        <p class="price">$20</p>
        <button class="order-btn">Order Now</button>
    </div>
    <div class="product-card">
        <img src="path/to/image2.jpg" alt="Product 2">
        <h3>Product Title 2</h3>
        <p>Some description about product 2.</p>
        <p class="price">$20</p>
        <button class="order-btn">Order Now</button>
    </div>
    <div class="product-card">
        <img src="path/to/image2.jpg" alt="Product 2">
        <h3>Product Title 2</h3>
        <p>Some description about product 2.</p>
        <p class="price">$20</p>
        <button class="order-btn">Order Now</button>
    </div>

    <div class="product-card">
        <img src="path/to/image3.jpg" alt="Product 3">
        <h3>Product Title 3</h3>
        <p>Some description about product 3.</p>
        <p class="price">$15</p>
        <button class="order-btn">Order Now</button>
    </div> -->
</body>
</html>
