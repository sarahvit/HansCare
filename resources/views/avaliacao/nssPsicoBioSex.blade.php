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

                        <!-- Sexualidade -->
                        <div>
                            <h4 class="flex items-center mb-4 font-medium text-gray-800 text-md">
                                <span class="w-2 h-2 mr-2 bg-purple-500 rounded-full"></span>
                                Sexualidade
                            </h4>
                            <div class="grid grid-cols-1 gap-4">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="vida_sexual_ativa" value="sim"
                                        class="text-purple-600 form-checkbox">
                                    <span class="ml-2 text-sm">Vida sexual ativa</span>
                                </label>
                                <div>
                                    <label class="inline-flex items-center mb-2">
                                        <input type="checkbox" name="disturbio_sexual" value="sim"
                                            class="text-purple-600 form-checkbox">
                                        <span class="ml-2 text-sm">Distúrbio sexual</span>
                                    </label>
                                    <div class="grid grid-cols-2 gap-4 ml-6 md:grid-cols-4">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="disturbio_sexual_tipo[]"
                                                value="alteracao_libido" class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Alteração da libido</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="disturbio_sexual_tipo[]"
                                                value="disfuncao_eretil" class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Disfunção erétil</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="disturbio_sexual_tipo[]" value="dispaurenia"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Dispaurenia</span>
                                        </label>
                                        <div>
                                            <label class="inline-flex items-center mb-1">
                                                <input type="checkbox" name="disturbio_sexual_tipo[]" value="outros"
                                                    class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Outros:</span>
                                            </label>
                                            <input type="text" name="outros_disturbio_sexual"
                                                class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Locomoção, mecânica corporal e motilidade -->
                        <div>
                            <h4 class="flex items-center mb-4 font-medium text-gray-800 text-md">
                                <span class="w-2 h-2 mr-2 bg-purple-500 rounded-full"></span>
                                Locomoção, Mecânica Corporal e Motilidade
                            </h4>
                            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                                <div>
                                    <label class="block mb-3 text-sm font-medium text-gray-700">Capacidade de
                                        locomoção:</label>
                                    <div class="space-y-2">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="locomocao[]" value="deambula"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Deambula</span>
                                        </label>
                                        <br>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="locomocao[]" value="deambula_dispositivo"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Deambula com dispositivo de marcha</span>
                                        </label>
                                        <br>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="locomocao[]" value="deambula_dificuldade"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Deambula com dificuldade</span>
                                        </label>
                                        <br>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="locomocao[]" value="nao_deambula"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Não deambula</span>
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="risco_quedas" value="sim"
                                            class="text-purple-600 form-checkbox">
                                        <span class="ml-2 text-sm">Risco de quedas</span>
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="flex justify-between w-full pt-3">
                            <a href="{{ route('NecessidadesPsicoBio.psicobioReguT') }}"
                                class="px-4 py-2 rounded-md bg-[#A259FF] text-white text-sm font-semibold shadow-md hover:bg-[#8B46E8]">
                                Voltar
                            </a>
                            <a href="{{ route('NecessidadesPsicoBio.psicobioNeuro') }}"
                                class="px-4 py-2 rounded-md bg-[#A259FF] text-white text-sm font-semibold shadow-md hover:bg-[#8B46E8]">
                                Próximo
                            </a>
                        </div>
                    </div>

</x-app-layout>
