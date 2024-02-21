<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('titulo')</title>
</head>

<body class="flex flex-col min-h-screen">
    <header class="w-full sticky bg-[#009781]">
        <nav>
            <div class="container py-3 mx-auto md:mx-5 flex flex-wrap px-2 md:gap-4">
                <a href="{{ route('maestros')}}" class="text-white text-4xl italic font-bold inline-flex tracking-wide p-1">SIC</a>
                <button id="navbar-toggler"
                    class="inline-flex  items-center justify-center border h-10 w-10 rounded-[7px_7px_7px_7px] outline-none focus:outline-none md:hidden ml-auto mt-[6px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
                <div id="navbar-content" class="w-full md:inline-flex md:w-auto mt-2 md:mt-0 items-center flex">
                    <ul class="md:flex-row flex md:gap-2 flex-col items-start md:items-center gap-2 ">
                        <li>
                            <a href="{{ route('asignaturas') }}"
                                class="flex px-4 p-2 font-medium text-white hover:bg-[#38b696] rounded-[7px_7px_7px_7px]">Asignaturas</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex px-4 py-2 font-medium text-white hover:bg-[#38b696] rounded-[7px_7px_7px_7px]">Grupos</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex px-4 py-2 font-medium text-white hover:bg-[#38b696] rounded-[7px_7px_7px_7px]">Estudiantes</a>
                            </li>
                        <li>
                            <a href="#"
                                class="flex px-4 py-2 font-medium text-white hover:bg-[#38b696] rounded-[7px_7px_7px_7px]">Calificaciones</a>
                        </li>
                        <li class="relative">
                            <button id="dropdown-toggle"
                                class="flex px-4 py-2 font-medium text-white hover:bg-[#38b696] rounded-[7px_7px_7px_7px] bg-[#30c5a0] w-full">Perfil</button>
                            <div id="dropdown-content"
                                class="md:absolute bg-white right-0 rounded-[7px_7px_7px_7px] p-2 hidden">
                                <ul class="gap-2 md:w-48">
                                    <li><a href="#"
                                            class="flex p-2 font-medium text-[#38b696] rounded-[7px_7px_7px_7px] hover:bg-[#38b696] hover:text-white">Editar
                                            Perfil</a></li>
                                    <li><a href="#"
                                            class="flex p-2 font-medium text-[#38b696] rounded-[7px_7px_7px_7px] hover:bg-[#38b696] hover:text-white">Cerrar
                                            Sesión</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="flex-1">
        @yield('contenido')
    </main>
    <footer class="bg-[#009781] w-full flex flex-col md:flex-row items-center h-auto py-3 px-4 md:py-4">
        <p class="text-white font-normal text-center text-sm md:text-base lg:text-lg px-4">
            <strong>Copyright</strong> © 2024. Universidad Tecnológica de Cancún
        </p>
    </footer>
    
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggler = document.getElementById('navbar-toggler');
        const navbarContent = document.getElementById('navbar-content');

        navbarContent.classList.toggle('hidden');

        toggler.addEventListener('click', function() {
            navbarContent.classList.toggle('hidden');
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropdownToggle = document.querySelector('#dropdown-toggle');
        const dropdownContent = document.querySelector('#dropdown-content');

        dropdownToggle.addEventListener('click', function(event) {
            event.stopPropagation();
            dropdownContent.classList.toggle('hidden');
        });

        document.addEventListener('click', function(event) {
            if (!dropdownToggle.contains(event.target)) {
                dropdownContent.classList.add('hidden');
            }
        });
    });
</script>

</html>
