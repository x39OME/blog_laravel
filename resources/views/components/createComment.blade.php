

<form action="/posts/{{ $post->id }}/comments" method="post">
    @csrf
    <div class="form-group mb-3">
        <label for="name">الاسم</label>
        <input name="name" class="form-control" id="name">
    </div>
    @error('name')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <div class="form-group mb-3">
        <label for="body">التعليق</label>
        <textarea name="body" id="body" rows="3" class="form-control"></textarea>
    </div>
    @error('body')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <button type="submit" class="btn btn-primary">ارسال</button>
</form>
