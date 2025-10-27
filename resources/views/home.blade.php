@extends('layouts.app')

@section('content')
    <div class="flex relative">
        <input 
            type="text" 
            class="border text-sm w-full rounded px-3 py-1 outline-none"
            placeholder="Search a recipe"
        >
        <div class="p-3 absolute right-0 top-1">
            <x-zondicon-search class="w-5 h-5 absolute right-1 top-0" />
        </div>
        
        
    </div>
@endsection


