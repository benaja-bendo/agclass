<x-base-site>
    <x-slot:title>
        ebook
    </x-slot:title>
    <x-slot:p></x-slot:p>
    <style>
        .text-xxs {
            font-size: 0.70rem;
            line-height: 0.90rem;
        }

        .rounded-xss {
            border-radius: 2px !important;
        }

    </style>

    <!-- MDI Icons -->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css" />


    <section class="flex flex-wrap items-center py-12 ">
        <div class="w-full md:w-6/12 px-4 mr-auto ml-auto ">
            <div class="justify-center flex flex-wrap relative">
                <div class="my-4 w-full lg:w-6/12 px-4">
                    <a href="https://www.creative-tim.com/learning-lab/tailwind/svelte/alerts/notus?ref=vtw-index" target="_blank">
                        <div class="bg-red-600 shadow-lg rounded-lg text-center p-8">
                            <img alt="..." class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/svelte.jpg">
                            <p class="text-lg text-white mt-4 font-semibold">Svelte</p>
                        </div>
                    </a>
                    <a href="https://www.creative-tim.com/learning-lab/tailwind/react/alerts/notus?ref=vtw-index" target="_blank">
                        <div class="bg-lightBlue-500 shadow-lg rounded-lg text-center p-8 mt-8">
                            <img alt="..." class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/react.jpg">
                            <p class="text-lg text-white mt-4 font-semibold">ReactJS</p>
                        </div>
                    </a>
                    <a href="https://www.creative-tim.com/learning-lab/tailwind/nextjs/alerts/notus?ref=vtw-index" target="_blank">
                        <div class="bg-blueGray-700 shadow-lg rounded-lg text-center p-8 mt-8">
                            <img alt="..." class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/nextjs.jpg">
                            <p class="text-lg text-white mt-4 font-semibold">NextJS</p>
                        </div>
                    </a>
                </div>
                <div class="my-4 w-full lg:w-6/12 px-4 lg:mt-16">
                    <a href="https://www.creative-tim.com/learning-lab/tailwind/js/alerts/notus?ref=vtw-index" target="_blank">
                        <div class="bg-yellow-500 shadow-lg rounded-lg text-center p-8">
                            <img alt="..." class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/js.png">
                            <p class="text-lg text-white mt-4 font-semibold">
                                JavaScript
                            </p>
                        </div>
                    </a>
                    <a href="https://www.creative-tim.com/learning-lab/tailwind/angular/alerts/notus?ref=vtw-index" target="_blank">
                        <div class="bg-red-700 shadow-lg rounded-lg text-center p-8 mt-8">
                            <img alt="..." class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/angular.jpg">
                            <p class="text-lg text-white mt-4 font-semibold">Angular</p>
                        </div>
                    </a>
                    <a href="https://www.creative-tim.com/learning-lab/tailwind/vue/alerts/notus?ref=vtw-index" target="_blank">
                        <div class="bg-emerald-500 shadow-lg rounded-lg text-center p-8 mt-8">
                            <img alt="..." class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/vue.jpg">
                            <p class="text-lg text-white mt-4 font-semibold">Vue.js</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="w-full md:w-4/12 px-12 md:px-4 ml-auto mr-auto mt-16">
            <h3 class="text-3xl mb-2 font-semibold leading-normal">
                Nos eBooks
            </h3>
            <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600">
                Ce sont nos livres qui aident les abonnées amoureux de lecture de mieux appréhender
                nos approches contextuelles. Les livres sont les compilés de nos formations en présentiel et bien souvent son accompagné d’audio.
            </p>
            <div class="block pb-6">
                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white last:mr-0 mr-2 mt-2">
                    motivation
                </span>
                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white last:mr-0 mr-2 mt-2">
                    performance
                </span>
                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white  last:mr-0 mr-2 mt-2">
                    leadership
                </span>
                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white  last:mr-0 mr-2 mt-2">
                    communication
                </span>
                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white  last:mr-0 mr-2 mt-2">
                    management
                </span>
            </div>
        </div>
    </section>
    <section class="py-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h3 class="text-gray-700 text-3xl font-medium pb-4">
            Listes des ebooks
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            <div class="flex flex-col shadow-md cursor-pointer w-96 hover:-translate-y-1 duration-300">
                <!-- Preview -->
                <div class="inline relative group h-48">
                    <!-- Thumbnail -->
                    <img class="absolute rounded-t object-cover h-full w-full" src="https://cdn.pixabay.com/photo/2014/09/05/18/32/old-books-436498_960_720.jpg" alt="Product Preview" />

                    <!-- Hover Bar -->
                    <div class="flex flex-row absolute justify-end
                h-16 w-full bottom-0 px-3 space-x-2
                bg-none opacity-0 group-hover:opacity-100
                group-hover:bg-gradient-to-t from-black/20 via-gray-800/20 to-transparent
                transition-all ease-in-out duration-200 delay-100">

                        <!-- Add to Bookmarks Button -->
                        <button class="bg-gray-50/10 rounded-full
                    px-1 h-9 w-9 my-auto hover:bg-gray-50/20
                    transition-colors duration-200">
                            <i class="mdi mdi-playlist-plus text-xl text-gray-200
                        hover:text-white transition-all duration-200" title="Add to Bookmarks"></i>
                        </button>

                        <!-- Add to Favorites Button -->
                        <button class="bg-gray-50/10 rounded-full
                    px-1 h-9 w-9 my-auto hover:bg-gray-50/20
                    transition-colors duration-200">
                            <i class="mdi mdi-heart text-xl text-gray-200 p-1
                        hover:text-white transition-all duration-200" title="Add to Favorites"></i>
                        </button>
                    </div>
                </div>

                <!-- Body -->
                <div class="flex flex-col bg-white rounded-b p-3">
                    <!-- Title -->
                    <div class="text-sm font-semibold text-gray-900 hover:underline truncate">
                        Comment faire une bonne impression
                    </div>

                    <!-- Author - Category -->
                    <div class="text-xxs text-gray-400 truncate mt-1">
                        par

                        <!-- Author -->
                        <a class="font-semibold hover:underline"> ACHILLE </a>
                        {{--
                        pour
                        <!-- Category -->
                        <a class="font-semibold hover:underline"> e-commerce </a> --}}
                    </div>

                    <!-- Price -->
                    <div class="text-sm text-gray-600 font-bold mt-4 mb-1">
                        7 000 XFA
                    </div>

                    <!-- Body -->
                    <div class="flex flex-row mt-2">
                        <!-- Detail Column -->
                        <div class="flex flex-col flex-auto">
                            <!-- Rating -->
                            <div class="flex flex-row group">
                                <i class="mdi mdi-star text-xs text-amber-400
                        hover:text-amber-500 transition-all duration-200" title="Worst"></i>

                                <i class="mdi mdi-star text-xs text-amber-400
                        hover:text-amber-500 transition-all duration-200" title="Bad"></i>

                                <i class="mdi mdi-star text-xs text-amber-400
                        hover:text-amber-500 transition-all duration-200" title="Not Bad"></i>

                                <i class="mdi mdi-star text-xs text-amber-400
                        hover:text-amber-500 transition-all duration-200" title="Good"></i>

                                <i class="mdi mdi-star text-xs text-amber-400
                        hover:text-amber-500 transition-all duration-200" title="Awesome"></i>

                                <div class="text-xxs text-gray-400 ml-1 hover:underline">
                                    (45)
                                </div>
                            </div>

                            <!-- Statistic -->
                            <div class="text-xxs text-gray-400 mt-1" title="34k Downlaods in this year">
                                34k Téléchargements
                            </div>
                        </div>

                        <!-- Button Column -->
                        <div class="flex flex-row flex-auto justify-end">
                            <!-- Cart Button -->
                            <a class="flex text-xs border px-3 my-auto py-2 mr-2
                    border-amber-500 group hover:bg-amber-500
                    rounded-xss
                    transition-all duration-200">

                                <!-- Icon -->
                                <i class="mdi mdi-cart-outline text-amber-700
                        group-hover:text-white delay-100"></i>
                            </a>

                            <!-- Preview Link Button -->
                            <a class="flex text-xs border px-3 my-auto py-2
                    border-amber-500 group hover:bg-amber-500
                    rounded-xss
                    transition-all duration-200">

                                <!-- Icon -->
                                <i class="mdi mdi-eye-outline text-amber-700
                        group-hover:text-white delay-100"></i>

                                <!-- Text -->
                                <div class="text-xxs text-amber-700 font-semibold ml-2
                        group-hover:text-white delay-100">
                                    Aperçu en direct
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-base-site>
