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

                <!-- NECESSIDADES PSICOESPIRITUAIS -->
                <div class="overflow-hidden bg-white border border-gray-200 shadow-lg sm:rounded-xl">
                    <div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-green-50 to-green-50">
                        <h3 class="flex items-center text-lg font-semibold text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-5 h-5 mr-2 text-green-500 bi bi-clipboard2-heart " viewBox="0 0 16 16">
                                <path
                                    d="M10.058.501a.5.5 0 0 0-.5-.501h-2.98c-.276 0-.5.225-.5.501A.5.5 0 0 1 5.582 1a.497.497 0 0 0-.497.497V2a.5.5 0 0 0 .5.5h4.968a.5.5 0 0 0 .5-.5v-.503A.497.497 0 0 0 10.555 1a.5.5 0 0 1-.497-.499" />
                                <path
                                    d="M3.605 2a.5.5 0 0 0-.5.5v12a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-12a.5.5 0 0 0-.5-.5h-.5a.5.5 0 0 1 0-1h.5a1.5 1.5 0 0 1 1.5 1.5v12a1.5 1.5 0 0 1-1.5 1.5h-9a1.5 1.5 0 0 1-1.5-1.5v-12a1.5 1.5 0 0 1 1.5-1.5h.5a.5.5 0 0 1 0 1z" />
                                <path d="M8.068 6.482c1.656-1.673 5.795 1.254 0 5.018-5.795-3.764-1.656-6.69 0-5.018" />
                            </svg>
                            Necessidades psicoespirituais
                        </h3>
                    </div>
                    <div class="p-6 space-y-8">
                        <!-- Religião/Espiritualidade -->
                        <div class="mb-6">
                            <h4 class="mb-3 font-semibold text-gray-700">Religião/Espiritualidade</h4>
                            <div class="flex items-center mb-3 space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="tem_religiao" value="sim" class="mr-2">
                                    <span class="text-sm">Sim</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="tem_religiao" value="nao" class="mr-2">
                                    <span class="text-sm">Não</span>
                                </label>
                            </div>
                            <div>
                                <input type="text" name="qual_religiao" placeholder="Qual religião/espiritualidade?"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CONCLUSÃO -->
                <div class="overflow-hidden bg-white border border-gray-200 shadow-lg sm:rounded-xl">
                    <div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-pink-50 to-pink-50">
                        <h3 class="flex items-center text-lg font-semibold text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-5 h-5 mr-2 text-pink-500 bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                            </svg>
                            Conclusão
                        </h3>
                    </div>
                    <div class="p-6 space-y-8">
                        <!-- Impressões do enfermeiro -->
                        <div class="mb-6">
                            <label class="block mb-2 text-sm font-medium text-gray-700">
                                Impressões do enfermeiro, observações ou intercorrências:
                            </label>
                            <textarea name="impressoes_enfermeiro" rows="6"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
                                placeholder="Descreva suas impressões, observações e intercorrências..."></textarea>
                        </div>

                        <!-- Unidade de Saúde -->
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-medium text-gray-700">
                                Unidade de Saúde:
                            </label>
                            <input type="text" name="unidade_saude"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
                                placeholder="Nome da Unidade de Saúde">
                        </div>

                        <!-- Enfermeiro responsável e Data -->
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-700">
                                    Enfermeiro responsável:
                                </label>
                                <input type="text" name="enfermeiro_responsavel"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
                                    placeholder="Nome do enfermeiro">
                            </div>
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-700">
                                    Data:
                                </label>
                                <input type="date" name="data_avaliacao"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
                                    value="{{ date('Y-m-d') }}">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between w-full px-3 py-3">
                        <a href="{{ route('NecessidadesPsicoBio.psicobioNeuro') }}"
                            class="px-4 py-2 rounded-md bg-[#A259FF] text-white text-sm font-semibold shadow-md hover:bg-[#8B46E8]">
                            Voltar
                        </a>
                        <a href="{{ route('psicoespirituais') }}"
                            class="px-4 py-2 rounded-md bg-[#A259FF] text-white text-sm font-semibold shadow-md hover:bg-[#8B46E8]">
                            Salvar avaliação de enfermagem
                        </a>
                    </div>
                </div>

        </div>

    </div>



    </div>
    </div>
    </div>
</x-app-layout>
