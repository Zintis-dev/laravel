<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">{{ __('Posts') }}</h3>
                    @foreach ($posts as $post)
                        <div class="card mb-4 shadow-sm" style="background-color: #253858;">
                            <div class="card-body">
                                <h4 class="card-title text-lg font-semibold text-gray-900 dark:text-gray-100">{{ $post->content }}</h4>
                                <p class="card-text text-gray-700 dark:text-gray-300">Posted by: {{ $post->user->name }}</p>
                                <p class="card-text text-gray-500 dark:text-gray-400">{{ $post->created_at->diffForHumans() }}</p>
                                @if (Auth::id() === $post->user_id)
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="mt-3">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    @endforeach

                    <div class="card shadow-sm p-4" style="background-color: #253858;">
                        <h3 class="mb-4 text-gray-900 dark:text-gray-100">{{ __('Create New Post') }}</h3>
                        <form action="{{ route('posts.store') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <textarea name="content" rows="4" placeholder="Message" class="form-control"></textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">{{ __('Post') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
