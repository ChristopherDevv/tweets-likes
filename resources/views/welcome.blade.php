@extends('layouts.app')

@section('title')
Comparte tus ideas ✨
@endsection

@section('principal')
    <div class="w-full md:w-1/3 bg-slate-800 rounded-lg px-5 py-7 text-gray-700">
        <form action="{{ route('tweet.store') }}" method="POST">
            @csrf
            <div>
                <input 
                    type="text"
                    name="title"
                    class="w-full p-2 rounded-md"
                    placeholder="Titulo del Tweet"
                    value="{{ old('title') }}"
                >
            </div>
            @error('title')
                <p class="text-center text-red-500 font-semibold mt-2">{{ $message }}</p>
            @enderror
            <div class="mt-5">
                <textarea 
                    name="description" 
                    class="w-full p-2 rounded-md h-20"
                    placeholder="Descripcion del Tweet"
                >{{ old('description') }}</textarea>
            </div>
            @error('description')
                 <p class="text-center text-red-500 font-semibold mt-2">{{ $message }}</p>
            @enderror

            <div class="mt-5">
                <input 
                    type="submit"
                    value="Registrar 📅"
                    class="px-7 py-2 font-semibold bg-purple-600 hover:bg-purple-700 transition-colors rounded-lg inline-flex text-white cursor-pointer"
                >
            </div>
        </form>
    </div>
@endsection