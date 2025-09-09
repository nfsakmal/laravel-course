<x-app-layout>
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="text-5x1 mb-4">{{ $post->title }}</h1>
                <div class="flex gap-4">
                    <img src="{{ $post->user->image }}" alt="">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
