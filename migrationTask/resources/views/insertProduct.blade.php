@include('layout.header')

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Creation Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            height: 100vh;
        } 

        .form-container {            
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .form-container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group input[type="file"],
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .form-group input[type="file"] {
            padding: 3px;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .submit-btn {
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>ایجاد کالا</h2>
        <form action="/product/register" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="product-code">کد کالا</label>
                <input type="text" id="product-code" name="id" placeholder="Enter product code" required>
            </div>
            <div class="form-group">
                <label for="product-type">نوع کالا</label>
                <select id="product-type" name="type" required>
                    <option value="روسری" selected>روسری</option>
                    <option value="مقنعه">مقنعه</option>
                    <option value="شال">شال</option>
                </select>
            </div>
            <div class="form-group">
                <label for="product-name">نام کالا</label>
                <input type="text" id="product-name" name="name" placeholder="Enter product name" required>
            </div>
            <div class="form-group">
                <label for="product-quantity">تعداد کالا</label>
                <input type="number" id="product-quantity" name="number" placeholder="Enter quantity" required>
            </div>
            <div class="form-group">
                <label for="product-price">قیمت کالا</label>
                <input type="number" id="product-price" name="price" placeholder="Enter price" required>
            </div>
            <div class="form-group">
                <label for="product-size">اندازه کالا</label>
                <input type="text" id="product-size" name="size" placeholder="Enter size" required>
            </div>
            <div class="form-group">
                <label for="product-image">تصویر کالا</label>
                <input type="file" id="product-image" name="picture" accept="image/*" required>
            </div>
            <button type="submit" class="submit-btn">ذخیره</button>
        </form>
    </div>
</body>
</html>
