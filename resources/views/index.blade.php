<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Employee List
        </h2>
    </x-slot>

    <div class="p-6">
        <ul class="list-disc pl-6">
            @foreach ($articles as $article)
                <li>{{ $article['name'] ?? 'No Name' }}</li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
