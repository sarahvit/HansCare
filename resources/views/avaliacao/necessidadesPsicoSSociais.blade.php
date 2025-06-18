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
        <div class="max-w-6xl p-2 mx-auto sm:px-6 lg:px-8">

            <form class="space-y-8 " method="POST">
                @csrf

                <!-- NECESSIDADES PSICOSSOCIAIS -->
                <div class="overflow-hidden bg-white border border-gray-200 shadow-lg sm:rounded-xl">
                    <div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-orange-50 to-yellow-50">
                        <h3 class="flex items-center text-lg font-semibold text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-5 h-5 mr-2 text-yellow-500 bi bi-bandaid" viewBox="0 0 16 16">
                                <path
                                    d="M14.121 1.879a3 3 0 0 0-4.242 0L8.733 3.026l4.261 4.26 1.127-1.165a3 3 0 0 0 0-4.242M12.293 8 8.027 3.734 3.738 8.031 8 12.293zm-5.006 4.994L3.03 8.737 1.879 9.88a3 3 0 0 0 4.241 4.24l.006-.006 1.16-1.121ZM2.679 7.676l6.492-6.504a4 4 0 0 1 5.66 5.653l-1.477 1.529-5.006 5.006-1.523 1.472a4 4 0 0 1-5.653-5.66l.001-.002 1.505-1.492z" />
                                <path
                                    d="M5.56 7.646a.5.5 0 1 1-.706.708.5.5 0 0 1 .707-.708Zm1.415-1.414a.5.5 0 1 1-.707.707.5.5 0 0 1 .707-.707M8.39 4.818a.5.5 0 1 1-.708.707.5.5 0 0 1 .707-.707Zm0 5.657a.5.5 0 1 1-.708.707.5.5 0 0 1 .707-.707ZM9.803 9.06a.5.5 0 1 1-.707.708.5.5 0 0 1 .707-.707Zm1.414-1.414a.5.5 0 1 1-.706.708.5.5 0 0 1 .707-.708ZM6.975 9.06a.5.5 0 1 1-.707.708.5.5 0 0 1 .707-.707ZM8.39 7.646a.5.5 0 1 1-.708.708.5.5 0 0 1 .707-.708Zm1.413-1.414a.5.5 0 1 1-.707.707.5.5 0 0 1 .707-.707" />
                            </svg>
                            Necessidades psicossociais
                        </h3>
                    </div>
                    <div class="p-6 space-y-8">
                        <!-- Investigação de Contatos Domiciliares -->
                        <div class="mb-6">
                            <h4 class="mb-3 font-semibold text-gray-700">Investigação de Contatos Domiciliares</h4>
                            <div class="flex items-center space-x-6">
                                <label class="text-sm text-gray-600">
                                    Quando foi realizado o diagnóstico de hanseníase, os contatos domiciliares foram
                                    avaliados?
                                </label>
                                <div class="flex space-x-4">
                                    <label class="flex items-center">
                                        <input type="radio" name="contatos_avaliados" value="sim" class="mr-2">
                                        <span class="text-sm">Sim</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="contatos_avaliados" value="nao" class="mr-2">
                                        <span class="text-sm">Não</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Recreação/Lazer/Criatividade -->
                        <div class="mb-6">
                            <h4 class="mb-3 font-semibold text-gray-700">Recreação/Lazer/Criatividade</h4>
                            <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                                <label class="flex items-center">
                                    <input type="checkbox" name="recreacao[]" value="televisao" class="mr-2">
                                    <span class="text-sm">Televisão</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="recreacao[]" value="musica" class="mr-2">
                                    <span class="text-sm">Música</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="recreacao[]" value="computador" class="mr-2">
                                    <span class="text-sm">Computador</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="recreacao[]" value="celular" class="mr-2">
                                    <span class="text-sm">Celular</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="recreacao[]" value="livros" class="mr-2">
                                    <span class="text-sm">Livros</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="recreacao[]" value="trabalhos_manuais" class="mr-2">
                                    <span class="text-sm">Trabalhos Manuais</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="recreacao[]" value="outros" class="mr-2">
                                    <span class="text-sm">Outros</span>
                                </label>
                            </div>
                            <div class="mt-3">
                                <input type="text" name="recreacao_outros_cite" placeholder="Cite outros..."
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>

                        <!-- Amor/Aceitação/Atenção/Gregária/Auto estima/Segurança -->
                        <div class="mb-6">
                            <h4 class="mb-3 font-semibold text-gray-700">Amor/Aceitação/Atenção/Gregária/Auto
                                estima/Segurança</h4>

                            <!-- Acompanhado na consulta -->
                            <div class="mb-4">
                                <label class="block mb-2 text-sm text-gray-600">Acompanhado(a) no momento da
                                    consulta:</label>
                                <div class="flex space-x-4">
                                    <label class="flex items-center">
                                        <input type="radio" name="acompanhado_consulta" value="sim" class="mr-2">
                                        <span class="text-sm">Sim</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="acompanhado_consulta" value="nao" class="mr-2">
                                        <span class="text-sm">Não</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Emocional -->
                            <div class="mb-4">
                                <label class="block mb-2 text-sm text-gray-600">Emocional:</label>
                                <div class="grid grid-cols-2 gap-3 md:grid-cols-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" name="emocional[]" value="estabilidade_preservada"
                                            class="mr-2">
                                        <span class="text-sm">Estabilidade emocional preservada</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="emocional[]" value="ansiedade" class="mr-2">
                                        <span class="text-sm">Ansiedade</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="emocional[]" value="choro" class="mr-2">
                                        <span class="text-sm">Choro</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="emocional[]" value="angustia" class="mr-2">
                                        <span class="text-sm">Angústia</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="emocional[]" value="agitacao" class="mr-2">
                                        <span class="text-sm">Agitação</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="emocional[]" value="medo" class="mr-2">
                                        <span class="text-sm">Medo</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Opiniões de si mesmo -->
                            <div class="mb-4">
                                <label class="block mb-2 text-sm text-gray-600">Opiniões de si mesmo sobre sua condição
                                    de
                                    saúde:</label>
                                <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
                                    <label class="flex items-center">
                                        <input type="radio" name="opiniao_si_mesmo" value="positiva"
                                            class="mr-2">
                                        <span class="text-sm">Positiva/autoprovação</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="opiniao_si_mesmo" value="negativa"
                                            class="mr-2">
                                        <span class="text-sm">Negativa/depreciação</span>
                                    </label>
                                </div>
                                <div class="grid grid-cols-1 gap-3 mt-2 md:grid-cols-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" name="opiniao_aspectos[]" value="estigma"
                                            class="mr-2">
                                        <span class="text-sm">Estigma</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="opiniao_aspectos[]" value="preconceito"
                                            class="mr-2">
                                        <span class="text-sm">Preconceito</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="opiniao_aspectos[]" value="discriminacao"
                                            class="mr-2">
                                        <span class="text-sm">Discriminação</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Preconceito -->
                            <div class="mb-4">
                                <label class="block mb-2 text-sm text-gray-600">Sente algum tipo de preconceito por ter
                                    hanseníase?</label>
                                <div class="flex space-x-4">
                                    <label class="flex items-center">
                                        <input type="radio" name="sente_preconceito" value="sim"
                                            class="mr-2">
                                        <span class="text-sm">Sim</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="sente_preconceito" value="nao"
                                            class="mr-2">
                                        <span class="text-sm">Não</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Mudança na qualidade de vida -->
                            <div class="mb-4">
                                <label class="block mb-2 text-sm text-gray-600">Sente que ocorreu mudança na sua
                                    qualidade
                                    de vida devido a hanseníase?</label>
                                <div class="flex space-x-4">
                                    <label class="flex items-center">
                                        <input type="radio" name="mudanca_qualidade_vida" value="sim"
                                            class="mr-2">
                                        <span class="text-sm">Sim</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="mudanca_qualidade_vida" value="nao"
                                            class="mr-2">
                                        <span class="text-sm">Não</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Comunicação e Gregária -->
                        <div class="mb-6">
                            <h4 class="mb-3 font-semibold text-gray-700">Comunicação e Gregária</h4>
                            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                                <div>
                                    <label class="block mb-2 text-sm text-gray-600">Possui apoio
                                        familiar/amigos:</label>
                                    <div class="flex space-x-4">
                                        <label class="flex items-center">
                                            <input type="radio" name="apoio_familiar" value="sim"
                                                class="mr-2">
                                            <span class="text-sm">Sim</span>
                                        </label>
                                        <label class="flex items-center">
                                            <input type="radio" name="apoio_familiar" value="nao"
                                                class="mr-2">
                                            <span class="text-sm">Não</span>
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <label class="block mb-2 text-sm text-gray-600">Interação com as pessoas:</label>
                                    <div class="flex space-x-4">
                                        <label class="flex items-center">
                                            <input type="radio" name="interacao_pessoas" value="sim"
                                                class="mr-2">
                                            <span class="text-sm">Sim</span>
                                        </label>
                                        <label class="flex items-center">
                                            <input type="radio" name="interacao_pessoas" value="nao"
                                                class="mr-2">
                                            <span class="text-sm">Não</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between w-full px-5 mt-3 mb-3">
                        <a href="{{ route('NecessidadesPsicoBio.psicobioSensi') }}"
                            class="px-4 py-2 rounded-md bg-[#A259FF] text-white text-sm font-semibold shadow-md hover:bg-[#8B46E8]">
                            Voltar
                        </a>

                        <a href="{{ route('psicoespirituais') }}"
                            class="px-4 py-2 rounded-md bg-[#A259FF] text-white text-sm font-semibold shadow-md hover:bg-[#8B46E8]">
                            Próximo
                        </a>
                    </div>
                </div>



                <!-- Botões de ação -->

            </form>
        </div>

    </div>
</x-app-layout>
