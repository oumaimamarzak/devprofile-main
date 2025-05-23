
<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-purple-600 via-pink-600 to-red-500 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <h2 class="text-4xl font-bold leading-tight text-center">
                    Bienvenue sur DevProfile
                </h2>
                <p class="mt-3 text-purple-100 text-xl text-center">Votre plateforme professionnelle de développeur</p>
            </div>
        </div>
    </x-slot>

    <div class="min-h-screen bg-gradient-to-br from-indigo-50 via-white to-purple-50">
        <!-- Hero Section -->
        <div class="relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-600/10 to-purple-600/10"></div>
            <div class="relative px-8 py-16">
                <div class="text-center max-w-4xl mx-auto">
                    <div class="mb-8">
                        <span class="text-6xl mb-6 inline-block animate-bounce">💼</span>
                    </div>
                    <h1 class="text-5xl lg:text-6xl font-bold bg-gradient-to-r from-gray-800 via-blue-600 to-purple-600 bg-clip-text text-transparent mb-6">
                        Gérez votre profil développeur
                    </h1>
                    <p class="text-xl text-gray-600 mb-12 leading-relaxed">
                        Créez, personnalisez et partagez votre profil professionnel en quelques clics
                    </p>
                </div>
            </div>
        </div>

        <!-- Main Actions Section -->
        <div class="px-8 pb-16">
            <div class="max-w-4xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    <a href="{{ route('profile.edit') }}" 
                       class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-3 transition-all duration-300 overflow-hidden border border-blue-100">
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-blue-600"></div>
                        <div class="p-8 text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                                <span class="text-3xl">🧑</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Modifier le profil</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Mettez à jour vos informations personnelles et professionnelles</p>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </a>

                    <a href="{{ route('projects.index') }}" 
                       class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-3 transition-all duration-300 overflow-hidden border border-green-100">
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-emerald-500 to-green-600"></div>
                        <div class="p-8 text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                                <span class="text-3xl">📁</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Mes projets</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Présentez vos réalisations et projets les plus impressionnants</p>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </a>

                    <a href="{{ route('skills.index') }}" 
                       class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-3 transition-all duration-300 overflow-hidden border border-purple-100">
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-purple-500 to-purple-600"></div>
                        <div class="p-8 text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                                <span class="text-3xl">🧠</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Mes compétences</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Mettez en valeur vos technologies et expertises techniques</p>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </a>
                </div>

                <!-- Profile Actions Section -->
                <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
                    <div class="text-center mb-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-3">Actions sur votre profil</h2>
                        <p class="text-gray-600">Partagez et exportez votre profil professionnel</p>
                    </div>

                    @if (Auth::check() && Auth::user()->username)
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <a href="{{ route('profile.show', Auth::user()->username) }}" 
                               class="group relative bg-gradient-to-br from-gray-600 to-gray-700 text-white rounded-xl p-6 shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 text-center overflow-hidden">
                                <div class="relative z-10">
                                    <div class="flex items-center justify-center mb-4">
                                        <span class="text-4xl group-hover:scale-110 transition-transform duration-300">🌐</span>
                                    </div>
                                    <h3 class="text-lg font-semibold mb-2">Voir mon profil public</h3>
                                    <p class="text-gray-300 text-sm">Découvrez comment votre profil apparaît aux visiteurs</p>
                                </div>
                                <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                            </a>

                            <a href="{{ route('pdf.generate', Auth::user()->username) }}" 
                               class="group relative bg-gradient-to-br from-red-500 to-red-600 text-white rounded-xl p-6 shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 text-center overflow-hidden">
                                <div class="relative z-10">
                                    <div class="flex items-center justify-center mb-4">
                                        <span class="text-4xl group-hover:scale-110 transition-transform duration-300">⬇️</span>
                                    </div>
                                    <h3 class="text-lg font-semibold mb-2">Télécharger CV PDF</h3>
                                    <p class="text-red-100 text-sm">Exportez votre profil au format PDF professionnel</p>
                                </div>
                                <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                            </a>
                        </div>
                    @else
                        <div class="text-center p-8 bg-gradient-to-br from-red-50 to-pink-50 rounded-xl border border-red-200">
                            <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-2xl">⚠️</span>
                            </div>
                            <p class="text-red-700 font-medium mb-4">Username non défini</p>
                            <p class="text-red-600 mb-6">Veuillez le configurer depuis 
                                <a class="font-semibold underline hover:text-red-800 transition-colors duration-200" href="{{ route('profile.edit') }}">votre profil</a>.
                            </p>
                            <a href="{{ route('profile.edit') }}" 
                               class="inline-flex items-center px-6 py-3 bg-red-600 text-white font-medium rounded-lg hover:bg-red-700 transition-colors duration-200">
                                <span class="mr-2">👤</span>
                                Configurer maintenant
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>