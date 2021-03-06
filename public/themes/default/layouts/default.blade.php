<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf_token" content="{!! csrf_token() !!}"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />

        <meta name="keywords" content="{{ Setting::get('meta_keywords') }}">
        <meta name="description" content="{{ Setting::get('meta_description') }}">
        <link rel="icon" type="image/x-icon" href="{!! url('setting/'.Setting::get('favicon')) !!}">

        <meta content="{{ url('/') }}" property="og:url" />
        <meta content="{!! url('setting/'.Setting::get('logo')) !!}" property="og:image" />
        <meta content="{{ Setting::get('meta_description') }}" property="og:description" />
        <meta content="{{ Setting::get('site_name') }}" property="og:title" />
        <meta content="website" property="og:type" />
        <meta content="{{ Setting::get('site_name') }}" property="og:site_name" />


        <title>{{ Theme::get('title') }}</title>

        <link href="{{ Theme::asset()->url('css/flag-icon.css') }}" rel="stylesheet">
        <link href="{{ Theme::asset()->url('css/custom.css') }}" rel="stylesheet">
        
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('Bootstrap/css/bootstrap-reboot.css')}}" rel="stylesheet">
        <link href="{{asset('Bootstrap/css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('Bootstrap/css/bootstrap-grid.css')}}" rel="stylesheet">
        <link href="{{asset('css/theme-styles.css')}}" rel="stylesheet">
        <link href="{{asset('css/fonts.css')}}" rel="stylesheet">
        <link href="{{asset('css/blocks.css')}}" rel="stylesheet">
        <link href="{{asset('css/jquery.mCustomScrollbar.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/mediaelement-playlist-plugin.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/mediaelementplayer.css')}}" rel="stylesheet">
        <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">

        <script type="text/javascript">
            function SP_source() {
                return "{{ url('/') }}/";
            }
            var base_url = "{{ url('/') }}/";
            var theme_url = "{!! Theme::asset()->url('') !!}";
            var current_username = "{{ Auth::user()->username }}";
        </script>
        {!! Theme::asset()->scripts() !!}
        @if(Setting::get('google_analytics') != NULL)
        {!! Setting::get('google_analytics') !!}
        @endif
        <script src="{!! Theme::asset()->url('js/lightgallery.js') !!}"></script>
    </head>
    <body @if(Setting::get('enable_rtl') == 'on') class="direction-rtl" @endif>
           {!! Theme::partial('header') !!}

           <div class="main-content">
            {!! Theme::content() !!}
        </div>

        {!! Theme::partial('right-sidebar') !!}

        {!! Theme::partial('footer') !!}

        <script>
                    @if (Config::get('app.debug'))
                    // Pusher.logToConsole = true;
                    @endif
                    var pusherConfig = {
                        token: "{{ csrf_token() }}",
                        PUSHER_KEY: "{{ config('broadcasting.connections.pusher.key') }}"
                    };
        </script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.5.0/socket.io.min.js"></script>

        {!! Theme::asset()->container('footer')->scripts() !!}
        <script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
        <script src="{{asset('js/material.min.js')}}"></script>
        <script src="{{asset('js/theme-plugins.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('js/ajax-pagination.js')}}"></script>
        <script src="{{asset('js/selectize.min.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/mediaelement-and-player.min.js')}}"></script>
        <script src="{{asset('js/mediaelement-playlist-plugin.min.js')}}"></script>

    </body>
</html>
