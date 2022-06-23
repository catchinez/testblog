@extends('layouts.main')

@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Категории</h1>
        <section class="featured-posts-section">
           <ul>
            @foreach($categories as $category)
            <li><a href="{{ route('category.post.index', $category->id) }}">{{ $category->title }}</a></li>
            @endforeach
           </ul>
        </section>
        <div class="row">
            <div class="col-md-8">
                <section>
                   
 
                </section>
            </div>
            <div class="col-md-4 sidebar" data-aos="fade-left">
 
                <div class="widget widget-post-list">
                   
                </div>
                
            </div>
        </div>
    </div>

</main>
@endsection