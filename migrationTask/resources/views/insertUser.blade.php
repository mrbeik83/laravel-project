@extends('layout.master')

@section('content')
<!-- Register Form (Blade) -->
<form action="{{ route('register') }}" method="POST" class="w-full max-w-md mx-auto p-4 bg-white rounded-xl shadow-md space-y-4">
    @csrf

    <h2 class="text-2xl font-bold text-center mb-4">ثبت‌نام</h2>

    <!-- Name -->
    <div>
        <label for="userName" class="block text-sm font-medium text-gray-700">یوزر نیم</label>
        <input type="text" name="userName" id="userName" value="{{ old('userName') }}"
               class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        @error('userName')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Email -->
    <div>
        <label for="email" class="block text-sm font-medium text-gray-700">ایمیل</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}"
               class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Phone -->
    <div>
        <label for="phone" class="block text-sm font-medium text-gray-700">شماره تلفن</label>
        <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
               class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        @error('phone')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Password -->
    <div>
        <label for="password" class="block text-sm font-medium text-gray-700">رمز عبور</label>
        <input type="password" name="password" id="password"
               class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        @error('password')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Confirm Password -->
    <div>
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">تکرار رمز عبور</label>
        <input type="password" name="password_confirmation" id="password_confirmation"
               class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
    </div>

    <button type="submit"
            class="w-full bg-blue-600 text-white p-2 rounded-md hover:bg-blue-700 transition">
        ثبت‌نام
    </button>
</form>

@endsection