@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        Par <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Créé sur {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>
    <div class="w-full sm:grid grid-cols-2 gap-20 mx-auto py-8 border-b border-gray-200">
        <img class="object-cover w-full h-auto" src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}">
    </div>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>
    
    <!-- Boutons de partage -->
    <div class="flex items-center space-x-4">
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:text-blue-700">Partager sur Facebook</a>
        <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:text-blue-700">Partager sur Twitter</a>
        <a href="whatsapp://send?text={{ urlencode($post->title . ': ' . url()->current()) }}" class="text-green-500 hover:text-green-700">Partager sur WhatsApp</a>
        <a href="https://www.pinterest.com/pin/create/button/?url={{ urlencode(url()->current()) }}&media={{ urlencode(asset('images/' . $post->image_path)) }}&description={{ urlencode($post->title) }}" target="_blank" rel="noopener noreferrer" class="text-red-500 hover:text-red-700">Épingler sur Pinterest</a>
        <button onclick="copyToClipboard('{{ url()->current() }}')" class="text-purple-500 hover:text-purple-700 cursor-pointer">Copier le lien</button>
    </div>
</div>

<script>
    function copyToClipboard(text) {
        var tempInput = document.createElement('input');
        tempInput.value = text;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand('copy');
        document.body.removeChild(tempInput);
        alert('Lien copié dans le presse-papier !');
    }
</script>

@endsection 