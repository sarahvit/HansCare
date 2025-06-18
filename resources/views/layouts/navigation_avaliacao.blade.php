<nav class="px-6 py-4 bg-white rounded-lg shadow-sm ">
    <ul class="flex justify-center space-x-6 text-sm font-semibold text-gray-700">
        <li>
            <a href="{{ route('avaliacao.index') }}"
                class="px-4 py-2 rounded-md transition-all duration-200
                      hover:bg-[#F0EDFF] hover:text-[#704FE6]
                      {{ request()->routeIs('avaliacao*') ? 'bg-[#E6E2FF] text-[#704FE6]' : '' }}">
                Dados Sociodemográficos
            </a>
        </li>
        <li>
            <a href="{{ route('NecessidadesPsicoBio.index') }}"
                class="px-4 py-2 rounded-md transition-all duration-200
                      hover:bg-[#F0EDFF] hover:text-[#704FE6]
                      {{ request()->routeIs('NecessidadesPsicoBio*') ? 'bg-[#E6E2FF] text-[#704FE6]' : '' }}">
                Necessidades Psicobiológicas
            </a>
        </li>
        <li>
            <a href="{{ route('psicossociais') }}"
                class="px-4 py-2 rounded-md transition-all duration-200
                      hover:bg-[#F0EDFF] hover:text-[#704FE6]
                      {{ request()->routeIs('psicossociais*') ? 'bg-[#E6E2FF] text-[#704FE6]' : '' }}">
                Necessidades Psicossociais
            </a>
        </li>
        <li>
            <a href="{{ route('psicoespirituais') }}"
                class="px-4 py-2 rounded-md transition-all duration-200
                      hover:bg-[#F0EDFF] hover:text-[#704FE6]
                      {{ request()->routeIs('psicoespirituais*') ? 'bg-[#E6E2FF] text-[#704FE6]' : '' }}">
                Necessidades Psicoespirituais
            </a>
        </li>
    </ul>
</nav>
