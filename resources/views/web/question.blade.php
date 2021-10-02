@extends('layout')
@section('main')

	<!-- Hero-area -->
    <div class="hero-area section">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url({{ asset("web/img/blog-post-background.jpg") }})"></div>
        <!-- /Backgound Image -->

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <ul class="hero-area-tree">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="category.html">Category name</a></li>
                        <li><a href="category.html">Skill name</a></li>
                        <li>{{ $question->exam->name() }}</li>
                    </ul>
                    <h1 class="white-text"> {{ $question->exam->name() }}</h1>
                    <ul class="blog-post-meta">
                      <li> <span>{{ carbon\carbon::parse($question->created_at)->format('D M, Y')}}</span> </li>
                        <li class="blog-meta-comments"><a href="#"><i class="fa fa-users"></i> 35</a></li>
                    </ul>
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
               
                  @foreach ($all as  $ques)
                      <!-- blog post -->
                      <div class="blog-post mb-5">
                        <p>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h3 class="panel-title">{{ $ques->title }}</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="radio">
                                        <label>
                                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                          {{ $ques->option_1 }} 
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                           {{ $ques->option_2 }} 
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                          <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                                           {{ $ques->option_3 }} 
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                          <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                                           {{ $ques->option_4 }} 
                                        </label>
                                    </div>
                                </div>
                            </div>   
                          

                            
                        </p>       
                    </div>
                    <!-- /blog post -->
                  @endforeach
                  
                    
                    <div>
                        <button class="main-button icon-button pull-left">Submit</button>
                        <button class="main-button icon-button btn-danger pull-left ml-sm">Cancel</button>
                    </div>
                </div>
                <!-- /main blog -->
                
                {{-- <!-- aside blog -->
                <div id="aside" class="col-md-3">

                    <!-- exam details widget -->
                    <ul class="list-group">
                        <li class="list-group-item">Skill: programming</li>
                        <li class="list-group-item">Questions: 20</li>
                        <li class="list-group-item">Duration: 30 mins</li>
                        <li class="list-group-item">Difficulty: 
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </li>
                    </ul>
                    <!-- /exam details widget -->

                    

                </div> --}}
                <!-- /aside blog -->

            </div>
            <!-- row -->

        </div>
        <!-- container -->

    </div>
    <!-- /Blog -->
    
@endsection