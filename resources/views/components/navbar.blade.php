<header class="bg-white fixed-top">
    <div class="container mx-auto px-4 py-6 flex justify-between items-center">
        <div class="flex items-center">
            <a href="/"><img class="h-8 w-auto mr-4" src="{{ asset('img/LOGO AKAR PRINTING.png') }}" alt=""></a>
            <a href="/"><h1 class="md:text-2xl font-bold text-blue-600">Akar Printing</h1></a>
            <nav class="hidden md:flex md:ml-10 flex-grow justify-center">
                <ul class="flex space-x-6">
                    <li>
                        <a href="#" class="py-2 text-gray-700 hover:text-blue-500">Produk</a>
                    </li>
                    <li>
                        <a href="#" class="py-2 text-gray-700 hover:text-blue-500">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="#" class="py-2 text-gray-700 hover:text-blue-500">Kontak</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="flex items-center flex flex-wrap items-center justify-between">
            <div class="relative">
                <input type="text" placeholder="Cari produk..." class="border border-gray-300 rounded-full py-2 px-4 focus:outline-none focus:ring focus:ring-blue-500">
                <button class="absolute right-2 top-2 text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M16.5 11a5.5 5.5 0 10-11 0 5.5 5.5 0 0011 0z" />
                    </svg>
                </button>
            </div>
        </div>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false" id="menu-toggle">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
    <nav class="md:hidden bg-white shadow-md hidden" id="mobile-menu">
        <ul class="flex flex-col space-y-2 p-4">
            <li>
                <a href="#" class="text-gray-700 hover:text-blue-500">Home</a>
            </li>
            <li>
                <a href="#" class="text-gray-700 hover:text-blue-500">Produk</a>
            </li>
            <li>
                <a href="#" class="text-gray-700 hover:text-blue-500">Tentang Kami</a>
            </li>
            <li>
                <a href="#" class="text-gray-700 hover:text-blue-500">Kontak</a>
            </li>
        </ul>
    </nav>
</header>