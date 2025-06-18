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

    <!-- História Atual -->
    <div class="mt-8 overflow-hidden bg-white border border-gray-200 shadow-lg sm:rounded-xl">
        <div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-green-50 to-emerald-50">

            <h3 class="flex items-center text-lg font-semibold text-gray-800">
                <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                    </path>
                </svg>
                História Atual
            </h3>
        </div>
        <div class="p-6">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                <div>
                    <label for="data_diagnostico" class="block text-sm font-medium text-gray-700">Data do
                        Diagnóstico</label>
                    <input type="date" name="data_diagnostico" id="data_diagnostico"
                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div>
                    <label for="classificacao_operacional" class="block text-sm font-medium text-gray-700">Classificação
                        Operacional</label>
                    <div class="mt-2 space-y-2">
                        <label class="inline-flex items-center">
                            <input type="radio" name="classificacao_operacional" value="paucibacilar"
                                class="text-blue-600 form-radio">
                            <span class="ml-2">Paucibacilar</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" name="classificacao_operacional" value="multibacilar"
                                class="text-blue-600 form-radio">
                            <span class="ml-2">Multibacilar</span>
                        </label>
                    </div>
                </div>
                <div>
                    <label for="formas_clinicas" class="block text-sm font-medium text-gray-700">Formas Clínicas</label>
                    <select name="formas_clinicas" id="formas_clinicas"
                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="">Selecionar...</option>
                        <option value="tuberculoide">Hanseníase Tuberculóide</option>
                        <option value="virchowiana">Hanseníase Virchowiana</option>
                        <option value="dimorfa">Hanseníase Dimorfa</option>
                        <option value="indeterminada">Hanseníase Indeterminada</option>
                        <option value="neural_pura">Hanseníase Neural Pura</option>
                    </select>
                </div>
            </div>

            <div class="mt-6">
                <label class="block mb-3 text-sm font-medium text-gray-700">Comorbidades e Complicações da
                    Hanseníase</label>
                <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-5">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="comorbidades_hanseniase[]" value="neurite"
                            class="text-blue-600 form-checkbox">
                        <span class="ml-2 text-sm">Neurite</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="comorbidades_hanseniase[]" value="reacoes_hansenicas"
                            class="text-blue-600 form-checkbox">
                        <span class="ml-2 text-sm">Reações Hansênicas</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="comorbidades_hanseniase[]" value="dor_neuropatica"
                            class="text-blue-600 form-checkbox">
                        <span class="ml-2 text-sm">Dor Neuropática</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="comorbidades_hanseniase[]" value="incapacidade_fisica"
                            class="text-blue-600 form-checkbox">
                        <span class="ml-2 text-sm">Incapacidade Física</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="comorbidades_hanseniase[]" value="ulceras_plantares"
                            class="text-blue-600 form-checkbox">
                        <span class="ml-2 text-sm">Úlceras Plantares</span>
                    </label>
                </div>
                <div class="mt-6">
                    <label class="block mb-3 text-sm font-medium text-gray-700">Outras comorbidades na História Atual:
                    </label>
                    <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-5">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="comorbidades_hanseniase[]" value="neurite"
                                class="text-blue-600 form-checkbox">
                            <span class="ml-2 text-sm">Diabetes</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="comorbidades_hanseniase[]" value="reacoes_hansenicas"
                                class="text-blue-600 form-checkbox">
                            <span class="ml-2 text-sm">Hipertensão Arterial</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="comorbidades_hanseniase[]" value="dor_neuropatica"
                                class="text-blue-600 form-checkbox">
                            <span class="ml-2 text-sm">Deficiência visual</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="comorbidades_hanseniase[]" value="incapacidade_fisica"
                                class="text-blue-600 form-checkbox">
                            <span class="ml-2 text-sm">Infecções</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="comorbidades_hanseniase[]" value="ulceras_plantares"
                                class="text-blue-600 form-checkbox">
                            <span class="ml-2 text-sm">Doenças autoimunes</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="comorbidades_hanseniase[]" value="ulceras_plantares"
                                class="text-blue-600 form-checkbox">
                            <span class="ml-2 text-sm">Linfomas</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="comorbidades_hanseniase[]" value="ulceras_plantares"
                                class="text-blue-600 form-checkbox">
                            <span class="ml-2 text-sm">Outros tipos de câncer</span>
                        </label>
                        <div class="lg:col-span-2">
                            <label for="outras_doencas" class="block text-sm font-medium text-gray-700">Outras doenças:</label>
                            <input type="text" name="outras_doencas" id="outras_doencas"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-between w-full px-5 mt-3 mb-3">
                <a href="{{ route('avaliacao.index') }}"
                    class="px-4 py-2 rounded-md bg-[#A259FF] text-white text-sm font-semibold shadow-md hover:bg-[#8B46E8]">
                    Voltar
                </a>

                <a href="{{ route('NecessidadesPsicoBio.index') }}"
                    class="px-4 py-2 rounded-md bg-[#A259FF] text-white text-sm font-semibold shadow-md hover:bg-[#8B46E8]">
                    Próximo
                </a>
            </div>

        </div>


</x-app-layout>
