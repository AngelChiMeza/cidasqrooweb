<!-- resources/views/components/editorial-card.blade.php -->
<div class="border rounded-lg p-4 shadow-lg">
    <div class="flex justify-between items-center mb-4">
        <span class="bg-red-900 text-white py-1 px-2 rounded font-bold ">PDF</span>
        <button class="focus:outline-none">
            <svg class="h-6 w-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
    </div>
    <img src="{{ $image }}" alt="{{ $title }}" class="mb-4">
    <h2 class="text-xl font-semibold mb-2">{{ $title }}</h2>
    <p class="text-gray-700 mb-4">Autores: {{ $author }}</p>
    <button class="bg-amber-300 text-red-900 py-2 px-4 rounded font-bold">Me interesa</button>
</div>
