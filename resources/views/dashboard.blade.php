<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Display posts -->
                    <h3 class="text-lg font-semibold mb-4">{{ __('Posts') }}</h3>
                    @foreach ($posts as $post)
                        <div class="mb-4">
                            <p class="text-gray-700 dark:text-gray-300">{{ $post->content }}</p>
                            <p class="text-gray-500 dark:text-gray-400">{{ $post->created_at->diffForHumans() }}</p>
                        </div>
                    @endforeach

                    <!-- Create new post form -->
                    <h3 class="text-lg font-semibold mb-4">{{ __('Create New Post') }}</h3>
                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <textarea name="content" rows="4" cols="50" class="border-gray-300 dark:border-gray-600 w-full p-2"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">{{ __('Post') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
