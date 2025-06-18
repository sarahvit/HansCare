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

                        <!-- Sono e Repouso -->
                        <div>
                            <h4 class="flex items-center mb-4 font-medium text-gray-800 text-md">
                                <span class="w-2 h-2 mr-2 bg-purple-500 rounded-full"></span>
                                Sono e Repouso
                            </h4>
                            <div class="space-y-6">
                                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                    <div>
                                        <label for="horario_dormir"
                                            class="block text-sm font-medium text-gray-700">Horário de
                                            dormir:</label>
                                        <div class="flex items-center mt-1">
                                            <span class="mr-2 text-sm text-gray-500">às</span>
                                            <input type="time" name="horario_dormir" id="horario_dormir"
                                                class="border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                            <span class="ml-2 text-sm text-gray-500">h</span>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block mb-3 text-sm font-medium text-gray-700">Dorme durante o
                                            dia:</label>
                                        <div class="space-y-2">
                                            <div class="space-x-4">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="dorme_dia" value="nao"
                                                        class="text-purple-600 form-radio">
                                                    <span class="ml-2 text-sm">Não</span>
                                                </label>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="dorme_dia" value="sim"
                                                        class="text-purple-600 form-radio">
                                                    <span class="ml-2 text-sm">Sim</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label for="tempo_sono_dia" class="block text-sm text-gray-600">Por
                                                    quanto tempo:</label>
                                                <div class="flex items-center mt-1">
                                                    <input type="number" name="tempo_sono_dia" id="tempo_sono_dia"
                                                        class="w-20 border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                                    <span class="ml-2 text-sm text-gray-500">min/h</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <label class="block mb-3 text-sm font-medium text-gray-700">Qualidade do
                                        sono:</label>
                                    <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="qualidade_sono" value="otimo"
                                                class="text-purple-600 form-radio">
                                            <span class="ml-2 text-sm">Ótimo</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="qualidade_sono" value="bom"
                                                class="text-purple-600 form-radio">
                                            <span class="ml-2 text-sm">Bom</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="qualidade_sono" value="regular"
                                                class="text-purple-600 form-radio">
                                            <span class="ml-2 text-sm">Regular</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="qualidade_sono" value="ruim"
                                                class="text-purple-600 form-radio">
                                            <span class="ml-2 text-sm">Ruim</span>
                                        </label>
                                    </div>
                                </div>

                                <div>
                                    <label class="block mb-3 text-sm font-medium text-gray-700">Problemas
                                        relacionados ao sono:</label>
                                    <div class="space-y-3">
                                        <div class="space-x-4">
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="problemas_sono" value="nao"
                                                    class="text-purple-600 form-radio">
                                                <span class="ml-2 text-sm">Não</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="problemas_sono" value="sim"
                                                    class="text-purple-600 form-radio">
                                                <span class="ml-2 text-sm">Sim</span>
                                            </label>
                                        </div>
                                        <div>
                                            <label for="problemas_sono_quais"
                                                class="block text-sm text-gray-600">Qual(is)?</label>
                                            <input type="text" name="problemas_sono_quais" id="problemas_sono_quais"
                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                        </div>
                                        <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="tipos_problemas_sono[]" value="insonia"
                                                    class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Insônia</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="tipos_problemas_sono[]"
                                                    value="sono_agitado" class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Sono agitado</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="tipos_problemas_sono[]"
                                                    value="pesadelos" class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Pesadelos</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="tipos_problemas_sono[]" value="ronco"
                                                    class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Ronco</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="tipos_problemas_sono[]"
                                                    value="sono_interrompido" class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Sono interrompido</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="tipos_problemas_sono[]"
                                                    value="dificuldade_iniciar" class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Dificuldade de iniciar o sono</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <label for="medicamentos_sono"
                                        class="block text-sm font-medium text-gray-700">Utilização de medicamentos
                                        para dormir, Quais?</label>
                                    <input type="text" name="medicamentos_sono" id="medicamentos_sono"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                </div>
                            </div>
                        </div>

                        <!-- Exercícios de Autocuidado -->
                        <div>
                            <h4 class="flex items-center mb-4 font-medium text-gray-800 text-md">
                                <span class="w-2 h-2 mr-2 bg-purple-500 rounded-full"></span>
                                Exercícios de Autocuidado
                            </h4>
                            <div class="space-y-6">
                                <div>
                                    <label class="block mb-3 text-sm font-medium text-gray-700">Apresenta alguma
                                        limitação relacionada ao Autocuidado:</label>
                                    <div class="space-y-3">
                                        <div class="space-x-4">
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="limitacao_autocuidado" value="sim"
                                                    class="text-purple-600 form-radio">
                                                <span class="ml-2 text-sm">Sim</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="limitacao_autocuidado" value="nao">
                                                <input type="radio" name="limitacao_autocuidado" value="nao"
                                                    class="text-purple-600 form-radio">
                                                <span class="ml-2 text-sm">Não</span>
                                            </label>
                                        </div>
                                        <div>
                                            <label for="limitacao_autocuidado_qual"
                                                class="block text-sm text-gray-600">Qual?</label>
                                            <input type="text" name="limitacao_autocuidado_qual"
                                                id="limitacao_autocuidado_qual"
                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <label class="block mb-3 text-sm font-medium text-gray-700">Alongamentos:</label>
                                    <div class="space-x-4">
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="alongamentos" value="nao_realiza"
                                                class="text-purple-600 form-radio">
                                            <span class="ml-2 text-sm">Não realiza</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="alongamentos" value="realiza"
                                                class="text-purple-600 form-radio">
                                            <span class="ml-2 text-sm">Realiza</span>
                                        </label>
                                    </div>
                                </div>

                                <div>
                                    <label class="block mb-3 text-sm font-medium text-gray-700">Estimulação
                                        Sensorial:</label>
                                    <div class="space-x-4">
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="estimulacao_sensorial" value="nao_realiza"
                                                class="text-purple-600 form-radio">
                                            <span class="ml-2 text-sm">Não realiza</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="estimulacao_sensorial" value="realiza"
                                                class="text-purple-600 form-radio">
                                            <span class="ml-2 text-sm">Realiza</span>
                                        </label>
                                    </div>
                                </div>

                                <div>
                                    <label class="block mb-3 text-sm font-medium text-gray-700">Restrição de
                                        atividade física:</label>
                                    <div class="space-y-3">
                                        <div class="space-x-4">
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="restricao_atividade" value="sim"
                                                    class="text-purple-600 form-radio">
                                                <span class="ml-2 text-sm">Sim</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="restricao_atividade" value="nao"
                                                    class="text-purple-600 form-radio">
                                                <span class="ml-2 text-sm">Não</span>
                                            </label>
                                        </div>
                                        <div>
                                            <label for="restricao_atividade_qual"
                                                class="block text-sm text-gray-600">Qual?</label>
                                            <input type="text" name="restricao_atividade_qual"
                                                id="restricao_atividade_qual"
                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <label class="block mb-3 text-sm font-medium text-gray-700">Atividades
                                        físicas:</label>
                                    <div class="space-y-3">
                                        <div class="space-x-4">
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="atividades_fisicas" value="nao_realiza"
                                                    class="text-purple-600 form-radio">
                                                <span class="ml-2 text-sm">Não realiza</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="atividades_fisicas" value="realiza"
                                                    class="text-purple-600 form-radio">
                                                <span class="ml-2 text-sm">Realiza</span>
                                            </label>
                                        </div>
                                        <div>
                                            <label for="atividades_fisicas_qual"
                                                class="block text-sm text-gray-600">Qual?</label>
                                            <input type="text" name="atividades_fisicas_qual"
                                                id="atividades_fisicas_qual"
                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between w-full pt-3">
                            <a href="{{ route('NecessidadesPsicoBio.psicobioHidra') }}"
                                class="px-4 py-2 rounded-md bg-[#A259FF] text-white text-sm font-semibold shadow-md hover:bg-[#8B46E8]">
                                Voltar
                            </a>

                            <a href="{{ route('NecessidadesPsicoBio.psicobioAbrigo') }}"
                                class="px-4 py-2 rounded-md bg-[#A259FF] text-white text-sm font-semibold shadow-md hover:bg-[#8B46E8]">
                                Próximo
                            </a>
                        </div>
                    </div>

</x-app-layout>
