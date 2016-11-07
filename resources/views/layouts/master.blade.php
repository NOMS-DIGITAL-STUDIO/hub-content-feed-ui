<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
    <head> 
        <script src="/js/jquery-1.12.4.min.js"></script>
        <script src="/js/bxslider/jquery.bxslider.min.js"></script>
        <script src="/js/video.min.js"></script>
        <script src="/js/global.js" type="text/javascript"></script>
		<script src="/js/news.js" type="text/javascript"></script>
        <script src="/js/jquery.modal.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="/js/bootstrap.js" type="text/javascript"></script>

		@if (Request::is('/') || Request::is('hub/*'))
		<title>Digital Hub</title>
        @else
        <title>Digital Hub - @yield('title')</title>
        @endif        

        <link href="{{ elixir('css/app.css') }}" rel="stylesheet" type="text/css" />
        <link href="/js/bxslider/jquery.bxslider.css" rel="stylesheet" />
        <link href="/css/sprite.css" rel="stylesheet" type="text/css" />
        {!! App\Helpers\Piwik::trackingCode() !!}
    </head>

    <body>
        @if (Request::is('/') || Request::is('hub/*'))
        @else
        @yield('header')
        @endif

        @yield('top_content')

        <div id="content" class="container">
            @yield('content')
        </div>

		@if (Request::is('/') || Request::is('hub/*') || Request::is('hub'))
		@else
        <footer class="footer">
            &copy{{ trans('footer.message') }}
        </footer>
		@endif
    </body>
</html>
