@extends('plantilla')
@section('titulo')
    Alumnos
@endsection
@section('contenido')
    <form method="POST" action="{{ url('alumnos') }}">
        @csrf
        <input type="text" name="name_student" placeholder="Nombre" value="{{ old('name_student') }}">
        @error('name_student')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <input type="text" name="id_student" placeholder="Matrícula" value="{{ old('id_student') }}">
        @error('id_student')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <input type="text" name="email_student" placeholder="Correo Electrónico">
        @error('email_student')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <input type="text" name="password_student" placeholder="Password">
        <button type="submit">Registrar</button>
    </form>
@endsection
