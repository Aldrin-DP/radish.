@extends('layouts.app')

@section('content')
    <div class="w-full md:max-w-[500px] md:m-auto border bg-white rounded">
        <div class="text-sm">
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/red logo radish.png') }}" 
                    width="80px"
                    alt="Radish logo">
                <h4 class="text-lg">Log in</h4>
            </div>
        </div>

        <form action="/login" method="POST">
            @csrf
            <div class="p-3">
                <div class="mb-2">
                    <label for="" class="text-sm">Email Address</label>
                    <input 
                        type="email" 
                        name="email"
                        class="border w-full px-3 py-1 rounded text-sm"
                        placeholder="Email address"
                    >
                    @error('email')
                        <div class="text-sm text-red-400">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="" class="text-sm">Password</label>
                    <input 
                        type="password" 
                        name="password"
                        class="border w-full px-3 py-1 rounded text-sm"
                        placeholder="Password"
                    >
                    @error('email')
                        <div class="text-sm text-red-400">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="flex justify-between items-center">
                    <span class="text-sm">
                        No account yet?
                        <a href="{{ route('register') }}" class="text-blue-500">
                            Register here
                        </a> 
                    </span>
                    <button class="border border-gray-300 px-7 py-1 rounded-full hover:bg-[#5FB15F] hover:text-white">
                        Log in
                    </button>
                </div>
            </div>
        </form>

        
    </div>
@endsection