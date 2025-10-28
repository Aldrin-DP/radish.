<nav x-data="{ open: false }">
    <div class="flex justify-between items-center p-3 pb-1 border-b">
        <div class="flex items-center">
            <img 
                class="hidden"
                src="{{ asset('images/logo.png') }}" 
                alt="Radish. logo"
                width="60px"
            >
            <a href="{{ route('home') }}">
                <h3 class="text-4xl font-sheppards text-[#E94E63]">
                    Ra<span class="text-[#5FB15F]">dish.</span>
                </h3>
            </a>
            
        </div>

        <div>
            <div class="md:hidden" @click="open = !open">
                <x-css-menu x-show="!open" class="cursor-pointer"/>
                <x-css-close x-show="open" class="cursor-pointer"/>
            </div>

            <div class="hidden md:block">
                @guest
                    <a href="{{ route('login') }}" 
                       class="border border-gray-300 px-3 py-1 rounded-full hover:bg-[#5FB15F] hover:text-white hover:border-[#5FB15F] transition-colors duration-300">   
                        Log in
                    </a>
                @endguest
                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button 
                            type="submit"
                            class="border border-gray-300 px-3 py-1 rounded-full hover:bg-[#E94E63] hover:text-white hover:border-[#E94E63] transition-colors duration-300"
                        >
                            Log out
                        </button>
                    </form>
                @endauth
            </div>
        </div>
    </div>

    <div class="md:flex justify-between flex-row-reverse bg-white bg-opacity-50">
        @auth
        <div class="px-3 py-2 bg-white bg-opacity-50 flex justify-between items-center">
            <div class="flex gap-2 items-center">
                <img 
                    class="rounded-full"
                    src="{{ asset('images/profile.jpg') }}" 
                    alt="Profile photo"
                    width="40px"
                >
                <p>Aldrin Pelayo</p>
            </div>
            <div class="flex gap-1 items-center md:hidden">
                <x-bxs-dish class="w-6 h-6"/>
                <p>Recipes: 4</p>
            </div>
        </div>    
        @endauth

        <div 
            class="p-3 flex-grow md:block" 
            :class="{ 'hidden': !open, 'block': open }"
        >
            <ul class="cursor-pointer border md:flex md:border-none">
                <li class="{{ Route::is('home') ? 'bg-[#5FB15F] text-white' : 'hover:bg-[#7dc97d]' }} hover:text-white transition-all duration-300">
                    <a  class="px-4 py-1 flex"
                        href="{{ route('home') }}">
                        Home
                    </a>                
                </li>
                @auth
                    <li class=" {{ Route::is('recipes*') ? 'bg-[#5FB15F] text-white' : 'hover:bg-[#7dc97d]' }} hover:text-white transition-all duration-300">
                        <a 
                            class="px-4 py-1 flex"
                            href="{{ route('recipes.index') }}">
                            Recipes
                        </a>
                    </li>
                @endauth
                <li class="px-4 py-1 hover:bg-[#7dc97d]">Favorites</li>                    
                <li class="px-4 py-1 hover:bg-[#7dc97d] md:hidden">
                    @guest
                        <a href="{{ route('login') }}" 
                           class="md:border border-gray-300 md:px-3 md:py-1 md:rounded-full">
                            Log in
                        </a>    
                    @endguest
                    @auth
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="">
                                Log out
                            </button>
                        </form>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>
