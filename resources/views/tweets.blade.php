@extends('layouts.app')

@section('title')
    Los mejores Tweets 💕
@endsection

@section('principal')
    @if (session('success'))
        <p class="text-green-400 font-semibold mb-10 inline-flex py-2 px-5 rounded-lg bg-slate-700">{{ session('success') }}</p>
    @endif
    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($tweets as $tweet)
        <div class="rounded-lg bg-slate-800 overflow-hidden">
            <div class="p-2 bg-slate-700 font-semibold flex items-center justify-center gap-3">
                <p>{{ $tweet->title }}</p>
                <a href="{{ route('tweet.edit', $tweet->id) }}">✏️</a>
                <form action="{{ route('tweet.destroy', $tweet->id) }}" method="POST" onsubmit="return confirm('Estas seguro de eliminar este tweet?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">🗑️</button>
                </form>
            </div>
            <div class="p-5">
                <p>{{ $tweet->description }}</p>
                <div class="mt-5 border-t border-t-gray-700 pt-2 flex items-center justify-between">
                    <p class="text-sm">{{ $tweet->updated_at->format('j M Y') }}</p>
                    <form action="{{ route('like.store', $tweet->id) }}" method="POST">
                        @csrf
                        <div class="flex items-center gap-1">
                            <button type="submit">❤️</button>
                            <p>{{ $tweet->like()->count() }}</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection