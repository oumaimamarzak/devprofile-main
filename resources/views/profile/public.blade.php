<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-indigo-600 to-purple-700 text-white py-8 shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col items-center text-center">
                    <a href="{{ url()->previous() }}"
                       class="self-start flex items-center gap-2 bg-white/20 hover:bg-white/30 text-white font-medium py-2 px-4 rounded-lg shadow-sm hover:shadow-md transition-all duration-300 backdrop-blur-sm mb-4">
                        <span class="text-lg">⬅️</span>
                        <span>Retour</span>
                    </a>
                    <h1 class="text-3xl font-bold tracking-tight">{{ $user->name }}</h1>
                    <p class="mt-2 text-indigo-100 opacity-90">{{ $user->title }}</p>
                    <a href="{{ route('pdf.generate', $user->username) }}"
                       class="mt-4 inline-flex items-center px-6 py-3 bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white font-medium rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                        Télécharger CV
                    </a>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 mb-8 text-center">
                <div class="p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">À propos</h2>
                    <p class="text-gray-600 leading-relaxed max-w-2xl mx-auto">{{ $user->bio }}</p>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-8">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 text-center">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                            </svg>
                            Projets
                        </h3>
                        <ul class="space-y-3 max-w-md mx-auto">
                            @foreach ($user->projects as $project)
                                <li class="flex items-start gap-3">
                                    <span class="mt-1 flex-shrink-0 h-2 w-2 rounded-full bg-indigo-500"></span>
                                    <div class="text-left">
                                        <h4 class="font-medium text-gray-800">{{ $project->title }}</h4>
                                        <p class="text-gray-600 text-sm">{{ $project->description }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 text-center">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6.672 1.911a1 1 0 10-1.932.518l.259.966a1 1 0 001.932-.518l-.26-.966zM2.429 4.74a1 1 0 10-.517 1.932l.966.259a1 1 0 00.517-1.932l-.966-.26zm8.814-.569a1 1 0 00-1.415-1.414l-.707.707a1 1 0 101.415 1.415l.707-.708zm-7.071 7.072l.707-.707A1 1 0 003.465 9.12l-.708.707a1 1 0 001.415 1.415zm3.2-5.171a1 1 0 00-1.3 1.3l4 10a1 1 0 001.823.075l1.38-2.759 3.018 3.02a1 1 0 001.414-1.415l-3.019-3.02 2.76-1.379a1 1 0 00-.076-1.822l-10-4z" clip-rule="evenodd" />
                            </svg>
                            Compétences
                        </h3>
                        <div class="flex flex-wrap gap-2 justify-center max-w-lg mx-auto">
                            @foreach ($user->skills as $skill)
                                <span class="px-3 py-1 bg-indigo-100 text-indigo-800 text-sm font-medium rounded-full">
                                    {{ $skill->name }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>