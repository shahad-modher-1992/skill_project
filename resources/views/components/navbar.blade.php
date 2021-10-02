    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->

<!-- Navigation -->
     <nav id="nav">
        <ul class="main-menu nav navbar-nav navbar-right">
            <li><a href="index.html">@lang('web.home')</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@lang('web.cat') <span class="caret"></span></a>
                <ul class="dropdown-menu">

                    @foreach ($cats as $cat )
                    <li><a href="{{ url("cat/$cat->id") }}">{{ $cat->name() }}</a></li>
                    @endforeach
                 
                </ul>
            </li>
            <li><a href="contact.html">@lang('web.contact')</a></li>
            <li><a href="{{ url('/login') }}"> @lang('web.signin')</a></li>
            <li><a href="{{ url('/register') }}">@lang('web.signup')</a></li>

            <li><a href="{{ url("/lang/set/en") }}">en</a></li>
            <li><a href="{{ url("/lang/set/ar") }}">ar</a></li>
        </ul>
    </nav>
<!-- /Navigation --> 

