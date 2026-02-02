<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema de Gestión de Practicantes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <!-- Tailwind CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased font-nunito">
        <!-- Gradient Background Container -->
        <div class="min-h-screen flex items-center justify-center p-5 bg-gradient-to-br from-blue-900 via-blue-700 to-teal-400">
            
            <!-- Auth Links -->
            @if (Route::has('login'))
                <div class="fixed top-0 right-0 p-6 z-50">
                    @auth
                        <a href="{{ url('/dashboard') }}" 
                           class="text-white text-sm font-semibold ml-4 px-4 py-2 rounded-lg bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg hover:bg-opacity-20 transform hover:-translate-y-0.5 transition-all duration-300">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" 
                           class="text-white text-sm font-semibold ml-4 px-4 py-2 rounded-lg bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg hover:bg-opacity-20 transform hover:-translate-y-0.5 transition-all duration-300">
                            Iniciar Sesión
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" 
                               class="text-white text-sm font-semibold ml-4 px-4 py-2 rounded-lg bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg hover:bg-opacity-20 transform hover:-translate-y-0.5 transition-all duration-300">
                                Registrarse
                            </a>
                        @endif
                    @endauth
                </div>
            @endif

            <!-- Main Container -->
            <div class="text-center w-full max-w-4xl">
                
                <!-- Brand Name -->
                <h2 class="text-2xl md:text-3xl lg:text-4xl text-white font-bold tracking-wider mb-6 uppercase">
                    Municipalidad Distrital de la Esperanza
                </h2>
                
                <!-- Logo -->
                <div class="w-60 h-60 md:w-72 md:h-72 rounded-full p-3 mx-auto mb-10 shadow-2xl">
                    <img src="{{ asset('images/logo.png') }}" 
                        alt="Logo Municipalidad de La Esperanza" 
                        class="w-full h-full object-contain">
                </div>

                <!-- Main Title -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl text-white mb-5 font-light leading-tight">
                    Gestión de Practicantes<br>
                    <span class="text-yellow-400 font-bold">Profesional</span>
                </h1>
                
                <!-- Subtitle -->
                <p class="text-xl md:text-2xl text-blue-100 mb-4 leading-relaxed">
                    Panel de control del sistema de gestión de practicantes
                </p>
                
                <!-- Description -->
                <p class="text-lg md:text-xl text-blue-200 mb-12 leading-relaxed px-4">
                    El sistema completo para administrar practicantes de manera eficiente.<br class="hidden md:block">
                    Registro, asistencias, documentos y reportes en un solo lugar.
                </p>

                <!-- Button Group -->
                <div class="flex justify-center gap-5 flex-wrap">
                    @auth
                        <a href="{{ url('/dashboard') }}" 
                           class="group inline-flex items-center gap-3 px-11 py-4 text-lg font-semibold text-white bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full shadow-lg transform hover:-translate-y-1 hover:shadow-2xl transition-all duration-300">
                            Ir al Dashboard
                            <span class="text-2xl transform group-hover:translate-x-1 transition-transform duration-300">→</span>
                        </a>
                    @else
                        <a href="{{ route('login') }}" 
                           class="group inline-flex items-center gap-3 px-11 py-4 text-lg font-semibold text-white bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full shadow-lg transform hover:-translate-y-1 hover:shadow-2xl transition-all duration-300">
                            Iniciar Sesión
                            <span class="text-2xl transform group-hover:translate-x-1 transition-transform duration-300">→</span>
                        </a>
                    @endauth
                </div>

                <!-- Features Grid -->
                <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-6 opacity-90">
                    
                    <!-- Feature Card 1 -->
                    <div class="group bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-2xl p-6 border border-white border-opacity-20 transform hover:-translate-y-2 hover:bg-opacity-15 transition-all duration-300">
                        <div class="text-5xl text-yellow-400 mb-4">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="text-white text-xl font-semibold mb-3">
                            Gestión de Practicantes
                        </h3>
                        <p class="text-blue-100 text-base leading-relaxed">
                            Administra todos tus practicantes de forma centralizada
                        </p>
                    </div>

                    <!-- Feature Card 2 -->
                    <div class="group bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-2xl p-6 border border-white border-opacity-20 transform hover:-translate-y-2 hover:bg-opacity-15 transition-all duration-300">
                        <div class="text-5xl text-yellow-400 mb-4">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <h3 class="text-white text-xl font-semibold mb-3">
                            Control de Asistencias
                        </h3>
                        <p class="text-blue-100 text-base leading-relaxed">
                            Registra y monitorea asistencias en tiempo real
                        </p>
                    </div>

                    <!-- Feature Card 3 -->
                    <div class="group bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-2xl p-6 border border-white border-opacity-20 transform hover:-translate-y-2 hover:bg-opacity-15 transition-all duration-300">
                        <div class="text-5xl text-yellow-400 mb-4">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h3 class="text-white text-xl font-semibold mb-3">
                            Reportes Completos
                        </h3>
                        <p class="text-blue-100 text-base leading-relaxed">
                            Genera reportes detallados y certificados automáticamente
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>