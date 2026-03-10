@extends('frontend.layouts.base')

@section('main-content')

    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Nos conseils pratiques</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.page') }}">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Conseils</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

    <div class="page-blog">
        <div class="container">
            <div class="row">

                @foreach($blogs as $blog)

                    <div class="col-lg-4 col-md-6" title="{{ $blog->title }}">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <!-- Post Featured Image Start-->
                            <div class="post-featured-image">
                                <figure>
                                    <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}" class="image-anime" data-cursor-text="Voir">
                                        <img src="{{ asset($blog->document->path)}}" alt="{{ $blog->title }}">
                                    </a>
                                </figure>
                            </div>
                            <!-- Post Featured Image End -->

                            <!-- Post Item Body Start -->
                            <div class="post-item-body">
                                <!-- Post Item Content Start -->
                                <div class="post-item-content">
                                    <h3><a href="{{ route('blog.show', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a></h3>
                                </div>
                                <!-- Post Item Content End -->

                                <!-- Blog Item Button Start -->
                                <div class="post-item-btn">
                                    <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}" class="post-btn">Lire plus</a>
                                </div>
                                <!-- Blog Item Button End -->
                            </div>
                            <!-- Post Item Body End -->
                        </div>
                        <!-- Post Item End -->
                    </div>

                @endforeach

            </div>
            <div class="row">
                <div class="col-lg-12">
                    {!! $blogs->links() !!}
                </div>
            </div>
        </div>
    </div>



@endsection
