
<!-- resources/views/components/news-card.blade.php -->
<div class="border rounded-lg p-4 shadow-lg flex flex-col h-full">
    <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-32 object-cover mb-4"> <!-- Ajuste del tamaño de la imagen -->
    <h2 class="text-xl font-semibold mb-2">{{ $title }}</h2>
    <p class="text-gray-700 mb-4">{{ $description }}</p>
</div>
