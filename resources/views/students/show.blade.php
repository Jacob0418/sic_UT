@extends('plantilla')
@section('titulo')
    Estudiante
@endsection
@section('contenido')
    <div class="flex justify-center items-center mt-12 flex-col">
        <div class="border border-[#38b696] rounded-[5px_5px_5px_5px] w-[700px] flex flex-col gap-5 p-2">
            <h1 class="ml-5 text-3xl font-semibold mt-2 text-center">Estudiante</h1>
            <div class="ml-3 flex flex-col gap-3">
                <p><span class="text-xl font-medium">Nombre Alumno:</span> <span
                        class=" text-lg">{{ $student->name_student }}</span>
                </p>
                <p><span class="text-xl font-medium">Apellido Alumno:</span> <span
                        class=" text-lg">{{ $student->lastname_student }}</span></p>
                <p><span class="text-xl font-medium">Matrícula:</span> <span
                        class=" text-lg">{{ $student->id_student }}</span></p>
                <p><span class="text-xl font-medium">Fecha de Nacimiento:</span> <span
                        class=" text-lg">{{ $student->birthday }}</span></p>
                <p class="mb-4"><span class="text-xl font-medium">Comentarios:</span> <span
                        class=" text-lg">{{ $student->comments }}</span></p>            </div>
        </div>
        <button class="bg-gray-500 text-white rounded-[7px_7px_7px_7px] w-24 h-10 self-center mt-3 hover:bg-[#38b696]"><a href="{{url('estudiantes')}}">Regresar</a></button>
    </div>
@endsection
