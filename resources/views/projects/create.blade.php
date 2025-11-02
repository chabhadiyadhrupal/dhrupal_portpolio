<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Project</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen text-gray-900">
    <header class="bg-white shadow-sm">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">Add New Project</h1>
            <a href="{{ route('projects.index') }}" class="text-blue-600 hover:underline">← Back to Projects</a>
        </div>
    </header>

    <main class="max-w-3xl mx-auto px-6 py-10">
        <div class="bg-white p-8 rounded-2xl shadow">
            <form action="{{ route('projects.store') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="title" class="block text-gray-700 font-semibold mb-2">Project Title</label>
                    <input type="text" id="title" name="title" class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <div class="mb-5">
                    <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
                    <textarea id="description" name="description" rows="5" class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required></textarea>
                </div>

                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg">
                    Save Project
                </button>
            </form>
        </div>
    </main>
</body>
</html>
