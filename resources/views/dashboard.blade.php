<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <h2 class="text-3xl font-bold leading-tight flex items-center">
                    <span class="text-yellow-300 mr-3 text-4xl">🎉</span>
                    Bienvenue {{ Auth::user()->name }} !
                </h2>
                <p class="mt-2 text-indigo-100 text-lg">Gérez votre profil développeur en toute simplicité</p>
            </div>
        </div>
    </x-slot>

    <div class="min-h-screen bg-gradient-to-br from-gray-50 via-blue-50 to-indigo-100">
        <div class="py-12 px-6">
            <div class="max-w-7xl mx-auto">
                <!-- Welcome Card -->
                <div class="mb-8 bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    <div class="bg-gradient-to-r from-blue-600 to-purple-600 px-8 py-6">
                        <h3 class="text-2xl font-bold text-white flex items-center">
                            <span class="text-3xl mr-3">🔗</span>
                            Navigation rapide
                        </h3>
                        <p class="text-blue-100 mt-2">Accédez rapidement à vos fonctionnalités principales</p>
                    </div>
                    
                    <div class="p-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <a href="{{ route('projects.index') }}"
                               class="group relative bg-gradient-to-br from-blue-500 to-blue-600 text-white p-6 rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 border border-blue-200">
                                <div class="flex items-center justify-center mb-4">
                                    <span class="text-4xl group-hover:scale-110 transition-transform duration-300">🚀</span>
                                </div>
                                <h4 class="text-lg font-semibold text-center">Mes projets</h4>
                                <p class="text-blue-100 text-sm text-center mt-2">Gérez vos projets</p>
                                <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 rounded-xl transition-opacity duration-300"></div>
                            </a>

                            <a href="{{ route('skills.index') }}"
                               class="group relative bg-gradient-to-br from-emerald-500 to-green-600 text-white p-6 rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 border border-green-200">
                                <div class="flex items-center justify-center mb-4">
                                    <span class="text-4xl group-hover:scale-110 transition-transform duration-300">🛠️</span>
                                </div>
                                <h4 class="text-lg font-semibold text-center">Mes compétences</h4>
                                <p class="text-green-100 text-sm text-center mt-2">Vos technologies</p>
                                <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 rounded-xl transition-opacity duration-300"></div>
                            </a>

                            <a href="{{ route('profile.edit') }}"
                               class="group relative bg-gradient-to-br from-amber-500 to-orange-500 text-white p-6 rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 border border-orange-200">
                                <div class="flex items-center justify-center mb-4">
                                    <span class="text-4xl group-hover:scale-110 transition-transform duration-300">👤</span>
                                </div>
                                <h4 class="text-lg font-semibold text-center">Modifier le profil</h4>
                                <p class="text-orange-100 text-sm text-center mt-2">Mettez à jour vos infos</p>
                                <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 rounded-xl transition-opacity duration-300"></div>
                            </a>

                            <a href="{{ route('profile.show', Auth::user()->username) }}"
                               class="group relative bg-gradient-to-br from-gray-700 to-gray-800 text-white p-6 rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 border border-gray-600">
                                <div class="flex items-center justify-center mb-4">
                                    <span class="text-4xl group-hover:scale-110 transition-transform duration-300">🌐</span>
                                </div>
                                <h4 class="text-lg font-semibold text-center">Voir mon profil public</h4>
                                <p class="text-gray-300 text-sm text-center mt-2">Aperçu public</p>
                                <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 rounded-xl transition-opacity duration-300"></div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Quick Stats Section -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100">
                        <div class="flex items-center">
                            <div class="p-3 bg-blue-100 rounded-lg">
                                <span class="text-2xl">📊</span>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold text-gray-800">Tableau de bord</h4>
                                <p class="text-gray-600 text-sm">Centre de contrôle</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100">
                        <div class="flex items-center">
                            <div class="p-3 bg-green-100 rounded-lg">
                                <span class="text-2xl">⚡</span>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold text-gray-800">Actions rapides</h4>
                                <p class="text-gray-600 text-sm">Accès direct</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100">
                        <div class="flex items-center">
                            <div class="p-3 bg-purple-100 rounded-lg">
                                <span class="text-2xl">🎯</span>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold text-gray-800">Profil optimisé</h4>
                                <p class="text-gray-600 text-sm">Prêt à briller</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>