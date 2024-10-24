<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Create Bears</title>
</head>
<body class="bg-green-50">
    <p class="font-bold text-xl ml-2">Add new bear</p> <br>
    <form class="ml-2" method="POST" action="{{ route('bears.store') }}">
        @csrf
        <label class="font-bold text-md" for="bear_name">Bear Name:</label>
        <input class="border border-black-4" type="text" id="bear_name" name="bear_name" required>
        <br><br>
        <label class="font-bold text-md" for="origin_name">Origin:</label>
        <input class="border border-black-4" type="text" id="origin_name" name="origin_name" required>
        <br><br>
        <label class="font-bold text-md" for="fact_name">Fact:</label>
        <input class="border border-black-4" type="text" id="fact_name" name="fact_name" required>
        <br><br>
        <label class="font-bold text-md" for="image_name">Image URL:</label>
        <input type="file" id="image_name" name="image_name" accept="image/*">
        <br><br>
        <button class="bg-green-300 hover:bg-green-500 py-1 px-3 rounded-full" type="submit">Add Bear</button>
    </form>
    <br> <br>
    <a class="bg-green-600 hover:bg-green-800 py-1 px-3 rounded-full ml-2" href="{{ route('bears.index') }}">Back to bear list</a> <!-- Terug naar lijst van beren -->
</body>
</html>
