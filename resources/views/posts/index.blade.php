<x-layout>
    <main class="container">
        <div class="row g-5">
            <div class="col-md-8">
                @foreach ($posts as $post)
                    <div class="blog-post mb-3">
                        <h2 class="blog-post-title">
                            <a href="/posts/{{$post->id}}"> {{$post->title}} </a>
                        </h2>
                        <p class="blog-post-meta">
                            بقلم <a href="#">{{ $post->author }}</a>
                            {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
                        </p>
                        {{-- <p class="blog-post-meta">
                            بقلم <a href="#">{{ $post->author }} {{$post->created_at}}</a>
                        </p> --}}
                    </div>

                @endforeach


                <nav class="blog-pagination" aria-label="Pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
                </nav>
            </div>

            <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
            <div class="p-4 mb-3 bg-light rounded">
                <h4>مبادئ البرمجة</h4>
                <p>يمكنك الان شراء نسختك من كتاب البرمجة بتخفيض قدره 30%. ادخل عنوان بريدك الاكتروني لتصلك التفاصيل </p>
                <form action="/mail" method="post">
                @csrf
                <div class="form-group">
                    <input type="email" id="email" class="form-control" name="email">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </div>
                </div>
                </form>
                @error('email')
                <div role="alert" class="alert alert-danger alert-dismissible fade show">
                    {{ $message }}
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @enderror
            </div>

            <div class="p-4">
                <h4 class="fst-italic">Archives</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">March 2021</a></li>
                    <li><a href="#">February 2021</a></li>
                    <li><a href="#">January 2021</a></li>
                    <li><a href="#">December 2020</a></li>
                    <li><a href="#">November 2020</a></li>
                    <li><a href="#">October 2020</a></li>
                    <li><a href="#">September 2020</a></li>
                    <li><a href="#">August 2020</a></li>
                    <li><a href="#">July 2020</a></li>
                    <li><a href="#">June 2020</a></li>
                    <li><a href="#">May 2020</a></li>
                    <li><a href="#">April 2020</a></li>
                </ol>
            </div>
                <div class="p-4">
                <h4 class="fst-italic">Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
                </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>
