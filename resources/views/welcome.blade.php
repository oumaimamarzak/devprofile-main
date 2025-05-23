<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DevProfile - Votre plateforme professionnelle</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            body {
                font-family: 'Figtree', sans-serif;
            }
            .gradient-text {
                background-clip: text;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
        </style>
    </head>
    <body class="antialiased bg-gradient-to-br from-blue-50 via-white to-purple-50 text-gray-900">
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-indigo-500 selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                @if (Route::has('login'))
                    <div class="absolute top-0 right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 transition-colors duration-300">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 transition-colors duration-300 px-4 py-2 rounded-lg hover:bg-indigo-100">Se connecter</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-white bg-indigo-600 px-4 py-2 rounded-lg hover:bg-indigo-700 transition-colors duration-300 shadow-md">S'inscrire</a>
                            @endif
                        @endauth
                    </div>
                @endif

                <main class="flex-1 flex flex-col items-center justify-center pt-20 pb-12">
                    <div class="text-center">
                        <h1 class="text-6xl md:text-7xl lg:text-8xl font-extrabold mb-6 leading-tight">
                            <span class="gradient-text bg-gradient-to-r from-blue-600 via-indigo-700 to-purple-800">DevProfile</span>
                        </h1>
                        <p class="text-2xl md:text-3xl text-gray-700 mb-10 max-w-3xl mx-auto font-light leading-relaxed">
                            Créez, personnalisez et partagez votre profil professionnel de développeur en toute simplicité.
                        </p>
                        <div class="flex flex-col sm:flex-row justify-center items-center gap-6">
                            @auth
                                <a href="{{ url('/dashboard') }}" 
                                   class="inline-flex items-center px-8 py-4 bg-indigo-700 text-white font-bold rounded-full text-xl hover:bg-indigo-800 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                    <span class="mr-3">🚀</span> Aller au Tableau de bord
                                </a>
                            @else
                                <a href="{{ route('register') }}" 
                                   class="inline-flex items-center px-8 py-4 bg-indigo-700 text-white font-bold rounded-full text-xl hover:bg-indigo-800 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                    <span class="mr-3">✨</span> Créez votre profil
                                </a>
                                <a href="{{ route('login') }}" 
                                   class="inline-flex items-center px-8 py-4 bg-white border border-indigo-300 text-indigo-700 font-bold rounded-full text-xl hover:bg-indigo-50 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                    <span class="mr-3">🔑</span> Se connecter
                                </a>
                            @endauth
                        </div>
                    </div>

                    <div class="mt-20 w-full max-w-4xl text-center">
                        <h2 class="text-4xl font-extrabold text-gray-800 mb-8">Pourquoi choisir DevProfile ?</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                            <div class="bg-white rounded-2xl shadow-xl p-8 transform hover:scale-105 transition-transform duration-300 border border-blue-100">
                                <div class="text-5xl mb-6">📝</div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">Personnalisation Facile</h3>
                                <p class="text-gray-600 text-base leading-relaxed">Adaptez votre profil à votre image professionnelle, mettez en avant vos compétences uniques.</p>
                            </div>
                            <div class="bg-white rounded-2xl shadow-xl p-8 transform hover:scale-105 transition-transform duration-300 border border-green-100">
                                <div class="text-5xl mb-6">🔗</div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">Partage Sans Effort</h3>
                                <p class="text-gray-600 text-base leading-relaxed">Partagez votre profil public avec des employeurs et des collaborateurs potentiels en un clic.</p>
                            </div>
                            <div class="bg-white rounded-2xl shadow-xl p-8 transform hover:scale-105 transition-transform duration-300 border border-purple-100">
                                <div class="text-5xl mb-6">📈</div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">Visibilité Accrue</h3>
                                <p class="text-gray-600 text-base leading-relaxed">Augmentez votre présence en ligne et attirez de nouvelles opportunités professionnelles.</p>
                            </div>
                        </div>
                    </div>
                </main>

                <footer class="py-10 text-center text-sm text-gray-600 dark:text-gray-400">
                    Développé avec ❤️ par <a href="https://github.com/Mouad-el-h" class="hover:underline font-semibold text-indigo-600">Mouad El Hafi</a> & <a href="https://github.com/Zoubeir-Elmouhi" class="hover:underline font-semibold text-indigo-600">Zoubeir Elmouhi</a>
                </footer>
            </div>
        </div>
    </body>
</html>