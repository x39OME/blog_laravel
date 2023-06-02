<x-layout>
    <form action="{{ route('posts.update', $post->id) }}" method="post">
    {{-- <form action="{{url('/posts')}}" method="post"> --}}
    @method('PATCH')
    <x-form :post="$post"/>
    <button type="submit" class="btn btn-primary ">تعديل</button>
</x-layout>
