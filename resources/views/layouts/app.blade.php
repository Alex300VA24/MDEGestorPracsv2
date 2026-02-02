<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title', 'Dashboard')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .bricolage-font {
            font-family: 'Bricolage Grotesque', sans-serif;
        }

        /* Smooth transitions */
        * {
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Dark mode variables */
        :root {
            --sidebar-width: 288px;
            --sidebar-collapsed-width: 80px;
        }

        /* Dark mode styles */
        .dark {
            color-scheme: dark;
        }

        .dark .gradient-bg {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
        }

        .dark .glass {
            background: rgba(15, 23, 42, 0.9);
            border-color: rgba(255, 255, 255, 0.1);
        }

        /* Dark mode stat cards */
        .dark .stat-card {
            background-color: rgba(30, 41, 59, 0.7);
            border-color: rgba(71, 85, 105, 0.5);
        }

        .dark .stat-card h3 {
            color: rgba(191, 193, 194, 1);
        }

        .dark .stat-card p {
            color: rgba(191, 193, 194, 1);
        }

        /* Dark mode content cards */
        .dark .bg-white {
            background-color: rgba(30, 41, 59, 0.7);
        }

        .dark .border-gray-100 {
            border-color: rgba(71, 85, 105, 0.5);
        }

        .dark .text-gray-900 {
            color: rgba(241, 245, 249, 1);
        }

        .dark .text-gray-600 {
            color: rgba(191, 193, 194, 1);
        }

        .dark .text-gray-500 {
            color: rgba(148, 163, 184, 1);
        }

        .dark .bg-gray-50 {
            background-color: rgba(71, 85, 105, 0.3);
        }

        .dark .bg-gray-200 {
            background-color: rgba(71, 85, 105, 0.4);
        }

        /* Dark mode para elementos con gradientes de colores claros */
        .dark .bg-gradient-to-r.from-green-50 {
            background: linear-gradient(to right, rgba(6, 78, 59, 0.3), rgba(5, 100, 46, 0.3)) !important;
        }

        .dark .hover\:from-green-100 {
            background: linear-gradient(to right, rgba(6, 78, 59, 0.4), rgba(5, 100, 46, 0.4)) !important;
        }

        .dark .bg-gradient-to-r.from-blue-50 {
            background: linear-gradient(to right, rgba(7, 89, 133, 0.3), rgba(15, 98, 254, 0.3)) !important;
        }

        .dark .hover\:from-blue-100 {
            background: linear-gradient(to right, rgba(7, 89, 133, 0.4), rgba(15, 98, 254, 0.4)) !important;
        }

        .dark .bg-gradient-to-r.from-amber-50 {
            background: linear-gradient(to right, rgba(120, 53, 15, 0.3), rgba(124, 45, 18, 0.3)) !important;
        }

        .dark .hover\:from-amber-100 {
            background: linear-gradient(to right, rgba(120, 53, 15, 0.4), rgba(124, 45, 18, 0.4)) !important;
        }

        /* Banner de bienvenida en dark mode */
        .dark .fade-in-up.overflow-hidden {
            background: linear-gradient(to right, rgba(30, 58, 138, 0.9), rgba(29, 78, 138, 0.9), rgba(88, 28, 135, 0.9)) !important;
        }

        /* Dark mode para botón de alertas */
        .dark .relative.p-2 {
            background-color: rgba(51, 65, 85, 0.6);
            border-color: rgba(71, 85, 105, 0.5);
        }

        .dark .relative.p-2:hover {
            background-color: rgba(71, 85, 105, 0.6);
        }

        /* Dark mode para botón de dark mode */
        .dark button[title="Cambiar tema"] {
            background-color: rgba(51, 65, 85, 0.6);
            border-color: rgba(71, 85, 105, 0.5);
        }

        .dark button[title="Cambiar tema"]:hover {
            background-color: rgba(71, 85, 105, 0.6);
        }

        /* Dark mode para fecha y hora - ESPECÍFICO */
        .dark .hidden.md\:flex {
            background-color: rgba(51, 65, 85, 0.6) !important;
            border-color: rgba(71, 85, 105, 0.5) !important;
            color: rgba(209, 213, 219, 1) !important;
        }

        .dark .hidden.md\:flex .far,
        .dark .hidden.md\:flex .fas {
            color: rgba(96, 165, 250, 1) !important;
        }

        .dark .hidden.md\:flex span {
            color: rgba(209, 213, 219, 1) !important;
        }

        /* Asegurar que los íconos cambien color en dark mode */
        .dark .far,
        .dark .fas {
            color: inherit;
        }

        /* Sidebar animation */
        .sidebar {
            width: var(--sidebar-width);
            transition: width 0.3s ease, transform 0.3s ease;
        }

        .sidebar.collapsed {
            width: var(--sidebar-collapsed-width);
        }

        .sidebar.collapsed .sidebar-text {
            opacity: 0;
            width: 0;
            overflow: hidden;
        }

        .sidebar.collapsed .sidebar-logo-text {
            display: none;
        }

        .sidebar-text {
            transition: opacity 0.2s ease, width 0.2s ease;
        }

        @keyframes slideInLeft {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .sidebar-animate {
            animation: slideInLeft 0.3s ease-out;
        }

        /* Main content adjustment */
        .main-content {
            margin-left: var(--sidebar-width);
            transition: margin-left 0.3s ease;
        }

        .main-content.expanded {
            margin-left: var(--sidebar-collapsed-width);
        }

        @media (max-width: 1024px) {
            .main-content {
                margin-left: 0 !important;
            }
        }

        /* Content fade in */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.5s ease-out;
        }

        /* Stagger children animations */
        .stagger-children > * {
            animation: fadeInUp 0.5s ease-out backwards;
        }

        .stagger-children > *:nth-child(1) { animation-delay: 0.05s; }
        .stagger-children > *:nth-child(2) { animation-delay: 0.1s; }
        .stagger-children > *:nth-child(3) { animation-delay: 0.15s; }
        .stagger-children > *:nth-child(4) { animation-delay: 0.2s; }
        .stagger-children > *:nth-child(5) { animation-delay: 0.25s; }
        .stagger-children > *:nth-child(6) { animation-delay: 0.3s; }
        .stagger-children > *:nth-child(7) { animation-delay: 0.35s; }
        .stagger-children > *:nth-child(8) { animation-delay: 0.4s; }

        /* Gradient background */
        .gradient-bg {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        /* Glassmorphism */
        .glass {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }

        /* Sidebar hover effect */
        .sidebar-item {
            position: relative;
            overflow: hidden;
        }

        .sidebar-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background: linear-gradient(180deg, #3b82f6, #8b5cf6);
            transform: scaleY(0);
            transition: transform 0.3s ease;
        }

        .sidebar-item.active::before,
        .sidebar-item:hover::before {
            transform: scaleY(1);
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .dark ::-webkit-scrollbar-track {
            background: #1e293b;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #3b82f6, #8b5cf6);
            border-radius: 10px;
        }

        .dark ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #1e40af, #6d28d9);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #2563eb, #7c3aed);
        }

        .dark ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #1e40af, #7c3aed);
        }

        /* Mobile menu animation */
        @keyframes slideInFromLeft {
            from {
                transform: translateX(-100%);
            }
            to {
                transform: translateX(0);
            }
        }

        .mobile-menu-open {
            animation: slideInFromLeft 0.3s ease-out;
        }

        /* Stat card hover effect */
        .stat-card {
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        /* Ripple effect */
        .ripple {
            position: relative;
            overflow: hidden;
        }

        .ripple::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .ripple:active::after {
            width: 300px;
            height: 300px;
        }

        /* Modal styling mejorado */
        #logoutModal {
            background-color: rgba(15, 23, 42, 0.98);
        }

        #logoutModal::backdrop {
            background-color: rgba(0, 0, 0, 0.95) !important;
            backdrop-filter: blur(8px);
        }

        .dark #logoutModal {
            background-color: rgba(15, 23, 42, 0.98);
            z-index: 9999;
        }

        .dark #logoutModal::backdrop {
            background-color: rgba(0, 0, 0, 0.97) !important;
            backdrop-filter: blur(12px);
            z-index: 9998;
        }

        /* Asegurar que el modal esté siempre por encima */
        #logoutModal.fixed {
            z-index: 9999 !important;
        }

        #logoutModal > div:first-child {
            z-index: 9998 !important;
        }

        #logoutModal > div:last-child {
            z-index: 9999 !important;
        }

        /* Dark mode para el gráfico de estadísticas */
        .dark .chart-placeholder-dark {
            background: linear-gradient(to right bottom, rgba(30, 41, 59, 1), rgba(30, 58, 138, 0.8)) !important;
        }

        /* Sidebar en móvil mejorado */
        @media (max-width: 1024px) {
            #sidebar {
                background: linear-gradient(135deg, rgba(15, 23, 42, 0.98), rgba(25, 55, 109, 0.98)) !important;
            }

            .dark #sidebar {
                background: linear-gradient(135deg, rgba(15, 23, 42, 0.99), rgba(20, 50, 100, 0.99)) !important;
            }
        }

        /* Hamburger button dark mode mejorado */
        button.lg\:hidden {
            transition: all 0.3s ease;
        }

        button.lg\:hidden i {
            transition: color 0.3s ease;
        }

        .dark button.lg\:hidden {
            color: rgba(209, 213, 219, 1) !important;
            background-color: rgba(71, 85, 105, 0.6) !important;
        }

        .dark button.lg\:hidden:hover {
            background-color: rgba(100, 116, 139, 0.7) !important;
            color: rgba(241, 245, 249, 1) !important;
        }

        /* Specific dark mode para hamburger icon */
        .dark button.lg\:hidden i {
            color: rgba(209, 213, 219, 1) !important;
        }

        .dark button.lg\:hidden:hover i {
            color: rgba(241, 245, 249, 1) !important;
        }
    </style>

    @stack('styles')
