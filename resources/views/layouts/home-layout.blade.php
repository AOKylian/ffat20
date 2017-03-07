<?php
$videoArray = array('asol','braum','nami','rift','rumble', 'syndra', 'velkoz', 'lissandra', 'yasuo', 'zed');
$i = round(rand(0,count($videoArray)));
if($i > (count($videoArray) -1)){$i = (count($videoArray) -2);}
$currentVideo = $videoArray[$i];
?>
<html>
<head>
    <title> @yield('title') </title>
    @yield('style-links')
</head>
<body>
<!-- Loading button -->
<div class="se-pre-con"></div> <script>$(window).load(function() {$(".se-pre-con").fadeOut("slow");;});</script>
<!-- Einde loading button -->
<div id="container">
    <div class="menu-display">
        <nav id="bt-menu" class="bt-menu">
            <a href="#" class="bt-menu-trigger zindex">
                <span>Menu</span>
            </a>
            <ul>
                @yield('menu-items')
            </ul>
        </nav>
     </div>

    <div id="videoContainer">
        <video class="vid" autoplay muted loop>
        <source src="video/<?php echo $currentVideo; ?>.mp4" type="video/mp4"/>
        <video>
    </div>

    <div class="col-xs-0 col-sm-1 col-md-2 col-lg-2"></div>
    <div id="inputsContainer" class="col-xs-12 col-sm-10 col-md-8 col-lg-8">
        <section>
				<span class="input input--kohana">
					<input class="input__field input__field--kohana" type="text" id="input-29" />
					<label class="input__label input__label--kohana" for="input-29">
						<i class="fa fa-fw fa-user icon icon--kohana"></i>
						<span class="input__label-content input__label-content--kohana">Summoner name</span>
					</label>
				</span>
         </section>
         <section>
             <select class="cs-select cs-skin-elastic">
                 <option value="" disabled selected>Select a Country</option>
                 <option value="france" data-class="flag-france">France</option>
                 <option value="brazil" data-class="flag-brazil">Brazil</option>
                 <option value="argentina" data-class="flag-argentina">Argentina</option>
                 <option value="south-africa" data-class="flag-safrica">South Africa</option>
             </select>
         </section>
    </div>
    <div class="col-xs-0 col-sm-1 col-md-2 col-lg-2"></div>


</div>
       @yield('js-links')
</body>
</html>