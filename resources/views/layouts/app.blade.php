<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'HansCare') }}</title>
    
    <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">

    
    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    

    
    <style>
        /* Scrollbar personalizada */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 3px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
        
        /* Animações suaves */
        .smooth-transition {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
    </style>
</head>

<body class="min-h-screen font-sans antialiased text-gray-900 bg-gray-50">
    <div class="flex min-h-screen">
        <!-- Sidebar com sombra sutil -->
        <aside class="relative z-10 w-64 bg-white border-r border-gray-200 shadow-lg">
            @include('layouts.navigation')
        </aside>

        <!-- Container principal -->
        <div class="flex flex-col flex-1 min-w-0">
            <!-- Header modernizado -->
            @isset($header)
                <header class="bg-white border-b border-gray-200 shadow-sm">
                    <div class="px-8 py-6 text-xl font-semibold tracking-tight text-indigo-600">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Conteúdo principal com padding otimizado -->
            <main class="flex-1 px-12 pt-4 overflow-y-auto">
                {{ $slot }}
            </main>

            <!-- Footer opcional -->
            <footer class="px-8 py-4 border-t border-gray-200 bg-gray-50">
                <div class="flex items-center justify-between text-sm text-gray-500">
                    <div class="flex items-center space-x-4">
                        <span>&copy; {{ date('Y') }} HansCare</span>
                        <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                        <span>Software voltado para os cuidados a pacientes com Hanseníase</span>
                    </div>
                
                </div>
            </footer>
        </div>
    </div>

    <!-- Toast notifications container (opcional para futuras notificações) -->
    <div id="toast-container" class="fixed z-50 space-y-2 top-4 right-4"></div>
</body>

</html>