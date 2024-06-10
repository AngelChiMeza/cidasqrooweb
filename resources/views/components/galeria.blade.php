<div x-data="{ open: false, imageUrl: '' }">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach ($images as $image)
            <div class="relative">
                <img @click="open = true; imageUrl = '{{ $image }}'" src="{{ $image }}" alt="Galería" class="w-full h-auto rounded-lg shadow-lg cursor-pointer">
            </div>
        @endforeach
    </div>

    <!-- Modal -->
    <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 z-50">
        <div class="bg-white rounded-lg overflow-hidden w-4/5 max-w-4xl mx-auto relative">
            <img :src="imageUrl" alt="Imagen ampliada" class="w-full h-auto">
            <button @click="open = false" class="absolute top-0 right-0 m-4 text-white bg-black rounded-full w-8 h-8 flex items-center justify-center">
                &times;
            </button>
        </div>
    </div>
</div>
