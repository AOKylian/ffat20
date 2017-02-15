<?php
$videoArray = array('asol','azir','braum','draven','rift','rumble', 'syndra', 'velkoz', 'warwick', 'yasuo');
$i = rand(0,count($videoArray));
$currentVideo = $videoArray[$i];
?>
<html>
<head>
    <title> @yield('title') </title>
    <link href="{{ URL::asset('css/menu-home/menu.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/menu-home/style.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/lib/font-awesome.min.css') }}" rel="stylesheet" />
    
</head>
<body>
    <div class="menu-wrap">
        <nav class="menu">
            <div class="icon-list">
                <a href="#">
                    <i class="fa fa-fw fa-envelope-o"></i>
                    <span>Summoner search</span>
                </a>
                <a href="#">
                    <i class="fa fa-fw fa-eye"></i>
                    <span>Top tier</span>
                </a>
                <a href="#">
                    <i class="fa fa-fw fa-bell-o"></i>
                    <span>Live game search</span>
                </a>
            </div>
        </nav>
    </div>
    <button class="menu-button" id="open-button"></button>
    <div class="content-wrap">
        <div id="container">
            <div id="videoContainer">
                <video class="vid" autoplay muted loop>
                    <source src="video/<?php echo $currentVideo; ?>.mp4" type="video/mp4"/>
                <video>

                <div id="inputsContainer"></div>
            </div>
            <div id="instructionContainer">

            </div>
        </div>
    </div>
    <script src="{{ URL::asset('js/menu-home/script.js') }}"></script>
</body>
</html>