</head>
<body class="antialiased bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside id="sidebar" class="sidebar fixed inset-y-0 left-0 z-50 bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900 dark:from-slate-950 dark:via-blue-950 dark:to-slate-950 text-white transform -translate-x-full lg:translate-x-0 transition-all duration-300 ease-in-out sidebar-animate overflow-y-auto shadow-2xl dark:shadow-inner">
            <!-- Toggle Button (Desktop) - Borde del Sidebar -->
            <button 
                id="sidebarToggleDesktop"
                onclick="toggleSidebarCollapse()"
                class="hidden lg:flex absolute -right-3 top-1/2 transform -translate-y-1/2 z-50 w-6 h-12 bg-gradient-to-br from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 dark:from-blue-600 dark:to-blue-700 dark:hover:from-blue-700 dark:hover:to-blue-800 rounded-r-lg items-center justify-center text-white shadow-lg transition-all duration-200 border-2 border-l-0 border-blue-400 dark:border-blue-500"
            >
                <i id="toggleIcon" class="fas fa-chevron-left text-xs"></i>
            </button>

            <!-- Logo Section -->
            <div class="sticky top-0 z-10 bg-gradient-to-br from-slate-900/95 via-blue-900/95 to-slate-900/95 dark:from-slate-950/95 dark:via-blue-950/95 dark:to-slate-950/95 backdrop-blur-sm border-b border-white/10 dark:border-white/5">
                <div class="p-6">
                    <div class="flex items-center space-x-3 mb-2">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg flex-shrink-0">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-8 h-8 object-contain" />
                        </div>
                        <div class="sidebar-text sidebar-logo-text">
                            <h1 class="text-gray-500 dark:text-gray-400 text-xl font-bold">MDE</h1>
                            <p class="text-xs text-blue-200 font-bold">Gestión de Practicantes</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="px-4 py-6 space-y-2">
                @include('layouts.navigation')
            </nav>

            <!-- User Info Section -->
            <div class="sticky bottom-0 bg-gradient-to-br from-slate-900/95 via-blue-900/95 to-slate-900/95 dark:from-slate-950/95 dark:via-blue-950/95 dark:to-slate-950/95 backdrop-blur-sm border-t border-white/10 dark:border-white/5 p-4">
                <div class="bg-white/5 rounded-xl p-4 mb-3">
                    <div class="flex items-center space-x-3 mb-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-user text-white text-sm"></i>
                        </div>
                        <div class="flex-1 min-w-0 sidebar-text">
                            <p class="text-gray-500 dark:text-gray-400 font-semibold truncate">{{ Auth::user()->name ?? 'Usuario' }}</p>
                            <p class="text-xs text-blue-200 truncate">{{ Auth::user()->cargo ?? 'Cargo' }}</p>
                        </div>
                    </div>
                </div>

                <!-- Logout Button -->
                <button 
                    onclick="showLogoutModal()"
                    class="w-full bg-red-500/10 hover:bg-red-500/20 border border-red-500/20 text-red-300 hover:text-red-200 px-4 py-3 rounded-xl transition-all duration-200 flex items-center justify-center space-x-2 ripple"
                    title="Cerrar Sesión"
                >
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="font-medium sidebar-text">Cerrar Sesión</span>
                </button>
            </div>
        </aside>

        <!-- Mobile Sidebar Overlay -->
        <div id="sidebarOverlay" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-40 lg:hidden hidden" onclick="toggleSidebar()"></div>

        <!-- Main Content -->
        <div id="mainContent" class="main-content flex-1 flex flex-col">
            <!-- Top Bar -->
            <header class="sticky top-0 z-30 bg-white/95 dark:bg-slate-800/95 backdrop-blur-xl border-b border-gray-200 dark:border-slate-700/70 shadow-sm dark:shadow-md transition-colors duration-300">
                <div class="px-4 sm:px-6 lg:px-8 py-4">
                    <div class="flex items-center justify-between gap-4">
                        <!-- Mobile menu button -->
                        <button 
                            onclick="toggleSidebar()"
                            class="lg:hidden p-2 rounded-lg bg-gray-100 dark:bg-slate-700/80 hover:bg-gray-200 dark:hover:bg-slate-600 transition-all duration-200 shadow-sm text-gray-700 dark:text-gray-100 hover:text-gray-900 dark:hover:text-white"
                        >
                            <i class="fas fa-bars"></i>
                        </button>

                        <!-- Page Title -->
                        <div class="flex-1 text-center lg:text-left">
                            @if (isset($header))
                                <div class="bricolage-font text-2xl font-bold text-gray-900 dark:text-white transition-colors duration-300">
                                    {{ $header }}
                                </div>
                            @endif
                        </div>

                        <!-- Right Section -->
                        <div class="flex items-center space-x-1 sm:space-x-2 lg:space-x-3">
                            <!-- Dark Mode Toggle -->
                            <button 
                                onclick="toggleDarkMode()"
                                class="p-2 rounded-lg bg-gray-100 dark:bg-slate-700/60 hover:bg-gray-200 dark:hover:bg-slate-600 transition-all duration-200 shadow-sm dark:shadow-md border border-gray-200 dark:border-slate-600"
                                title="Cambiar tema"
                            >
                                <i id="darkModeIcon" class="fas fa-moon text-gray-600 dark:text-yellow-400 transition-colors text-sm"></i>
                            </button>

                            <!-- Current Date/Time -->
                            <div class="hidden md:flex items-center space-x-2 text-xs lg:text-sm text-gray-700 dark:text-gray-300 bg-gray-100 dark:bg-slate-700/60 px-3 py-2 rounded-lg transition-colors duration-300 border border-gray-200 dark:border-slate-600">
                                <i class="far fa-calendar text-blue-500 dark:text-blue-400"></i>
                                <span id="currentDateTime">{{ now()->format('d/m/Y H:i') }}</span>
                            </div>

                            <!-- Notifications -->
                            <button class="relative p-2 rounded-lg bg-gray-100 dark:bg-slate-700/60 hover:bg-gray-200 dark:hover:bg-slate-600 transition-all duration-200 shadow-sm dark:shadow-md border border-gray-200 dark:border-slate-600">
                                <i class="far fa-bell text-gray-600 dark:text-gray-300 text-sm"></i>
                                <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full shadow-md"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto gradient-bg transition-colors duration-300 bg-gray-50 dark:bg-gradient-to-br dark:from-slate-900 dark:via-slate-800 dark:to-slate-900">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    {{ $slot }}
                </div>
            </main>

            <!-- Footer -->
            <footer class="bg-white dark:bg-gradient-to-r dark:from-slate-800/95 dark:to-slate-900/95 border-t border-gray-200 dark:border-slate-700/60 py-4 transition-colors duration-300 shadow-sm dark:shadow-inner">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                    <p class="text-center text-sm text-gray-600 dark:text-gray-400">
                        &copy; {{ date('Y') }} Sistema de Gestión de Practicantes. Todos los derechos reservados.
                    </p>
                </div>
            </footer>
        </div>
    </div>

    <!-- Logout Confirmation Modal -->
    <div id="logoutModal" class="fixed inset-0 z-50 hidden flex items-center justify-center">
        <div class="absolute inset-0 bg-black/85 backdrop-blur-lg" onclick="hideLogoutModal()"></div>
        <div class="relative flex items-center justify-center min-h-screen px-4 z-50">
            <div class="bg-white dark:bg-slate-900 rounded-2xl shadow-2xl dark:shadow-2xl max-w-md w-full overflow-hidden transform transition-all" style="animation: fadeInUp 0.3s ease-out;">
                <div class="bg-gradient-to-r from-red-500 to-orange-500 dark:from-red-600 dark:to-orange-600 px-6 py-6">
                    <div class="flex items-center space-x-3">
                        <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center">
                            <i class="fas fa-exclamation-triangle text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white bricolage-font">Cerrar Sesión</h3>
                            <p class="text-orange-100 text-sm mt-1">Confirma esta acción</p>
                        </div>
                    </div>
                </div>
                <div class="p-8 bg-white dark:bg-slate-900">
                    <p class="text-gray-900 dark:text-gray-100 mb-8 text-center leading-relaxed font-medium">
                        ¿Estás seguro que deseas cerrar tu sesión? Tendrás que volver a iniciar sesión para acceder al sistema.
                    </p>
                    <div class="flex space-x-3">
                        <button 
                            onclick="hideLogoutModal()"
                            class="flex-1 px-4 py-3 border-2 border-gray-300 dark:border-gray-500 text-gray-800 dark:text-gray-100 rounded-xl hover:bg-gray-100 dark:hover:bg-slate-800 font-semibold transition-all duration-200"
                        >
                            Cancelar
                        </button>
                        <form method="POST" action="{{ route('logout') }}" class="flex-1">
                            @csrf
                            <button 
                                type="submit"
                                class="w-full px-4 py-3 bg-gradient-to-r from-red-500 to-orange-500 hover:from-red-600 hover:to-orange-600 dark:from-red-600 dark:to-orange-600 dark:hover:from-red-700 dark:hover:to-orange-700 text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200"
                            >
                                Sí, cerrar sesión
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Initialize dark mode from localStorage
        function initDarkMode() {
            const darkMode = localStorage.getItem('darkMode');
            const icon = document.getElementById('darkModeIcon');
            
            if (darkMode === 'enabled' || (!darkMode && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
                if (icon) {
                    icon.classList.remove('fa-moon');
                    icon.classList.add('fa-sun');
                }
            }
        }

        // Toggle dark mode
        function toggleDarkMode() {
            const html = document.documentElement;
            const icon = document.getElementById('darkModeIcon');
            
            if (html.classList.contains('dark')) {
                html.classList.remove('dark');
                localStorage.setItem('darkMode', 'disabled');
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
            } else {
                html.classList.add('dark');
                localStorage.setItem('darkMode', 'enabled');
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
            }
        }

        // Initialize sidebar state
        function initSidebar() {
            const sidebarCollapsed = localStorage.getItem('sidebarCollapsed');
            if (sidebarCollapsed === 'true' && window.innerWidth >= 1024) {
                const sidebar = document.getElementById('sidebar');
                const mainContent = document.getElementById('mainContent');
                const toggleIcon = document.getElementById('toggleIcon');
                
                sidebar.classList.add('collapsed');
                mainContent.classList.add('expanded');
                if (toggleIcon) {
                    toggleIcon.classList.remove('fa-chevron-left');
                    toggleIcon.classList.add('fa-chevron-right');
                }
            }
        }

        // Toggle sidebar collapse (desktop)
        function toggleSidebarCollapse() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');
            const toggleIcon = document.getElementById('toggleIcon');
            
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
            
            if (sidebar.classList.contains('collapsed')) {
                localStorage.setItem('sidebarCollapsed', 'true');
                toggleIcon.classList.remove('fa-chevron-left');
                toggleIcon.classList.add('fa-chevron-right');
            } else {
                localStorage.setItem('sidebarCollapsed', 'false');
                toggleIcon.classList.remove('fa-chevron-right');
                toggleIcon.classList.add('fa-chevron-left');
            }
        }

        // Toggle sidebar for mobile
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebarOverlay');
            
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        }

        // Logout modal
        function showLogoutModal() {
            document.getElementById('logoutModal').classList.remove('hidden');
        }

        function hideLogoutModal() {
            document.getElementById('logoutModal').classList.add('hidden');
        }

        // Update current date/time
        function updateDateTime() {
            const now = new Date();
            const options = { 
                year: 'numeric', 
                month: '2-digit', 
                day: '2-digit',
                hour: '2-digit',
                minute: '2-digit'
            };
            const dateTimeElement = document.getElementById('currentDateTime');
            if (dateTimeElement) {
                dateTimeElement.textContent = now.toLocaleString('es-PE', options);
            }
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            initDarkMode();
            initSidebar();
            updateDateTime();
        });

        // Update time every minute
        setInterval(updateDateTime, 60000);

        // Close modals on ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                hideLogoutModal();
                // Close sidebar on mobile
                if (window.innerWidth < 1024) {
                    const sidebar = document.getElementById('sidebar');
                    const overlay = document.getElementById('sidebarOverlay');
                    sidebar.classList.add('-translate-x-full');
                    overlay.classList.add('hidden');
                }
            }
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1024) {
                const sidebar = document.getElementById('sidebar');
                const overlay = document.getElementById('sidebarOverlay');
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.add('hidden');
            }
        });
    </script>

    @stack('scripts')
</body>
</html>