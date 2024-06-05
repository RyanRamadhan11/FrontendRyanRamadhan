@extends('User.after_register')
@section('content')
<section class="section about mt-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-6 text-center">
                <img src="{{ url('assets/img/bg-home1.png')}}" class="img-fluid animated bounceInLeft" alt="Sample image" style="border-radius: 30px; max-width: 100%;">
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="content-block animated fadeInUp">
                    <h2 class="mt-5 mb-3">Terima Kasih <span class="alternate">Sudah Registrasi User</span></h2>
                    <img src="{{ asset('images/thank_you.png') }}" alt="Thank You" class="img-fluid mb-4 animated bounceIn" style="max-width: 300px;">
                    <div class="description-one mb-4">
                        <p class="lead">Silahkan Login untuk melanjutkan</p>
                    </div>
                    <a href="{{ url('login') }}" class="btn btn-primary btn-lg" style="border-radius: 10px; animation: pulse 2s infinite;">Login</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes pulse {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
        100% {
            transform: scale(1);
        }
    }
    
    .animated {
        animation-duration: 1s;
        animation-fill-mode: both;
    }

    .fadeInUp {
        animation-name: fadeInUp;
    }

    .bounceIn {
        animation-name: bounceIn;
    }

    .bounceInLeft {
        animation-name: bounceInLeft;
    }

    @keyframes fadeInUp {
        from {
            transform: translate3d(0, 40px, 0);
            opacity: 0;
        }
        to {
            transform: translate3d(0, 0, 0);
            opacity: 1;
        }
    }

    @keyframes bounceIn {
        from, 20%, 40%, 60%, 80%, to {
            animation-timing-function: ease-in-out;
        }

        from {
            opacity: 0;
            transform: scale3d(0.3, 0.3, 0.3);
        }

        20% {
            transform: scale3d(1.1, 1.1, 1.1);
        }

        40% {
            transform: scale3d(0.9, 0.9, 0.9);
        }

        60% {
            opacity: 1;
            transform: scale3d(1.03, 1.03, 1.03);
        }

        80% {
            transform: scale3d(0.97, 0.97, 0.97);
        }

        to {
            opacity: 1;
            transform: scale3d(1, 1, 1);
        }
    }

    @keyframes bounceInLeft {
        from, 60%, 75%, 90%, to {
            animation-timing-function: ease-in-out;
        }

        from {
            opacity: 0;
            transform: translate3d(-3000px, 0, 0);
        }

        60% {
            opacity: 1;
            transform: translate3d(25px, 0, 0);
        }

        75% {
            transform: translate3d(-10px, 0, 0);
        }

        90% {
            transform: translate3d(5px, 0, 0);
        }

        to {
            transform: translate3d(0, 0, 0);
        }
    }
</style>
@endsection
