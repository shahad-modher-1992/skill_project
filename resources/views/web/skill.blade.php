@extends('layout')

@section('main')

	<!-- Hero-area -->
    <div class="hero-area section">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url({{ asset("web/img/page-background.jpg") }})"></div>
        <!-- /Backgound Image -->

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <ul class="hero-area-tree">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">{{ $skill->cat->name() }}</a></li>
                        <li>{{ $skill->name() }}</li>
                    </ul>
                    <h1 class="white-text">{{ $skill->name() }}</h1>

                </div>
            </div>
        </div>

    </div>
    <!-- /Hero-area -->

    <!-- Blog -->
    <div id="blog" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- main blog -->
                <div id="main" class="col-md-12">

                    <!-- row -->
                    <div class="row">
                        
                        @foreach ($exams as $exam )
                         
                                   <!-- single exam -->
                                   <div class="col-md-3">
                                    <div class="single-blog">
                                        <div class="blog-img">
                                            <a href="{{ url("/skill/show/$exam->id") }}">
                                                <img src="{{ asset("upload/$exam->image") }}" alt="">
                                            </a>
                                        </div>
                                        <h4><a href="{{ url("/exam/show/$exam->id") }}">{{ $exam->name() }}</a></h4>
                                        <div class="blog-meta">
                                            <span>{{ carbon\carbon::parse($exam->created_at)->format('D M, Y')}}</span>
                                            <div class="pull-right">
                                                <span class="blog-meta-comments"><a href="#"><i class="fa fa-users"></i> 35</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /single exam -->
                        @endforeach
             

                    </div>
                    <!-- /row -->

                    <!-- row -->
                    <div class="row">

                        <!-- pagination -->
                        <div class="col-md-12">
                            <div class="post-pagination">
                                <a href="#" class="pagination-back pull-left">Back</a>
                                <ul class="pages">
                                    <li class="active">1</li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                </ul>
                                <a href="#" class="pagination-next pull-right">Next</a>
                            </div>
                        </div>
                        <!-- pagination -->

                    </div>
                    <!-- /row -->
                </div>
                <!-- /main blog -->

            </div>
            <!-- row -->

        </div>
        <!-- container -->

    </div>
    <!-- /Blog -->
    
@endsection