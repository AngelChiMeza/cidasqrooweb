<div class="bg-white rounded-lg shadow-lg">
    <div class="bg-red-800 text-white p-4 rounded-t-lg">
        <h2 class="font-bold text-xl">{{ $title }}</h2>
    </div>
    <ul class="list-none p-4">
        @foreach ($items as $item)
            <li class="border-b border-dashed border-gray-300 pb-2 mb-2">
                <a href="{{ $item['url'] }}" class="flex items-center text-gray-900 hover:text-gray-600 no-underline">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M15.28 9.47a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 1 1-1.06-1.06L13.69 10 9.97 6.28a.75.75 0 0 1 1.06-1.06l4.25 4.25ZM6.03 5.22l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L8.69 10 4.97 6.28a.75.75 0 0 1 1.06-1.06Z" clip-rule="evenodd" />
                    </svg>
                    {{ $item['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
