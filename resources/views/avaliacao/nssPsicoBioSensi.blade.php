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


                        <!-- Inspeção e Avaliação Sensitiva - Membros Superiores -->
                        <div class="form-section">
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
                        <!-- Inspeção e Avaliação Sensitiva - Membros Inferiores -->
                        <div class="form-section">
                            <h3 class="mb-4 text-xl font-semibold text-purple-700">Inspeção e
                                Avaliação Sensitiva - Membros Inferiores</h3>
                            <div class="mb-4 text-xs text-gray-600">
                                Legenda: Garra móvel=M, Garra rígida=R, Reabsorção=Re, Lesões
                                tróficas=Lt, Lesões traumáticas=Tr
                            </div>
                            <div class="grid grid-cols-2 gap-6">
                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-700">Lado
                                        Direito</label>
                                    <textarea name="inspecao_mi_d" rows="3"
                                        class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500"
                                        placeholder="Descreva alterações encontradas..."></textarea>
                                </div>
                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-700">Lado
                                        Esquerdo</label>
                                    <textarea name="inspecao_mi_e" rows="3"
                                        class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500"
                                        placeholder="Descreva alterações encontradas..."></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Classificação do Grau de Incapacidade -->
                        <div class="form-section">
                            <h3 class="mb-4 text-xl font-semibold text-purple-700">
                                Classificação do Grau de Incapacidade</h3>

                            <!-- Olhos -->
                            <div class="mb-6">
                                <h4 class="mb-3 text-lg font-medium text-gray-700">Olhos</h4>
                                <div class="grid grid-cols-2 gap-6">
                                    <div>
                                        <label class="block mb-2 text-sm font-medium text-gray-700">Direito</label>
                                        <div class="space-y-2">
                                            <label class="flex items-center">
                                                <input type="radio" name="grau_olho_d" value="0"
                                                    class="mr-2">
                                                <span class="text-sm">Grau 0 - Nenhum
                                                    problema</span>
                                            </label>
                                            <label class="flex items-center">
                                                <input type="radio" name="grau_olho_d" value="1"
                                                    class="mr-2">
                                                <span class="text-sm">Grau 1 -
                                                    Diminuição/perda da sensibilidade</span>
                                            </label>
                                            <label class="flex items-center">
                                                <input type="radio" name="grau_olho_d" value="2"
                                                    class="mr-2">
                                                <span class="text-sm">Grau 2 - Lagoftalmo,
                                                    ectrópio, triquíase, opacidade corneana
                                                    central, acuidade visual < 0,1</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block mb-2 text-sm font-medium text-gray-700">Esquerdo</label>
                                        <div class="space-y-2">
                                            <label class="flex items-center">
                                                <input type="radio" name="grau_olho_e" value="0"
                                                    class="mr-2">
                                                <span class="text-sm">Grau 0 - Nenhum
                                                    problema</span>
                                            </label>
                                            <label class="flex items-center">
                                                <input type="radio" name="grau_olho_e" value="1"
                                                    class="mr-2">
                                                <span class="text-sm">Grau 1 -
                                                    Diminuição/perda da sensibilidade</span>
                                            </label>
                                            <label class="flex items-center">
                                                <input type="radio" name="grau_olho_e" value="2"
                                                    class="mr-2">
                                                <span class="text-sm">Grau 2 - Lagoftalmo,
                                                    ectrópio, triquíase, opacidade corneana
                                                    central, acuidade visual < 0,1</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mãos -->
                            <div class="mb-6">
                                <h4 class="mb-3 text-lg font-medium text-gray-700">Mãos</h4>
                                <div class="grid grid-cols-2 gap-6">
                                    <div>
                                        <label class="block mb-2 text-sm font-medium text-gray-700">Direita</label>
                                        <div class="space-y-2">
                                            <label class="flex items-center">
                                                <input type="radio" name="grau_mao_d" value="0"
                                                    class="mr-2">
                                                <span class="text-sm">Grau 0 - Nenhum
                                                    problema</span>
                                            </label>
                                            <label class="flex items-center">
                                                <input type="radio" name="grau_mao_d" value="1"
                                                    class="mr-2">
                                                <span class="text-sm">Grau 1 -
                                                    Diminuição/perda da sensibilidade</span>
                                            </label>
                                            <label class="flex items-center">
                                                <input type="radio" name="grau_mao_d" value="2"
                                                    class="mr-2">
                                                <span class="text-sm">Grau 2 - Lesões
                                                    tróficas/traumáticas, garras, reabsorção,
                                                    mão caída, contratura</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block mb-2 text-sm font-medium text-gray-700">Esquerda</label>
                                        <div class="space-y-2">
                                            <label class="flex items-center">
                                                <input type="radio" name="grau_mao_e" value="0"
                                                    class="mr-2">
                                                <span class="text-sm">Grau 0 - Nenhum
                                                    problema</span>
                                            </label>
                                            <label class="flex items-center">
                                                <input type="radio" name="grau_mao_e" value="1"
                                                    class="mr-2">
                                                <span class="text-sm">Grau 1 -
                                                    Diminuição/perda da sensibilidade</span>
                                            </label>
                                            <label class="flex items-center">
                                                <input type="radio" name="grau_mao_e" value="2"
                                                    class="mr-2">
                                                <span class="text-sm">Grau 2 - Lesões
                                                    tróficas/traumáticas, garras, reabsorção,
                                                    mão caída, contratura</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pés -->
                            <div class="mb-6">
                                <h4 class="mb-3 text-lg font-medium text-gray-700">Pés</h4>
                                <div class="grid grid-cols-2 gap-6">
                                    <div>
                                        <label class="block mb-2 text-sm font-medium text-gray-700">Direito</label>
                                        <div class="space-y-2">
                                            <label class="flex items-center">
                                                <input type="radio" name="grau_pe_d" value="0"
                                                    class="mr-2">
                                                <span class="text-sm">Grau 0 - Nenhum
                                                    problema</span>
                                            </label>
                                            <label class="flex items-center">
                                                <input type="radio" name="grau_pe_d" value="1"
                                                    class="mr-2">
                                                <span class="text-sm">Grau 1 -
                                                    Diminuição/perda da sensibilidade</span>
                                            </label>
                                            <label class="flex items-center">
                                                <input type="radio" name="grau_pe_d" value="2"
                                                    class="mr-2">
                                                <span class="text-sm">Grau 2 - Lesões
                                                    tróficas/traumáticas, garras, reabsorção, pé
                                                    caído, contratura de tornozelo</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block mb-2 text-sm font-medium text-gray-700">Esquerdo</label>
                                        <div class="space-y-2">
                                            <label class="flex items-center">
                                                <input type="radio" name="grau_pe_e" value="0"
                                                    class="mr-2">
                                                <span class="text-sm">Grau 0 - Nenhum
                                                    problema</span>
                                            </label>
                                            <label class="flex items-center">
                                                <input type="radio" name="grau_pe_e" value="1"
                                                    class="mr-2">
                                                <span class="text-sm">Grau 1 -
                                                    Diminuição/perda da sensibilidade</span>
                                            </label>
                                            <label class="flex items-center">
                                                <input type="radio" name="grau_pe_e" value="2"
                                                    class="mr-2">
                                                <span class="text-sm">Grau 2 - Lesões
                                                    tróficas/traumáticas, garras, reabsorção, pé
                                                    caído, contratura de tornozelo</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Terapêutica -->
                        <div class="form-section">
                            <h3 class="mb-4 text-xl font-semibold text-purple-700">Terapêutica
                            </h3>
                            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-700">Está
                                        em tratamento de Hanseníase?</label>
                                    <div class="space-y-2">
                                        <label class="flex items-center">
                                            <input type="radio" name="tratamento_hanseniase" value="sim"
                                                class="mr-2">
                                            <span class="text-sm">Sim</span>
                                        </label>
                                        <label class="flex items-center">
                                            <input type="radio" name="tratamento_hanseniase" value="nao"
                                                class="mr-2">
                                            <span class="text-sm">Não</span>
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-700">Medicação
                                        em uso:</label>
                                    <div class="space-y-2">
                                        <label class="flex items-center">
                                            <input type="checkbox" name="medicacao[]" value="PQT-U-Adulto"
                                                class="mr-2">
                                            <span class="text-sm">PQT-U-Adulto</span>
                                        </label>
                                        <label class="flex items-center">
                                            <input type="checkbox" name="medicacao[]" value="PQT-U-Infantil"
                                                class="mr-2">
                                            <span class="text-sm">PQT-U Infantil</span>
                                        </label>
                                        <label class="flex items-center">
                                            <input type="checkbox" name="medicacao[]" value="Esquema-alternativo"
                                                class="mr-2">
                                            <span class="text-sm">Esquema alternativo</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 gap-6 mt-6 md:grid-cols-2">
                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-700">Tratamento
                                        de reações hansênicas ou neurites?</label>
                                    <div class="space-y-2">
                                        <label class="flex items-center">
                                            <input type="radio" name="tratamento_reacoes" value="sim"
                                                class="mr-2">
                                            <span class="text-sm">Sim</span>
                                        </label>
                                        <label class="flex items-center">
                                            <input type="radio" name="tratamento_reacoes" value="nao"
                                                class="mr-2">
                                            <span class="text-sm">Não</span>
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-700">Medicamentos
                                        para reações:</label>
                                    <div class="space-y-2">
                                        <label class="flex items-center">
                                            <input type="checkbox" name="medicacao_reacoes[]" value="Predinisona"
                                                class="mr-2">
                                            <span class="text-sm">Predinisona</span>
                                        </label>
                                        <label class="flex items-center">
                                            <input type="checkbox" name="medicacao_reacoes[]" value="Talidomida"
                                                class="mr-2">
                                            <span class="text-sm">Talidomida</span>
                                        </label>
                                        <label class="flex items-center">
                                            <input type="checkbox" name="medicacao_reacoes[]"
                                                value="Anticonvulsivantes" class="mr-2">
                                            <span class="text-sm">Anticonvulsivantes</span>
                                        </label>
                                        <label class="flex items-center">
                                            <input type="checkbox" name="medicacao_reacoes[]" value="Antidepressivos"
                                                class="mr-2">
                                            <span class="text-sm">Antidepressivos</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between w-full px-3 py-3">
                        <a href="{{ route('NecessidadesPsicoBio.psicobioNeuro') }}"
                            class="px-4 py-2 rounded-md bg-[#A259FF] text-white text-sm font-semibold shadow-md hover:bg-[#8B46E8]">
                            Voltar
                        </a>
                        <a href="{{ route('psicossociais') }}"
                            class="px-4 py-2 rounded-md bg-[#A259FF] text-white text-sm font-semibold shadow-md hover:bg-[#8B46E8]">
                            Próximo
                        </a>
                    </div>
                </div>

        </div>

    </div>

</x-app-layout>
