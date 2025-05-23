<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-6 shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
                <div class="text-center flex-1">
                    <h2 class="text-2xl font-bold tracking-tight">
                        Modifier la compétence
                    </h2>
                    <p class="mt-1 text-blue-100 opacity-90">Mettez à jour votre compétence</p>
                </div>
                <a href="{{ url()->previous() }}"
                   class="flex items-center gap-2 bg-white/20 hover:bg-white/30 text-white font-medium py-2 px-4 rounded-lg shadow-sm hover:shadow-md transition-all duration-300 backdrop-blur-sm">
                    <span class="text-lg">⬅️</span>
                    <span>Retour</span>
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-lg p-8 border border-gray-200">
            <form method="POST" action="{{ route('skills.update', $skill) }}">
                @csrf
                @method('PUT')

                <div class="mb-6 text-center">
                    <x-input-label for="name" :value="'Nom de la compétence'" class="block mb-2 font-medium text-gray-700" />
                    <x-text-input id="name" name="name" type="text" 
                                 class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 text-center"
                                 :value="old('name', $skill->name)" 
                                 required 
                                 placeholder="Ex: Laravel, React, etc." />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-600 text-sm" />
                </div>

                <div class="flex justify-center gap-4">
                    <a href="{{ route('skills.index') }}" 
                       class="px-6 py-3 bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium rounded-lg transition-colors duration-300">
                        Annuler
                    </a>
                    <button type="submit"
                            class="px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                        Mettre à jour
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>