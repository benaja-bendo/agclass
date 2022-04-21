<x-base-site>
    <x-slot:title>
        profile
    </x-slot:title>
    <x-slot:p></x-slot:p>
    <section class="h-48 sm:h-72 2xl:h-80 bg-gradient-to-r from-teal-300 via-teal-400 to-teal-500"></section>
    <section class="container px-4 py-10 mx-auto -mt-28">
        <div class="flex flex-col items-center">
            <img src="https://picsum.photos/200/300" alt="benaja-bendo" class="object-cover w-32 h-32  border-4  rounded-lg bg-gray-900 border-gray-900">
            <div class="flex flex-col items-center mt-4">
                <h3 class="text-xl font-semibold text-center text-gray-800 sm:text-3xl">{{ Auth::user()->name }}</h3>
                <h5 class="text-lg text-center text-gray-300">{{ Auth::user()->email }}</h5>
                {{-- <div class="flex flex-col items-center mt-2 sm:flex-row sm:space-x-6">
                    <p class=" text-gray-400"><span class="font-bold">0</span> Components</p>
                    <p class="mt-3 text-center  text-gray-400 sm:mt-0">Member Since 1 year ago</p>
                </div> --}}
                <div class="hidden mt-4 sm:space-y-0 sm:flex sm:items-center sm:space-x-3">
                    <a href="#" class="block px-4 py-2 text-sm text-center  transition-colors duration-300 transform border rounded-lg text-gray-200 border-gray-200  hover:bg-gray-700 focus:outline-none">
                        modifier Profile
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-4 space-y-2 sm:hidden">
            <a href="#" class="block px-4 py-2 text-sm text-center  transition-colors duration-300 transform border rounded-lg text-gray-200 border-gray-200 hover:bg-gray-700 focus:outline-none">
                modifier Profile
            </a>
        </div>
        <div class="grid gap-8 mt-16 md:grid-cols-2 lg:grid-cols-3"></div>
    </section>
</x-base-site>
