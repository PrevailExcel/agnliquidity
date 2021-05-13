@extends('website.master')

@section('title')
    {{$post->title}}
@endsection
@section('description')
    This is a description
@endsection
@section('url')
    {{url("/sponsored-post/". $post->id)}}
@endsection
@section('mtitle')
    {{$post->title}}
@endsection
@section('mdescription')
    {{\Str::words($post->postbody,10)}}
@endsection
@section('image')
    {{ asset('storage/posts/'.$post->image)}}
@endsection
@section('content')


    <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
        <div class="bg-section">
            <img src="{{asset('assets/images/page-titles/3.jpg')}}" alt="Background" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="title title-6 text-center">
                        <div class="title--heading">
                            <h1>{{$post->title}}</h1>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li><a href="#">Posts</a></li>
                            <li class="active">{{$post->title}}</li>
                        </ol>
                    </div><!-- .title end -->
                </div><!-- .col-lg-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </section><!-- #page-title end -->

    <section id="blog" class="blog blog-single">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 mb-30-xs mb-30-sm">
                    <!-- Blog Entry -->
                    <div class="blog-entry">
                        <div class="entry--img">
                            <a href="#">
                                <img src="{{ asset('storage/posts/'.$post->image)}}" alt="{{$post->title}}" />
                            </a>
                        </div>
                        <div class="entry--content clearfix">
                            <div class="entry--date">{{$post->created_at}}</div>
                            <div class="entry--title">
                                <h4><a href="#">{{$post->title}}</a></h4>
                            </div>
                            <div class="entry--bio">
                                    <p>{{$post->postbody}}</p>
                                </div>
                            <div class="entry--share">
                                <span class="share--title">Share:</span>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                            <!-- .entry-share end -->

                            <!-- .entry-cat end -->
                        </div>
                    </div>
                    <!-- .blog-entry end -->

                </div><!-- .col-lg-8 end -->
                </div><!-- .col-md-3 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </section><!-- #blog end -->



@endsection
