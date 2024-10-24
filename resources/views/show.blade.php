<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>{{ $bear->name }}</title>
</head>
<body>
    <p class="font-bold text-xl ml-2">{{ $bear->name }}</p> <br>
    <p><img class="w-60 h-60 ml-2" src="{{ asset($bear->image) }}" alt="{{ $bear->name }}" /></p> 
    <p class="font-bold text-sm ml-2">Origin: {{ $bear->origin }}</p>
    <p class="font-bold text-sm ml-2">Fact: {{ $bear->fact }}</p>
    <br> <br>
    <a class="bg-green-600 hover:bg-green-800 py-1 px-3 rounded-full ml-2" href="{{ route('bears.index') }}">Back to bear list</a> 
</body>
</html>
