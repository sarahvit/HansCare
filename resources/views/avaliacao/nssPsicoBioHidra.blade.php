<x-app-layout>
    @include('layouts.navigation_avaliacao')
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">
                    {{ __('Avaliação de Enfermagem') }}
                </h2>
                <p class="mt-1 text-sm text-gray-500">Instrumento de avaliação fundamentado na Teoria das Necessidades
                    Humanas Básicas</p>
            </div>

        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" class="space-y-8">
                @csrf

                <!-- Necessidades Psicobiológicas -->
                <div class="overflow-hidden bg-white border border-gray-200 shadow-lg sm:rounded-xl">
                    <div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-purple-50 to-violet-50">
                        <h3 class="flex items-center text-lg font-semibold text-gray-800">
                            <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                            Necessidades Psicobiológicas
                        </h3>
                    </div>
                    <div class="p-6 space-y-8">

                            <!-- Hidratação -->
                            <div>
                                <h4 class="flex items-center mb-4 font-medium text-gray-800 text-md">
                                    <span class="w-2 h-2 mr-2 bg-purple-500 rounded-full"></span>
                                    Hidratação
                                </h4>
                                <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="hidratacao[]" value="pele_hidratada"
                                            class="text-purple-600 form-checkbox">
                                        <span class="ml-2 text-sm">Pele hidratada</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="hidratacao[]" value="mucosa_hidratada"
                                            class="text-purple-600 form-checkbox">
                                        <span class="ml-2 text-sm">Mucosa hidratada</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="hidratacao[]" value="pele_xerotica"
                                            class="text-purple-600 form-checkbox">
                                        <span class="ml-2 text-sm">Pele xerótica</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="hidratacao[]" value="xerostomia"
                                            class="text-purple-600 form-checkbox">
                                        <span class="ml-2 text-sm">Xerostomia em cavidade bucal</span>
                                    </label>
                                </div>
                                <div class="mt-4">
                                    <label for="hidratacao_outro"
                                        class="block text-sm font-medium text-gray-700">Outro:</label>
                                    <input type="text" name="hidratacao_outro" id="hidratacao_outro"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                </div>
                            </div>

                            <!-- Nutrição -->
                            <div>
                                <h4 class="flex items-center mb-4 font-medium text-gray-800 text-md">
                                    <span class="w-2 h-2 mr-2 bg-purple-500 rounded-full"></span>
                                    Nutrição
                                </h4>
                                <div class="space-y-6">
                                    <div>
                                        <label class="block mb-3 text-sm font-medium text-gray-700">Refeições
                                            diárias:</label>
                                        <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="refeicoes_diarias[]" value="cafe_manha"
                                                    class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Café da manhã</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="refeicoes_diarias[]" value="colacao"
                                                    class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Colação</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="refeicoes_diarias[]" value="almoco"
                                                    class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Almoço</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="refeicoes_diarias[]"
                                                    value="lanche_tarde" class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Lanche da tarde</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="refeicoes_diarias[]" value="jantar"
                                                    class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Jantar</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="refeicoes_diarias[]" value="ceia"
                                                    class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Ceia</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div>
                                        <label class="block mb-3 text-sm font-medium text-gray-700">Principais
                                            refeições (lugar):</label>
                                        <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="local_refeicoes[]" value="casa"
                                                    class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Em casa</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="local_refeicoes[]" value="escola"
                                                    class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Na escola</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="local_refeicoes[]" value="trabalho"
                                                    class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">No trabalho</span>
                                            </label>
                                        </div>
                                        <div class="mt-3">
                                            <label for="local_refeicoes_outro"
                                                class="block text-sm text-gray-600">Outro:</label>
                                            <input type="text" name="local_refeicoes_outro"
                                                id="local_refeicoes_outro"
                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                        </div>
                                    </div>

                                    <div>
                                        <label class="block mb-3 text-sm font-medium text-gray-700">Preferências
                                            alimentares - Maior consumo de:</label>
                                        <div class="space-y-2">
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="preferencias_alimentares"
                                                    value="in_natura" class="text-purple-600 form-radio">
                                                <span class="ml-2 text-sm">Alimentos in natura ou minimamente
                                                    processados</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="preferencias_alimentares"
                                                    value="processados" class="text-purple-600 form-radio">
                                                <span class="ml-2 text-sm">Alimentos processados</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="preferencias_alimentares"
                                                    value="ultraprocessados" class="text-purple-600 form-radio">
                                                <span class="ml-2 text-sm">Alimentos ultraprocessados</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div>
                                        <label class="block mb-3 text-sm font-medium text-gray-700">Restrições
                                            alimentares:</label>
                                        <div class="space-y-3">
                                            <div class="space-x-4">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="restricoes_alimentares"
                                                        value="nao" class="text-purple-600 form-radio">
                                                    <span class="ml-2 text-sm">Não</span>
                                                </label>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="restricoes_alimentares"
                                                        value="sim" class="text-purple-600 form-radio">
                                                    <span class="ml-2 text-sm">Sim</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label for="restricoes_quais"
                                                    class="block text-sm text-gray-600">Qual(is)?</label>
                                                <input type="text" name="restricoes_quais" id="restricoes_quais"
                                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         <div class="flex justify-between w-full pt-3">
                                    <a href="{{ route('NecessidadesPsicoBio.index') }}"
                                        class="px-4 py-2 rounded-md bg-[#A259FF] text-white text-sm font-semibold shadow-md hover:bg-[#8B46E8]">
                                        Voltar
                                    </a>

                                    <a href="{{ route('NecessidadesPsicoBio.psicobioSono') }}"
                                        class="px-4 py-2 rounded-md bg-[#A259FF] text-white text-sm font-semibold shadow-md hover:bg-[#8B46E8]">
                                        Próximo
                                    </a>
                                </div>
                            </div>
                        </div>

</x-app-layout>
