<div class="flex flex-col justify-between h-full px-6 pt-1 pb-8 bg-white border-r border-gray-100">
    <div>
        <!-- Logo modernizado -->
        <div class="flex items-center gap-2 p-3 mb-12">
            <div class="p-2 bg-white rounded-full shadow-md">
                <x-application-logo class="w-10 h-10 text-white" />
            </div>
            <div>
                <span
                    class="text-xl font-bold text-transparent bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text">
                    HansCare
                </span>
                <p class="text-xs font-medium text-gray-500">Sistema Médico</p>
            </div>
        </div>

        <!-- Navegação principal -->
        <nav class="space-y-2">
            <div class="px-3 mb-4 text-xs font-semibold tracking-wider text-gray-400 uppercase">
                Menu Principal
            </div>

            <a href="{{ route('dashboard') }}"
                class="group flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 relative
            {{ request()->routeIs('dashboard') ? 'bg-gradient-to-r from-purple-500 to-purple-700 text-white shadow-lg shadow-indigo-500/25' : 'text-gray-600 hover:bg-purple-50 hover:text-gray-900' }}">

                <div class="flex items-center justify-center w-5 h-5">
                    <svg class="w-5 h-5 {{ request()->routeIs('dashboard') ? 'text-white' : 'text-gray-400 group-hover:text-indigo-500' }} transition-colors"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5v4m8-4v4" />
                    </svg>
                </div>
                <span class="font-medium">Dashboard</span>

                @if (request()->routeIs('dashboard'))
                    <div class="absolute right-0 w-1 h-8 transform -translate-y-1/2 bg-white rounded-l-full top-1/2">
                    </div>
                @endif
            </a>

            <a href="{{ route('avaliacao.index') }}"
                class="group flex items-center gap-3 px-3 py-2 rounded-xl transition-all duration-200 relative
            {{ request()->routeIs('avaliacao.index*') ? 'bg-gradient-to-r from-purple-500 to-purple-700 text-white shadow-lg shadow-indigo-500/25' : 'text-gray-600 hover:bg-purple-50 hover:text-gray-900' }}">

                <div class="flex items-center justify-center w-5 h-5">
                    <svg class="w-5 h-5 {{ request()->routeIs('avaliacao*') ? 'text-white' : 'text-gray-400 group-hover:text-indigo-500' }} transition-colors"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <span class="font-medium">Avaliação de enfermagem</span>

                @if (request()->routeIs('avaliacao.index*'))
                    <div class="absolute right-0 w-1 h-8 transform -translate-y-1/2 bg-white rounded-l-full top-1/2">
                    </div>
                @endif
            </a>

            <!-- Futuros itens do menu -->
            <a href="#"
                class="flex items-center gap-3 px-4 py-3 text-gray-400 transition-all duration-200 cursor-not-allowed group rounded-xl opacity-60">
                <div class="flex items-center justify-center w-5 h-5">
                    <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                    </svg>
                </div>
                <span class="font-medium">Pacientes</span>
                <span class="px-2 py-1 ml-auto text-xs text-gray-500 bg-gray-100 rounded-full">Em breve</span>
            </a>

            <a href="#"
                class="flex items-center gap-3 px-4 py-3 text-gray-400 transition-all duration-200 cursor-not-allowed group rounded-xl opacity-60">
                <div class="flex items-center justify-center w-5 h-5">
                    <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                    </svg>
                </div>
                <span class="font-medium">Prescrições</span>
                <span class="px-2 py-1 ml-auto text-xs text-gray-500 bg-gray-100 rounded-full">Em breve</span>
            </a>
        </nav>

        <!-- Seção de Configurações -->
        <div class="mt-12">
            <div class="px-3 mb-4 text-xs font-semibold tracking-wider text-gray-400 uppercase">
                Configurações
            </div>

            <a href="#"
                class="flex items-center gap-3 px-4 py-3 text-gray-600 transition-all duration-200 group rounded-xl hover:bg-gray-50 hover:text-gray-900">
                <div class="flex items-center justify-center w-5 h-5">
                    <svg class="w-5 h-5 text-gray-400 transition-colors group-hover:text-indigo-500" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <span class="font-medium">Configurações</span>
            </a>
        </div>
    </div>

    <!-- Seção do usuário e logout -->
    <div class="pt-6 border-t border-gray-100">
        <!-- Informações do usuário -->
        <div class="flex items-center gap-3 px-4 py-3 mb-4 bg-gradient-to-r from-gray-50 to-gray-100 rounded-xl">
            <div
                class="flex items-center justify-center w-10 h-10 text-sm font-bold text-white rounded-full bg-gradient-to-br from-indigo-500 to-purple-600">
                S
            </div>
            <div class="flex-1">
                <p class="text-sm font-semibold text-gray-900">Sarah</p>
                <p class="text-xs text-gray-500">Enfermeira</p>
            </div>
        </div>

        <!-- Botão de logout -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="flex items-center w-full gap-3 px-4 py-3 text-gray-500 transition-all duration-200 group hover:text-red-600 hover:bg-red-50 rounded-xl">
                <div class="flex items-center justify-center w-5 h-5">
                    <svg class="w-5 h-5 transition-colors group-hover:text-red-500" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                </div>
                <span class="font-medium">Sair do Sistema</span>
            </button>
        </form>
    </div>
</div>
