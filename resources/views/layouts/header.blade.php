<header>
    <nav class="bg-black" >
        <div class=" container mx-auto p-1 mr-28 content-center">
            <div class="flex justify-between">
                <div class="flex space-x-4">
                    <div>
                        <a href="{{ route('index') }}"
                            class="brand font-extrabold text-6xl flex items-center py-4 px-2 text-pink-600 ml-20 hover:text-white">Andrés
                            Vargas</a>
                    </div>
                </div>
                <div class=" hidden md:flex items-center space-x-1 mr-52">
                    <a href="{{ route('index') }}" class="py-4 px-2 text-xl text-cyan-100 hover:text-pink-600">Home</a>
                    <a href="#" class="py-4 px-2 text-xl text-cyan-100 hover:text-pink-600">Blog</a>
                    <a href="#" class="py-4 px-2 text-xl text-cyan-100 hover:text-pink-600">Contact</a>
                </div>
                <!--phone menu-->
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button p-6 focus:outline-none">
                        <svg class="w-9 h-9 text-white hover:text-pink-600" x-show="!showMenu" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
    </nav>
</header>
