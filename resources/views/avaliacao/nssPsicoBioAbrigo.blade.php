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

                            <!-- Abrigo -->
                            <div>
                                <h4 class="flex items-center mb-4 font-medium text-gray-800 text-md">
                                    <span class="w-2 h-2 mr-2 bg-purple-500 rounded-full"></span>
                                    Abrigo
                                </h4>
                                <div class="space-y-6">
                                    <div>
                                        <label class="block mb-3 text-sm font-medium text-gray-700">Zona de
                                            Moradia:</label>
                                        <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="zona_moradia" value="urbana"
                                                    class="text-purple-600 form-radio">
                                                <span class="ml-2 text-sm">Urbana</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="zona_moradia" value="rural"
                                                    class="text-purple-600 form-radio">
                                                <span class="ml-2 text-sm">Rural</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="zona_moradia" value="institucionalizado"
                                                    class="text-purple-600 form-radio">
                                                <span class="ml-2 text-sm">Institucionalizado</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="zona_moradia" value="situacao_rua"
                                                    class="text-purple-600 form-radio">
                                                <span class="ml-2 text-sm">Situação de rua</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-2 gap-6 md:grid-cols-4">
                                        <div>
                                            <label class="block mb-3 text-sm font-medium text-gray-700">Luz
                                                Pública:</label>
                                            <div class="space-y-2">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="luz_publica" value="nao"
                                                        class="text-purple-600 form-radio">
                                                    <span class="ml-2 text-sm">Não</span>
                                                </label>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="luz_publica" value="sim"
                                                        class="text-purple-600 form-radio">
                                                    <span class="ml-2 text-sm">Sim</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div>
                                            <label class="block mb-3 text-sm font-medium text-gray-700">Coleta de
                                                lixo:</label>
                                            <div class="space-y-2">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="coleta_lixo" value="nao"
                                                        class="text-purple-600 form-radio">
                                                    <span class="ml-2 text-sm">Não</span>
                                                </label>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="coleta_lixo" value="sim"
                                                        class="text-purple-600 form-radio">
                                                    <span class="ml-2 text-sm">Sim</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div>
                                            <label class="block mb-3 text-sm font-medium text-gray-700">Água
                                                tratada:</label>
                                            <div class="space-y-2">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="agua_tratada" value="nao"
                                                        class="text-purple-600 form-radio">
                                                    <span class="ml-2 text-sm">Não</span>
                                                </label>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="agua_tratada" value="sim"
                                                        class="text-purple-600 form-radio">
                                                    <span class="ml-2 text-sm">Sim</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div>
                                            <label class="block mb-3 text-sm font-medium text-gray-700">Presença de
                                                animais domésticos:</label>
                                            <div class="space-y-2">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="animais_domesticos" value="nao"
                                                        class="text-purple-600 form-radio">
                                                    <span class="ml-2 text-sm">Não</span>
                                                </label>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="animais_domesticos" value="sim"
                                                        class="text-purple-600 form-radio">
                                                    <span class="ml-2 text-sm">Sim</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <label class="block mb-3 text-sm font-medium text-gray-700">Rede de
                                            Esgoto:</label>
                                        <div class="space-x-4">
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="rede_esgoto" value="publica"
                                                    class="text-purple-600 form-radio">
                                                <span class="ml-2 text-sm">Pública</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="rede_esgoto" value="fossa"
                                                    class="text-purple-600 form-radio">
                                                <span class="ml-2 text-sm">Fossa</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="rede_esgoto" value="ceu_aberto"
                                                    class="text-purple-600 form-radio">
                                                <span class="ml-2 text-sm">Céu aberto</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Regulação Hormonal -->
                            <div>
                                <h4 class="flex items-center mb-4 font-medium text-gray-800 text-md">
                                    <span class="w-2 h-2 mr-2 bg-purple-500 rounded-full"></span>
                                    Regulação Hormonal
                                </h4>
                                <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                                    <div>
                                        <label for="altura"
                                            class="block text-sm font-medium text-gray-700">Altura:</label>
                                        <div class="flex items-center mt-1">
                                            <input type="number" name="altura" id="altura" step="0.01"
                                                class="border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                            <span class="ml-2 text-sm text-gray-500">cm</span>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="peso"
                                            class="block text-sm font-medium text-gray-700">Peso:</label>
                                        <div class="flex items-center mt-1">
                                            <input type="number" name="peso" id="peso" step="0.1"
                                                class="border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                            <span class="ml-2 text-sm text-gray-500">kg</span>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="circunferencia_abdominal"
                                            class="block text-sm font-medium text-gray-700">Circunferência
                                            abdominal:</label>
                                        <div class="flex items-center mt-1">
                                            <input type="number" name="circunferencia_abdominal"
                                                id="circunferencia_abdominal" step="0.1"
                                                class="border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                            <span class="ml-2 text-sm text-gray-500">cm</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <label class="block mb-3 text-sm font-medium text-gray-700">IMC:</label>
                                    <div class="grid grid-cols-2 gap-4 md:grid-cols-5">
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="imc" value="baixo_peso"
                                                class="text-purple-600 form-radio">
                                            <span class="ml-2 text-sm">Baixo peso</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="imc" value="eutrofia"
                                                class="text-purple-600 form-radio">
                                            <span class="ml-2 text-sm">Eutrofia</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="imc" value="sobrepeso"
                                                class="text-purple-600 form-radio">
                                            <span class="ml-2 text-sm">Sobrepeso</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="imc" value="obesidade_1"
                                                class="text-purple-600 form-radio">
                                            <span class="ml-2 text-sm">Obesidade grau 1</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="imc" value="obesidade_2"
                                                class="text-purple-600 form-radio">
                                            <span class="ml-2 text-sm">Obesidade grau 2</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Oxigenação -->
                            <div>
                                <h4 class="flex items-center mb-4 font-medium text-gray-800 text-md">
                                    <span class="w-2 h-2 mr-2 bg-purple-500 rounded-full"></span>
                                    Oxigenação
                                </h4>
                                <div class="space-y-6">
                                    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                                        <div>
                                            <label class="block mb-3 text-sm font-medium text-gray-700">Tempo de
                                                enchimento capilar:</label>
                                            <div class="space-y-2">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="tempo_enchimento_capilar"
                                                        value="menor_2s" class="text-purple-600 form-radio">
                                                    <span class="ml-2 text-sm">
                                                        < 2s</span>
                                                </label>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="tempo_enchimento_capilar"
                                                        value="maior_2s" class="text-purple-600 form-radio">
                                                    <span class="ml-2 text-sm">>2s</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="frequencia_respiratoria"
                                                class="block text-sm font-medium text-gray-700">Frequência
                                                respiratória:</label>
                                            <div class="flex items-center mt-1">
                                                <input type="number" name="frequencia_respiratoria"
                                                    id="frequencia_respiratoria"
                                                    class="border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                                <span class="ml-2 text-sm text-gray-500">irpm</span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="sato2"
                                                class="block text-sm font-medium text-gray-700">SatO2:</label>
                                            <div class="flex items-center mt-1">
                                                <input type="number" name="sato2" id="sato2"
                                                    class="border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                                <span class="ml-2 text-sm text-gray-500">%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <label class="block mb-3 text-sm font-medium text-gray-700">MMVV:</label>
                                        <div class="space-x-4">
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="mmvv" value="presentes"
                                                    class="text-purple-600 form-radio">
                                                <span class="ml-2 text-sm">Presentes</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="mmvv" value="diminuidos"
                                                    class="text-purple-600 form-radio">
                                                <span class="ml-2 text-sm">Diminuídos</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="mmvv" value="ausentes"
                                                    class="text-purple-600 form-radio">
                                                <span class="ml-2 text-sm">Ausentes</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div>
                                        <label class="block mb-3 text-sm font-medium text-gray-700">Ruídos
                                            Adventícios:</label>
                                        <div class="grid grid-cols-2 gap-4 md:grid-cols-5">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="ruidos_adventicios[]" value="ausentes"
                                                    class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Ausentes</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="ruidos_adventicios[]" value="roncos"
                                                    class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Roncos</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="ruidos_adventicios[]" value="sibilos"
                                                    class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Sibilos</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="ruidos_adventicios[]" value="creptantes"
                                                    class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Creptantes</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="ruidos_adventicios[]"
                                                    value="subcreptantes" class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Subcreptantes</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between w-full pt-3">
                            <a href="{{ route('NecessidadesPsicoBio.psicobioSono') }}"
                                class="px-4 py-2 rounded-md bg-[#A259FF] text-white text-sm font-semibold shadow-md hover:bg-[#8B46E8]">
                                Voltar
                            </a>

                            <a href="{{ route('NecessidadesPsicoBio.psicobioReguT') }}"
                                class="px-4 py-2 rounded-md bg-[#A259FF] text-white text-sm font-semibold shadow-md hover:bg-[#8B46E8]">
                                Próximo
                            </a>
                        </div>
                        </div>

</x-app-layout>
