<footer class="bg-white border-t pt-1">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <section class="pb-4">
            <div class="md:flex md:justify-between">
                <div class="md:mb-0">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="agclass" class="block h-10 w-auto fill-current text-gray-600">

                </div>

                <div class="ml-auto">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h3>
                        <ul>
                            <li class="mb-4">
                                <a href="{{ route('about') }}" class="text-gray-600 hover:underline dark:text-gray-400">
                                    A propos
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pdC') }}" class="text-gray-600 hover:underline dark:text-gray-400">
                                    Termes &amp; conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="flex items-center justify-between pb-4">
            <div>
                © 2022 {{ config('app.name', 'agclass') }} Tous les droits sont réservés.
            </div>
            <ul>
                <li>
                    <a href="https://facebook.com/" target="_bank">
                        <svg class="text-gray-500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--typcn" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M13 10h3v3h-3v7h-3v-7H7v-3h3V8.745c0-1.189.374-2.691 1.118-3.512C11.862 4.41 12.791 4 13.904 4H16v3h-2.1c-.498 0-.9.402-.9.899V10z"></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </section>
    </div>
</footer>
