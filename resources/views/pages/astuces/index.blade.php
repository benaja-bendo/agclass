<x-base-site>
    <x-slot:title>
        actuces
    </x-slot:title>
    <x-slot:p></x-slot:p>

    <section class="bg-white dark:bg-gray-900 pb-12">
        <div class="container max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">
                Nos Astuces <br>
                {{-- awesome <span class="underline decoration-blue-500">Components</span> --}}
            </h1>

            <p class="mt-4 text-gray-500 xl:mt-6 dark:text-gray-300">
                Cette section est réservée pour un ensemble d'éléments très utile pour les abonnés mais qui ne pourrait pas se retrouver dans les sections précédentes. Par exemple des nouvelles avancées sur des concepts clés très utiles dans certaines formations ou des prescriptions ou conseils en audio (podcast).
            </p>

            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
                <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
                    <span class="inline-block text-blue-500 dark:text-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                        </svg>
                    </span>

                    <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">Astuces 1</h1>

                    <p class="text-gray-500 dark:text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non corrupti doloribus voluptatum eveniet
                    </p>

                    <a href="#" class="inline-flex p-2 text-blue-500 capitalize transition-colors duration-200 transform bg-blue-100 rounded-full dark:bg-blue-500 dark:text-white hover:text-blue-200 dark:hover:text-blue-200">
                        <span>Lire la suite</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </section>
</x-base-site>
