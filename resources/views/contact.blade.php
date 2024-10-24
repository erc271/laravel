<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Laravel App</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Favicon, other styles, etc. -->
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <form method="POST" action="{{ route('contact.store') }}" class="bg-white p-8 rounded shadow-md w-full max-w-lg">
        @csrf
        <h2 class="text-2xl font-bold mb-6 text-center">Contact Us</h2>

        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-semibold mb-2">Nom :</label>
            <input type="text" name="name" id="name" required class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Votre nom">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-semibold mb-2">Email :</label>
            <input type="email" name="email" id="email" required class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Votre email">
        </div>

        <div class="mb-4">
            <label for="messages" class="block text-gray-700 font-semibold mb-2">Message :</label>
            <textarea name="messages" id="messages" required class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Votre message" rows="5"></textarea>
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition">Envoyer</button>
    </form>

</body>
</html>
