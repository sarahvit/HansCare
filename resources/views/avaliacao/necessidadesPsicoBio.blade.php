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

    <div class="pb-6">
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

                        <!-- Regulação Neurológica -->
                        <div>
                            <h4 class="flex items-center mb-4 font-medium text-gray-800 text-md">
                                <span class="w-2 h-2 mr-2 bg-purple-500 rounded-full"></span>
                                Regulação Neurológica
                            </h4>
                            <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="regulacao_neurologica[]" value="orientado_tempo_espaco"
                                        class="text-purple-600 form-checkbox">
                                    <span class="ml-2 text-sm">Orientado no tempo/espaço</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="regulacao_neurologica[]" value="calmo"
                                        class="text-purple-600 form-checkbox">
                                    <span class="ml-2 text-sm">Calmo</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="regulacao_neurologica[]" value="confuso"
                                        class="text-purple-600 form-checkbox">
                                    <span class="ml-2 text-sm">Confuso</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="regulacao_neurologica[]" value="agitado"
                                        class="text-purple-600 form-checkbox">
                                    <span class="ml-2 text-sm">Agitado</span>
                                </label>
                            </div>
                            <div class="mt-4">
                                <label for="regulacao_neurologica_outro"
                                    class="block text-sm font-medium text-gray-700">Outro:</label>
                                <input type="text" name="regulacao_neurologica_outro"
                                    id="regulacao_neurologica_outro"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                            </div>


                            <!-- Percepção dos órgãos do sentido -->
                            <div>
                                <h4 class="flex items-center mb-4 font-medium text-gray-800 text-md">
                                    <span class="w-2 h-2 mr-2 bg-purple-500 rounded-full"></span>
                                    Percepção dos Órgãos do Sentido
                                </h4>

                                <!-- Olhos -->
                                <div class="mb-6">
                                    <h5 class="mb-3 text-sm font-medium text-gray-700">Olhos:</h5>
                                    <div class="space-y-3">
                                        <div>
                                            <span class="text-sm text-gray-600">Faz uso de óculos/lentes de
                                                contato?</span>
                                            <div class="mt-2 space-x-4">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="uso_oculos" value="nao"
                                                        class="text-purple-600 form-radio">
                                                    <span class="ml-2 text-sm">Não</span>
                                                </label>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="uso_oculos" value="sim"
                                                        class="text-purple-600 form-radio">
                                                    <span class="ml-2 text-sm">Sim</span>
                                                </label>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="uso_oculos" value="sem_alteracoes"
                                                        class="text-purple-600 form-radio">
                                                    <span class="ml-2 text-sm">Sem alterações</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Ouvido -->
                                <div class="mb-6">
                                    <h5 class="mb-3 text-sm font-medium text-gray-700">Ouvido:</h5>
                                    <div class="space-y-3">
                                        <div>
                                            <span class="text-sm text-gray-600">Acuidade auditiva diminuída?</span>
                                            <div class="mt-2 space-x-4">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="acuidade_auditiva" value="nao"
                                                        class="text-purple-600 form-radio">
                                                    <span class="ml-2 text-sm">Não</span>
                                                </label>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="acuidade_auditiva" value="sim"
                                                        class="text-purple-600 form-radio">
                                                    <span class="ml-2 text-sm">Sim</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="ouvido_alteracoes[]" value="sujidades"
                                                    class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Sujidades</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="ouvido_alteracoes[]" value="secrecao"
                                                    class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Secreção</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="ouvido_alteracoes[]" value="hiperemia"
                                                    class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Hiperemia</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="ouvido_alteracoes[]"
                                                    value="espessamento_nervo" class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Espessamento de nervo auricular</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="ouvido_alteracoes[]"
                                                    value="sem_alteracoes" class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Sem alterações</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Nariz -->
                                <div class="mb-6">
                                    <h5 class="mb-3 text-sm font-medium text-gray-700">Nariz:</h5>
                                    <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="nariz_alteracoes[]" value="desvio_septo"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Desvio de septo</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="nariz_alteracoes[]" value="sujidades"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Sujidades</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="nariz_alteracoes[]" value="secrecoes"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Secreções</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="nariz_alteracoes[]"
                                                value="desabamento_nasal" class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Desabamento nasal</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="nariz_alteracoes[]" value="sem_alteracoes"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Sem alterações</span>
                                        </label>
                                    </div>
                                </div>

                                <!-- Fala -->
                                <div class="mb-6">
                                    <h5 class="mb-3 text-sm font-medium text-gray-700">Fala:</h5>
                                    <div class="space-y-3">
                                        <div>
                                            <span class="text-sm text-gray-600">Possui alterações na fala?</span>
                                            <div class="mt-2 space-x-4">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="alteracoes_fala" value="nao"
                                                        class="text-purple-600 form-radio">
                                                    <span class="ml-2 text-sm">Não</span>
                                                </label>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="alteracoes_fala" value="sim"
                                                        class="text-purple-600 form-radio">
                                                    <span class="ml-2 text-sm">Sim</span>
                                                </label>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="alteracoes_fala"
                                                        value="sem_alteracoes" class="text-purple-600 form-radio">
                                                    <span class="ml-2 text-sm">Sem alterações</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="fala_quais" class="block text-sm text-gray-600">Se sim,
                                                qual(is)?</label>
                                            <input type="text" name="fala_quais" id="fala_quais"
                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                        </div>
                                    </div>
                                </div>

                                <!-- Tato -->
                                <div class="mb-6">
                                    <h5 class="mb-3 text-sm font-medium text-gray-700">Tato:</h5>
                                    <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="tato_alteracoes[]"
                                                value="percepcao_dolorosa_diminuida"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Percepção dolorosa diminuída</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="tato_alteracoes[]"
                                                value="percepcao_termica_diminuida"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Percepção térmica diminuída</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="tato_alteracoes[]"
                                                value="percepcao_tatil_diminuida"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Percepção tátil diminuída</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="tato_alteracoes[]" value="sem_alteracoes"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Sem alterações</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="flex justify-between w-full pt-3">
                                    <a href="{{ route('avaliacao.historiaAtual') }}"
                                        class="px-4 py-2 rounded-md bg-[#A259FF] text-white text-sm font-semibold shadow-md hover:bg-[#8B46E8]">
                                        Voltar
                                    </a>

                                    <a href="{{ route('NecessidadesPsicoBio.psicobioHidra') }}"
                                        class="px-4 py-2 rounded-md bg-[#A259FF] text-white text-sm font-semibold shadow-md hover:bg-[#8B46E8]">
                                        Próximo
                                    </a>
                                </div>

                            </div>


</x-app-layout>
