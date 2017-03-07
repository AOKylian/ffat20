@extends('layouts.home-layout')

@section('title')
    FF at 20
@stop

@section('style-links')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link href="{{ URL::asset('css/home/style.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/lib/font-awesome.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/home/menu-home/normalize.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/home/menu-home/demo.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/home/menu-home/icons.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/home/menu-home/style5.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/home/txtinput-home/normalize.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/home/txtinput-home/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/home/txtinput-home/demo.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/home/txtinput-home/set2.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/home/select-home/normalize.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/home/select-home/cs-select.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/home/select-home/cs-skin-elastic.css') }}" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css' />

@stop

@section('menu-items')
    <li>
        <a href="#">ABOUT US</a>
    </li>
    <li>
        <a href="#">LOOKUP</a>
    </li>
    <li>
        <a href="#">LIVE GAME</a>
    </li>
    <li>
        <a href="#">BEST PLAYERS</a>
    </li>
    <li>
        <a href="#">CONTACT</a>
    </li>
@stop

@section('js-links')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script src="{{ URL::asset('js/home/menu-home/classie.js') }}"></script>
    <script src="{{URL::asset('js/home/menu-home/borderMenu.js') }}"></script>
    <script src="{{ URL::asset('js/home/select-home/classie.js') }}"></script>
    <script src="{{ URL::asset('js/home/select-home/selectFx.js') }}"></script>
    <script src="{{ URL::asset('js/home/input-home/script.js') }}"></script>


<script>
			(function() {
				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
					new SelectFx(el);
				} );
			})();
</script>

@stop