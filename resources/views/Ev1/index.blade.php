
@extends('layouts.main')
  
@section('content')
<form action="{route{ ('login.attempt') }}" method="POST">
    <input type="text" name="username" placeholder="usuario" >
    <input type="password" name="pass" placeholder="contraseña">
    <input type="submit" value="enviar">

</form>
<h1>soy el index del login</h1>

@endsection




