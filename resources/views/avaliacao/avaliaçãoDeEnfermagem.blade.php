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

                <!-- Identificação e Informações Sociodemográficas -->
                <div class="overflow-hidden bg-white border border-gray-200 shadow-lg sm:rounded-xl">
                    <div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-blue-50 to-indigo-50">
                        <h3 class="flex items-center text-lg font-semibold text-gray-800">
                            <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            Identificação e Informações Sociodemográficas
                        </h3>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                            <div class="lg:col-span-2">
                                <label for="nome" class="block text-sm font-medium text-gray-700">Nome
                                    Completo</label>
                                <input type="text" name="nome" id="nome"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="prontuario"
                                    class="block text-sm font-medium text-gray-700">Prontuário</label>
                                <input type="text" name="prontuario" id="prontuario"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="data_nascimento" class="block text-sm font-medium text-gray-700">Data de
                                    Nascimento</label>
                                <input type="date" name="data_nascimento" id="data_nascimento"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="idade" class="block text-sm font-medium text-gray-700">Idade</label>
                                <input type="number" name="idade" id="idade"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="orientacao_sexual"
                                    class="block text-sm font-medium text-gray-700">Orientação Sexual</label>
                                <select name="orientacao_sexual" id="orientacao_sexual"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="">Selecionar...</option>
                                    <option value="heterossexual">Heterossexual</option>
                                    <option value="homossexual">Homossexual</option>
                                    <option value="bissexual">Bissexual</option>
                                    <option value="outra">Outra</option>
                                </select>
                            </div>
                            <div>
                                <label for="estado_civil" class="block text-sm font-medium text-gray-700">Estado
                                    Civil</label>
                                <select name="estado_civil" id="estado_civil"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="">Selecionar...</option>
                                    <option value="solteiro">Solteiro</option>
                                    <option value="casado">Casado</option>
                                    <option value="uniao_estavel">União Estável</option>
                                    <option value="viuvo">Viúvo</option>
                                    <option value="divorciado">Divorciado</option>
                                </select>
                            </div>
                            <div>
                                <label for="raca_etnia"
                                    class="block text-sm font-medium text-gray-700">Raça/Etnia</label>
                                <select name="raca_etnia" id="raca_etnia"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="">Selecionar...</option>
                                    <option value="amarela">Amarela</option>
                                    <option value="branca">Branca</option>
                                    <option value="parda">Parda</option>
                                    <option value="preta">Preta</option>
                                    <option value="indigena">Indígena</option>
                                    <option value="quilombola">Quilombola</option>
                                </select>
                            </div>
                            <div class="lg:col-span-2">
                                <label for="endereco" class="block text-sm font-medium text-gray-700">Endereço</label>
                                <input type="text" name="endereco" id="endereco"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="renda_familiar" class="block text-sm font-medium text-gray-700">Renda
                                    Familiar (salários mínimos)</label>
                                <select name="renda_familiar" id="renda_familiar"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="">Selecionar...</option>
                                    <option value="1_a_2">1 a 2</option>
                                    <option value="3_a_5">3 a 5</option>
                                    <option value="5_a_10">5 a 10</option>
                                    <option value="maior_10">Maior que 10</option>
                                </select>
                            </div>
                             <div>
                                <label for="renda_familiar" class="block text-sm font-medium text-gray-700">Reside:</label>
                                <select name="renda_familiar" id="renda_familiar"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="">Selecionar...</option>
                                    <option value="Sozinho">Sozinho</option>
                                    <option value="Conjungê">Conjugê</option>
                                    <option value="Outros">Outros</option>
                                </select>
                            </div>
                            <div class="lg:col-span-2">
                                <label for="n_pessoas" class="block text-sm font-medium text-gray-700">Número de pessoas na casa:</label>
                                <input type="text" name="n_pessoas" id="n_pessoas"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end mb-3 mr-3">
                        <a href="{{ route('avaliacao.historiaAtual')}}"
                            class="px-6 py-2 rounded-md bg-[#A259FF] text-white text-sm font-medium shadow-md
            hover:bg-[#8B46E8] transition-all duration-200 ">
                            Próximo
                        </a>
                    </div>
                </div>
            </form>

</x-app-layout>
