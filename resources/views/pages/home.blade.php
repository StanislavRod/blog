@extends('layouts.main')
@section('content')
    @include('partials.carousel',['blogs'=>$blogs])

    <section class="blog-area blog-variation zigzag-loop">
        <div class="container  infinite-scroll">
            @if ($blogs)
                @foreach ($blogs as $blog)
                    <div class="row post-style1" data-aos="fade-up">
                        <div class="col-md-6 ">
                            <div class="feature-post">
                                <div class="post-thumb">
                                    <div class="post-date"><span>15 May, 2019</span></div>
                                    <div class="thumb-image">
                                        <a href="{{ url("/blog-details/{$blog->id}")}}"><img
                                                    src="{{asset($blog->images)}}"
                                                    alt="image"/></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="details">
                                <div class="meta-name">
                                    <h2><a href="{{url("/tags")}}">{{ucfirst($blog->category->title)}}</a></h2>
                                </div>
                                <div class="title">
                                    <h2>
                                        <a href="{{ url("/blog-details/{$blog->id}")}}">{{$blog->title}}</a>
                                    </h2>
                                </div>
                                <div class="content">
                                    {{$blog->short_description}}
                                </div>
                                <div class="share-option d-md-flex justify-content-between align-items-center">
                                    <div class="btn-more float-left">
                                        <a href="{{ url("/blog-details/{$blog->id}")}}">Read More</a>
                                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                    </div>
                                    <div class="post-social-share float-right">
                                        <ul class="cbttopshare">
                                            <li class="facebook"><a href="https://www.facebook.com/" rel="nofollow"
                                                                    target="_blank" title="facebook"> </a></li>
                                            <li class="pinterest"><a href="https://pinterest.com/" rel="nofollow"
                                                                     target="_blank" title="pinterest"> </a></li>
                                            <li class="twitter"><a href="https://twitter.com/" rel="nofollow"
                                                                   target="_blank"
                                                                   title="twitter"> </a></li>
                                            <li class="linkedin"><a href="https://www.linkedin.com/" rel="nofollow"
                                                                    target="_blank" title="linkedin"> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div id="postList"></div>

    </section>
@endsection