<x-app-layout>
    <x-slot name="header">
        Gestión de Practicantes
    </x-slot>

    <div class="space-y-6">
        <!-- Page Header -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 fade-in-up">
            <div>
                <h1 class="bricolage-font text-3xl font-bold text-gray-900">Practicantes</h1>
                <p class="text-gray-600 mt-1">Gestiona y visualiza todos los practicantes del sistema</p>
            </div>
            <button class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                <i class="fas fa-plus mr-2"></i>
                Nuevo Practicante
            </button>
        </div>

        <!-- Filters -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 fade-in-up" style="animation-delay: 0.1s;">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Buscar</label>
                    <div class="relative">
                        <input type="text" placeholder="Nombre, DNI..." class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                        <i class="fas fa-search absolute left-3 top-3.5 text-gray-400"></i>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Estado</label>
                    <select class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                        <option>Todos</option>
                        <option>Activos</option>
                        <option>Inactivos</option>
                        <option>Pendientes</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Área</label>
                    <select class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                        <option>Todas las áreas</option>
                        <option>Sistemas</option>
                        <option>RRHH</option>
                        <option>Finanzas</option>
                    </select>
                </div>
                <div class="flex items-end">
                    <button class="w-full px-4 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium rounded-lg transition-colors">
                        <i class="fas fa-filter mr-2"></i>
                        Filtrar
                    </button>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden fade-in-up" style="animation-delay: 0.2s;">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Practicante
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                DNI
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Área
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Estado
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Fecha Inicio
                            </th>
                            <th class="px-6 py-4 text-right text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse (range(1, 5) as $i)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white font-semibold">
                                        JP
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-semibold text-gray-900">Juan Pérez</div>
                                        <div class="text-xs text-gray-500">juan.perez@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="text-sm text-gray-900">12345678</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="text-sm text-gray-900">Sistemas</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    <i class="fas fa-circle text-green-500 text-xs mr-1.5"></i>
                                    Activo
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                01/01/2024
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button class="text-blue-600 hover:text-blue-900 mr-3">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="text-green-600 hover:text-green-900 mr-3">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-900">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center">
                                <div class="flex flex-col items-center justify-center">
                                    <i class="fas fa-users text-6xl text-gray-300 mb-4"></i>
                                    <p class="text-gray-500">No hay practicantes registrados</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
                <div class="flex items-center justify-between">
                    <div class="text-sm text-gray-700">
                        Mostrando <span class="font-medium">1</span> a <span class="font-medium">5</span> de <span class="font-medium">124</span> resultados
                    </div>
                    <div class="flex space-x-2">
                        <button class="px-3 py-2 border border-gray-300 rounded-lg hover:bg-white transition-colors">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg">1</button>
                        <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-white transition-colors">2</button>
                        <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-white transition-colors">3</button>
                        <button class="px-3 py-2 border border-gray-300 rounded-lg hover:bg-white transition-colors">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>