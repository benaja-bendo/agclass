<x-base-site>
    <x-slot:title>
        formation
    </x-slot:title>
    <x-slot:p>

    </x-slot:p>

    <section class="pb-12">
        <div class="bg-gray-200 md:overflow-hidden">
            <div class="px-4 py-16">
                <div class="relative w-full md:max-w-2xl md:mx-auto text-center">
                    <h1 class="font-bold text-gray-700 text-xl sm:text-2xl md:text-5xl leading-tight mb-6">
                        Professionnels
                    </h1>

                    <p class="text-gray-600 md:text-xl md:px-18">
                        Ce sont des formations élaborées par des professionnels qualifiés des métiers spécifiques et techniques pour parfaire vos connaissances et compétences. Les formations sont composées en pack selon votre formule d’abonnement. les divers programmes auxquels vous souscrivez.
                    </p>
                    @auth
                    <a href="#formationListe" class="my-4 block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Accéder
                    </a>
                    @else
                    <a href="{{ route('formation.index') }}" class="my-4 block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        se connecter pour accéder aux formations
                    </a>
                    @endauth


                    <div class="hidden md:block h-40 w-40 rounded-full bg-blue-800 absolute right-0 bottom-0 -mb-64 -mr-48"></div>

                    <div class="hidden md:block h-5 w-5 rounded-full bg-yellow-500 absolute top-0 right-0 -mr-40 mt-32"></div>
                </div>
            </div>

            <svg class="fill-current bg-gray-200 text-white hidden md:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill-opacity="1" d="M0,64L120,85.3C240,107,480,149,720,149.3C960,149,1200,107,1320,85.3L1440,64L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
            </svg>
        </div>

        <div class="max-w-4xl mx-auto bg-white shadow-lg relative z-20 hidden md:block" style="margin-top: -320px; border-radius: 20px;">
            <div class="h-20 w-20 rounded-full bg-yellow-500 absolute top-0 left-0 -ml-10 -mt-10" style="z-index: -1;"></div>

            <div class="h-5 w-5 rounded-full bg-blue-500 absolute top-0 left-0 -ml-32 mt-12" style="z-index: -1;"></div>

            <div class="h-10 bg-white rounded-t-lg border-b border-gray-100"></div>
            <div class="flex" style="height: 550px;">
                <div class="w-32 bg-gray-200 p-6 overflow-hidden rounded-bl-lg">
                    <div class="text-center mb-10">
                        <div class="w-10 h-10 rounded-full bg-blue-800 mb-4 mx-auto"></div>
                        <div class="h-2 rounded-full bg-blue-800"></div>
                    </div>

                    <div class="text-center mb-10">
                        <div class="w-10 h-10 rounded-full bg-gray-300 mb-4 mx-auto"></div>
                        <div class="h-2 rounded-full bg-gray-300"></div>
                    </div>

                    <div class="text-center mb-10">
                        <div class="w-10 h-10 rounded-full bg-gray-300 mb-4 mx-auto"></div>
                        <div class="h-2 rounded-full bg-gray-300"></div>
                    </div>

                    <div class="text-center">
                        <div class="w-10 h-10 rounded-full bg-gray-300 mb-4 mx-auto"></div>
                        <div class="h-2 rounded-full bg-gray-300"></div>
                    </div>
                </div>
                <div class="flex-1 py-6 px-8">
                    <div class="flex flex-wrap -mx-4">
                        <div class="w-2/3 px-4">
                            <div class="flex flex-wrap -mx-4 mb-10">
                                <div class="w-1/4 px-4">
                                    <div class="text-center mb-10 bg-white shadow rounded-lg p-6">
                                        <div class="w-10 h-10 rounded-full bg-green-600 mb-4 mx-auto"></div>
                                        <div class="h-2 rounded-full bg-gray-200"></div>
                                    </div>
                                </div>
                                <div class="w-1/4 px-4">
                                    <div class="text-center mb-10 bg-white shadow rounded-lg p-6">
                                        <div class="w-10 h-10 rounded-full bg-blue-600 mb-4 mx-auto"></div>
                                        <div class="h-2 rounded-full bg-gray-200"></div>
                                    </div>
                                </div>
                                <div class="w-1/4 px-4">
                                    <div class="text-center mb-10 bg-white shadow rounded-lg p-6">
                                        <div class="w-10 h-10 rounded-full bg-orange-400 mb-4 mx-auto"></div>
                                        <div class="h-2 rounded-full bg-gray-200"></div>
                                    </div>
                                </div>
                                <div class="w-1/4 px-4">
                                    <div class="text-center mb-10 bg-white shadow rounded-lg p-6">
                                        <div class="w-10 h-10 rounded-full bg-blue-800 mb-4 mx-auto"></div>
                                        <div class="h-2 rounded-full bg-gray-200"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="h-32 percentage mb-10 pt-2">
                                <div class="h-4 bg-gray-200 w-64 mb-4 block"></div>
                                <div class="h-4 bg-gray-200 w-32 mb-4 block"></div>
                                <div class="h-4 bg-gray-200 w-40 mb-4 block"></div>
                                <div class="h-4 bg-gray-200 w-20 mb-4 block"></div>
                            </div>

                            <div class="w-full flex flex-wrap mb-6">
                                <div class="w-1/2">
                                    <div class="flex items-center">
                                        <div class="h-8 w-8 rounded-full bg-gray-200 mr-4"></div>
                                        <div>
                                            <div class="h-2 w-16 bg-gray-200 mb-1 rounded-full"></div>
                                            <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-1/2">
                                    <div class="flex items-center">
                                        <div class="h-8 w-8 rounded-full bg-gray-200 mr-4"></div>
                                        <div>
                                            <div class="h-2 w-16 bg-gray-200 mb-1 rounded-full"></div>
                                            <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full flex flex-wrap">
                                <div class="w-1/2">
                                    <div class="flex items-center">
                                        <div class="h-8 w-8 rounded-full bg-gray-200 mr-4"></div>
                                        <div>
                                            <div class="h-2 w-16 bg-gray-200 mb-1 rounded-full"></div>
                                            <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-1/2">
                                    <div class="flex items-center">
                                        <div class="h-8 w-8 rounded-full bg-gray-200 mr-4"></div>
                                        <div>
                                            <div class="h-2 w-16 bg-gray-200 mb-1 rounded-full"></div>
                                            <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/3 px-4">
                            <div class="rounded-lg shadow-lg p-6">
                                <div class="block w-12 h-2 rounded-full bg-gray-200 mb-6"></div>

                                <svg height="150" width="150" viewBox="0 0 20 20" class="mx-auto mb-12">
                                    <circle r="10" cx="10" cy="10" fill="#4299e1" />
                                    <circle r="5" cx="10" cy="10" fill="transparent" stroke="#2b6cb0" stroke-width="10" stroke-dasharray="11 31.4" transform="rotate(-90) translate(-20)" />
                                </svg>

                                <div class="flex flex-wrap -mx-2 mb-10">
                                    <div class="w-1/3 px-2">
                                        <div class="block h-2 rounded-full bg-gray-200"></div>
                                    </div>
                                    <div class="w-1/3 px-2">
                                        <div class="block h-2 rounded-full bg-gray-200"></div>
                                    </div>
                                    <div class="w-1/3 px-2">
                                        <div class="block h-2 rounded-full bg-gray-200"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-between my-10">
                                <div>
                                    <div class="h-2 w-10 bg-gray-300 rounded-full mb-2"></div>
                                    <div class="h-2 w-16 bg-gray-300 rounded-full mb-2"></div>
                                    <div class="h-2 w-8 bg-gray-300 rounded-full"></div>
                                </div>
                                <div>
                                    <div class="ml-auto h-2 w-5 bg-gray-300 rounded-full mb-2"></div>
                                    <div class="ml-auto h-2 w-6 bg-gray-300 rounded-full mb-2"></div>
                                    <div class="ml-auto h-2 w-8 bg-gray-300 rounded-full"></div>
                                </div>
                            </div>

                            <div class="text-right flex justify-end">
                                <div class="rounded-lg h-8 w-20 px-4 bg-gray-200 mr-2"></div>
                                <div class="rounded-lg h-8 w-20 px-4 bg-green-400"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-4 md:hidden">
            <div class="-mt-10 max-w-4xl mx-auto bg-white shadow-lg relative z-20" style="border-radius: 20px;">
                <div class="h-10 bg-white rounded-t-lg border-b border-gray-100"></div>
                <div class="flex" style="height: 340px;">
                    <div class="w-16 bg-gray-200 px-2 py-6 overflow-hidden rounded-bl-lg">
                        <div class="text-center mb-6">
                            <div class="w-4 h-4 rounded-full bg-blue-800 mb-2 mx-auto"></div>
                            <div class="h-2 w-8 mx-auto rounded-full bg-blue-800"></div>
                        </div>
                        <div class="text-center mb-6">
                            <div class="w-4 h-4 rounded-full bg-gray-300 mb-2 mx-auto"></div>
                            <div class="h-2 w-8 mx-auto rounded-full bg-gray-300"></div>
                        </div>
                        <div class="text-center mb-6">
                            <div class="w-4 h-4 rounded-full bg-gray-300 mb-2 mx-auto"></div>
                            <div class="h-2 w-8 mx-auto rounded-full bg-gray-300"></div>
                        </div>
                        <div class="text-center">
                            <div class="w-4 h-4 rounded-full bg-gray-300 mb-2 mx-auto"></div>
                            <div class="h-2 w-8 mx-auto rounded-full bg-gray-300"></div>
                        </div>
                    </div>
                    <div class="flex-1 py-6 px-4">
                        <div class="flex flex-wrap -mx-2">
                            <div class="w-1/3 px-2">
                                <div class="text-center mb-6 bg-white shadow rounded-lg px-2 py-3">
                                    <div class="w-4 h-4 rounded-full bg-green-600 mb-2 mx-auto"></div>
                                    <div class="h-2 w-8 mx-auto rounded-full bg-gray-200"></div>
                                </div>
                            </div>
                            <div class="w-1/3 px-2">
                                <div class="text-center mb-6 bg-white shadow rounded-lg px-2 py-3">
                                    <div class="w-4 h-4 rounded-full bg-blue-600 mb-2 mx-auto"></div>
                                    <div class="h-2 w-8 mx-auto rounded-full bg-gray-200"></div>
                                </div>
                            </div>
                            <div class="w-1/3 px-2">
                                <div class="text-center mb-6 bg-white shadow rounded-lg px-2 py-3">
                                    <div class="w-4 h-4 rounded-full bg-orange-600 mb-2 mx-auto"></div>
                                    <div class="h-2 w-8 mx-auto rounded-full bg-gray-200"></div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-2 mb-6">
                            <div class="w-1/2 px-2">
                                <div class="shadow h-24 p-2 rounded-lg">
                                    <div class="h-20 percentage pt-2">
                                        <div class="h-2 bg-gray-200 w-24 mb-2 block"></div>
                                        <div class="h-2 bg-gray-200 w-12 mb-2 block"></div>
                                        <div class="h-2 bg-gray-200 w-20 mb-2 block"></div>
                                        <div class="h-2 bg-gray-200 w-8 mb-2 block"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/2 px-2">
                                <div class="rounded-lg shadow px-2 py-2">
                                    <div class="block w-8 h-2 rounded-full bg-gray-200 mb-2"></div>

                                    <div class="mb-2">
                                        <svg height="50" width="50" viewBox="0 0 20 20" class="mx-auto">
                                            <circle r="10" cx="10" cy="10" fill="#ddd" />
                                            <circle r="5" cx="10" cy="10" fill="transparent" stroke="#eee" stroke-width="10" stroke-dasharray="11 31.4" transform="rotate(-90) translate(-20)" />
                                        </svg>
                                    </div>

                                    <div class="flex flex-wrap -mx-2">
                                        <div class="w-1/3 px-2">
                                            <div class="block h-2 rounded-full bg-gray-200"></div>
                                        </div>
                                        <div class="w-1/3 px-2">
                                            <div class="block h-2 rounded-full bg-gray-200"></div>
                                        </div>
                                        <div class="w-1/3 px-2">
                                            <div class="block h-2 rounded-full bg-gray-200"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full flex flex-wrap mb-2">
                            <div class="w-1/2">
                                <div class="flex items-center">
                                    <div class="h-4 w-4 rounded-full bg-gray-200 mr-4"></div>
                                    <div>
                                        <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                                        <div class="h-2 w-6 bg-gray-100 rounded-full"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/2">
                                <div class="flex items-center">
                                    <div class="h-4 w-4 rounded-full bg-gray-200 mr-4"></div>
                                    <div>
                                        <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                                        <div class="h-2 w-6 bg-gray-100 rounded-full"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full flex flex-wrap mb-6">
                            <div class="w-1/2">
                                <div class="flex items-center">
                                    <div class="h-4 w-4 rounded-full bg-gray-200 mr-4"></div>
                                    <div>
                                        <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                                        <div class="h-2 w-6 bg-gray-100 rounded-full"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/2">
                                <div class="flex items-center">
                                    <div class="h-4 w-4 rounded-full bg-gray-200 mr-4"></div>
                                    <div>
                                        <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                                        <div class="h-2 w-6 bg-gray-100 rounded-full"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-right flex justify-end">
                            <div class="rounded-lg h-6 w-16 px-4 bg-gray-200 mr-2"></div>
                            <div class="rounded-lg h-6 w-16 px-4 bg-green-400"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" id="formationListe">
        <h3 class="text-gray-700 text-3xl font-medium pb-4">Visitez la formation de votre choix</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            <div class="focus:outline-none mb-7 bg-white p-6 shadow rounded">
                <div class="flex items-center border-b border-gray-200 pb-6">
                    <img src="https://cdn.tuk.dev/assets/components/misc/doge-coin.png" alt="coin avatar" class="w-12 h-12 rounded-full" />
                    <div class="flex items-start justify-between w-full">
                        <div class="pl-3 w-full">
                            <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800">Dogecoin nerds</p>
                            <p tabindex="0" class="focus:outline-none text-sm leading-normal pt-2 text-gray-500">36 members</p>
                        </div>
                        <button role="img" aria-label="bookmark">
                            <svg class="focus:outline-none" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5001 4.66667H17.5001C18.1189 4.66667 18.7124 4.9125 19.15 5.35009C19.5876 5.78767 19.8334 6.38117 19.8334 7V23.3333L14.0001 19.8333L8.16675 23.3333V7C8.16675 6.38117 8.41258 5.78767 8.85017 5.35009C9.28775 4.9125 9.88124 4.66667 10.5001 4.66667Z" stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="px-2">
                    <p tabindex="0" class="focus:outline-none text-sm leading-5 py-4 text-gray-600">A group of people interested in dogecoin, the currency and a bit of side for the meme and dof that we all know and love. These cases are perfectly simple and easy to distinguish.</p>
                    <div tabindex="0" class="focus:outline-none flex">
                        <div class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#dogecoin</div>
                        <div class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#crypto</div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</x-base-site>
