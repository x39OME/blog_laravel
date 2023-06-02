@section('title', 'انشاء مقالة جديدة')
<x-layout>
    <div class="container">
        <form action="{{url('/posts')}}" method="post">
            <x-form />
            <button type="submit" class="btn btn-primary">حفظ</button>
        </form>
    </div>
</x-layout>
