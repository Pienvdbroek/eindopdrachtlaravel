<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Edit Bear</title>
</head>
<body class="bg-green-50">
<p class="font-bold text-xl ml-2">Edit Bear</p> <br>

<form class="ml-2" method="POST" action="{{ route('bears.update', $bear->id) }}" enctype="multipart/form-data"> <!-- Vergeet niet enctype toe te voegen voor bestand uploads -->
    @csrf
    @method('PUT') <!-- Gebruik PUT voor het updaten van bestaande gegevens -->

    <label class="font-bold text-md" for="bear_name">Bear Name:</label>
    <input class="border border-black-4" type="text" id="bear_name" name="bear_name" value="{{ $bear->name }}" required>
    <br><br>

    <label class="font-bold text-md" for="origin_name">Origin:</label>
    <input class="border border-black-4" type="text" id="origin_name" name="origin_name" value="{{ $bear->origin }}" required>
    <br><br>

    <label class="font-bold text-md" for="fact_name">Fact:</label> <!-- Voeg fact_name toe -->
    <input class="border border-black-4" type="text" id="fact_name" name="fact_name" value="{{ $bear->fact }}" required>
    <br><br>

    <label class="font-bold text-md" for="image_name">Image:</label> <!-- Voeg image_name toe -->
    <input type="file" id="image_name" name="image_name" accept="image/*"> <!-- Accept is optioneel, gebruik het alleen als je een nieuwe afbeelding wilt -->
    <br><br>

    <button class="bg-green-300 hover:bg-green-500 py-1 px-3 rounded-full" type="submit">Confirm changes</button> 
</form>
<br>
<!-- Verwijderingsformulier -->
<form method="POST" action="{{ route('bears.destroy', $bear->id) }}">
    @csrf
    @method('DELETE') <!-- DELETE-methode om de beer te verwijderen -->
    
    <button class="bg-green-300 hover:bg-green-500 py-1 px-3 rounded-full ml-2" type="submit" onclick="return confirm('Are you sure you want to delete this bear?')">Delete bear</button>
</form>

<br><br>
<a class="bg-green-600 hover:bg-green-800 py-1 px-3 rounded-full ml-2" href="{{ route('bears.index') }}">Back to bear list</a> <!-- Terug naar lijst van beren -->
</body>
</html>
