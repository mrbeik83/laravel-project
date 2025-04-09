@extends('layout.master')

@section('content')
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم ثبت یوزر</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Tahoma', sans-serif;
            background-color: #f4f7f6;
            display: grid;
            justify-items: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus, .form-group select:focus {
            border-color: #4CAF50;
        }

        .form-group input[type="tel"] {
            direction: ltr;
        }

        .form-group select {
            background-color: #f9f9f9;
        }

        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-group input::placeholder {
            color: #aaa;
        }

        /* Responsive design with grid */
        @media screen and (max-width: 768px) {
            .form-container {
                width: 90%;
                max-width: 400px;
            }

            h1 {
                font-size: 22px;
            }

            .form-group input,
            .form-group select {
                font-size: 14px;
                padding: 8px;
            }

            .form-group input[type="submit"] {
                font-size: 16px;
                padding: 10px;
            }
        }

        @media screen and (max-width: 480px) {
            .form-container {
                width: 90%;
                max-width: 350px;
            }

            h1 {
                font-size: 20px;
            }

            .form-group input,
            .form-group select {
                font-size: 14px;
                padding: 8px;
            }

            .form-group input[type="submit"] {
                font-size: 16px;
                padding: 12px;
            }
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>ثبت نام کاربر</h1>
        <form action="/user/register/form_submit" method="POST">
            @csrf
            <div class="form-group">
                <label for="firstName">نام</label>
                <input type="text" id="firstName" name="firstName" class="input" placeholder="نام خود را وارد کنید" required>
            </div>

            <div class="form-group">
                <label for="lastName">نام خانوادگی</label>
                <input type="text" id="lastName" name="lastName" class="input" placeholder="نام خانوادگی خود را وارد کنید" required>
            </div>

            <div class="form-group">
                <label for="phoneNumber">تلفن همراه</label>
                <input type="tel" id="phoneNumber" name="phoneNumber" class="input" placeholder="تلفن همراه خود را وارد کنید" required>
            </div>

            <div class="form-group">
                <label for="isAdmin">ادمین بودن</label>
                <select id="isAdmin" name="isAdmin" class="input" required>
                    <option value="yes">بله</option>
                    <option value="no">خیر</option>
                </select>
            </div>

            <div class="form-group">
                <label for="province">استان</label>
                <input type="text" id="province" name="province" class="input" placeholder="استان خود را وارد کنید" required>
            </div>

            <div class="form-group">
                <label for="city">شهر</label>
                <input type="text" id="city" name="city" class="input" placeholder="شهر خود را وارد کنید" required>
            </div>

            <div class="form-group">
                <label for="address">آدرس</label>
                <input type="text" id="address" name="address" class="input" placeholder="آدرس خود را وارد کنید" required>
            </div>

            <div class="form-group">
                <label for="userName">username</label>
                <input type="text" id="userName" name="userName" class="input" placeholder="یوزرنیم خود را وارد کنید" required>
            </div>

            <div class="form-group">
                <label for="email">ایمیل</label>
                <input type="email" id="email" name="email" class="input" placeholder="ایمیل خود را وارد کنید" required>
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" id="password" name="password" class="input" placeholder="رمز خود را وارد کنید" required>
            </div>

            <div class="form-group">
                <input type="submit" value="ثبت نام">
            </div>
        </form>
    </div>

</body>
</html>

@endsection