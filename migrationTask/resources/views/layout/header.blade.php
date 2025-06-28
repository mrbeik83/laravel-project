<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            direction: rtl;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
            
        }
        .header {
            background-color: #2E7D32;
            margin-bottom: 50px;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 20px;
            font-weight: bold;
        }

        .nav {
            display: flex;
            gap: 15px;
        }

        .nav a {
            text-decoration: none;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .nav a:hover {
            background-color: #43A047;
        }

        @media (max-width: 600px) {
            .nav {
                flex-direction: column;
                gap: 5px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">مدیریت کالا</div>
        <nav class="nav">
            <a href="/product/register">ثبت کالا</a>
            <a href="/product/list">لیست کالا</a>
            <a href="#">لیست کاربران</a>
            <a href="#">لیست سفارش‌ها</a>
            <a href="#">ثبت سفارش</a>
        </nav>
    </div>

</body>
</html>

