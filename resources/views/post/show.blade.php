@extends('layouts.main')

@section('content')
<main class="blog-post">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">{{ $post->title }}</h1>
        <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">{{ $date->translatedFormat('F') }} {{ $date->day }}.{{ $date->year }} {{ $date->format('H:i') }} • Featured • {{ $post->comments->count() }} Comments</p>
        <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
            <img src="{{asset('storage/' . $post->main_image)}}" alt="featured image" class="w-100">
        </section>
        <section class="post-content">
            <div class="row">
                <div class="col-lg-9 mx-auto" data-aos="fade-up">
                    {{!!$post->content!!}}
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-4 mb-3" data-aos="fade-right">
                    <img src="assets/images/blog_post_1.jpg" alt="blog post" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-up">
                    <img src="assets/images/blog_post_2.jpg" alt="blog post" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-left">
                    <img src="assets/images/blog_post_3.jpg" alt="blog post" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <p data-aos="fade-up"><a href="#">Lorem ipsum, or lipsum as it is sometimes known,</a> is dummy text used in laying out printed graphic or web designs. The passage is at attributed to an unknown typesetters in 1the 5th century who is thought scrambled with all parts of Cicero’s De. Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out printed graphic or web designs</p>
                    <h2 class="mb-4" data-aos="fade-up">Blog single page</h2>
                    <ul data-aos="fade-up">
                        <li>What manner of thing was upon me I did not know, but that it was large and heavy and many-legged I could feel.</li>
                        <li>My hands were at its throat before the fangs had a chance to bury themselves in my neck, and slowly</li>
                        <li>I forced the hairy face from me and closed my fingers, vise-like, upon its windpipe.</li>
                    </ul>

                    <blockquote data-aos="fade-up">
                        <p>You are safe here! I shouted above the sudden noise. She looked away from me downhill. The people were coming out of their houses, astonished.</p>
                        <footer class="blockquote-footer">Oluchi Mazi</footer>
                    </blockquote>
                    <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out printed graphic or web designs. The passage is at attributed to an unknown typesetters in 1the 5th century who is thought scrambled with all parts of Cicero’s De. Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out printed graphic or web designs</p>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <section class="related-posts">
                    <h2 class="section-title mb-4" data-aos="fade-up">Схожие посты</h2>
                    <div class="row">
                        @foreach($relatedPosts as $relatedPost)
                        <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                            <img src="{{ asset('storage/' . $relatedPost->preview_image) }}" alt="related post" class="post-thumbnail">
                            <p class="post-category">{{ $post->category->title }}</p>
                            <a href="{{route('post.show', $relatedPost->id)}}"><h5 class="post-title">{{ $relatedPost->title }}</h5></a>
                            
                        </div>
                        @endforeach
                    </div>
                </section>
                <section class="comment-list mb-5">
                    <h2 class="section-title mb-5" data-aos="fade-up">Комментарии {{ $post->comments->count() }}</h2>
                    @foreach($post->comments as $comment)

                    <div class="comment-text mb-3">
                        <span class="username">
                          <div>{{ $comment->user->name }}</div>
                          <span class="text-muted float-right">
                            {{ $comment->dateAsCarbon->diffForHumans() }}
                          </span>
                        </span><!-- /.username -->
                        {{$comment->message}}
                    </div>
                    @endforeach
                </section>

                @auth()
                <section class="comment-section">
                    <h2 class="section-title mb-5" data-aos="fade-up">Оставить комментарий</h2>
                    <form action="{{ route('post.comment.store', $post->id) }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-12" data-aos="fade-up">
                            <label for="comment" class="sr-only">Comment</label>
                            <textarea name="message" id="comment" class="form-control" placeholder="Текст комментария" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12" data-aos="fade-up">
                                <input type="submit" value="Добавить" class="btn btn-warning">
                            </div>
                        </div>
                    </form>
                </section>
                @endauth()
            </div>
        </div>
    </div>
</main>

@endsection