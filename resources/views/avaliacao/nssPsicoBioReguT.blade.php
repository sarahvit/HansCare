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

    <div>
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



                        <!-- Regulação Térmica -->
                        <div>
                            <h4 class="flex items-center mb-4 font-medium text-gray-800 text-md">
                                <span class="w-2 h-2 mr-2 bg-purple-500 rounded-full"></span>
                                Regulação Térmica
                            </h4>
                            <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="regulacao_termica" value="afebril"
                                            class="text-purple-600 form-radio">
                                        <span class="ml-2 text-sm">Afebril</span>
                                    </label>
                                    <input type="number" name="temperatura_afebril" step="0.1" placeholder="°C"
                                        class="w-16 mt-1 ml-2 text-xs border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                </div>
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="regulacao_termica" value="subfebril"
                                            class="text-purple-600 form-radio">
                                        <span class="ml-2 text-sm">Subfebril</span>
                                    </label>
                                    <input type="number" name="temperatura_subfebril" step="0.1" placeholder="°C"
                                        class="w-16 mt-1 ml-2 text-xs border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                </div>
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="regulacao_termica" value="febril"
                                            class="text-purple-600 form-radio">
                                        <span class="ml-2 text-sm">Febril</span>
                                    </label>
                                    <input type="number" name="temperatura_febril" step="0.1" placeholder="°C"
                                        class="w-16 mt-1 ml-2 text-xs border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                </div>
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="regulacao_termica" value="hipotermico"
                                            class="text-purple-600 form-radio">
                                        <span class="ml-2 text-sm">Hipotérmico</span>
                                    </label>
                                    <input type="number" name="temperatura_hipotermico" step="0.1" placeholder="°C"
                                        class="w-16 mt-1 ml-2 text-xs border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                </div>
                            </div>
                        </div>


                        <!-- Eliminações -->
                        <div>
                            <h4 class="flex items-center mb-4 font-medium text-gray-800 text-md">
                                <span class="w-2 h-2 mr-2 bg-purple-500 rounded-full"></span>
                                Eliminações
                            </h4>

                            <!-- Eliminação Urinária -->
                            <div class="mb-6">
                                <h5 class="mb-3 text-sm font-medium text-gray-700">Eliminação Urinária</h5>
                                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                                    <div>
                                        <label class="block mb-1 text-xs text-gray-600">Frequência:</label>
                                        <input type="text" name="eliminacao_urinaria_frequencia"
                                            class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                    </div>
                                    <div>
                                        <label class="block mb-1 text-xs text-gray-600">Coloração:</label>
                                        <input type="text" name="eliminacao_urinaria_coloracao"
                                            class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-4 mt-3 md:grid-cols-4">
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="odor_urinario" value="sim"
                                            class="text-purple-600 form-checkbox">
                                        <span class="ml-2 text-sm">Odor</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="dor_urinar" value="sim"
                                            class="text-purple-600 form-checkbox">
                                        <span class="ml-2 text-sm">Dor ao urinar</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="incontinencia_urinaria" value="sim"
                                            class="text-purple-600 form-checkbox">
                                        <span class="ml-2 text-sm">Incontinência</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Eliminação do Trato Gastrointestinal -->
                        <div>
                            <h5 class="mb-3 text-sm font-medium text-gray-700">Eliminação do Trato Gastrointestinal
                            </h5>
                            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                                <div>
                                    <label class="block mb-1 text-xs text-gray-600">Frequência:</label>
                                    <input type="text" name="eliminacao_intestinal_frequencia"
                                        class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                </div>
                                <div>
                                    <label class="block mb-1 text-xs text-gray-600">Coloração:</label>
                                    <input type="text" name="eliminacao_intestinal_coloracao"
                                        class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 mt-3 md:grid-cols-4">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="dor_intestinal" value="sim"
                                        class="text-purple-600 form-checkbox">
                                    <span class="ml-2 text-sm">Dor</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="incontinencia_intestinal" value="sim"
                                        class="text-purple-600 form-checkbox">
                                    <span class="ml-2 text-sm">Incontinência</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="constipacao" value="sim"
                                        class="text-purple-600 form-checkbox">
                                    <span class="ml-2 text-sm">Constipação</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="diarreia" value="sim"
                                        class="text-purple-600 form-checkbox">
                                    <span class="ml-2 text-sm">Diarreia</span>
                                </label>
                            </div>
                            <div class="grid grid-cols-1 gap-4 mt-3 md:grid-cols-2">
                                <div>
                                    <label class="inline-flex items-center mb-2">
                                        <input type="checkbox" name="uso_laxante" value="sim"
                                            class="text-purple-600 form-checkbox">
                                        <span class="ml-2 text-sm">Uso de laxante</span>
                                    </label>
                                    <input type="text" name="qual_laxante" placeholder="Qual(s)?"
                                        class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                </div>
                                <div>
                                    <label class="inline-flex items-center mb-2">
                                        <input type="checkbox" name="equipamento_coletor" value="sim"
                                            class="text-purple-600 form-checkbox">
                                        <span class="ml-2 text-sm">Equipamento coletor/dispositivo externo</span>
                                    </label>
                                    <input type="text" name="tipo_equipamento" placeholder="Tipo:"
                                        class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between w-full pt-3">
                            <a href="{{ route('NecessidadesPsicoBio.psicobioAbrigo') }}"
                                class="px-4 py-2 rounded-md bg-[#A259FF] text-white text-sm font-semibold shadow-md hover:bg-[#8B46E8]">
                                Voltar
                            </a>
                            <a href="{{ route('NecessidadesPsicoBio.psicobioSex') }}"
                                class="px-4 py-2 rounded-md bg-[#A259FF] text-white text-sm font-semibold shadow-md hover:bg-[#8B46E8]">
                                Próximo
                            </a>
                        </div>
                    </div>

</x-app-layout>
