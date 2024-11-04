@extends('layouts.app')

@section('content')
<div class="container" style="font-family: 'Poppins', sans-serif; color: rgb(33, 37, 41);">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg" style="border-radius: 20px; border: none;">
                <div class="card-header text-center bg-gradient" style="border-radius: 20px 20px 0 0; padding: 2rem;">
                    <h2 style="font-weight: 600; color: white;">Welcome to Your Dashboard</h2>
                </div>
                <div class="card-body" style="background-color: rgb(255, 255, 255); padding: 3rem; position: relative;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="text-center" style="margin-bottom: 2rem;">
                    <img src="https://via.placeholder.com/150" alt="Ilustrasi Selamat Datang" style="border-radius: 50%; border: 5px solid rgb(33, 150, 243);">
                    </div>
                    <p style="font-size: 1.2rem; text-align: center; color: rgb(100, 100, 100);">
                        You are logged in! Explore the features and enjoy your experience.
                    </p>
                    <div class="text-center mt-4">
                        <a href="{{ url('/') }}" class="btn btn-lg btn-primary" style="padding: 0.75rem 2rem; font-size: 1rem; border-radius: 8px; transition: all 0.3s; box-shadow: 0 4px 15px rgba(0, 123, 255, 0.5);">
                            Go to Homepage
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Gaya CSS tambahan */
    body {
        background: linear-gradient(to bottom right, rgb(238, 238, 238), rgb(255, 255, 255));
        padding: 20px;
    }
    .bg-gradient {
        background: linear-gradient(90deg, rgb(33, 150, 243), rgb(3, 169, 244));
    }
    .btn-primary:hover {
        background-color: rgb(0, 123, 255);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0, 123, 255, 0.4);
    }
</style>
@endsection
