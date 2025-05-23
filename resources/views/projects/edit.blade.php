<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-6 shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
                <div>
                    <h2 class="text-3xl font-bold tracking-tight">
                        ✏️ Modifier le projet
                    </h2>
                    <p class="mt-2 text-blue-100 opacity-90">Mettez à jour les détails de votre projet</p>
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
                    <form action="{{ route('projects.update', $project) }}" method="POST">
                        @csrf 
                        @method('PUT')

                        <div class="mb-6">
                            <label for="title" class="block mb-2 text-gray-700 font-medium">Titre du projet</label>
                            <input 
                                type="text" 
                                name="title" 
                                value="{{ $project->title }}" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300" 
                                required
                                placeholder="Nommez votre projet">
                        </div>

                        <div class="mb-6">
                            <label for="description" class="block mb-2 text-gray-700 font-medium">Description</label>
                            <textarea 
                                name="description" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300" 
                                rows="6" 
                                required
                                placeholder="Décrivez votre projet en détail">{{ $project->description }}</textarea>
                        </div>

                        <div class="mb-8">
                            <label for="link" class="block mb-2 text-gray-700 font-medium">Lien vers le projet (facultatif)</label>
                            <input 
                                type="url" 
                                name="link" 
                                value="{{ $project->link }}" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300" 
                                placeholder="https://exemple.com">
                        </div>

                        <div class="flex justify-end gap-4">
                            <a href="{{ route('projects.index') }}" 
                               class="px-6 py-3 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors duration-300 shadow-sm">
                                Annuler
                            </a>
                            <button 
                                type="submit" 
                                class="px-8 py-3 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                                Mettre à jour
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>