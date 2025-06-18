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

                        <!-- Avaliação Neurológica e Periférica -->

                        <h3 class="flex items-center mb-6 text-lg font-semibold text-gray-900">
                            <span class="w-3 h-3 mr-3 bg-purple-600 rounded-full"></span>
                            Avaliação Neurológica e Periférica
                        </h3>

                        <!-- Face - Nariz -->
                        <div class="mb-8">
                            <h4 class="flex items-center mb-4 font-medium text-gray-800 text-md">
                                <span class="w-2 h-2 mr-2 bg-purple-500 rounded-full"></span>
                                Face - Nariz
                            </h4>
                            <div class="grid grid-cols-2 gap-6">
                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-700">Lado
                                        Direito</label>
                                    <div class="space-y-2">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="nariz_queixas_d" value="sim"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Queixas</span>
                                        </label>
                                        <br>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="nariz_ressecamento_d" value="sim"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Ressecamento</span>
                                        </label>
                                        <br>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="nariz_ferida_d" value="sim"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Ferida</span>
                                        </label>
                                        <br>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="nariz_perfuracao_septo_d" value="sim"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Perfuração de septo</span>
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-700">Lado
                                        Esquerdo</label>
                                    <div class="space-y-2">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="nariz_queixas_e" value="sim"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Queixas</span>
                                        </label>
                                        <br>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="nariz_ressecamento_e" value="sim"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Ressecamento</span>
                                        </label>
                                        <br>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="nariz_ferida_e" value="sim"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Ferida</span>
                                        </label>
                                        <br>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="nariz_perfuracao_septo_e" value="sim"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Perfuração de septo</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Face - Olhos -->
                        <div class="mb-8">
                            <h4 class="flex items-center mb-4 font-medium text-gray-800 text-md">
                                <span class="w-2 h-2 mr-2 bg-purple-500 rounded-full"></span>
                                Face - Olhos
                            </h4>
                            <div class="grid grid-cols-2 gap-6">
                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-700">Lado
                                        Direito</label>
                                    <div class="space-y-3">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="olhos_queixas_d" value="sim"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Queixas</span>
                                        </label>
                                        <br>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="olhos_sensibilidade_cornea_d" value="sim"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Diminuição da sensibilidade da
                                                córnea</span>
                                        </label>
                                        <br>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="olhos_forca_palpebras_d" value="sim"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Diminuição da força muscular das pálpebras
                                                superiores</span>
                                        </label>
                                        <br>
                                        <div class="flex items-center space-x-2">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="olhos_fecha_sem_forca_d" value="sim"
                                                    class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Fecha os olhos sem força</span>
                                            </label>
                                            <input type="number" name="olhos_fecha_sem_forca_mm_d" placeholder="mm"
                                                class="w-16 text-xs border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="olhos_fecha_com_forca_d" value="sim"
                                                    class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Fecha os olhos com força</span>
                                            </label>
                                            <input type="number" name="olhos_fecha_com_forca_mm_d" placeholder="mm"
                                                class="w-16 text-xs border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                        </div>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="olhos_triquiase_d" value="sim"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Triquíase</span>
                                        </label>
                                        <br>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="olhos_ectropio_d" value="sim"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Ectrópio</span>
                                        </label>
                                        <br>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="olhos_opacidade_corneana_d" value="sim"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Opacidade Corneana</span>
                                        </label>
                                        <br>
                                        <div>
                                            <label class="block mb-1 text-xs text-gray-600">Acuidade Visual -
                                                Valor da escala de Optotipo:</label>
                                            <input type="text" name="acuidade_visual_d"
                                                class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-700">Lado
                                        Esquerdo</label>
                                    <div class="space-y-3">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="olhos_queixas_e" value="sim"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Queixas</span>
                                        </label>
                                        <br>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="olhos_sensibilidade_cornea_e" value="sim"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Diminuição da sensibilidade da
                                                córnea</span>
                                        </label>
                                        <br>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="olhos_forca_palpebras_e" value="sim"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Diminuição da força muscular das pálpebras
                                                superiores</span>
                                        </label>
                                        <br>
                                        <div class="flex items-center space-x-2">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="olhos_fecha_sem_forca_e" value="sim"
                                                    class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Fecha os olhos sem força</span>
                                            </label>
                                            <input type="number" name="olhos_fecha_sem_forca_mm_e" placeholder="mm"
                                                class="w-16 text-xs border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="olhos_fecha_com_forca_e" value="sim"
                                                    class="text-purple-600 form-checkbox">
                                                <span class="ml-2 text-sm">Fecha os olhos com força</span>
                                            </label>
                                            <input type="number" name="olhos_fecha_com_forca_mm_e" placeholder="mm"
                                                class="w-16 text-xs border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                        </div>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="olhos_triquiase_e" value="sim"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Triquíase</span>
                                        </label>
                                        <br>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="olhos_ectropio_e" value="sim"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Ectrópio</span>
                                        </label>
                                        <br>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="olhos_opacidade_corneana_e" value="sim"
                                                class="text-purple-600 form-checkbox">
                                            <span class="ml-2 text-sm">Opacidade Corneana</span>
                                        </label>
                                        <br>
                                        <div>
                                            <label class="block mb-1 text-xs text-gray-600">Acuidade Visual -
                                                Valor da escala de Optotipo:</label>
                                            <input type="text" name="acuidade_visual_e"
                                                class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Membros Superiores - Queixas e Palpação -->
                        <div class="mb-8">
                            <h4 class="flex items-center mb-4 font-medium text-gray-800 text-md">
                                <span class="w-2 h-2 mr-2 bg-purple-500 rounded-full"></span>
                                Membros Superiores
                            </h4>

                            <!-- Queixas -->
                            <div class="mb-6">
                                <label class="block mb-3 text-sm font-medium text-gray-700">Queixas:</label>
                                <textarea name="membros_superiores_queixas" rows="2"
                                    class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500"></textarea>
                            </div>

                            <!-- Palpação de Nervos -->
                            <div class="mb-6">
                                <label class="block mb-3 text-sm font-medium text-gray-700">Palpação de
                                    Nervos:</label>
                                <div class="mb-3 text-xs text-gray-600">
                                    Legenda: Normal= N, Espessado=E, Dor= D, Choque=C
                                </div>
                                <div class="grid grid-cols-2 gap-6">
                                    <div>
                                        <label class="block mb-2 text-sm font-medium text-gray-700">Lado
                                            Direito</label>
                                        <div class="space-y-2">
                                            <div class="flex items-center space-x-2">
                                                <span class="w-12 text-sm">Radial:</span>
                                                <select name="nervo_radial_d"
                                                    class="text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                                    <option value="">-</option>
                                                    <option value="N">N</option>
                                                    <option value="E">E</option>
                                                    <option value="D">D</option>
                                                    <option value="C">C</option>
                                                </select>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <span class="w-12 text-sm">Ulnar:</span>
                                                <select name="nervo_ulnar_d"
                                                    class="text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                                    <option value="">-</option>
                                                    <option value="N">N</option>
                                                    <option value="E">E</option>
                                                    <option value="D">D</option>
                                                    <option value="C">C</option>
                                                </select>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <span class="w-12 text-sm">Mediano:</span>
                                                <select name="nervo_mediano_d"
                                                    class="text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                                    <option value="">-</option>
                                                    <option value="N">N</option>
                                                    <option value="E">E</option>
                                                    <option value="D">D</option>
                                                    <option value="C">C</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block mb-2 text-sm font-medium text-gray-700">Lado
                                            Esquerdo</label>
                                        <div class="space-y-2">
                                            <div class="flex items-center space-x-2">
                                                <span class="w-12 text-sm">Radial:</span>
                                                <select name="nervo_radial_e"
                                                    class="text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                                    <option value="">-</option>
                                                    <option value="N">N</option>
                                                    <option value="E">E</option>
                                                    <option value="D">D</option>
                                                    <option value="C">C</option>
                                                </select>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <span class="w-12 text-sm">Ulnar:</span>
                                                <select name="nervo_ulnar_e"
                                                    class="text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                                    <option value="">-</option>
                                                    <option value="N">N</option>
                                                    <option value="E">E</option>
                                                    <option value="D">D</option>
                                                    <option value="C">C</option>
                                                </select>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <span class="w-12 text-sm">Mediano:</span>
                                                <select name="nervo_mediano_e"
                                                    class="text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                                    <option value="">-</option>
                                                    <option value="N">N</option>
                                                    <option value="E">E</option>
                                                    <option value="D">D</option>
                                                    <option value="C">C</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 form-section">
                                    <h3 class="mb-4 text-xl font-semibold text-purple-700">Avaliação
                                        de Força - Membros Superiores</h3>
                                    <div class="mb-4 text-xs text-gray-600">
                                        Legenda: Forte=F, Diminuída=D, Paralisado=P
                                    </div>
                                    <div class="grid grid-cols-2 gap-6">
                                        <div>
                                            <label class="block mb-2 text-sm font-medium text-gray-700">Lado
                                                Direito</label>
                                            <div class="space-y-3">
                                                <div class="grid-item">
                                                    <label>Elevar punho (Radial):</label>
                                                    <select name="forca_radial_d"
                                                        class="text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                                        <option value="">-</option>
                                                        <option value="F">F</option>
                                                        <option value="D">D</option>
                                                        <option value="P">P</option>
                                                    </select>
                                                </div>
                                                <div class="grid-item">
                                                    <label>Abrir dedo mínimo (Ulnar):</label>
                                                    <select name="forca_ulnar_d"
                                                        class="text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                                        <option value="">-</option>
                                                        <option value="F">F</option>
                                                        <option value="D">D</option>
                                                        <option value="P">P</option>
                                                    </select>
                                                </div>
                                                <div class="grid-item">
                                                    <label>Elevar polegar (Mediano):</label>
                                                    <select name="forca_mediano_d"
                                                        class="text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                                        <option value="">-</option>
                                                        <option value="F">F</option>
                                                        <option value="D">D</option>
                                                        <option value="P">P</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-medium text-gray-700">Lado
                                                Esquerdo</label>
                                            <div class="space-y-3">
                                                <div class="grid-item">
                                                    <label>Elevar punho (Radial):</label>
                                                    <select name="forca_radial_e"
                                                        class="text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                                        <option value="">-</option>
                                                        <option value="F">F</option>
                                                        <option value="D">D</option>
                                                        <option value="P">P</option>
                                                    </select>
                                                </div>
                                                <div class="grid-item">
                                                    <label>Abrir dedo mínimo (Ulnar):</label>
                                                    <select name="forca_ulnar_e"
                                                        class="text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                                        <option value="">-</option>
                                                        <option value="F">F</option>
                                                        <option value="D">D</option>
                                                        <option value="P">P</option>
                                                    </select>
                                                </div>
                                                <div class="grid-item">
                                                    <label>Elevar polegar (Mediano):</label>
                                                    <select name="forca_mediano_e"
                                                        class="text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                                        <option value="">-</option>
                                                        <option value="F">F</option>
                                                        <option value="D">D</option>
                                                        <option value="P">P</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Inspeção e Avaliação Sensitiva - Membros Superiores -->
                                <div class="mt-5 form-section">
                                    <h3 class="mb-4 text-xl font-semibold text-purple-700">Inspeção e
                                        Avaliação Sensitiva - Membros Superiores</h3>
                                    <div class="mb-4 text-xs text-gray-600">
                                        Legenda: Garra móvel=M, Garra rígida=R, Reabsorção=Re, Lesões
                                        tróficas=Lt, Lesões traumáticas=Tr
                                    </div>
                                    <div class="grid grid-cols-2 gap-6">
                                        <div>
                                            <label class="block mb-2 text-sm font-medium text-gray-700">Lado
                                                Direito</label>
                                            <textarea name="inspecao_ms_d" rows="3"
                                                class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500"
                                                placeholder="Descreva alterações encontradas..."></textarea>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-medium text-gray-700">Lado
                                                Esquerdo</label>
                                            <textarea name="inspecao_ms_e" rows="3"
                                                class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500"
                                                placeholder="Descreva alterações encontradas..."></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Membros Inferiores - Queixas -->

                                <div class="form-section">
                                    <h3 class="mb-4 text-xl font-semibold text-purple-700">Membros
                                        Inferiores - Queixas</h3>
                                    <div class="grid grid-cols-2 gap-6">
                                        <div>
                                            <label class="block mb-2 text-sm font-medium text-gray-700">Lado
                                                Direito</label>
                                            <textarea name="queixas_mi_d" rows="2"
                                                class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500"
                                                placeholder="Descreva queixas..."></textarea>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-medium text-gray-700">Lado
                                                Esquerdo</label>
                                            <textarea name="queixas_mi_e" rows="2"
                                                class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500"
                                                placeholder="Descreva queixas..."></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Palpação de Nervos - Membros Inferiores -->
                                <div class="form-section">
                                    <h3 class="mb-4 text-xl font-semibold text-purple-700">Palpação de
                                        Nervos - Membros Inferiores</h3>
                                    <div class="mb-3 text-xs text-gray-600">
                                        Legenda: Normal=N, Espessado=E, Dor=D, Choque=C
                                    </div>
                                    <div class="grid grid-cols-2 gap-6">
                                        <div>
                                            <label class="block mb-2 text-sm font-medium text-gray-700">Lado
                                                Direito</label>
                                            <div class="space-y-2">
                                                <div class="grid-item">
                                                    <label>Fibular:</label>
                                                    <select name="nervo_fibular_d"
                                                        class="text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                                        <option value="">-</option>
                                                        <option value="N">N</option>
                                                        <option value="E">E</option>
                                                        <option value="D">D</option>
                                                        <option value="C">C</option>
                                                    </select>
                                                </div>
                                                <div class="grid-item">
                                                    <label>Tibial:</label>
                                                    <select name="nervo_tibial_d"
                                                        class="text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                                        <option value="">-</option>
                                                        <option value="N">N</option>
                                                        <option value="E">E</option>
                                                        <option value="D">D</option>
                                                        <option value="C">C</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-medium text-gray-700">Lado
                                                Esquerdo</label>
                                            <div class="space-y-2">
                                                <div class="grid-item">
                                                    <label>Fibular:</label>
                                                    <select name="nervo_fibular_e"
                                                        class="text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                                        <option value="">-</option>
                                                        <option value="N">N</option>
                                                        <option value="E">E</option>
                                                        <option value="D">D</option>
                                                        <option value="C">C</option>
                                                    </select>
                                                </div>
                                                <div class="grid-item">
                                                    <label>Tibial:</label>
                                                    <select name="nervo_tibial_e"
                                                        class="text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                                        <option value="">-</option>
                                                        <option value="N">N</option>
                                                        <option value="E">E</option>
                                                        <option value="D">D</option>
                                                        <option value="C">C</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Avaliação de Força - Membros Inferiores -->
                                    <div class="form-section">
                                        <h3 class="mb-4 text-xl font-semibold text-purple-700">
                                            Avaliação de Força - Membros Inferiores</h3>
                                        <div class="mb-4 text-xs text-gray-600">
                                            Legenda: Forte=F, Diminuída=D, Paralisado=P
                                        </div>
                                        <div class="grid grid-cols-2 gap-6">
                                            <div>
                                                <label class="block mb-2 text-sm font-medium text-gray-700">Lado
                                                    Direito</label>
                                                <div class="space-y-3">
                                                    <div class="grid-item">
                                                        <label>Elevar hálux (Fibular):</label>
                                                        <select name="forca_fibular_halux_d"
                                                            class="text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                                            <option value="">-</option>
                                                            <option value="F">F</option>
                                                            <option value="D">D</option>
                                                            <option value="P">P</option>
                                                        </select>
                                                    </div>
                                                    <div class="grid-item">
                                                        <label>Dorsiflexão do pé (Fibular):</label>
                                                        <select name="forca_fibular_dorsi_d"
                                                            class="text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                                            <option value="">-</option>
                                                            <option value="F">F</option>
                                                            <option value="D">D</option>
                                                            <option value="P">P</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <label class="block mb-2 text-sm font-medium text-gray-700">Lado
                                                    Esquerdo</label>
                                                <div class="space-y-3">
                                                    <div class="grid-item">
                                                        <label>Elevar hálux (Fibular):</label>
                                                        <select name="forca_fibular_halux_e"
                                                            class="text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                                            <option value="">-</option>
                                                            <option value="F">F</option>
                                                            <option value="D">D</option>
                                                            <option value="P">P</option>
                                                        </select>
                                                    </div>
                                                    <div class="grid-item">
                                                        <label>Dorsiflexão do pé (Fibular):</label>
                                                        <select name="forca_fibular_dorsi_e"
                                                            class="text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                                                            <option value="">-</option>
                                                            <option value="F">F</option>
                                                            <option value="D">D</option>
                                                            <option value="P">P</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="flex justify-between w-full pt-3">
                                <a href="{{ route('NecessidadesPsicoBio.psicobioSex') }}"
                                    class="px-4 py-2 rounded-md bg-[#A259FF] text-white text-sm font-semibold shadow-md hover:bg-[#8B46E8]">
                                    Voltar
                                </a>
                                <a href="{{ route('NecessidadesPsicoBio.psicobioSensi') }}"
                                    class="px-4 py-2 rounded-md bg-[#A259FF] text-white text-sm font-semibold shadow-md hover:bg-[#8B46E8]">
                                    Próximo
                                </a>
                            </div>
                        </div>
                    </div>

</x-app-layout>
