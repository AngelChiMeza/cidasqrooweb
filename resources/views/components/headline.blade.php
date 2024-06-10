<!-- resources/views/components/headline.blade.php -->
<div class="py-4">
    <h1 class="text-2xl md:text-4xl font-bold text-gray-800">{{ $text }}</h1>
    @if($subtext)
        <p class="text-lg md:text-xl mt-2">{{ $subtext }}</p>
    @endif
</div>
