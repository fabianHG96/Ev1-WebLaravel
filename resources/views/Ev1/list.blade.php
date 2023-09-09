@extends('layouts.menu')

@section('menu_content')
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!"><br>Bienvenido</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a></li>
                        <li class="nav-item "><a class="nav-link text-dark" href="{{route('register')}}">Crear cuenta</a></li>
                        <li class="nav-item "><a class="nav-link text-dark" href="{{route('login')}}">Iniciar sesion</a></li>
                    </ul>
                    <ul class="navbar-nav nav justify-content-end">
                        <li class="nav-item "><a class="nav-link text-dark" href="{{route('logout')}}">Cerrar sesion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder text-danger">Coffe Time</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Nuestro Menu</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5 bg-secondary" >
            @foreach ($categorias as $categoria)
                @if ($categoria-> categoria ==='Café')
                    <h1 class="display-4 fw-bolder text-center">{{ $categoria->categoria}}</h1>
                    <div class="container px-4 px-lg-4 mt-500">
                        <div class="container px-4 px-lg-4 mt-500">
                            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-5 justify-content-center">
                                @foreach($categoria->productos as $producto)
                                    <div class="card h-120">
                                        <!-- Product image-->
                                        <img class="card-img-top" style="margin-left: -25px; height:200px; width:125%" src="{{ $producto->imagen }}" alt=" {{ $producto->nombre }}" />
                                        <!-- Product details-->
                                        <div class="card-body p-4">
                                            <div class="text-center">
                                                <!-- Product name-->
                                                <h5 class="fw-bolder">{{ $producto->nombre }}</h5>
                                                <!-- Product price-->
                                                <p>${{ number_format($producto->precio) }}</p>
                                                <p>{{ $producto->descripción }}</p>
                                            </div>
                                        </div>
                                        {{-- <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Tipos de granos</a></div>
                                        </div> --}}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            <section class="py-5 bg-secondary" >
                @foreach ($categorias as $categoria)
                    @if ($categoria-> categoria ==='Postres')
                        <h1 class="display-4 fw-bolder text-center">{{ $categoria->categoria}}</h1>
                        <div class="container px-4 px-lg-4 mt-500">
                            <div class="container px-4 px-lg-4 mt-500">
                                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-5 justify-content-center">
                                    @foreach($categoria->productos as $producto)
                                        <div class="card h-120">
                                            <!-- Product image-->
                                            <img class="card-img-top" style="margin-left: -25px; height:200px; width:125%" src="{{ $producto->imagen }}" alt=" {{ $producto->nombre }}" />
                                            <!-- Product details-->
                                            <div class="card-body p-4">
                                                <div class="text-center">
                                                    <!-- Product name-->
                                                    <h5 class="fw-bolder">{{ $producto->nombre }}</h5>
                                                    <!-- Product price-->
                                                    <p>${{ number_format($producto->precio) }}</p>
                                                    <p>{{ $producto->descripción }}</p>
                                                </div>
                                            </div>
                                            {{-- <!-- Product actions-->
                                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Tipos de granos</a></div>
                                            </div> --}}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <section class="py-5 bg-secondary" >
                    @foreach ($categorias as $categoria)
                        @if ($categoria-> categoria ==='Sandwiches')
                            <h1 class="display-4 fw-bolder text-center">{{ $categoria->categoria}}</h1>
                            <div class="container px-4 px-lg-4 mt-500">
                                <div class="container px-4 px-lg-4 mt-500">
                                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-5 justify-content-center">
                                        @foreach($categoria->productos as $producto)
                                            <div class="card h-120">
                                                <!-- Product image-->
                                                <img class="card-img-top" style="margin-left: -25px; height:200px; width:125%" src="{{ $producto->imagen }}" alt=" {{ $producto->nombre }}" />
                                                <!-- Product details-->
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <!-- Product name-->
                                                        <h5 class="fw-bolder">{{ $producto->nombre }}</h5>
                                                        <!-- Product price-->
                                                        <p>${{ number_format($producto->precio) }}</p>
                                                        <p>{{ $producto->descripción }}</p>
                                                    </div>
                                                </div>
                                                {{-- <!-- Product actions-->
                                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Tipos de granos</a></div>
                                                </div> --}}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
</section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Coffe Time 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script width="50%" height="40%" src="https://i.pinimg.com/750x/ab/c8/81/abc88166e368d4b7099c7b84d01ec324.jpg"></script>
        <!-- Core theme JS-->
        <script src="{{ asset ('js/scripts.js') }}"></script>
@endsection
