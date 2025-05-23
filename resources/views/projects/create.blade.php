
<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-6 shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
                <div>
                    <h2 class="text-3xl font-bold tracking-tight">
                        ➕ Ajouter un projet
                    </h2>
                    <p class="mt-2 text-blue-100 opacity-90">Remplissez les détails de votre nouveau projet</p>
                </div>
                <a href="{{ url()->previous() === url()->current() ? route('projects.index') : url()->previous() }}"
                   class="flex items-center gap-2 bg-white/20 hover:bg-white/30 text-white font-medium py-2 px-4 rounded-lg shadow-sm hover:shadow-md transition-all duration-300 backdrop-blur-sm">
                    <span class="text-lg">⬅️</span>
                    <span>Retour</span>
                </a>
            </div>
        </div>
    </x-slot>


    <div class="py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
                <div class="p-8">
                    <form method="POST" action="{{ isset($project) ? route('projects.update', $project) : route('projects.store') }}">
                        @csrf
                        @if(isset($project))
                            @method('PUT')
                        @endif

                        <div class="mb-6">
                            <x-input-label for="title" :value="'Titre du projet'" class="mb-2 text-gray-700 font-medium" />
                            <x-text-input 
                                id="title" 
                                name="title" 
                                type="text" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300" 
                                :value="old('title', $project->title ?? '')" 
                                required 
                                autofocus 
                                placeholder="Nommez votre projet" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2 text-red-600" />
                        </div>

                        <div class="mb-6">
                            <x-input-label for="description" :value="'Description'" class="mb-2 text-gray-700 font-medium" />
                            <textarea 
                                id="description" 
                                name="description" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300" 
                                rows="6" 
                                required
                                placeholder="Décrivez votre projet en détail">{{ old('description', $project->description ?? '') }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2 text-red-600" />
                        </div>

                        <div class="mb-8">
                            <x-input-label for="link" :value="'Lien vers le projet (facultatif)'" class="mb-2 text-gray-700 font-medium" />
                            <x-text-input 
                                id="link" 
                                name="link" 
                                type="url" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300" 
                                :value="old('link', $project->link ?? '')" 
                                placeholder="https://exemple.com" />
                            <x-input-error :messages="$errors->get('link')" class="mt-2 text-red-600" />
                        </div>

                        <div class="flex justify-end">
                            <x-primary-button class="px-8 py-3 text-lg">
                                {{ isset($project) ? 'Mettre à jour' : 'Créer le projet' }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>