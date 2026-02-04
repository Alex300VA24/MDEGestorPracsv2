<x-guest-layout>
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DM Sans', sans-serif;
        }

        .sora-font {
            font-family: 'Sora', sans-serif;
        }

        /* Dynamic mesh gradient background */
        @keyframes mesh-animation {
            0%, 100% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
        }

        .mesh-gradient {
            background: 
                radial-gradient(at 0% 0%, #0f172a 0px, transparent 50%),
                radial-gradient(at 50% 0%, #1e1b4b 0px, transparent 50%),
                radial-gradient(at 100% 0%, #581c87 0px, transparent 50%),
                radial-gradient(at 0% 100%, #0c4a6e 0px, transparent 50%),
                radial-gradient(at 50% 100%, #7c2d12 0px, transparent 50%),
                radial-gradient(at 100% 100%, #4c1d95 0px, transparent 50%),
                linear-gradient(135deg, #0f172a, #1e1b4b, #581c87);
            background-size: 200% 200%;
            animation: mesh-animation 20s ease infinite;
        }

        /* Glassmorphism card */
        .glass-card {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(40px);
            -webkit-backdrop-filter: blur(40px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Grid pattern overlay */
        .grid-pattern {
            background-image: 
                linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 50px 50px;
        }

        /* Shimmer effect */
        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }
            100% {
                background-position: 1000px 0;
            }
        }

        .shimmer {
            background: linear-gradient(
                90deg,
                rgba(255, 255, 255, 0) 0%,
                rgba(255, 255, 255, 0.2) 50%,
                rgba(255, 255, 255, 0) 100%
            );
            background-size: 1000px 100%;
            animation: shimmer 3s infinite;
        }

        /* Glow effect on hover */
        .glow-on-hover {
            transition: all 0.3s ease;
        }

        .glow-on-hover:hover {
            box-shadow: 
                0 0 15px rgba(168, 85, 247, 0.3),
                0 0 30px rgba(168, 85, 247, 0.15);
        }

        /* Pulse animation for important elements */
        @keyframes pulse-ring {
            0% {
                box-shadow: 0 0 0 0 rgba(168, 85, 247, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(168, 85, 247, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(168, 85, 247, 0);
            }
        }

        .pulse-ring {
            animation: pulse-ring 2s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite;
        }

        /* Slide in animations */
        @keyframes slide-in-left {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slide-in-right {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animate-slide-left {
            animation: slide-in-left 0.6s ease-out;
        }

        .animate-slide-right {
            animation: slide-in-right 0.6s ease-out;
        }

        /* Professional transitions */
        button, input, a {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Custom focus state */
        .input-focus:focus {
            outline: none;
            border-color: #a855f7;
            box-shadow: 0 0 0 3px rgba(168, 85, 247, 0.08);
        }

        .input-focus {
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        /* Floating animation - DISABLED */
        @keyframes float-smooth {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            50% {
                transform: translateY(0px) rotate(0deg);
            }
        }

        .float-smooth {
            animation: none;
            transform: none;
        }

        /* CUI inputs with better UX */
        .cui-digit {
            width: 56px;
            height: 64px;
            font-size: 1.75rem;
            font-weight: 700;
            text-align: center;
            transition: all 0.2s ease;
        }

        .cui-digit:focus {
            transform: scale(1.1);
            border-color: #a855f7;
            box-shadow: 0 0 0 4px rgba(168, 85, 247, 0.15);
        }

        /* Modal animation */
        @keyframes modal-appear {
            from {
                opacity: 0;
                transform: scale(0.9) translateY(30px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        .modal-appear {
            animation: modal-appear 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        /* Gradient text */
        .gradient-text {
            background: linear-gradient(135deg, #a855f7, #ec4899, #f97316);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Loading state */
        .btn-loading {
            position: relative;
            pointer-events: none;
        }

        .btn-loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            top: 50%;
            left: 50%;
            margin-left: -10px;
            margin-top: -10px;
            border: 2px solid #fff;
            border-radius: 50%;
            border-top-color: transparent;
            animation: spinner 0.6s linear infinite;
        }

        @keyframes spinner {
            to { transform: rotate(360deg); }
        }
    </style>

    <div class="min-h-screen mesh-gradient grid-pattern flex items-center justify-center p-4 relative overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute top-10 right-10 w-72 h-72 bg-purple-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 left-10 w-96 h-96 bg-pink-500/10 rounded-full blur-3xl"></div>
        
        <!-- Main container -->
        <div class="w-full max-w-6xl relative z-10">
            <div class="grid lg:grid-cols-2 gap-0 glass-card rounded-3xl shadow-2xl overflow-hidden">
                
                <!-- Left Panel - Branding -->
                <div class="relative bg-gradient-to-br from-purple-600 via-purple-700 to-pink-600 p-12 lg:p-16 flex flex-col justify-between overflow-hidden animate-slide-left">
                    <!-- Decorative shapes -->
                    <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full -mr-32 -mt-32 shimmer"></div>
                    <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/5 rounded-full -ml-24 -mb-24"></div>
                    
                    <div class="relative z-10">
                        <!-- Logo section -->
                        <div class="mb-12">
                            
                            <h1 class="sora-font text-4xl lg:text-5xl font-bold text-white mb-4 leading-tight tracking-tight">
                                Sistema de<br/>Gestión de<br/>Practicantes
                            </h1>

                            
                            <p class="text-purple-100 text-base leading-relaxed max-w-md font-medium">
                                Plataforma integral para la administración y seguimiento de programas de prácticas profesionales
                            </p>
                        </div>

                        <!-- Features list -->
                        <div class="space-y-3 mt-8">
                            <div class="flex items-start space-x-3 text-white/95">
                                <div class="flex-shrink-0 w-9 h-9 bg-white/15 rounded-lg flex items-center justify-center border border-white/10 mt-0.5">
                                    <i class="fas fa-lock text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium">Autenticación segura</p>
                                    <p class="text-xs text-purple-200">Doble factor de autenticación</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3 text-white/95">
                                <div class="flex-shrink-0 w-9 h-9 bg-white/15 rounded-lg flex items-center justify-center border border-white/10 mt-0.5">
                                    <i class="fas fa-chart-line text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium">Gestión en tiempo real</p>
                                    <p class="text-xs text-purple-200">Datos actualizados al instante</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3 text-white/95">
                                <div class="flex-shrink-0 w-9 h-9 bg-white/15 rounded-lg flex items-center justify-center border border-white/10 mt-0.5">
                                    <i class="fas fa-users text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium">Panel de administración</p>
                                    <p class="text-xs text-purple-200">Control total del sistema</p>
                                </div>
                            </div>
                            <div>
                                <img src="{{ asset('images/logo.png') }}" alt="Logo Sistema" class="w-24 h-25 object-contain mx-auto"/>
                            </div>
                        </div>
                    </div>

                    <!-- Footer info -->
                    <div class="relative z-10 mt-auto pt-8">
                        <div class="flex items-center space-x-2 text-purple-200 text-sm">
                            <i class="fas fa-lock text-lg"></i>
                            <p>
                                Datos protegidos con encriptación de nivel empresarial
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Panel - Login Form -->
                <div class="bg-white p-8 lg:p-14 flex flex-col justify-center animate-slide-right">
                    <!-- Header -->
                    <div class="mb-10">
                        <h2 class="sora-font text-3xl font-bold text-gray-900 mb-2">
                            Bienvenido
                        </h2>
                        <p class="text-gray-500 text-base">
                            Ingresa tus credenciales para acceder al sistema
                        </p>
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <!-- Login Form -->
                    <form method="POST" action="{{ route('login') }}" class="space-y-6">
                        @csrf

                        <!-- Email Input -->
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-800 mb-2.5">
                                Correo Electrónico
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input 
                                    id="email" 
                                    type="email" 
                                    name="email" 
                                    value="{{ old('email') }}"
                                    required 
                                    autofocus
                                    autocomplete="email"
                                    placeholder="nombre@ejemplo.com"
                                    class="w-full pl-11 pr-4 py-3.5 bg-gray-50 border-2 border-gray-200 rounded-lg input-focus transition-all duration-200 text-gray-900 placeholder-gray-400 text-base"
                                />
                            </div>
                        </div>

                        <!-- Password Input -->
                        <div>
                            <label for="password" class="block text-sm font-semibold text-gray-800 mb-2.5">
                                Contraseña
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                <input 
                                    id="password" 
                                    type="password" 
                                    name="password"
                                    required 
                                    autocomplete="current-password"
                                    placeholder="••••••••"
                                    class="w-full pl-11 pr-12 py-3.5 bg-gray-50 border-2 border-gray-200 rounded-lg input-focus transition-all duration-200 text-gray-900 placeholder-gray-400 text-base"
                                />
                                <button 
                                    type="button"
                                    id="togglePassword"
                                    class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-purple-600 transition-colors duration-200"
                                >
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Remember Me & Forgot Password -->
                        <div class="flex items-center justify-between pt-2">
                            <label class="flex items-center cursor-pointer group">
                                <input 
                                    id="remember_me" 
                                    type="checkbox" 
                                    name="remember"
                                    class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-purple-500 focus:ring-2 cursor-pointer"
                                />
                                <span class="ml-2.5 text-sm font-medium text-gray-700 group-hover:text-gray-900 transition-colors duration-200">
                                    Mantener sesión
                                </span>
                            </label>

                            @if (Route::has('password.request'))
                                <a 
                                    href="{{ route('password.request') }}"
                                    class="text-sm font-semibold text-purple-600 hover:text-purple-700 transition-colors duration-200"
                                >
                                    ¿Olvidaste tu contraseña?
                                </a>
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <button 
                            type="submit"
                            id="btnLogin"
                            class="group relative w-full bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white font-bold py-3.5 px-6 rounded-lg shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200 overflow-hidden glow-on-hover mt-2 text-base"
                        >
                            <span class="relative z-10 flex items-center justify-center space-x-2">
                                <i class="fas fa-sign-in-alt"></i>
                                <span class="sora-font">Iniciar Sesión</span>
                            </span>
                            <div class="absolute inset-0 shimmer opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </button>

                        <!-- Divider -->
                        <div class="relative my-6">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-200"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-4 bg-white text-gray-500 font-medium">
                                    Acceso seguro
                                </span>
                            </div>
                        </div>

                        <!-- Security info -->
                        <div class="flex items-center justify-center space-x-2 text-sm text-gray-600 bg-green-50 py-3 px-4 rounded-lg border border-green-100">
                            <i class="fas fa-shield-alt text-green-600 text-base"></i>
                            <span class="font-medium">Conexión protegida con SSL/TLS</span>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center mt-8 text-white/70 text-sm">
                <p>&copy; {{ date('Y') }} Sistema de Gestión de Practicantes. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>

    <!-- Modal CUI (Two-Factor Authentication) -->
    <div id="modalValidarCUI" class="hidden fixed inset-0 z-50 overflow-y-auto" style="background-color: rgba(0, 0, 0, 0.75); backdrop-filter: blur(8px);">
        <div class="flex items-center justify-center min-h-screen px-4 py-8">
            <div class="relative bg-white rounded-2xl shadow-2xl max-w-md w-full overflow-hidden modal-appear">
                
                <!-- Modal Header -->
                <div class="relative bg-gradient-to-r from-purple-600 via-purple-700 to-pink-600 px-6 py-5 overflow-hidden">
                    <div class="absolute top-0 right-0 w-48 h-48 bg-white/5 rounded-full -mr-24 -mt-24"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-center mb-2">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center pulse-ring">
                                <i class="fas fa-shield-alt text-white text-xl"></i>
                            </div>
                        </div>
                        <h3 class="sora-font text-2xl font-bold text-white text-center">
                            Verificación de Seguridad
                        </h3>
                        <p class="text-purple-100 text-center mt-1 text-sm">
                            Autenticación de Doble Factor
                        </p>
                    </div>
                </div>

                <!-- Modal Body -->
                <form id="validarCUIForm" method="POST">
                    @csrf
                    <div class="px-6 py-6">
                        <!-- Instruction -->
                        <div class="text-center mb-6">
                            <p class="text-gray-700 mb-4 leading-relaxed text-base font-medium">
                                Ingresa tu <span class="gradient-text font-bold">Código Único de Identificación (CUI)</span>
                            </p>
                            <p class="text-gray-500 text-sm mb-4">
                                Localiza el código en la parte posterior de tu DNI
                            </p>
                            
                            <!-- DNI Guide Image -->
                            <div class="inline-block bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-4 shadow-inner">
                                <img 
                                    src="{{ asset('images/dniGuiCUI.svg') }}" 
                                    alt="Guía CUI DNI"
                                    class="max-w-full h-40 md:h-44 rounded-xl shadow-lg"
                                />
                            </div>
                        </div>

                        <!-- CUI Input Grid -->
                        <div class="mb-6">
                            <label class="block text-center text-gray-700 font-semibold mb-6 text-sm uppercase tracking-wider">
                                Ingresa el dígito CUI
                            </label>
                            <div class="flex justify-center gap-2 flex-wrap">
                                <input 
                                    type="text" 
                                    maxlength="1" 
                                    pattern="[0-9]"
                                    inputmode="numeric"
                                    class="cui-digit bg-gray-50 border-2 border-gray-200 rounded-xl focus:outline-none transition-all duration-200"
                                    autocomplete="off"
                                    required
                                />
                            </div>
                            <input type="hidden" name="cui" id="cuiValue">
                        </div>

                        <!-- Info message -->
                        <div class="bg-blue-50 border border-blue-200 rounded-xl p-4 flex items-start space-x-3">
                            <i class="fas fa-info-circle text-blue-500 mt-0.5"></i>
                            <p class="text-sm text-blue-700">
                                Este paso adicional de seguridad protege tu cuenta contra accesos no autorizados.
                            </p>
                        </div>
                    </div>

                    <!-- Modal Footer -->
                    <div class="bg-gray-50 px-6 py-4 flex flex-col-reverse sm:flex-row gap-3 justify-end">
                        <button 
                            type="button"
                            id="btnCancelarCUI"
                            class="px-6 py-3 border-2 border-gray-300 text-gray-700 font-medium rounded-xl hover:bg-gray-100 hover:border-gray-400 transition-all duration-200"
                        >
                            <i class="fas fa-times mr-2"></i>
                            Cancelar
                        </button>
                        <button 
                            type="submit"
                            id="btnConfirmarCUI"
                            class="px-8 py-3 bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200"
                        >
                            <i class="fas fa-check mr-2"></i>
                            Verificar Código
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        // Toggle password visibility
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        
        togglePassword?.addEventListener('click', function () {
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            }
        });

        // CUI Input handling with enhanced UX
        const cuiInputs = document.querySelectorAll('.cui-digit');
        const cuiValue = document.getElementById('cuiValue');
        const modal = document.getElementById('modalValidarCUI');
        const btnCancelarCUI = document.getElementById('btnCancelarCUI');
        const formValidarCUI = document.getElementById('validarCUIForm');
        const loginForm = document.querySelector('form[action="{{ route("login") }}"]');
        const btnLogin = document.getElementById('btnLogin');
        
        function updateCUIValue() {
            const value = Array.from(cuiInputs).map(input => input.value).join('');
            cuiValue.value = value;
            return value;
        }

        cuiInputs.forEach((input, index) => {
            // Only allow numbers
            input.addEventListener('input', function(e) {
                const value = e.target.value;
                
                // Validate numeric input
                if (!/^\d*$/.test(value)) {
                    e.target.value = '';
                    return;
                }
                
                // Auto-advance to next input
                if (value && index < cuiInputs.length - 1) {
                    cuiInputs[index + 1].focus();
                    cuiInputs[index + 1].select();
                }
                
                updateCUIValue();
            });

            // Handle backspace
            input.addEventListener('keydown', function(e) {
                if (e.key === 'Backspace') {
                    if (!e.target.value && index > 0) {
                        cuiInputs[index - 1].focus();
                        cuiInputs[index - 1].select();
                    }
                } else if (e.key === 'ArrowLeft' && index > 0) {
                    e.preventDefault();
                    cuiInputs[index - 1].focus();
                    cuiInputs[index - 1].select();
                } else if (e.key === 'ArrowRight' && index < cuiInputs.length - 1) {
                    e.preventDefault();
                    cuiInputs[index + 1].focus();
                    cuiInputs[index + 1].select();
                }
            });

            // Handle paste
            input.addEventListener('paste', function(e) {
                e.preventDefault();
                const pasteData = e.clipboardData.getData('text').replace(/\D/g, '').slice(0, 9);
                
                pasteData.split('').forEach((char, i) => {
                    if (index + i < cuiInputs.length) {
                        cuiInputs[index + i].value = char;
                    }
                });
                
                updateCUIValue();
                
                // Focus next empty input or last input
                const nextEmptyIndex = Array.from(cuiInputs).findIndex((inp, i) => i > index && !inp.value);
                const focusIndex = nextEmptyIndex !== -1 ? nextEmptyIndex : Math.min(index + pasteData.length, cuiInputs.length - 1);
                cuiInputs[focusIndex].focus();
            });

            // Select all on focus
            input.addEventListener('focus', function() {
                this.select();
            });
        });

        // Modal controls
        btnCancelarCUI?.addEventListener('click', function() {
            closeModal();
        });

        function closeModal() {
            modal.classList.add('hidden');
            cuiInputs.forEach(input => input.value = '');
            cuiValue.value = '';
            // Re-enable login button
            if (btnLogin) {
                btnLogin.classList.remove('btn-loading');
                btnLogin.disabled = false;
            }
        }

        function showModal() {
            modal.classList.remove('hidden');
            setTimeout(() => {
                cuiInputs[0].focus();
            }, 300);
        }

        // Intercept login form submission to show modal
        loginForm?.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent default submission
            
            // Add loading state
            btnLogin.classList.add('btn-loading');
            btnLogin.disabled = true;
            
            // Simulate authentication delay
            setTimeout(() => {
                // Show CUI modal instead of submitting
                showModal();
            }, 500);
        });

        // Handle CUI form validation (temporary - accepts any 9 digits)
        formValidarCUI?.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent default submission
            
            const cui = updateCUIValue();
            
            if (cui.length !== 1) {
                alert('Por favor, ingresa el dígito del CUI');
                cuiInputs[0].focus();
                return false;
            }
            
            // For now, accept any 9 digits and submit the original login form
            console.log('CUI ingresado:', cui);
            
            // Close modal
            closeModal();
            
            // Actually submit the login form now
            const formData = new FormData(loginForm);
            
            // Remove loading state and submit
            btnLogin.classList.remove('btn-loading');
            btnLogin.disabled = false;
            
            // Submit the form
            loginForm.submit();
        });

        // Close modal on ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                closeModal();
            }
        });

        // Close modal on background click
        modal?.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeModal();
            }
        });
    </script>
</x-guest-layout>
