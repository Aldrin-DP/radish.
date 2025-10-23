<nav>
    <div class="flex justify-between items-center p-3 pb-1">
        <div class="flex items-center">
            <img 
                class="hidden"
                src="{{ asset('images/logo.png') }}" 
                alt="Radish. logo"
                width="60px"
            >
            <h3 class="text-4xl font-sheppards text-[#E94E63]">
                Ra<span class="text-[#5FB15F]   ">dish.</span>
            </h3>
        </div>
        <div>
            <x-css-menu class="cursor-pointer"/>
            {{-- <x-css-close /> --}}
        </div>
    </div>

    <div class="px-3 py-2 bg-white bg-opacity-50 flex justify-between mt-1 items-center">
        <div class="flex gap-2 items-center">
            <img 
                class="rounded-full"
                src="{{ asset('images/profile.jpg') }}" 
                alt="Radish. logo"
                width="40px"
            >
            <p>Aldrin Pelayo</p>
        </div>
        <div class="flex gap-1 items-center">
            <x-bxs-dish class="w-6 h-6"/>
            <p>Recipes: 4</p>
        </div>
    </div>
    
    <div class="p-3">
        <ul class="cursor-pointer">
            <li class="bg-[#5FB15F] text-white px-4 py-2">Home</li>
            <li class="px-4 py-2 hover:bg-[#68b468]">Recipes</li>
            <li class="px-4 py-2 hover:bg-green-500">Favorites</li>
        </ul>
    </div>

    <div class="bg-white bg-opacity-50 p-3">
        <div class="flex items-center">
            <input 
                class="border border-gray-200 py-1 ps-2 w-full rounded outline-green-500" 
                type="text" 
                placeholder="Search a recipe"
            >
            <x-zondicon-search 
                class="w-6 h-6 text-gray-500 absolute right-0 mr-4" 
            />
        </div>
    </div>
    
    <div class="bg-white bg-opacity-50 p-3">
        <h4 class="mb-2 text-lg text-[#5FB15F]">Recipes</h4>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3">
            <div>
                <p class="text-gray-500 text-xs mb-1">User001</p>
                <img
                    class="rounded" 
                    src="{{ asset('images/beef-brocolli.jpg') }}" alt=""
                >
                <p class="text-sm opacity-90 text-center mt-1">Beef Brocolli</p>
            </div>
            <div>
                <p class="text-gray-500 text-xs mb-1">User002</p>
                <img src="{{ asset('images/oven-roasted-chicken.jpg') }}" alt="">
                <p class="text-sm opacity-90 text-center mt-1">Oven Roasted Chicken</p>
            </div>
            <div>
                <p class="text-gray-500 text-xs mb-1">User003</p>
                <img src="{{ asset('images/Neapolitan Pizza.jpg') }}" alt="">
                <p class="text-sm opacity-90 text-center mt-1">Neapolitan Pizza</p>
            </div>
            <div>
                <p class="text-gray-500 text-xs mb-1">User003</p>
                <img src="{{ asset('images/spinach-chicken.jpg') }}" alt="">
                <p class="text-sm opacity-90 text-center mt-1">Spinach Chicken</p>
            </div>
        </div>
    </div>

    
</nav>