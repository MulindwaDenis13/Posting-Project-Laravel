@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <form action="{{route('posts')}}" method="POST" class="mb-4">
                @csrf
                <div class="mb-4">
                    <label for="body" class="sr-only">Body</label>
                    <textarea name="body" id="body" cols="30" rows="4" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" 
                    placeholder="Post Something!"></textarea>
                    @error('body')
                        <div class="text-sm text-red-500 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div>
                    <button type="submit" 
                    class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Post</button>
                </div>
            </form>
            @if ($posts->count())
                @foreach ($posts as $post)
                    <div class="mb-4">item</div>
                @endforeach
            @else
                
            @endif
        </div>
    </div>
@endsection