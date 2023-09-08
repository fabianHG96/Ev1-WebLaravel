@extends('layouts.inicio')
@section('login')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#!">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a></li>
                <li class="nav-item "><a class="nav-link text-dark" href="{{route('register')}}">Crear cuenta</a></li>
                <li class="nav-item "><a class="nav-link text-dark" href="{{route('login')}}">Iniciar sesion</a></li>
            </ul>
            <ul class="navbar-nav nav justify-content-end">
                <li class="nav-item "><a class="nav-link text-dark" href="{{route('login')}}">Cerrar sesion</a></li>
            </ul>
        </div>
    </div>
</nav>
<form action="{{ route('login.attempt') }}" method="POST">
@csrf

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5 border border-info" >
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row ">

                        <div class="col-lg-6" style="margin-left: 225px">
                            <div class="p-5" >
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Bienvenido de vuelta</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Recuerdame</label>
                                        </div>
                                    </div>
                                    <a href="{{route ('home') }}" class="btn btn-primary btn-user btn-block">
                                        Iniciar sesion
                                    </a>
                                </form>
                                <div class="text-center">
                                    <a class="small" href="{{route('register')}}">¡Crea una cuenta!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</form>
@endsection
