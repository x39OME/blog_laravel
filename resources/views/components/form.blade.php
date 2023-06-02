<div class="container">
        @csrf
        <div class="form-group">
            <label for="title">عنوان المقال</label>
            <input name="title" type="text" id="title" class="form-control" value="{{$post->title ?? ""}}">
            @error('title')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="body">نص المقال</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{$post->body ?? ""}}</textarea>
            @error('body')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="author">كاتب المقال</label>
            <input name="author" type="text" id="author" class="form-control" value="{{$post->author ?? ""}}">
            @error('author')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
</div>
