        <div>
        <main class="container">
            <div class="row g-5">
              <div class="col-md-8">

                  <div class="blog-post mb-3">
                      <h2 class="blog-post-title">
                          {{ $post->title }}
                      </h2>
                      <p class="blog-post-meta">
                          بقلم {{ $post->author }}
                          {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
                      </p>
                      <p>
                          {{ $post->body }}
                      </p>

                      <h1>التعليقات</h1>

                      @if(count($comments) == 0)
                          <h3>لا يوجد تعليقات </h3>
                      @else
                      @foreach($comments as $comment)
                          <h4>
                              {{ $comment->name }}
                          </h4>
                          <p>
                              {{ $comment->body }}
                          </p>
                          @endforeach
                      @endif
                  </div>



