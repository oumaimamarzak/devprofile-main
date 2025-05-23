<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-6 shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
                <div>
                    <h2 class="text-3xl font-bold tracking-tight">
                        🗂️ Mes Projets
                    </h2>
                    <p class="mt-2 text-blue-100 opacity-90">Gérez et organisez vos projets professionnels</p>
                </div>
                @unless(request()->is('/'))
                <a href="{{ $backUrl = url()->previous() === url()->current() ? '/' : url()->previous() }}"
                   class="flex items-center gap-2 bg-white/20 hover:bg-white/30 text-white font-medium py-2 px-4 rounded-lg shadow-sm hover:shadow-md transition-all duration-300 backdrop-blur-sm">
                    <span class="text-lg">⬅️</span>
                    <span>Retour</span>
                </a>
                @endunless
            </div>
        </div>
    </x-slot>


    <div class="py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between mb-8">
                <a href="{{ url()->previous() }}"
                   class="flex items-center gap-2 bg-white hover:bg-gray-50 text-gray-700 font-medium py-3 px-6 rounded-lg shadow-sm hover:shadow-md transition-all duration-300 border border-gray-200">
                    <span class="text-lg">⬅️</span>
                    <span>Retour</span>
                </a>

                <a href="{{ route('projects.create') }}"
                   class="flex items-center gap-2 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium py-3 px-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                    <span class="text-lg">+</span>
                    <span>Ajouter un projet</span>
                </a>
            </div>

            <div class="space-y-6">
                @forelse ($projects as $project)
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                        <div class="p-8">
                            <h3 class="text-2xl font-bold text-gray-800 mb-3">{{ $project->title }}</h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">{{ $project->description }}</p>

                            <div class="flex flex-wrap gap-4">
                                @if ($project->link)
                                    <a href="{{ $project->link }}" target="_blank"
                                       class="flex items-center gap-2 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white px-5 py-2.5 rounded-lg shadow-sm hover:shadow-md transition-all duration-300">
                                        <span>👁️</span>
                                        <span>Voir le projet</span>
                                    </a>
                                @endif

                                <a href="{{ route('projects.edit', $project) }}"
                                   class="flex items-center gap-2 bg-gradient-to-r from-amber-500 to-yellow-500 hover:from-amber-600 hover:to-yellow-600 text-white px-5 py-2.5 rounded-lg shadow-sm hover:shadow-md transition-all duration-300">
                                    <span>✏️</span>
                                    <span>Modifier</span>
                                </a>

                                <form action="{{ route('projects.destroy', $project) }}" method="POST"
                                      onsubmit="return confirm('Supprimer ce projet ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="flex items-center gap-2 bg-gradient-to-r from-red-600 to-pink-600 hover:from-red-700 hover:to-pink-700 text-white px-5 py-2.5 rounded-lg shadow-sm hover:shadow-md transition-all duration-300">
                                        <span>🗑️</span>
                                        <span>Supprimer</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="bg-white rounded-xl shadow-sm p-12 text-center border border-gray-100">
                        <div class="mx-auto w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mb-6">
                            <span class="text-3xl">📂</span>
                        </div>
                        <h3 class="text-xl font-medium text-gray-700 mb-2">Aucun projet ajouté pour l'instant</h3>
                        <p class="text-gray-500 mb-6">Commencez par ajouter votre premier projet</p>
                        <a href="{{ route('projects.create') }}"
                           class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium py-2.5 px-6 rounded-lg shadow-sm hover:shadow-md transition-all duration-300">
                            <span>+</span>
                            <span>Ajouter un projet</span>
                        </a>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>