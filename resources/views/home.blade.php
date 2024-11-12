@extends('layout.layout')

<style>
    body {
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: 'Arial', sans-serif;
    }

    .custom-container {
        max-width: 1000px;
        width: 100%;
        height: 550px;
        background-color: white;
        border-radius: 30px;
        display: flex;
        flex-direction: row;
        align-items: stretch;
        overflow: hidden;
        box-shadow: 20px 10px 20px rgba(0, 0, 0, 0.2);
    }

    .image-section {
        flex: 1;
        display: flex;
        overflow: hidden;
    }

    .image-section img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .text-section {
        flex: 1;
        padding: 40px;
        text-align: center;
        background-color: #F3F2ED;
    }

    .text-section h1 {
        font-size: 24px;
        color: #37584F;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .text-section p {
        font-size: 12px;
        font-family: 'Times New Roman', Times, serif;
        font-style: italic;
        color: black;
        margin-bottom: 40px;
    }

    .btn-custom {
        display: block;
        background-color: #37584f;
        color: white;
        font-weight: bold;
        border-radius: 8px;
        padding: 10px;
        max-width: 300px;
        width: 100%;
        margin-left: 80px;
        margin-bottom: 15px;
        text-align: center;
    }

    .btn-custom:hover {
        background-color: #243324;
        color: white;
    }

    .btn-custom:last-child {
        margin-bottom: 0;
    }
</style>

@section('content')
    <div class="custom-container">
        <div class="image-section">
            <img src="{{ asset('images/student.jpg') }}" alt="Dog Image">
        </div>
        <div class="text-section">
            <h1 class="fs-3 mt-5">Hello, Welcome to reWOP!</h1>
            <p class="fs-5">Where excellence meets me at the corner</p>
            <a href="{{ url('teacherdash') }}" class="btn-custom fs-3 mb-4 text-decoration-none">Teacher</a>
            <a href="{{ url('/admindash') }}" class="btn-custom fs-3 mb-4 text-decoration-none">Admin</a>
            <a href="{{ url('/studentdash') }}" class="btn-custom fs-3 mb-4 text-decoration-none">Student</a>
        </div>
    </div>
@endsection
