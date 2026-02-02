@php
    // Get user role and area
    $cargo = Auth::user()->cargo ?? '';
    $area = Auth::user()->area ?? '';
    
    // Define permissions based on role
    $accesoTotal = ($cargo === 'Gerente RRHH');
    $accesoArea = ($cargo === 'Gerente de Área');
    $accesoBasico = ($cargo === 'Usuario de Área');
    $accesoAreaUsuario = ($cargo === 'Gerente de Sistemas');
    
    // Get current route
    $currentRoute = request()->route()->getName();
@endphp

{{-- Inicio - Everyone can see --}}
<a href="{{ route('dashboard') }}" class="sidebar-item group flex items-center space-x-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all duration-200 {{ $currentRoute === 'dashboard' ? 'active bg-white/10' : '' }}" title="Inicio">
    <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-white/5 group-hover:bg-white/10 transition-colors flex-shrink-0">
        <i class="fas fa-home {{ $currentRoute === 'dashboard' ? 'text-blue-400' : 'text-gray-300' }}"></i>
    </div>
    <span class="sidebar-text font-medium {{ $currentRoute === 'dashboard' ? 'text-gray-500' : 'text-gray-300' }}">Inicio</span>
</a>

{{-- Practicantes --}}
@if ($accesoArea || $accesoTotal || $accesoAreaUsuario)
    <a href="{{ route('practicantes.index') }}" class="sidebar-item group flex items-center space-x-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all duration-200 {{ str_contains($currentRoute, 'practicantes') ? 'active bg-white/10' : '' }}" title="Practicantes">
        <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-white/5 group-hover:bg-white/10 transition-colors flex-shrink-0">
            <i class="fas fa-users {{ str_contains($currentRoute, 'practicantes') ? 'text-blue-400' : 'text-gray-300' }}"></i>
        </div>
        <span class="sidebar-text font-medium {{ str_contains($currentRoute, 'practicantes') ? 'text-white' : 'text-gray-300' }}">Practicantes</span>
    </a>
@endif

{{-- Asistencias --}}
@if ($accesoBasico || $accesoArea || $accesoTotal || $accesoAreaUsuario)
    <a href="{{-- route('asistencias.index') --}}" class="sidebar-item group flex items-center space-x-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all duration-200 {{ str_contains($currentRoute, 'asistencias') ? 'active bg-white/10' : '' }}" title="Asistencias">
        <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-white/5 group-hover:bg-white/10 transition-colors flex-shrink-0">
            <i class="fas fa-calendar-check {{ str_contains($currentRoute, 'asistencias') ? 'text-blue-400' : 'text-gray-300' }}"></i>
        </div>
        <span class="sidebar-text font-medium {{ str_contains($currentRoute, 'asistencias') ? 'text-white' : 'text-gray-300' }}">Asistencias</span>
    </a>
@endif

{{-- Documentos - Only RRHH Manager --}}
@if ($accesoTotal)
    <a href="{{ route('documentos.index') }}" class="sidebar-item group flex items-center space-x-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all duration-200 {{ str_contains($currentRoute, 'documentos') ? 'active bg-white/10' : '' }}" title="Documentos">
        <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-white/5 group-hover:bg-white/10 transition-colors flex-shrink-0">
            <i class="fas fa-file-alt {{ str_contains($currentRoute, 'documentos') ? 'text-blue-400' : 'text-gray-300' }}"></i>
        </div>
        <span class="sidebar-text font-medium {{ str_contains($currentRoute, 'documentos') ? 'text-white' : 'text-gray-300' }}">Documentos</span>
    </a>
@endif

{{-- Reportes - Only RRHH Manager --}}
@if ($accesoTotal)
    <a href="{{ route('reportes.index') }}" class="sidebar-item group flex items-center space-x-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all duration-200 {{ str_contains($currentRoute, 'reportes') ? 'active bg-white/10' : '' }}" title="Reportes">
        <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-white/5 group-hover:bg-white/10 transition-colors flex-shrink-0">
            <i class="fas fa-chart-bar {{ str_contains($currentRoute, 'reportes') ? 'text-blue-400' : 'text-gray-300' }}"></i>
        </div>
        <span class="sidebar-text font-medium {{ str_contains($currentRoute, 'reportes') ? 'text-white' : 'text-gray-300' }}">Reportes</span>
    </a>
@endif

{{-- Certificados - Only RRHH Manager --}}
@if ($accesoTotal)
    <a href="{{ route('certificados.index') }}" class="sidebar-item group flex items-center space-x-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all duration-200 {{ str_contains($currentRoute, 'certificados') ? 'active bg-white/10' : '' }}" title="Certificados">
        <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-white/5 group-hover:bg-white/10 transition-colors flex-shrink-0">
            <i class="fas fa-certificate {{ str_contains($currentRoute, 'certificados') ? 'text-blue-400' : 'text-gray-300' }}"></i>
        </div>
        <span class="sidebar-text font-medium {{ str_contains($currentRoute, 'certificados') ? 'text-white' : 'text-gray-300' }}">Certificados</span>
    </a>
@endif

{{-- Usuarios - Only Systems Manager --}}
@if ($accesoAreaUsuario)
    <a href="{{ route('usuarios.index') }}" class="sidebar-item group flex items-center space-x-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all duration-200 {{ str_contains($currentRoute, 'usuarios') ? 'active bg-white/10' : '' }}" title="Usuarios">
        <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-white/5 group-hover:bg-white/10 transition-colors flex-shrink-0">
            <i class="fas fa-users-cog {{ str_contains($currentRoute, 'usuarios') ? 'text-blue-400' : 'text-gray-300' }}"></i>
        </div>
        <span class="sidebar-text font-medium {{ str_contains($currentRoute, 'usuarios') ? 'text-white' : 'text-gray-300' }}">Usuarios</span>
    </a>
@endif