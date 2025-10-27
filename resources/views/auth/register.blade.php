@extends('layouts.app')

@section('content')
    <div class="w-full md:max-w-[500px] md:m-auto border bg-white rounded">
        <div class="text-sm">
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/red logo radish.png') }}" 
                    width="80px"
                    alt="Radish logo">
                <h4 class="text-lg">Register</h4>
            </div>
        </div>

        <form action="/register" method="POST">
            @csrf
            <div class="p-3">
                <div class="mb-2">
                    <label for="" class="text-sm" >First name</label>
                    <input 
                        type="text" 
                        name="firstname"
                        class="border w-full px-3 py-1 rounded text-sm"
                        placeholder="First name"
                    >
                    @error('firstname')
                        <div class="text-sm text-red-400">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="" class="text-sm">Last name</label>
                    <input 
                        type="text" 
                        name="lastname"
                        class="border w-full px-3 py-1 rounded text-sm"
                        placeholder="Last name"
                    >
                    @error('lastname')
                        <div class="text-sm text-red-400">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

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
                        Have an account?
                        <a href="{{ route('login') }}" class="text-blue-500">
                            Log in here
                        </a> 
                    </span>
                    <button class="border border-gray-300 px-7 py-1 rounded-full hover:bg-[#5FB15F] hover:text-white">
                        Register
                    </button>
                </div>
            </div>
        </form>

        
    </div>
@endsection