<x-base-site>
    <x-slot:title>
        acceuil
    </x-slot:title>
    {{-- <x-slot:p>
        py-4 px-4 sm:px-6 lg:px-8
    </x-slot:p> --}}

    <section class="container max-w-lg px-4 py-32 mx-auto text-left md:max-w-none md:text-center">
        <h1 class="text-5xl font-extrabold leading-10 tracking-tight text-left text-gray-900 md:text-center sm:leading-none md:text-6xl lg:text-7xl">
            <span class="inline md:block">Pour chaque besoin, </span>
            <span class="relative mt-2 text-transparent bg-clip-text bg-gradient-to-br from-indigo-600 to-indigo-500 md:inline-block">une formation associée</span>
        </h1>
        <div class="mx-auto mt-5 text-gray-500 md:mt-12 md:max-w-lg md:text-center lg:text-lg">
            un suivi de votre performance en continue
        </div>
        <div class="flex flex-col items-center mt-12 text-center">
            <span class="relative inline-flex w-full md:w-auto">
                <a href="{{ route('catalogue.index') }}" class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-bold leading-6 text-white bg-indigo-600 border border-transparent rounded-full md:w-auto hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                    visitez notre catalogue
                </a>
                {{-- <span class="absolute top-0 right-0 px-2 py-1 -mt-3 -mr-6 text-xs font-medium leading-tight text-white bg-green-400 rounded-full">
                    profitez de nos formations
                </span> --}}
            </span>
            <a href="{{ route('formation.index') }}" class="mt-3 text-sm text-indigo-500">
                regardez les formations
            </a>
        </div>
    </section>

    <section class="pb-16" style="font-family: 'Lato', sans-serif">
        <dh-component>
            <div class="container mx-auto pt-16">
                <div class="w-11/12 xl:w-2/3 lg:w-2/3 md:w-2/3 mx-auto sm:mb-10 mb-16">
                    <h1 tabindex="0" class="focus:outline-none xl:text-5xl md:text-3xl text-xl text-center text-gray-800 font-extrabold mb-5 pt-4">Nos Partenariats</h1>
                    <p tabindex="0" class="focus:outline-none text-base md:text-lg lg:text-xl text-center text-gray-600 font-normal xl:w-10/12 xl:mx-auto">
                        Notre succès est venue de notre engagement avec les partenaires qui nous ont permis de développer notre expertise dans le domaine de la formation.
                    </p>
                </div>
                <div class="xl:py-16 lg:py-16 md:py-16 sm:py-16 px-15 flex flex-wrap">
                    <div class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-b lg:border-b xl:border-r lg:border-r :border-r border-gray-200 xl:pb-10 pb-16 items-center">
                        <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/adidas-dark.png" alt="Adidas" role="img" />
                    </div>
                    <div class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-b lg:border-b xl:border-r lg:border-r border-gray-200 xl:pb-10 pb-16 items-center">
                        <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/channel-dark.png" alt="Chanel" role="img" />
                    </div>
                    <div class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-b lg:border-b border-gray-200 xl:pb-10 pb-16 pt-4 items-center">
                        <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/nike-dark.png" alt="Nike" role="img" />
                    </div>
                    <div class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center lg:border-b xl:border-b lg:border-l xl:border-l border-gray-200 xl:pb-10 pb-16 items-center">
                        <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/toyota-dark.png" alt="Toyota" role="img" />
                    </div>
                    <div class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-r lg:border-r border-gray-200 xl:pt-10 items-center">
                        <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/gs1-dark.png" alt="GS1" role="img" />
                    </div>
                    <div class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-r lg:border-r border-gray-200 xl:pt-10 items-center">
                        <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/berry-dark.png" alt="BlackBerry" role="img" />
                    </div>
                    <div class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:pt-10 lg:pt-10 md:pt-2 pt-16">
                        <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/min-dark.png" alt="Mini" role="img" />
                    </div>
                    <div class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-l lg:border-l border-gray-200 xl:pt-10 lg:pt-10 md:pt-2 pt-16">
                        <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/honda-dark.png" alt="Honda" role="img" />
                    </div>
                </div>
            </div>
        </dh-component>
    </section>

    <section>
        <h3 class="text-center text-gray-700 text-3xl font-medium">NOUS AVONS TOUT CE DONT VOUS AVEZ BESOIN</h3>

        <div class="mt-4">
            <div class="flex flex-wrap -mx-6">
                <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                    <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                        <div class="p-3 rounded-full bg-indigo-600 bg-opacity-75">
                            <svg class="h-8 w-8 text-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--fxemoji" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512">
                                <path fill="#E5E4DF" d="M431.739 511.311H99.726c-7.953 0-14.4-6.447-14.4-14.4V21.333c0-7.953 6.447-14.4 14.4-14.4h332.013c7.953 0 14.4 6.447 14.4 14.4v475.579c0 7.952-6.447 14.399-14.4 14.399z"></path>
                                <path fill="#2B3B47" d="M349.019 385.733c0 45.998-37.289 53.348-83.287 53.348s-83.287-7.35-83.287-53.348s37.289-83.287 83.287-83.287s83.287 37.289 83.287 83.287z"></path>
                                <path fill="#597B91" d="M408.825 152.722c-1.158-.343-2.874-.947-5.11-1.525c-2.231-.506-5.012-1.286-8.266-1.743c-1.63-.256-3.402-.587-5.263-.724l-2.9-.269l-1.521-.132l-1.547-.054c-4.193-.169-8.844-.127-13.788.364l-3.788.395c-1.27.176-2.549.393-3.862.603c-2.65.385-5.272 1.006-8.016 1.622c-1.387.289-2.707.706-4.091 1.078c-1.363.397-2.791.757-4.155 1.222c-2.74.917-5.59 1.85-8.345 2.99c-5.614 2.176-11.149 4.857-16.595 7.865c-5.475 2.99-10.687 6.436-15.779 10.081c-5.045 3.677-9.828 7.651-14.344 11.78c-4.448 4.182-8.672 8.479-12.45 12.941c-3.793 4.455-7.245 8.968-10.243 13.548c-3.04 4.5-5.599 9.155-7.774 13.518a122.454 122.454 0 0 0-2.024 4.464a86.422 86.422 0 0 0-.704-1.645c-1.832-4.008-3.993-8.324-6.612-12.567c-2.573-4.309-5.573-8.614-8.894-12.904c-3.306-4.298-7.043-8.485-10.995-12.599c-4.021-4.062-8.302-8.015-12.85-11.714c-4.593-3.665-9.314-7.177-14.311-10.268c-4.969-3.109-10.045-5.934-15.228-8.286c-2.541-1.229-5.182-2.258-7.725-3.281c-1.266-.519-2.595-.931-3.865-1.385c-1.29-.428-2.52-.905-3.817-1.252c-2.565-.735-5.023-1.482-7.517-1.996c-1.235-.275-2.441-.558-3.64-.801l-3.583-.598c-4.685-.766-9.127-1.091-13.161-1.197l-1.489-.049l-1.467.03l-2.805.069c-1.804.006-3.528.211-5.119.347c-3.176.216-5.913.781-8.118 1.109c-2.211.4-3.918.863-5.073 1.11l-1.762.412v1.386l1.719.475c1.114.331 2.748.715 4.771 1.385c2.015.741 4.45 1.467 7.111 2.693c1.333.585 2.747 1.138 4.177 1.915l2.195 1.123l1.124.577l1.122.662c3.018 1.748 6.15 3.762 9.219 6.153l2.311 1.803l2.261 1.975c1.529 1.279 2.97 2.772 4.433 4.204c.743.694 1.42 1.518 2.129 2.274c.694.785 1.418 1.51 2.081 2.34c1.336 1.643 2.69 3.23 3.923 4.98c2.542 3.377 4.813 7.027 6.868 10.712c2.081 3.664 3.806 7.529 5.366 11.273c1.521 3.787 2.751 7.568 3.768 11.191c.94 3.661 1.721 7.145 2.165 10.414c.458 3.257.719 6.264.713 8.893c.07 2.649-.186 4.875-.431 6.697c-.155.894-.361 1.654-.499 2.368l-.589 1.681c-.275.068-.499.012-.656-.002l-.111-.021c-.038.133-.076.359-.112.522l-.195.957l-.358 1.755l80.326-2.752l-.007-.024l81.769 2.801l-.366-1.755l-.2-.957c-.036-.162-.076-.39-.114-.521l-.114.033c-.162.031-.392.105-.675.057l-.612-1.646c-.147-.703-.361-1.452-.526-2.335c-.265-1.802-.543-4.009-.497-6.643c-.03-2.614.205-5.609.637-8.857c.418-3.26 1.171-6.737 2.083-10.395c.989-3.619 2.19-7.399 3.683-11.187c1.532-3.745 3.23-7.615 5.284-11.284c2.029-3.691 4.273-7.349 6.791-10.736c1.221-1.756 2.564-3.347 3.888-4.997c.658-.832 1.377-1.56 2.065-2.349c.703-.76 1.376-1.587 2.114-2.284c1.453-1.439 2.884-2.939 4.405-4.225l2.249-1.986l2.299-1.814c3.054-2.407 6.174-4.437 9.183-6.2l1.118-.668l1.121-.582l2.19-1.134c1.427-.784 2.838-1.345 4.169-1.937c2.656-1.24 5.088-1.978 7.102-2.728c2.021-.68 3.654-1.072 4.768-1.408l1.719-.483v-1.386c.004-.003-.61-.198-1.761-.562z"></path>
                                <path fill="#2B3B47" d="M317.858 223.976c-.11-8.516-.845-18.451-2.329-29.095c-.746-5.322-1.643-10.822-2.76-16.41a349.14 349.14 0 0 0-3.8-16.943c-1.442-5.677-2.997-11.354-4.752-16.943a264.217 264.217 0 0 0-5.74-16.41c-4.108-10.645-8.769-20.58-13.388-29.095c-1.146-2.129-2.349-4.169-3.436-6.11c-1.126-1.94-2.276-3.781-3.312-5.511l-3.122-4.845l-.076-.112c3.469-2.768 5.698-7.025 5.698-11.808c0-8.344-6.764-15.109-15.109-15.109c-8.344 0-15.109 6.764-15.109 15.109c0 4.783 2.229 9.039 5.698 11.808l-.076.112l-3.122 4.845c-1.036 1.73-2.186 3.57-3.312 5.511c-1.087 1.94-2.29 3.981-3.436 6.11c-4.619 8.516-9.28 18.451-13.388 29.095a264.217 264.217 0 0 0-5.74 16.41c-1.755 5.588-3.309 11.266-4.752 16.943a348.874 348.874 0 0 0-3.8 16.943c-1.117 5.588-2.014 11.088-2.76 16.41c-1.484 10.645-2.219 20.58-2.329 29.095c-.126 8.516.344 15.612.944 20.58c.303 2.484.62 4.435.869 5.766c.247 1.331.426 2.04.426 2.04h99.774s.179-.71.426-2.04c.249-1.331.566-3.282.869-5.766c.6-4.968 1.071-12.064.944-20.58z"></path>
                                <path fill="#FFD3B6" d="M348.751 272.809c.176-2.428.268-4.882.268-7.36c0-50.582-37.289-73.855-83.287-73.855s-83.287 23.273-83.287 73.855c0 2.49.094 4.956.271 7.396c-5.935 1.654-10.296 7.086-10.296 13.548c0 7.774 6.302 14.077 14.077 14.077c.747 0 1.475-.075 2.19-.187c8.484 22.667 24.997 40.765 45.648 50.015c1.827 15.724 15.183 27.931 31.397 27.931s29.569-12.207 31.397-27.931c20.657-9.253 37.174-27.358 45.656-50.035c.758.126 1.531.208 2.325.208c7.774 0 14.077-6.302 14.077-14.077c-.001-6.514-4.43-11.978-10.436-13.585z"></path>
                                <path fill="#2B3B47" d="M299.48 312.97a5.369 5.369 0 0 0-4.663-2.704h-58.171a5.37 5.37 0 0 0-4.663 2.704a5.363 5.363 0 0 0 .032 5.398a38.149 38.149 0 0 0 15.058 14.433c5.012-4.07 11.495-3.934 18.659-3.934s13.65-.137 18.66 3.934a38.153 38.153 0 0 0 15.057-14.433a5.363 5.363 0 0 0 .031-5.398z"></path>
                                <path fill="#FF473E" d="M247.073 332.801c5.588 2.967 11.949 4.591 18.664 4.591c6.71 0 13.068-1.625 18.654-4.591c-5.01-4.071-11.495-3.934-18.66-3.934c-7.163 0-13.646-.136-18.658 3.934z"></path>
                                <path fill="#2B3B47" d="M142.266 153.974c0 8.344-6.764 15.109-15.109 15.109s-15.109-6.764-15.109-15.109s6.764-15.109 15.109-15.109s15.109 6.764 15.109 15.109zm262.041-15.109c-8.344 0-15.109 6.764-15.109 15.109s6.764 15.109 15.109 15.109c8.344 0 15.109-6.764 15.109-15.109s-6.765-15.109-15.109-15.109zM230.406 244.416c-5.731 0-10.377 4.646-10.377 10.377v15.886c0 5.731 4.646 10.377 10.377 10.377c5.731 0 10.377-4.646 10.377-10.377v-15.886c0-5.731-4.646-10.377-10.377-10.377zm71.376 0c-5.731 0-10.377 4.646-10.377 10.377v15.886c0 5.731 4.646 10.377 10.377 10.377c5.731 0 10.377-4.646 10.377-10.377v-15.886c0-5.731-4.646-10.377-10.377-10.377z"></path>
                            </svg>
                        </div>

                        <div class="mx-5">
                            <h4 class="text-2xl font-semibold text-gray-700">+8,282</h4>
                            <div class="text-gray-500">astuces</div>
                        </div>
                    </div>
                </div>

                <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                    <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                        <div class="p-3 rounded-full bg-orange-600 bg-opacity-75">
                            <svg class="h-8 w-8 text-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--dashicons" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                <path fill="currentColor" d="M10 10L2.54 7.02L3 18H1l.48-11.41L0 6l10-4l10 4zm0-5c-.55 0-1 .22-1 .5s.45.5 1 .5s1-.22 1-.5s-.45-.5-1-.5zm0 6l5.57-2.23c.71.94 1.2 2.07 1.36 3.3c-.3-.04-.61-.07-.93-.07c-2.55 0-4.78 1.37-6 3.41A6.986 6.986 0 0 0 4 12c-.32 0-.63.03-.93.07c.16-1.23.65-2.36 1.36-3.3z"></path>
                            </svg>
                        </div>

                        <div class="mx-5">
                            <h4 class="text-2xl font-semibold text-gray-700">+200,521</h4>
                            <div class="text-gray-500">Formations</div>
                        </div>
                    </div>
                </div>

                <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                    <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                        <div class="p-3 rounded-full bg-pink-600 bg-opacity-75">
                            <svg class="h-8 w-8 text-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor" d="m19 2l-5 4.5v11l5-4.5V2M6.5 5C4.55 5 2.45 5.4 1 6.5v14.66c0 .25.25.5.5.5c.1 0 .15-.07.25-.07c1.35-.65 3.3-1.09 4.75-1.09c1.95 0 4.05.4 5.5 1.5c1.35-.85 3.8-1.5 5.5-1.5c1.65 0 3.35.31 4.75 1.06c.1.05.15.03.25.03c.25 0 .5-.25.5-.5V6.5c-.6-.45-1.25-.75-2-1V19c-1.1-.35-2.3-.5-3.5-.5c-1.7 0-4.15.65-5.5 1.5V6.5C10.55 5.4 8.45 5 6.5 5Z"></path>
                            </svg>
                        </div>

                        <div class="mx-5">
                            <h4 class="text-2xl font-semibold text-gray-700">+215,542</h4>
                            <div class="text-gray-500">Livres</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-blueGray-700 bg-white mt-20">
        <div class="container flex flex-col items-center px-5 py-16 mx-auto md:flex-row lg:px-28">
            <div class="flex flex-col items-start mb-16 text-left lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 md:mb-0">
                <h1 class="mb-8 text-2xl font-black tracking-tighter text-black md:text-5xl title-font">
                    Abonnez-vous
                </h1>
                <p class="mb-8 text-base leading-relaxed text-left text-blueGray-600 ">
                    Après création de <strong>votre compte</strong>,
                    vous avez un statut abonnée et vous disposez de plusieurs options de pack auquel vous pouvez souscrire
                    <strong>(statut par défaut).</strong>
                    Il est donc nécessaire de remplir toutes les informations demandées afin qu'on puisse mettre à votre disposition ce dont vous avez besoin pour votre apprentissage. Chaque abonnée a la possibilité d'accéder aux formations du pack associé à sa formule d’abonnement. Toutefois, notre catalogue reste toujours disponible pour vous permettre de rajouter à votre panier les formations qui vous intéresseraient
                    <strong>(accès payant)</strong>
                    et des astuces
                    <strong>(accès gratuit).</strong>
                </p>
                <div class="flex flex-col justify-center lg:flex-row">
                    <button class="flex items-center px-6 py-2 mt-auto font-semibold text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-lg hover:bg-blue-700 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                        connectez-vous
                    </button>
                    <p class="mt-2 text-sm text-left text-blueGray-600 md:ml-6 md:mt-0">
                        si vous n'avez pas de compte
                        <br class="hidden lg:block">
                        <a href="#" class="inline-flex items-center font-semibold text-blue-600 md:mb-2 lg:mb-0 hover:text-black " title="read more">
                            créer un compte
                        </a>
                    </p>
                </div>
            </div>
            <div class="w-full lg:w-1/3 lg:max-w-lg md:w-1/2">
                <img class="object-cover object-center rounded-lg " alt="hero" src="https://dummyimage.com/720x600/F3F4F7/8693ac">
            </div>
        </div>
    </section>

    <section class="text-blueGray-700 bg-white mt-20">
        <div class="container flex flex-col items-center px-5 py-16 mx-auto md:flex-row-reverse lg:px-28">
            <div class="flex flex-col items-start mb-16 text-left lg:flex-grow md:w-1/2 lg:pr-24 md:pl-16 md:mb-0">

                <h1 class="mb-8 text-2xl font-black tracking-tighter text-black md:text-5xl title-font">
                    Assistance à l’emploi
                </h1>
                <p class="mb-8 text-base leading-relaxed text-left text-blueGray-600 ">
                    Les étudiants en fin de cycle ont la possibilité de s'enregistrer sur la plateforme. Ceci facilitera leur préparation à l’emploi. Avec le temps, les étudiants pourront continuer les formations sous d’autre formule d’abonnement selon leur ambitions personnelles ou professionnels.<br>
                    Cette formule d’assistance facilitera l’incubation et la prise en charge des futurs travailleurs dans le monde professionnel.
                </p>
            </div>
            <div class="w-full lg:w-1/3 lg:max-w-lg md:w-1/2">
                <img class="object-cover object-center rounded-lg " alt="hero" src="https://dummyimage.com/720x600/F3F4F7/8693ac">
            </div>
        </div>
    </section>

    <x-slot:script>

    </x-slot:script>
</x-base-site>
