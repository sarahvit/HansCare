<x-app-layout>

    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Página principal</h1>
                <p class="mt-1 text-sm text-gray-500">Bem-vinda de volta, Sarah!</p>
            </div>
            <div class="flex items-center space-x-4">
               
            </div>
        </div>
    </x-slot>

    <!-- Cards de Estatísticas Rápidas -->
    <div class="gap-6 mb-8 ">
      

    <!-- Seção Principal -->
    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
        <!-- Card Principal - Ações Rápidas -->
        <div class="relative p-8 overflow-hidden text-white lg:col-span-2 bg-gradient-to-br from-purple-500 to-purple-600 rounded-3xl">
            <!-- Background pattern sutil -->
            <div class="absolute inset-0 opacity-10">
                <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="medical-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <circle cx="10" cy="10" r="1" fill="white"/>
                        </pattern>
                    </defs>
                    <rect width="100" height="100" fill="url(#medical-pattern)"/>
                </svg>
            </div>
            
            <div class="relative z-10">
                <div class="flex items-center mb-6">
                    <div class="p-4 mr-4 bg-white/20 backdrop-blur-sm rounded-2xl">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="mb-2 text-3xl font-bold">Central de Avaliações</h2>
                        <p class="text-blue-100">Gerencie avaliações e acompanhe pacientes com hanseniase</p>
                    </div>
                </div>
                
                <p class="mb-8 text-lg leading-relaxed text-white/90">
                    Realize avaliações completas, monitore o progresso dos tratamentos e gere prescrições personalizadas baseadas em evidências clínicas.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('avaliacao.index') }}"
                       class="inline-flex items-center px-8 py-4 font-semibold text-blue-600 transition-all duration-300 transform bg-white shadow-lg rounded-2xl hover:bg-blue-50 hover:shadow-xl hover:-translate-y-1">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        Nova Avaliação
                    </a>
                    
                    <button class="inline-flex items-center px-8 py-4 font-semibold text-white transition-all duration-300 border bg-white/20 backdrop-blur-sm rounded-2xl border-white/30 hover:bg-white/30">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        Ver Relatórios
                    </button>
                </div>
            </div>
        </div>

        <!-- Painel Lateral -->
        <div class="space-y-6">
            
           
        </div>
    </div>
         

</x-app-layout>
