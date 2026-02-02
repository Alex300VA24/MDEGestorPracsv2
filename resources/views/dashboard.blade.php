<x-app-layout>
    <x-slot name="header">
        Dashboard
    </x-slot>

    <div class="space-y-6">
        <!-- Welcome Section -->
        <div class="bg-gradient-to-r from-blue-600 via-blue-700 to-purple-700 dark:from-blue-900 dark:via-blue-950 dark:to-purple-950 rounded-2xl shadow-xl dark:shadow-2xl overflow-hidden fade-in-up">
            <div class="px-8 py-10 relative">
                <!-- Decorative Elements -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full -mr-32 -mt-32"></div>
                <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/5 rounded-full -ml-24 -mb-24"></div>
                
                <div class="relative z-10">
                    <div class="flex items-center justify-between flex-wrap gap-4">
                        <div>
                            <h1 class="bricolage-font text-4xl font-bold text-white mb-2">
                                ¡Bienvenido, {{ Auth::user()->name ?? 'Usuario' }}!
                            </h1>
                            <p class="text-blue-100 dark:text-blue-200 text-lg">
                                Sistema de Gestión de Practicantes - Panel de Control
                            </p>
                            <p class="text-blue-200 dark:text-blue-300 text-sm mt-2">
                                <i class="far fa-calendar-alt mr-2"></i>
                                {{ now()->locale('es')->isoFormat('dddd, D [de] MMMM [de] YYYY') }}
                            </p>
                        </div>
                        <div class="hidden lg:block">
                            <div class="w-32 h-32 bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center">
                                <i class="fas fa-chart-line text-white text-5xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 stagger-children">
            <!-- Total Practicantes -->
            <div class="stat-card bg-white dark:bg-slate-800/70 rounded-2xl shadow-lg hover:shadow-xl dark:shadow-lg dark:hover:shadow-xl p-6 border border-gray-100 dark:border-slate-700/50 transition-all duration-300">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 dark:from-blue-600 dark:to-blue-700 rounded-xl flex items-center justify-center shadow-lg">
                        <i class="fas fa-users text-white text-xl"></i>
                    </div>
                    <div class="flex items-center space-x-1 text-green-500 dark:text-green-400 text-sm font-medium">
                        <i class="fas fa-arrow-up text-xs"></i>
                        <span>12%</span>
                    </div>
                </div>
                <div>
                    <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium mb-1">Total Practicantes</h3>
                    <p class="bricolage-font text-3xl font-bold text-gray-900 dark:text-white" id="totalPracticantes">0</p>
                    <p class="text-xs text-gray-400 dark:text-gray-500 mt-2">Registrados en el sistema</p>
                </div>
            </div>

            <!-- Pendientes de Aprobación -->
            <div class="stat-card bg-white dark:bg-slate-800/70 rounded-2xl shadow-lg hover:shadow-xl dark:shadow-lg dark:hover:shadow-xl p-6 border border-gray-100 dark:border-slate-700/50 transition-all duration-300">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-14 h-14 bg-gradient-to-br from-amber-500 to-orange-600 dark:from-amber-600 dark:to-orange-700 rounded-xl flex items-center justify-center shadow-lg">
                        <i class="fas fa-clock text-white text-xl"></i>
                    </div>
                    <div class="flex items-center space-x-1 text-amber-500 dark:text-amber-400 text-sm font-medium">
                        <i class="fas fa-minus text-xs"></i>
                        <span>3</span>
                    </div>
                </div>
                <div>
                    <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium mb-1">Pendientes</h3>
                    <p class="bricolage-font text-3xl font-bold text-gray-900 dark:text-white" id="pendientesAprobacion">0</p>
                    <p class="text-xs text-gray-400 dark:text-gray-500 mt-2">Por aprobar</p>
                </div>
            </div>

            <!-- Practicantes Vigentes -->
            <div class="stat-card bg-white dark:bg-slate-800/70 rounded-2xl shadow-lg hover:shadow-xl dark:shadow-lg dark:hover:shadow-xl p-6 border border-gray-100 dark:border-slate-700/50 transition-all duration-300">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-600 dark:from-green-600 dark:to-emerald-700 rounded-xl flex items-center justify-center shadow-lg">
                        <i class="fas fa-check-circle text-white text-xl"></i>
                    </div>
                    <div class="flex items-center space-x-1 text-green-500 dark:text-green-400 text-sm font-medium">
                        <i class="fas fa-arrow-up text-xs"></i>
                        <span>8%</span>
                    </div>
                </div>
                <div>
                    <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium mb-1">Vigentes</h3>
                    <p class="bricolage-font text-3xl font-bold text-gray-900 dark:text-white" id="practicantesActivos">0</p>
                    <p class="text-xs text-gray-400 dark:text-gray-500 mt-2">Actualmente activos</p>
                </div>
            </div>

            <!-- Asistencias Hoy -->
            <div class="stat-card bg-white dark:bg-slate-800/70 rounded-2xl shadow-lg hover:shadow-xl dark:shadow-lg dark:hover:shadow-xl p-6 border border-gray-100 dark:border-slate-700/50 transition-all duration-300">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-600 dark:from-purple-600 dark:to-pink-700 rounded-xl flex items-center justify-center shadow-lg">
                        <i class="fas fa-calendar-alt text-white text-xl"></i>
                    </div>
                    <div class="flex items-center space-x-1 text-purple-500 dark:text-purple-400 text-sm font-medium">
                        <i class="fas fa-check text-xs"></i>
                        <span>Hoy</span>
                    </div>
                </div>
                <div>
                    <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium mb-1">Asistencias</h3>
                    <p class="bricolage-font text-3xl font-bold text-gray-900 dark:text-white" id="asistenciaHoy">0</p>
                    <p class="text-xs text-gray-400 dark:text-gray-500 mt-2">Registradas hoy</p>
                </div>
            </div>
        </div>

        <!-- Two Column Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Recent Activity - Takes 2 columns -->
            <div class="lg:col-span-2 bg-white dark:bg-slate-800/70 rounded-2xl shadow-lg dark:shadow-lg border border-gray-100 dark:border-slate-700/50 fade-in-up transition-colors duration-300" style="animation-delay: 0.45s;">
                <div class="px-6 py-5 border-b border-gray-100 dark:border-slate-700/50">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="bricolage-font text-xl font-bold text-gray-900 dark:text-white">Actividad Reciente</h2>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Últimas acciones en el sistema</p>
                        </div>
                        <button class="px-4 py-2 text-sm font-medium text-blue-600 dark:text-blue-400 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg transition-colors duration-200">
                            Ver todo
                        </button>
                    </div>
                </div>
                <div class="p-6">
                    <div id="actividadReciente" class="space-y-4">
                        <!-- Loading state -->
                        <div class="flex items-center justify-center py-12">
                            <div class="text-center">
                                <div class="inline-block animate-spin rounded-full h-12 w-12 border-b-2 border-blue-600 dark:border-blue-400 mb-4"></div>
                                <p class="text-gray-500 dark:text-gray-400">Cargando actividad...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions - Takes 1 column -->
            <div class="bg-white dark:bg-slate-800/70 rounded-2xl shadow-lg dark:shadow-lg border border-gray-100 dark:border-slate-700/50 fade-in-up transition-colors duration-300" style="animation-delay: 0.5s;">
                <div class="px-6 py-5 border-b border-gray-100 dark:border-slate-700/50">
                    <h2 class="bricolage-font text-xl font-bold text-gray-900 dark:text-white">Acciones Rápidas</h2>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Accesos directos</p>
                </div>
                <div class="p-6 space-y-3">
                    @if (Auth::user()->cargo === 'Gerente RRHH' || Auth::user()->cargo === 'Gerente de Área')
                        <a href="{{ route('practicantes.create') }}" class="flex items-center space-x-4 p-4 bg-gradient-to-r from-blue-50 to-purple-50 dark:from-blue-900/20 dark:to-purple-900/20 hover:from-blue-100 hover:to-purple-100 dark:hover:from-blue-900/30 dark:hover:to-purple-900/30 rounded-xl transition-all duration-200 group">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fas fa-user-plus text-white"></i>
                            </div>
                            <div class="flex-1">
                                <p class="font-semibold text-gray-900 dark:text-white">Nuevo Practicante</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Registrar en el sistema</p>
                            </div>
                            <i class="fas fa-chevron-right text-gray-400 dark:text-gray-500 group-hover:text-gray-600 dark:group-hover:text-gray-300"></i>
                        </a>
                    @endif

                    <a href="{{-- route('asistencias.index') --}}" class="flex items-center space-x-4 p-4 bg-gradient-to-r from-green-50 to-emerald-50 dark:from-green-900/20 dark:to-emerald-900/20 hover:from-green-100 hover:to-emerald-100 dark:hover:from-green-900/30 dark:hover:to-emerald-900/30 rounded-xl transition-all duration-200 group">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                            <i class="fas fa-calendar-check text-white"></i>
                        </div>
                        <div class="flex-1">
                            <p class="font-semibold text-gray-900 dark:text-white">Ver Asistencias</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Registro de asistencias</p>
                        </div>
                        <i class="fas fa-chevron-right text-gray-400 dark:text-gray-500 group-hover:text-gray-600 dark:group-hover:text-gray-300"></i>
                    </a>

                    @if (Auth::user()->cargo === 'Gerente RRHH')
                        <a href="{{ route('reportes.index') }}" class="flex items-center space-x-4 p-4 bg-gradient-to-r from-amber-50 to-orange-50 dark:from-amber-900/20 dark:to-orange-900/20 hover:from-amber-100 hover:to-orange-100 dark:hover:from-amber-900/30 dark:hover:to-orange-900/30 rounded-xl transition-all duration-200 group">
                            <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-orange-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fas fa-chart-line text-white"></i>
                            </div>
                            <div class="flex-1">
                                <p class="font-semibold text-gray-900 dark:text-white">Generar Reporte</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Reportes y estadísticas</p>
                            </div>
                            <i class="fas fa-chevron-right text-gray-400 dark:text-gray-500 group-hover:text-gray-600 dark:group-hover:text-gray-300"></i>
                        </a>
                    @endif

                    <div class="pt-4 mt-4 border-t border-gray-100 dark:border-slate-700/50">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Almacenamiento</span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">2.1 GB / 5 GB</span>
                        </div>
                        <div class="w-full bg-gray-200 dark:bg-slate-700/50 rounded-full h-2">
                            <div class="bg-gradient-to-r from-blue-500 to-purple-600 dark:from-blue-600 dark:to-purple-700 h-2 rounded-full" style="width: 42%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistics Chart Placeholder -->
        <div class="bg-white dark:bg-slate-800/70 rounded-2xl shadow-lg dark:shadow-lg border border-gray-100 dark:border-slate-700/50 fade-in-up transition-colors duration-300" style="animation-delay: 0.55s;">
            <div class="px-6 py-5 border-b border-gray-100 dark:border-slate-700/50">
                <h2 class="bricolage-font text-xl font-bold text-gray-900 dark:text-white">Estadísticas del Mes</h2>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Resumen de actividad mensual</p>
            </div>
            <div class="p-6">
                <div class="flex items-center justify-center py-20 bg-gradient-to-br from-gray-50 to-blue-50 dark:from-slate-800 dark:to-blue-900 rounded-xl border border-gray-200 dark:border-slate-600 dark:shadow-inner chart-placeholder-dark">
                    <div class="text-center">
                        <i class="fas fa-chart-area text-6xl text-gray-300 dark:text-slate-400 mb-4"></i>
                        <p class="text-gray-600 dark:text-gray-200 font-medium">Gráfico de estadísticas</p>
                        <p class="text-sm text-gray-400 dark:text-gray-400 mt-2">Próximamente disponible</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        // Simulate loading statistics
        document.addEventListener('DOMContentLoaded', function() {
            // Simulate API call delay
            setTimeout(() => {
                // Update statistics with animation
                animateValue('totalPracticantes', 0, 124, 1500);
                animateValue('pendientesAprobacion', 0, 8, 1500);
                animateValue('practicantesActivos', 0, 98, 1500);
                animateValue('asistenciaHoy', 0, 76, 1500);

                // Load recent activity
                loadRecentActivity();
            }, 500);
        });

        // Animate counter
        function animateValue(id, start, end, duration) {
            const element = document.getElementById(id);
            const range = end - start;
            const increment = end > start ? 1 : -1;
            const stepTime = Math.abs(Math.floor(duration / range));
            let current = start;
            
            const timer = setInterval(function() {
                current += increment;
                element.textContent = current;
                if (current == end) {
                    clearInterval(timer);
                }
            }, stepTime);
        }

        // Load recent activity
        function loadRecentActivity() {
            const activityContainer = document.getElementById('actividadReciente');
            
            // Sample activities
            const activities = [
                {
                    icon: 'fa-user-plus',
                    color: 'blue',
                    title: 'Nuevo practicante registrado',
                    description: 'Juan Pérez fue agregado al sistema',
                    time: 'Hace 2 horas'
                },
                {
                    icon: 'fa-check-circle',
                    color: 'green',
                    title: 'Asistencia confirmada',
                    description: 'María García marcó entrada',
                    time: 'Hace 3 horas'
                },
                {
                    icon: 'fa-file-alt',
                    color: 'purple',
                    title: 'Documento subido',
                    description: 'Certificado de estudios aprobado',
                    time: 'Hace 5 horas'
                },
                {
                    icon: 'fa-bell',
                    color: 'amber',
                    title: 'Recordatorio',
                    description: 'Contrato de Ana López vence en 7 días',
                    time: 'Hace 1 día'
                }
            ];

            const colorClasses = {
                blue: 'from-blue-500 to-blue-600',
                green: 'from-green-500 to-emerald-600',
                purple: 'from-purple-500 to-pink-600',
                amber: 'from-amber-500 to-orange-600'
            };

            activityContainer.innerHTML = activities.map(activity => `
                <div class="flex items-start space-x-4 p-4 hover:bg-gray-50 dark:hover:bg-gray-700/50 rounded-xl transition-colors cursor-pointer">
                    <div class="w-10 h-10 bg-gradient-to-br ${colorClasses[activity.color]} rounded-lg flex items-center justify-center flex-shrink-0">
                        <i class="fas ${activity.icon} text-white text-sm"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="font-semibold text-gray-900 dark:text-white">${activity.title}</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400 truncate">${activity.description}</p>
                        <p class="text-xs text-gray-400 dark:text-gray-500 mt-1">
                            <i class="far fa-clock mr-1"></i>${activity.time}
                        </p>
                    </div>
                </div>
            `).join('');
        }
    </script>
    @endpush
</x-app-layout>