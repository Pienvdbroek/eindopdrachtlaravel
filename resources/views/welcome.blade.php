<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-green-50">
    <div class=" flex flex-row p-6 space-x-5">
@foreach ($bears as $bear)
    <div class="border-black border-2 w-[25vw] h-[62vh] ">
        <p class="text-xl pl-2"><a href="{{ route('bears.show', $bear->id) }}"> {{ $bear->name }} </a></p>
        <a href="{{ route('bears.show', $bear->id) }}">
            <img src="{{ asset($bear->image) }}" class="w-[20vw] h-[40vh] pl-2" alt="Bear Image"/>
        </a>
        <p class="pl-2"> Origin: {{ $bear->origin }} </p>
        <p class="pl-2"> Fact: {{ $bear->fact }} </p>
        <button  class="bg-green-300 hover:bg-green-500 py-1 px-3 rounded-full ml-2 mt-4"><a href="{{ route('bears.edit', $bear->id) }}">Edit Bear</a></button>
    </div>
@endforeach
</div>
<a href="{{ route('bears.create') }}">
    <button class="ml-7 bg-green-600 hover:bg-green-800 py-1 px-3 rounded-full">Create Bear</button>
</a>
</body>
</html>