
<?php 
                     function xTimeAgo ($oldTime, $newTime) {
                      $timeCalc = strtotime($newTime) - strtotime($oldTime);

                      if ($timeCalc > (60*60*24)) {$timeCalc = round($timeCalc/60/60/24) . " jours";}
                      else if ($timeCalc > (60*60)) {$timeCalc = round($timeCalc/60/60) . " heures";}
                      else if ($timeCalc > 60) {$timeCalc = round($timeCalc/60) . " minutes";}
                      else if ($timeCalc > 0) {$timeCalc .= " seconds";}

                      return $timeCalc;
                      }

                      ?>
<html lang="en" class=" "><!-- Mirrored from wpkixx.com/html/pitnik/newsfeed.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Oct 2020 12:42:18 GMT --><head><style>.gm-control-active>img{box-sizing:content-box;display:none;left:50%;pointer-events:none;position:absolute;top:50%;transform:translate(-50%,-50%)}.gm-control-active>img:nth-child(1){display:block}.gm-control-active:hover>img:nth-child(1),.gm-control-active:active>img:nth-child(1){display:none}.gm-control-active:hover>img:nth-child(2),.gm-control-active:active>img:nth-child(3){display:block}
</style><style>.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px;box-sizing:border-box}
</style><style>@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style>.dismissButton{background-color:#fff;border:1px solid #dadce0;color:#1a73e8;border-radius:4px;font-family:Roboto,sans-serif;font-size:14px;height:36px;cursor:pointer;padding:0 24px}.dismissButton:hover{background-color:rgba(66,133,244,0.04);border:1px solid #d2e3fc}.dismissButton:focus{background-color:rgba(66,133,244,0.12);border:1px solid #d2e3fc;outline:0}.dismissButton:hover:focus{background-color:rgba(66,133,244,0.16);border:1px solid #d2e2fd}.dismissButton:active{background-color:rgba(66,133,244,0.16);border:1px solid #d2e2fd;box-shadow:0 1px 2px 0 rgba(60,64,67,0.3),0 1px 3px 1px rgba(60,64,67,0.15)}.dismissButton:disabled{background-color:#fff;border:1px solid #f1f3f4;color:#3c4043}
</style><style>.dismissButton{background-color:#fff;border:1px solid #dadce0;color:#1a73e8;border-radius:4px;font-family:Roboto,sans-serif;font-size:14px;height:36px;cursor:pointer;padding:0 24px}.dismissButton:hover{background-color:rgba(66,133,244,0.04);border:1px solid #d2e3fc}.dismissButton:focus{background-color:rgba(66,133,244,0.12);border:1px solid #d2e3fc;outline:0}.dismissButton:hover:focus{background-color:rgba(66,133,244,0.16);border:1px solid #d2e2fd}.dismissButton:active{background-color:rgba(66,133,244,0.16);border:1px solid #d2e2fd;box-shadow:0 1px 2px 0 rgba(60,64,67,0.3),0 1px 3px 1px rgba(60,64,67,0.15)}.dismissButton:disabled{background-color:#fff;border:1px solid #f1f3f4;color:#3c4043}
</style><style>.gm-ui-hover-effect{opacity:.6}.gm-ui-hover-effect:hover{opacity:1}
</style><style>.gm-style .transit-container{background-color:white;max-width:265px;overflow-x:hidden}.gm-style .transit-container .transit-title span{font-size:14px;font-weight:500}.gm-style .transit-container .transit-title{padding-bottom:6px}.gm-style .transit-container .transit-wheelchair-icon{background:transparent url('https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png');background-size:59px 492px;display:inline-block;background-position:-5px -450px;width:13px;height:13px}.gm-style.gm-china .transit-container .transit-wheelchair-icon{background-image:url('http://maps.gstatic.cn/mapfiles/api-3/images/mapcnt6.png')}@media (-webkit-min-device-pixel-ratio:1.2),(min-resolution:1.2dppx),(min-resolution:116dpi){.gm-style .transit-container .transit-wheelchair-icon{background-image:url('https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6_hdpi.png');background-size:59px 492px;display:inline-block;background-position:-5px -449px;width:13px;height:13px}.gm-style.gm-china .transit-container .transit-wheelchair-icon{background-image:url('http://maps.gstatic.cn/mapfiles/api-3/images/mapcnt6_hdpi.png')}}.gm-style .transit-container div{background-color:white;font-size:11px;font-weight:300;line-height:15px}.gm-style .transit-container .transit-line-group{overflow:hidden;margin-right:-6px}.gm-style .transit-container .transit-line-group-separator{border-top:1px solid #e6e6e6;padding-top:5px}.gm-style .transit-container .transit-nlines-more-msg{color:#999;margin-top:-3px;padding-bottom:6px}.gm-style .transit-container .transit-line-group-vehicle-icons{display:inline-block;padding-right:10px;vertical-align:top;margin-top:1px}.gm-style .transit-container .transit-line-group-content{display:inline-block;min-width:100px;max-width:228px;margin-bottom:-3px}.gm-style .transit-container .transit-clear-lines{clear:both}.gm-style .transit-container .transit-div-line-name{float:left;padding:0 6px 6px 0;white-space:nowrap}.gm-style .transit-container .transit-div-line-name .gm-transit-long{width:107px}.gm-style .transit-container .transit-div-line-name .gm-transit-medium{width:50px}.gm-style .transit-container .transit-div-line-name .gm-transit-short{width:37px}.gm-style .transit-div-line-name .renderable-component-icon{float:left;margin-right:2px}.gm-style .transit-div-line-name .renderable-component-color-box{background-image:url(https://maps.gstatic.com/mapfiles/transparent.png);height:10px;width:4px;float:left;margin-top:3px;margin-right:3px;margin-left:1px}.gm-style.gm-china .transit-div-line-name .renderable-component-color-box{background-image:url(http://maps.gstatic.cn/mapfiles/transparent.png)}.gm-style .transit-div-line-name .renderable-component-text{text-align:left;overflow:hidden;text-overflow:ellipsis;display:block}.gm-style .transit-div-line-name .renderable-component-text-box{overflow:hidden;text-overflow:ellipsis;display:block;font-size:8pt;font-weight:400;text-align:center;padding:1px 2px}.gm-style .transit-div-line-name .renderable-component-text-box-white{border:solid 1px #ccc;background-color:white;padding:0 2px}.gm-style .transit-div-line-name .renderable-component-bold{font-weight:400}
</style><style>.poi-info-window div,.poi-info-window a{color:#333;font-family:Roboto,Arial;font-size:13px;background-color:white;-moz-user-select:text;-webkit-user-select:text;-ms-user-select:text;user-select:text}.poi-info-window{cursor:default}.poi-info-window a:link{text-decoration:none;color:#427fed}.poi-info-window .view-link,.poi-info-window a:visited{color:#427fed}.poi-info-window .view-link:hover,.poi-info-window a:hover{cursor:pointer;text-decoration:underline}.poi-info-window .full-width{width:180px}.poi-info-window .title{overflow:hidden;font-weight:500;font-size:14px}.poi-info-window .address{margin-top:2px;color:#555}
</style><style>.gm-style .gm-style-iw{font-weight:300;font-size:13px;overflow:hidden}.gm-style .gm-style-iw-a{position:absolute;width:9999px;height:0}.gm-style .gm-style-iw-t{position:absolute;width:100%}.gm-style .gm-style-iw-t::after{background:linear-gradient(45deg,rgba(255,255,255,1) 50%,rgba(255,255,255,0) 51%,rgba(255,255,255,0) 100%);box-shadow:-2px 2px 2px 0 rgba(178,178,178,.4);content:"";height:15px;left:0;position:absolute;top:0;transform:translate(-50%,-50%) rotate(-45deg);width:15px}.gm-style .gm-style-iw-c{position:absolute;box-sizing:border-box;overflow:hidden;top:0;left:0;transform:translate(-50%,-100%);background-color:white;border-radius:8px;padding:12px;box-shadow:0 2px 7px 1px rgba(0,0,0,0.3)}.gm-style .gm-style-iw-d{box-sizing:border-box;overflow:auto}.gm-style .gm-style-iw-d::-webkit-scrollbar{width:18px;height:12px;-webkit-appearance:none}.gm-style .gm-style-iw-d::-webkit-scrollbar-track,.gm-style .gm-style-iw-d::-webkit-scrollbar-track-piece{background:#fff}.gm-style .gm-style-iw-c .gm-style-iw-d::-webkit-scrollbar-thumb{background-color:rgba(0,0,0,0.12);border:6px solid transparent;border-radius:9px;background-clip:content-box}.gm-style .gm-style-iw-c .gm-style-iw-d::-webkit-scrollbar-thumb:horizontal{border:3px solid transparent}.gm-style .gm-style-iw-c .gm-style-iw-d::-webkit-scrollbar-thumb:hover{background-color:rgba(0,0,0,0.3)}.gm-style .gm-style-iw-c .gm-style-iw-d::-webkit-scrollbar-corner{background:transparent}.gm-style .gm-iw{color:#2c2c2c}.gm-style .gm-iw b{font-weight:400}.gm-style .gm-iw a:link,.gm-style .gm-iw a:visited{color:#4272db;text-decoration:none}.gm-style .gm-iw a:hover{color:#4272db;text-decoration:underline}.gm-style .gm-iw .gm-title{font-weight:400;margin-bottom:1px}.gm-style .gm-iw .gm-basicinfo{line-height:18px;padding-bottom:12px}.gm-style .gm-iw .gm-website{padding-top:6px}.gm-style .gm-iw .gm-photos{padding-bottom:8px;-ms-user-select:none;-moz-user-select:none;-webkit-user-select:none}.gm-style .gm-iw .gm-sv,.gm-style .gm-iw .gm-ph{cursor:pointer;height:50px;width:100px;position:relative;overflow:hidden}.gm-style .gm-iw .gm-sv{padding-right:4px}.gm-style .gm-iw .gm-wsv{cursor:pointer;position:relative;overflow:hidden}.gm-style .gm-iw .gm-sv-label,.gm-style .gm-iw .gm-ph-label{cursor:pointer;position:absolute;bottom:6px;color:#fff;font-weight:400;text-shadow:rgba(0,0,0,0.7) 0 1px 4px;font-size:12px}.gm-style .gm-iw .gm-stars-b,.gm-style .gm-iw .gm-stars-f{height:13px;font-size:0}.gm-style .gm-iw .gm-stars-b{position:relative;background-position:0 0;width:65px;top:3px;margin:0 5px}.gm-style .gm-iw .gm-rev{line-height:20px;-ms-user-select:none;-moz-user-select:none;-webkit-user-select:none}.gm-style.gm-china .gm-iw .gm-rev{display:none}.gm-style .gm-iw .gm-numeric-rev{font-size:16px;color:#dd4b39;font-weight:400}.gm-style .gm-iw.gm-transit{margin-left:15px}.gm-style .gm-iw.gm-transit td{vertical-align:top}.gm-style .gm-iw.gm-transit .gm-time{white-space:nowrap;color:#676767;font-weight:bold}.gm-style .gm-iw.gm-transit img{width:15px;height:15px;margin:1px 5px 0 -20px;float:left}
</style><style>.gm-iw {text-align:left;}.gm-iw .gm-numeric-rev {float:left;}.gm-iw .gm-photos,.gm-iw .gm-rev {direction:ltr;}.gm-iw .gm-stars-f, .gm-iw .gm-stars-b {background:url("https://maps.gstatic.com/mapfiles/api-3/images/review_stars.png") no-repeat;background-size: 65px 26px;float:left;}.gm-iw .gm-stars-f {background-position:left -13px;}.gm-iw .gm-sv-label,.gm-iw .gm-ph-label {left: 4px;}</style><link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans:400,500,700"><style>.gm-style-pbc{transition:opacity ease-in-out;background-color:rgba(0,0,0,0.45);text-align:center}.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}
</style><style>.gm-style img{max-width: none;}.gm-style {font: 400 11px Roboto, Arial, sans-serif; text-decoration: none;}</style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
	<title>Tunivisions Link</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/weather-icons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/color.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">

<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/<?php echo base_url() ?>assets/js/42/7/intl/fr_ALL/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/<?php echo base_url() ?>assets/js/42/7/intl/fr_ALL/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/<?php echo base_url() ?>assets/js/42/7/intl/fr_ALL/map.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/<?php echo base_url() ?>assets/js/42/7/intl/fr_ALL/marker.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/<?php echo base_url() ?>assets/js/42/7/intl/fr_ALL/geocoder.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/<?php echo base_url() ?>assets/js/42/7/intl/fr_ALL/onion.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/<?php echo base_url() ?>assets/js/42/7/intl/fr_ALL/infowindow.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/<?php echo base_url() ?>assets/js/42/7/intl/fr_ALL/controls.js"></script></head>
<body><nav id="shoppingbag" class="mm-menu mm-offcanvas mm-right" aria-hidden="true"><div class="mm-panels"><div class="mm-panel mm-hasnavbar mm-opened" id="mm-13"><div class="mm-navbar"><a class="mm-title">General Setting</a></div>
				<div class="">
					<form method="post">
						<div class="setting-row">
							<span>use night mode</span>
							<input type="checkbox" id="nightmode"> 
							<label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Notifications</span>
							<input type="checkbox" id="switch2"> 
							<label for="switch2" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Notification sound</span>
							<input type="checkbox" id="switch3"> 
							<label for="switch3" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>My profile</span>
							<input type="checkbox" id="switch4"> 
							<label for="switch4" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Show profile</span>
							<input type="checkbox" id="switch5"> 
							<label for="switch5" data-on-label="ON" data-off-label="OFF"></label>
						</div>
					</form>
					<h4 class="panel-title">Account Setting</h4>
					<form method="post">
						<div class="setting-row">
							<span>Sub users</span>
							<input type="checkbox" id="switch6"> 
							<label for="switch6" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>personal account</span>
							<input type="checkbox" id="switch7"> 
							<label for="switch7" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Business account</span>
							<input type="checkbox" id="switch8"> 
							<label for="switch8" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Show me online</span>
							<input type="checkbox" id="switch9"> 
							<label for="switch9" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Delete history</span>
							<input type="checkbox" id="switch10"> 
							<label for="switch10" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Expose author name</span>
							<input type="checkbox" id="switch11"> 
							<label for="switch11" data-on-label="ON" data-off-label="OFF"></label>
						</div>
					</form>
				</div>
			</div></div>
			
		</nav><nav id="menu" class="res-menu mm-menu mm-offcanvas" aria-hidden="true"><div class="mm-panels"><div class="mm-panel mm-hasnavbar mm-opened" id="mm-1"><div class="mm-navbar"><a class="mm-title">Menu</a></div><ul class="mm-listview">
				<li><a class="mm-next mm-fullsubopen" href="#mm-2" aria-owns="mm-2" aria-haspopup="true"><span class="mm-sronly">Open submenu (Home Pages)</span></a><span>Home Pages</span> 
					
				</li>
				<li><a class="mm-next mm-fullsubopen" href="#mm-3" aria-owns="mm-3" aria-haspopup="true"><span class="mm-sronly">Open submenu (Pittube)</span></a><span>Pittube</span>
					
				</li>
				<li><a class="mm-next mm-fullsubopen" href="#mm-4" aria-owns="mm-4" aria-haspopup="true"><span class="mm-sronly">Open submenu (PitPoint)</span></a><span>PitPoint</span>
					
				</li>
				<li><a class="mm-next mm-fullsubopen" href="#mm-5" aria-owns="mm-5" aria-haspopup="true"><span class="mm-sronly">Open submenu (Pitjob)</span></a><span>Pitjob</span>
					
				</li>
				<li><a class="mm-next mm-fullsubopen" href="#mm-6" aria-owns="mm-6" aria-haspopup="true"><span class="mm-sronly">Open submenu (Timeline)</span></a><span>Timeline</span>
					
				</li>
				<li><a class="mm-next mm-fullsubopen" href="#mm-7" aria-owns="mm-7" aria-haspopup="true"><span class="mm-sronly">Open submenu (Favourit Page)</span></a><span>Favourit Page</span>
					
				</li>
				<li><a class="mm-next mm-fullsubopen" href="#mm-8" aria-owns="mm-8" aria-haspopup="true"><span class="mm-sronly">Open submenu (Forum)</span></a><span>Forum</span>
					
				</li>
				<li><a class="mm-next mm-fullsubopen" href="#mm-9" aria-owns="mm-9" aria-haspopup="true"><span class="mm-sronly">Open submenu (Featured)</span></a><span>Featured</span>
					
				</li>
				<li><a class="mm-next mm-fullsubopen" href="#mm-10" aria-owns="mm-10" aria-haspopup="true"><span class="mm-sronly">Open submenu (Account Setting)</span></a><span>Account Setting</span>
					
				</li>
				<li><a class="mm-next mm-fullsubopen" href="#mm-11" aria-owns="mm-11" aria-haspopup="true"><span class="mm-sronly">Open submenu (Authentication)</span></a><span>Authentication</span>
					
				</li>
				<li><a class="mm-next mm-fullsubopen" href="#mm-12" aria-owns="mm-12" aria-haspopup="true"><span class="mm-sronly">Open submenu (Tools)</span></a><span>Tools</span>
					
				</li>
			</ul></div><div class="mm-panel mm-hidden mm-hasnavbar" id="mm-2" aria-hidden="true"><div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-1" aria-owns="mm-1" aria-haspopup="true"><span class="mm-sronly">Close submenu (Home Pages)</span></a><a class="mm-title" href="#mm-1" aria-hidden="true">Home Pages</a></div><ul class="mm-listview">
						<li><a href="index-2.html" title="">Pitnik Default</a></li>
						<li><a href="company-landing.html" title="">Company Landing</a></li>
						<li><a href="pitrest.html" title="">Pitrest</a></li>
						<li><a href="redpit.html" title="">Redpit</a></li>
						<li><a href="redpit-category.html" title="">Redpit Category</a></li>
						<li><a href="soundnik.html" title="">Soundnik</a></li>
						<li><a href="soundnik-detail.html" title="">Soundnik Single</a></li>
						<li><a href="career.html" title="">Pitjob</a></li>
						<li><a href="shop.html" title="">Shop</a></li>
						<li><a href="classified.html" title="">Classified</a></li>
						<li><a href="pitpoint.html" title="">PitPoint</a></li>
						<li><a href="pittube.html" title="">Pittube</a></li>
						<li><a href="chat-messenger.html" title="">Messenger</a></li>
					</ul></div><div class="mm-panel mm-hidden mm-hasnavbar" id="mm-3" aria-hidden="true"><div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-1" aria-owns="mm-1" aria-haspopup="true"><span class="mm-sronly">Close submenu (Pittube)</span></a><a class="mm-title" href="#mm-1" aria-hidden="true">Pittube</a></div><ul class="mm-listview">
						<li><a href="pittube.html" title="">Pittube</a></li>
						<li><a href="pittube-detail.html" title="">Pittube single</a></li>
						<li><a href="pittube-category.html" title="">Pittube Category</a></li>
						<li><a href="pittube-channel.html" title="">Pittube Channel</a></li>
						<li><a href="pittube-search-result.html" title="">Pittube Search Result</a></li>
					</ul></div><div class="mm-panel mm-hidden mm-hasnavbar" id="mm-4" aria-hidden="true"><div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-1" aria-owns="mm-1" aria-haspopup="true"><span class="mm-sronly">Close submenu (PitPoint)</span></a><a class="mm-title" href="#mm-1" aria-hidden="true">PitPoint</a></div><ul class="mm-listview">
						<li><a href="pitpoint.html" title="">PitPoint</a></li>
						<li><a href="pitpoint-detail.html" title="">Pitpoint Detail</a></li>
						<li><a href="pitpoint-list.html" title="">Pitpoint List style</a></li>
						<li><a href="pitpoint-without-baner.html" title="">Pitpoint without Banner</a></li>
						<li><a href="pitpoint-search-result.html" title="">Pitpoint Search</a></li>
					</ul></div><div class="mm-panel mm-hidden mm-hasnavbar" id="mm-5" aria-hidden="true"><div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-1" aria-owns="mm-1" aria-haspopup="true"><span class="mm-sronly">Close submenu (Pitjob)</span></a><a class="mm-title" href="#mm-1" aria-hidden="true">Pitjob</a></div><ul class="mm-listview">
						<li><a href="career.html" title="">Pitjob</a></li>
						<li><a href="career-detail.html" title="">Pitjob Detail</a></li>
						<li><a href="career-search-result.html" title="">Job seach page</a></li>
						<li><a href="social-post-detail.html" title="">Social Post Detail</a></li>
					</ul></div><div class="mm-panel mm-hidden mm-hasnavbar" id="mm-6" aria-hidden="true"><div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-1" aria-owns="mm-1" aria-haspopup="true"><span class="mm-sronly">Close submenu (Timeline)</span></a><a class="mm-title" href="#mm-1" aria-hidden="true">Timeline</a></div><ul class="mm-listview">
						<li><a href="timeline.html" title="">Timeline</a></li>
						<li><a href="timeline-photos.html" title="">Timeline Photos</a></li>
						<li><a href="timeline-videos.html" title="">Timeline Videos</a></li>
						<li><a href="timeline-groups.html" title="">Timeline Groups</a></li>
						<li><a href="timeline-friends.html" title="">Timeline Friends</a></li>
						<li><a href="timeline-friends2.html" title="">Timeline Friends-2</a></li>
						<li><a href="about.html" title="">Timeline About</a></li>
						<li><a href="blog-posts.html" title="">Timeline Blog</a></li>
						<li><a href="friends-birthday.html" title="">Friends' Birthday</a></li>
						<li><a href="newsfeed.html" title="">Newsfeed</a></li>
						<li><a href="search-result.html" title="">Search Result</a></li>
					</ul></div><div class="mm-panel mm-hidden mm-hasnavbar" id="mm-7" aria-hidden="true"><div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-1" aria-owns="mm-1" aria-haspopup="true"><span class="mm-sronly">Close submenu (Favourit Page)</span></a><a class="mm-title" href="#mm-1" aria-hidden="true">Favourit Page</a></div><ul class="mm-listview">
						<li><a href="fav-page.html" title="">Favourit Page</a></li>
						<li><a href="fav-favers.html" title="">Fav Page Likers</a></li>
						<li><a href="fav-events.html" title="">Fav Events</a></li>
						<li><a href="fav-event-invitations.html" title="">Fav Event Invitations</a></li>
						<li><a href="event-calendar.html" title="">Event Calendar</a></li>
						<li><a href="fav-page-create.html" title="">Create New Page</a></li>
						<li><a href="price-plans.html" title="">Price Plan</a></li>
					</ul></div><div class="mm-panel mm-hidden mm-hasnavbar" id="mm-8" aria-hidden="true"><div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-1" aria-owns="mm-1" aria-haspopup="true"><span class="mm-sronly">Close submenu (Forum)</span></a><a class="mm-title" href="#mm-1" aria-hidden="true">Forum</a></div><ul class="mm-listview">
						<li><a href="forum.html" title="">Forum</a></li>
						<li><a href="forum-create-topic.html" title="">Forum Create Topic</a></li>
						<li><a href="forum-open-topic.html" title="">Forum Open Topic</a></li>
						<li><a href="forums-category.html" title="">Forum Category</a></li>
					</ul></div><div class="mm-panel mm-hidden mm-hasnavbar" id="mm-9" aria-hidden="true"><div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-1" aria-owns="mm-1" aria-haspopup="true"><span class="mm-sronly">Close submenu (Featured)</span></a><a class="mm-title" href="#mm-1" aria-hidden="true">Featured</a></div><ul class="mm-listview">
						<li><a href="chat-messenger.html" title="">Messenger (Chatting)</a></li>
						<li><a href="notifications.html" title="">Notifications</a></li>
						<li><a href="badges.html" title="">Badges</a></li>
						<li><a href="faq.html" title="">Faq's</a></li>
						<li><a href="contribution.html" title="">Contriburion Page</a></li>
						<li><a href="manage-page.html" title="">Manage Page</a></li>
						<li><a href="weather-forecast.html" title="">weather-forecast</a></li>
						<li><a href="statistics.html" title="">Statics/Analytics</a></li>
						<li><a href="shop-cart.html" title="">Shop Cart</a></li>
					</ul></div><div class="mm-panel mm-hidden mm-hasnavbar" id="mm-10" aria-hidden="true"><div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-1" aria-owns="mm-1" aria-haspopup="true"><span class="mm-sronly">Close submenu (Account Setting)</span></a><a class="mm-title" href="#mm-1" aria-hidden="true">Account Setting</a></div><ul class="mm-listview">
						<li><a href="setting.html" title="">Setting</a></li>
						<li><a href="privacy.html" title="">Privacy</a></li>
						<li><a href="support-and-help.html" title="">Support &amp; Help</a></li>
						<li><a href="support-and-help-detail.html" title="">Support Detail</a></li>
						<li><a href="support-and-help-search-result.html" title="">Support Search</a></li>
					</ul></div><div class="mm-panel mm-hidden mm-hasnavbar" id="mm-11" aria-hidden="true"><div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-1" aria-owns="mm-1" aria-haspopup="true"><span class="mm-sronly">Close submenu (Authentication)</span></a><a class="mm-title" href="#mm-1" aria-hidden="true">Authentication</a></div><ul class="mm-listview">
						<li><a href="login.html" title="">Login Page</a></li>
						<li><a href="register.html" title="">Register Page</a></li>
						<li><a href="logout.html" title="">Logout Page</a></li>
						<li><a href="coming-soon.html" title="">Coming Soon</a></li>
						<li><a href="error-404.html" title="">Error 404</a></li>
						<li><a href="error-404-2.html" title="">Error 404-2</a></li>
						<li><a href="error-500.html" title="">Error 500</a></li>
					</ul></div><div class="mm-panel mm-hidden mm-hasnavbar" id="mm-12" aria-hidden="true"><div class="mm-navbar"><a class="mm-btn mm-prev" href="#mm-1" aria-owns="mm-1" aria-haspopup="true"><span class="mm-sronly">Close submenu (Tools)</span></a><a class="mm-title" href="#mm-1" aria-hidden="true">Tools</a></div><ul class="mm-listview">
						<li><a href="typography.html" title="">Typography</a></li>
						<li><a href="popup-modals.html" title="">Popups/Modals</a></li>
						<li><a href="post-versions.html" title="">Post Versions</a></li>
						<li><a href="sliders.html" title="">Sliders / Carousel</a></li>
						<li><a href="google-map.html" title="">Google Maps</a></li>
						<li><a href="widgets.html" title="">Widgets</a></li>
					</ul></div></div>
			
		</nav>
<div id="mm-0" class="mm-page mm-slideout"><div class="wavy-wraper hidden">
		<div class="wavy">
		  <span style="--i:1;">T</span>
		  <span style="--i:2;">L</span>
		  <span style="--i:3;">I</span>
		  <span style="--i:4;">N</span>
		  <span style="--i:5;">K</span>
		  <span style="--i:6;">.</span>
		  <span style="--i:7;">.</span>
		  <span style="--i:8;">.</span>
		  <span style="--i:9;">.</span>
		</div>
	</div><div class="theme-layout">
	
	<div class="postoverlay" style="display: none;"></div>
	
	<div class="responsive-header">
		<div class="mh-head first mm-sticky mh-btns-left mh-btns-right mh-sticky">
			<span class="mh-btns-left">
				<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
			</span>
			<span class="mh-text">
				<a href="newsfeed.html" title=""><img src="images/logo2.png" alt=""></a>
			</span>
			<span class="mh-btns-right">
				<a class="fa fa-sliders" href="#shoppingbag"></a>
			</span>
		</div>
		<div class="mh-head second">
			<form class="mh-form">
				<input placeholder="search">
				<a href="#/" class="fa fa-search"></a>
			</form>
		</div>
		
		
	</div><!-- responsive header -->
	
	<div class="topbar stick" style="">
		<div class="logo">
			<a title="" href="newsfeed.html"><img src="images/logo.png" alt=""></a>
		</div>
		<div class="top-area">
			<div class="main-menu">
				<span>
			    	<i class="fa fa-braille"></i>
			    </span>
			</div>
			<div class="top-search">
				<form method="post" class="">
					<input type="text" placeholder="Search People, Pages, Groups etc">
					<button data-ripple=""><i class="ti-search"></i></button>
				</form>
			</div>
			<div class="page-name">
			    <span>Newsfeed</span>
			 </div>
			<ul class="setting-area">
				<li><a href="newsfeed.html" title="Home" data-ripple=""><i class="fa fa-home"></i></a></li>
				<li>
					<a href="#" title="Friend Requests" data-ripple="">
						<i class="fa fa-user"></i><em class="bg-red">5</em>
					</a>
					<div class="dropdowns ps-container ps-theme-default ps-active-y" data-ps-id="2ebcf14c-9cca-1d84-2ea1-d77e3f262d2a">
						<span>5 New Requests <a href="#" title="">View all Requests</a></span>
						<ul class="drops-menu">
							<li>
								<div>
									<figure>
										<img src="images/resources/thumb-2.jpg" alt="">
									</figure>
									<div class="mesg-meta">
										<h6><a href="#" title="">Loren</a></h6>
										<span><b>Amy</b> is mutule friend</span>
										<i>yesterday</i>
									</div>
									<div class="add-del-friends">
										<a href="#" title=""><i class="fa fa-heart"></i></a>
										<a href="#" title=""><i class="fa fa-trash"></i></a>
									</div>
								</div>	
							</li>
							<li>
								<div>
									<figure>
										<img src="images/resources/thumb-3.jpg" alt="">
									</figure>
									<div class="mesg-meta">
										<h6><a href="#" title="">Tina Trump</a></h6>
										<span><b>Simson</b> is mutule friend</span>
										<i>2 days ago</i>
									</div>
									<div class="add-del-friends">
										<a href="#" title=""><i class="fa fa-heart"></i></a>
										<a href="#" title=""><i class="fa fa-trash"></i></a>
									</div>
								</div>	
							</li>
							<li>
								<div>
									<figure>
										<img src="images/resources/thumb-4.jpg" alt="">
									</figure>
									<div class="mesg-meta">
										<h6><a href="#" title="">Andrew</a></h6>
										<span><b>Bikra</b> is mutule friend</span>
										<i>4 hours ago</i>
									</div>
									<div class="add-del-friends">
										<a href="#" title=""><i class="fa fa-heart"></i></a>
										<a href="#" title=""><i class="fa fa-trash"></i></a>
									</div>
								</div>
							</li>
							<li>
								<div>
									<figure>
										<img src="images/resources/thumb-5.jpg" alt="">
									</figure>
									<div class="mesg-meta">
										<h6><a href="#" title="">Dasha</a></h6>
										<span><b>Sarah</b> is mutule friend</span>
										<i>9 hours ago</i>
									</div>
									<div class="add-del-friends">
										<a href="#" title=""><i class="fa fa-heart"></i></a>
										<a href="#" title=""><i class="fa fa-trash"></i></a>
									</div>
								</div>	
							</li>
							<li>
								<div>
									<figure>
										<img src="images/resources/thumb-1.jpg" alt="">
									</figure>
									<div class="mesg-meta">
										<h6><a href="#" title="">Emily</a></h6>
										<span><b>Amy</b> is mutule friend</span>
										<i>4 hours ago</i>
									</div>
									<div class="add-del-friends">
										<a href="#" title=""><i class="fa fa-heart"></i></a>
										<a href="#" title=""><i class="fa fa-trash"></i></a>
									</div>
								</div>	
							</li>
						</ul>
						<a href="friend-requests.html" title="" class="more-mesg">View All</a>
					<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 340px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 323px;"></div></div></div>
				</li>
				<li>
					<a href="#" title="Notification" data-ripple="">
						<i class="fa fa-bell"></i><em class="bg-purple">7</em>
					</a>
					<div class="dropdowns ps-container ps-theme-default ps-active-y" data-ps-id="94bba675-0889-5745-fd3a-169d135d7b55">
						<span>4 New Notifications <a href="#" title="">Mark all as read</a></span>
						<ul class="drops-menu">
							<li>
								<a href="notifications.html" title="">
									<figure>
										<img src="images/resources/thumb-1.jpg" alt="">
										<span class="status f-online"></span>
									</figure>
									<div class="mesg-meta">
										<h6>sarah Loren</h6>
										<span>commented on your new profile status</span>
										<i>2 min ago</i>
									</div>
								</a>
							</li>
							<li>
								<a href="notifications.html" title="">
									<figure>
										<img src="images/resources/thumb-2.jpg" alt="">
										<span class="status f-online"></span>
									</figure>
									<div class="mesg-meta">
										<h6>Jhon doe</h6>
										<span>Nicholas Grissom just became friends. Write on his wall.</span>
										<i>4 hours ago</i>
										<figure>
											<span>Today is Marina Valentine’s Birthday! wish for celebrating</span>
											<img src="images/birthday.png" alt="">
										</figure>
									</div>
								</a>
							</li>
							<li>
								<a href="notifications.html" title="">
									<figure>
										<img src="images/resources/thumb-3.jpg" alt="">
										<span class="status f-online"></span>
									</figure>
									<div class="mesg-meta">
										<h6>Andrew</h6>
										<span>commented on your photo.</span>
										<i>Sunday</i>
										<figure>
											<span>"Celebrity looks Beautiful in that outfit! We should see each"</span>
											<img src="images/resources/admin.jpg" alt="">
										</figure>
									</div>
								</a>
							</li>
							<li>
								<a href="notifications.html" title="">
									<figure>
										<img src="images/resources/thumb-4.jpg" alt="">
										<span class="status f-online"></span>
									</figure>
									<div class="mesg-meta">
										<h6>Tom cruse</h6>
										<span>nvited you to attend to his event Goo in</span>
										<i>May 19</i>
									</div>
								</a>
								<span class="tag">New</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<figure>
										<img src="images/resources/thumb-5.jpg" alt="">
										<span class="status f-online"></span>
									</figure>
									<div class="mesg-meta">
										<h6>Amy</h6>
										<span>Andrew Changed his profile picture. </span>
										<i>dec 18</i>
									</div>
								</a>
								<span class="tag">New</span>
							</li>
						</ul>
						<a href="notifications.html" title="" class="more-mesg">View All</a>
					<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 340px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 266px;"></div></div></div>
				</li>
				<li>
					<a href="#" title="Messages" data-ripple=""><i class="fa fa-commenting"></i><em class="bg-blue">9</em></a>
					<div class="dropdowns ps-container ps-theme-default ps-active-y" data-ps-id="02343c96-cf06-98d7-b4d0-5465893095c0">
						<span>5 New Messages <a href="#" title="">Mark all as read</a></span>
						<ul class="drops-menu">
							<li>
								<a class="show-mesg" href="#" title="">
									<figure>
										<img src="images/resources/thumb-1.jpg" alt="">
										<span class="status f-online"></span>
									</figure>
									<div class="mesg-meta">
										<h6>sarah Loren</h6>
										<span><i class="ti-check"></i> Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
							</li>
							<li>
								<a class="show-mesg" href="#" title="">
									<figure>
										<img src="images/resources/thumb-2.jpg" alt="">
										<span class="status f-offline"></span>
									</figure>
									<div class="mesg-meta">
										<h6>Jhon doe</h6>
										<span><i class="ti-check"></i> We’ll have to check that at the office and see if the client is on board with</span>
										<i>2 min ago</i>
									</div>
								</a>
							</li>
							<li>
								<a class="show-mesg" href="#" title="">
									<figure>
										<img src="images/resources/thumb-3.jpg" alt="">
										<span class="status f-online"></span>
									</figure>
									<div class="mesg-meta">
										<h6>Andrew</h6>
										<span> <i class="fa fa-paperclip"></i>Hi Jack's! It’s Diana, I just wanted to let you know that we have to reschedule..</span>
										<i>2 min ago</i>
									</div>
								</a>
							</li>
							<li>
								<a class="show-mesg" href="#" title="">
									<figure>
										<img src="images/resources/thumb-4.jpg" alt="">
										<span class="status f-offline"></span>
									</figure>
									<div class="mesg-meta">
										<h6>Tom cruse</h6>
										<span><i class="ti-check"></i> Great, I’ll see you tomorrow!.</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag">New</span>
							</li>
							<li>
								<a class="show-mesg" href="#" title="">
									<figure>
										<img src="images/resources/thumb-5.jpg" alt="">
										<span class="status f-away"></span>
									</figure>
									<div class="mesg-meta">
										<h6>Amy</h6>
										<span><i class="fa fa-paperclip"></i> Sed ut perspiciatis unde omnis iste natus error sit </span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag">New</span>
							</li>
						</ul>
						<a href="chat-messenger.html" title="" class="more-mesg">View All</a>
					<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 340px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 323px;"></div></div></div>
				</li>
				<li><a href="#" title="Languages" data-ripple=""><i class="fa fa-globe"></i><em>EN</em></a>
					<div class="dropdowns languages ps-container ps-theme-default" data-ps-id="7e944227-d074-a339-19eb-a41f9138ce0c">
						<div data-gutter="10" class="row">
							<div class="col-md-3">
							  <ul class="dropdown-meganav-select-list-lang">
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/UK.png">English(UK)
								  </a>
								</li>
								<li class="active">
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/US.png">English(US)
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/DE.png">Deutsch
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/NED.png">Nederlands
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/FR.png">Français
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/SP.png">Español
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/ARG.png">Español (AR)
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/IT.png">Italiano
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/PT.png">Português (PT)
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/BR.png">Português (BR)
								  </a>
								</li>

							  </ul>
							</div>
							<div class="col-md-3">
							  <ul class="dropdown-meganav-select-list-lang">
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/FIN.png">Suomi
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/SW.png">Svenska
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/DEN.png">Dansk
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/CZ.png">Čeština
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/HUN.png">Magyar
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/ROM.png">Română
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/JP.png">日本語
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/CN.png">简体中文
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/PL.png">Polski
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/GR.png">Ελληνικά
								  </a>
								</li>

							  </ul>
							</div>
							<div class="col-md-3">
							  <ul class="dropdown-meganav-select-list-lang">
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/TUR.png">Türkçe
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/BUL.png">Български
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/ARB.png">العربية
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/KOR.png">한국어
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/ISR.png">עברית
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/LAT.png">Latviski
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/UKR.png">Українська
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/IND.png">Bahasa Indonesia
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/MAL.png">Bahasa Malaysia
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/TAI.png">ภาษาไทย
								  </a>
								</li>

							  </ul>
							</div>
							<div class="col-md-3">
							  <ul class="dropdown-meganav-select-list-lang">
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/CRO.png">Hrvatski
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/LIT.png">Lietuvių
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/SLO.png">Slovenčina
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/SERB.png">Srpski
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/SLOVE.png">Slovenščina
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/NAM.png">Tiếng Việt
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/PHI.png">Filipino
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/ICE.png">Íslenska
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/EST.png">Eesti
								  </a>
								</li>
								<li>
								  <a href="#">
									<img title="Image Title" alt="Image Alternative text" src="images/flags/RU.png">Русский
								  </a>
								</li>
							  </ul>
							</div>
						  </div>
					<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
				</li>
				<li><a href="#" title="Help" data-ripple=""><i class="fa fa-question-circle"></i></a>
					<div class="dropdowns helps ps-container ps-theme-default" data-ps-id="e0371eba-e3ae-8b7a-3e63-fdd3e45cb7ce">
						<span>Quick Help</span>
						<form method="post">
							<input type="text" placeholder="How can we help you?">
						</form>
						<span>Help with this page</span>
						<ul class="help-drop">
							<li><a href="forum.html" title=""><i class="fa fa-book"></i>Community &amp; Forum</a></li>
							<li><a href="faq.html" title=""><i class="fa fa-question-circle-o"></i>FAQs</a></li>
							<li><a href="career.html" title=""><i class="fa fa-building-o"></i>Carrers</a></li>
							<li><a href="privacy.html" title=""><i class="fa fa-pencil-square-o"></i>Terms &amp; Policy</a></li>
							<li><a href="#" title=""><i class="fa fa-map-marker"></i>Contact</a></li>
							<li><a href="#" title=""><i class="fa fa-exclamation-triangle"></i>Report a Problem</a></li>
						</ul>
					<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
				</li>
			</ul>
			<div class="user-img">
				<h5>Jack Carter</h5>
				<img src="images/resources/admin.jpg" alt="">
				<span class="status f-online"></span>
				<div class="user-setting">
					<span class="seting-title">Chat setting <a href="#" title="">see all</a></span>
					<ul class="chat-setting">
						<li><a href="#" title=""><span class="status f-online"></span>online</a></li>
						<li><a href="#" title=""><span class="status f-away"></span>away</a></li>
						<li><a href="#" title=""><span class="status f-off"></span>offline</a></li>
					</ul>
					<span class="seting-title">User setting <a href="#" title="">see all</a></span>
					<ul class="log-out">
						<li><a href="about.html" title=""><i class="ti-user"></i> view profile</a></li>
						<li><a href="setting.html" title=""><i class="ti-pencil-alt"></i>edit profile</a></li>
						<li><a href="#" title=""><i class="ti-target"></i>activity log</a></li>
						<li><a href="setting.html" title=""><i class="ti-settings"></i>account setting</a></li>
						<li><a href="logout.html" title=""><i class="ti-power-off"></i>log out</a></li>
					</ul>
				</div>
			</div>
			<span class="ti-settings main-menu" data-ripple=""></span>
		</div>
		<nav>
			<ul class="nav-list">
				<li><a class="" href="#" title=""><i class="fa fa-home"></i> Home Pages</a>
					<ul>
						<li><a href="index-2.html" title="">Pitnik Default</a></li>
						<li><a href="company-landing.html" title="">Company Landing</a></li>
						<li><a href="pitrest.html" title="">Pitrest</a></li>
						<li><a href="redpit.html" title="">Redpit</a></li>
						<li><a href="redpit-category.html" title="">Redpit Category</a></li>
						<li><a href="soundnik.html" title="">Soundnik</a></li>
						<li><a href="soundnik-detail.html" title="">Soundnik Single</a></li>
						<li><a href="career.html" title="">Pitjob</a></li>
						<li><a href="shop.html" title="">Shop</a></li>
						<li><a href="classified.html" title="">Classified</a></li>
						<li><a href="pitpoint.html" title="">PitPoint</a></li>
						<li><a href="pittube.html" title="">Pittube</a></li>
						<li><a href="chat-messenger.html" title="">Messenger</a></li>
					</ul>
				</li>
				<li><a class="" href="#" title=""><i class="fa fa-film"></i> Pittube</a>
					<ul>
						<li><a href="pittube.html" title="">Pittube</a></li>
						<li><a href="pittube-detail.html" title="">Pittube single</a></li>
						<li><a href="pittube-category.html" title="">Pittube Category</a></li>
						<li><a href="pittube-channel.html" title="">Pittube Channel</a></li>
						<li><a href="pittube-search-result.html" title="">Pittube Search Result</a></li>
					</ul>
				</li>
				<li><a class="" href="#" title=""><i class="fa fa-female"></i> PitPoint</a>
					<ul>
						<li><a href="pitpoint.html" title="">PitPoint</a></li>
						<li><a href="pitpoint-detail.html" title="">Pitpoint Detail</a></li>
						<li><a href="pitpoint-list.html" title="">Pitpoint List style</a></li>
						<li><a href="pitpoint-without-baner.html" title="">Pitpoint without Banner</a></li>
						<li><a href="pitpoint-search-result.html" title="">Pitpoint Search</a></li>
					</ul>
				</li>
				<li><a class="" href="#" title=""><i class="fa fa-graduation-cap"></i> Pitjob</a>
					<ul>
						<li><a href="career.html" title="">Pitjob</a></li>
						<li><a href="career-detail.html" title="">Pitjob Detail</a></li>
						<li><a href="career-search-result.html" title="">Job seach page</a></li>
						<li><a href="social-post-detail.html" title="">Social Post Detail</a></li>
					</ul>
				</li>
				<li><a class="" href="#" title=""><i class="fa fa-repeat"></i> Timeline</a>
					<ul>
						<li><a href="timeline.html" title="">Timeline</a></li>
						<li><a href="timeline-photos.html" title="">Timeline Photos</a></li>
						<li><a href="timeline-videos.html" title="">Timeline Videos</a></li>
						<li><a href="timeline-groups.html" title="">Timeline Groups</a></li>
						<li><a href="timeline-friends.html" title="">Timeline Friends</a></li>
						<li><a href="timeline-friends2.html" title="">Timeline Friends-2</a></li>
						<li><a href="about.html" title="">Timeline About</a></li>
						<li><a href="blog-posts.html" title="">Timeline Blog</a></li>
						<li><a href="friends-birthday.html" title="">Friends' Birthday</a></li>
						<li><a href="newsfeed.html" title="">Newsfeed</a></li>
						<li><a href="search-result.html" title="">Search Result</a></li>
					</ul>
				</li>
				<li><a class="" href="#" title=""><i class="fa fa-heart"></i> Favourit Page</a>
					<ul>
						<li><a href="fav-page.html" title="">Favourit Page</a></li>
						<li><a href="fav-favers.html" title="">Fav Page Likers</a></li>
						<li><a href="fav-events.html" title="">Fav Events</a></li>
						<li><a href="fav-event-invitations.html" title="">Fav Event Invitations</a></li>
						<li><a href="event-calendar.html" title="">Event Calendar</a></li>
						<li><a href="fav-page-create.html" title="">Create New Page</a></li>
						<li><a href="price-plans.html" title="">Price Plan</a></li>
					</ul>
				</li>
				<li><a class="" href="#" title=""><i class="fa fa-forumbee"></i> Forum</a>
					<ul>
						<li><a href="forum.html" title="">Forum</a></li>
						<li><a href="forum-create-topic.html" title="">Forum Create Topic</a></li>
						<li><a href="forum-open-topic.html" title="">Forum Open Topic</a></li>
						<li><a href="forums-category.html" title="">Forum Category</a></li>
					</ul>
				</li>
				<li><a class="" href="#" title=""><i class="fa fa-star-o"></i> Featured</a>
					<ul>
						<li><a href="chat-messenger.html" title="">Messenger (Chatting)</a></li>
						<li><a href="notifications.html" title="">Notifications</a></li>
						<li><a href="badges.html" title="">Badges</a></li>
						<li><a href="faq.html" title="">Faq's</a></li>
						<li><a href="contribution.html" title="">Contriburion Page</a></li>
						<li><a href="manage-page.html" title="">Manage Page</a></li>
						<li><a href="weather-forecast.html" title="">weather-forecast</a></li>
						<li><a href="statistics.html" title="">Statics/Analytics</a></li>
						<li><a href="shop-cart.html" title="">Shop Cart</a></li>
					</ul>
				</li>
				<li><a class="" href="#" title=""><i class="fa fa-gears"></i> Account Setting</a>
					<ul>
						<li><a href="setting.html" title="">Setting</a></li>
						<li><a href="privacy.html" title="">Privacy</a></li>
						<li><a href="support-and-help.html" title="">Support &amp; Help</a></li>
						<li><a href="support-and-help-detail.html" title="">Support Detail</a></li>
						<li><a href="support-and-help-search-result.html" title="">Support Search</a></li>
					</ul>
				</li>
				<li><a class="" href="#" title=""><i class="fa fa-lock"></i> Authentication</a>
					<ul>
						<li><a href="login.html" title="">Login Page</a></li>
						<li><a href="register.html" title="">Register Page</a></li>
						<li><a href="logout.html" title="">Logout Page</a></li>
						<li><a href="coming-soon.html" title="">Coming Soon</a></li>
						<li><a href="error-404.html" title="">Error 404</a></li>
						<li><a href="error-404-2.html" title="">Error 404-2</a></li>
						<li><a href="error-500.html" title="">Error 500</a></li>
					</ul>
				</li>
				<li><a class="" href="#" title=""><i class="fa fa-wrench"></i> Tools</a>
					<ul>
						<li><a href="typography.html" title="">Typography</a></li>
						<li><a href="popup-modals.html" title="">Popups/Modals</a></li>
						<li><a href="post-versions.html" title="">Post Versions</a></li>
						<li><a href="sliders.html" title="">Sliders / Carousel</a></li>
						<li><a href="google-map.html" title="">Google Maps</a></li>
						<li><a href="widgets.html" title="">Widgets</a></li>
					</ul>
				</li>
			</ul>
			
		</nav><!-- nav menu -->
	</div><!-- topbar -->
	
	<div class="fixed-sidebar right">
		<div class="chat-friendz">
			<ul class="chat-users ps-container ps-theme-default" data-ps-id="34fd1122-892d-ec5f-0307-c41f0d09ba7a">
				<li>
					<div class="author-thmb">
						<img src="images/resources/side-friend1.jpg" alt="">
						<span class="status f-online"></span>
					</div>
				</li>
				<li>
					<div class="author-thmb">
						<img src="images/resources/side-friend2.jpg" alt="">
						<span class="status f-away"></span>
					</div>
				</li>
				<li>
					<div class="author-thmb">
						<img src="images/resources/side-friend3.jpg" alt="">
						<span class="status f-online"></span>
					</div>
				</li>
				<li>
					<div class="author-thmb">
						<img src="images/resources/side-friend4.jpg" alt="">
						<span class="status f-offline"></span>
					</div>
				</li>
				<li>
					<div class="author-thmb">
						<img src="images/resources/side-friend5.jpg" alt="">
						<span class="status f-online"></span>
					</div>
				</li>
				<li>
					<div class="author-thmb">
						<img src="images/resources/side-friend6.jpg" alt="">
						<span class="status f-online"></span>
					</div>
				</li>
				<li>
					<div class="author-thmb">
						<img src="images/resources/side-friend7.jpg" alt="">
						<span class="status f-offline"></span>
					</div>
				</li>
				<li>
					<div class="author-thmb">
						<img src="images/resources/side-friend8.jpg" alt="">
						<span class="status f-online"></span>
					</div>
				</li>
				<li>
					<div class="author-thmb">
						<img src="images/resources/side-friend9.jpg" alt="">
						<span class="status f-away"></span>
					</div>
				</li>
				<li>
					<div class="author-thmb">
						<img src="images/resources/side-friend10.jpg" alt="">
						<span class="status f-away"></span>
					</div>
				</li>
				<li>
					<div class="author-thmb">
						<img src="images/resources/side-friend8.jpg" alt="">
						<span class="status f-online"></span>
					</div>
				</li>
			<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
			<div class="chat-box">
				<div class="chat-head">
					<span class="status f-online"></span>
					<h6>Bucky Barnes</h6>
					<div class="more">
						<div class="more-optns"><i class="ti-more-alt"></i>
							<ul>
								<li>block chat</li>
								<li>unblock chat</li>
								<li>conversation</li>
							</ul>
						</div>
						<span class="close-mesage"><i class="ti-close"></i></span>
					</div>
				</div>
				<div class="chat-list">
					<ul class="ps-container ps-theme-default ps-active-y" data-ps-id="3f7f9ad5-bbf5-b63a-b275-60ea69d988f7">
						<li class="me">
							<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
							<div class="notification-event">
								<span class="chat-message-item">
									HI, Jack i have faced a problem with your software. are you available now, when i install this i have to received an error.
								</span>
								<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Today at 2:12pm</time></span>
							</div>
						</li>
						<li class="you">
							<div class="chat-thumb"><img src="images/resources/chatlist2.jpg" alt=""></div>
							<div class="notification-event">
								<span class="chat-message-item">
									Hi tina, Please let me know your purchase code, and show me the screnshot of error.
								</span>
								<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Today at 2:14pm</time></span>
							</div>
						</li>
						<li class="me">
							<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
							<div class="notification-event">
								<span class="chat-message-item">
									Yes, sure please wait a while, i ll show you the complete error list. Thank you.
								</span>
								<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Today at 2:15pm</time></span>
							</div>
						</li>
					<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 290px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 215px;"></div></div></ul>
					<form class="text-box">
						<textarea placeholder="Post enter to post..."></textarea>
						<div class="add-smiles">
							<span title="add icon" class="em em-expressionless"></span>
							<div class="smiles-bunch">
								<i class="em em---1"></i>
								<i class="em em-smiley"></i>
								<i class="em em-anguished"></i>
								<i class="em em-laughing"></i>
								<i class="em em-angry"></i>
								<i class="em em-astonished"></i>
								<i class="em em-blush"></i>
								<i class="em em-disappointed"></i>
								<i class="em em-worried"></i>
								<i class="em em-kissing_heart"></i>
								<i class="em em-rage"></i>
								<i class="em em-stuck_out_tongue"></i>
							</div>
						</div>
						
						<button type="submit"></button>
					</form>
				</div>
			</div>
		</div>
	</div><!-- right sidebar user chat -->
	
	<div class="fixed-sidebar left">
		<div class="menu-left">
			<ul class="left-menu ps-container ps-theme-default" data-ps-id="a298e9a1-e0c7-0fb4-26a9-4a3dfd859815">
				<li>
					<a class="menu-small" href="#" title="">
						<i class="ti-menu"></i>
					</a>
				</li>
				
				<li>
					<a href="newsfeed.html" title="" data-toggle="tooltip" data-placement="right" data-original-title="Newsfeed Page">
						<i class="ti-magnet"></i>
					</a>
				</li>
				<li>
					<a href="forum.html" title="" data-toggle="tooltip" data-placement="right" data-original-title="Forum">
						<i class="fa fa-forumbee"></i>
					</a>
				</li>
				<li>
					<a href="timeline-friends.html" title="" data-toggle="tooltip" data-placement="right" data-original-title="Friends">
						<i class="ti-user"></i>
					</a>
				</li>
				<li>
					<a href="fav-page.html" title="" data-toggle="tooltip" data-placement="right" data-original-title="Favourit page">
						<i class="fa fa-star-o"></i>
					</a>
				</li>
				<li>
					<a href="chat-messenger.html" title="" data-toggle="tooltip" data-placement="right" data-original-title="Messages">
						<i class="ti-comment-alt"></i>
					</a>
				</li>
				<li>
					<a href="notifications.html" title="" data-toggle="tooltip" data-placement="right" data-original-title="Notification">
						<i class="fa fa-bell-o"></i>
					</a>
				</li>
				
				<li>
					<a href="statistics.html" title="" data-toggle="tooltip" data-placement="right" data-original-title="Account Stats">
						<i class="ti-stats-up"></i>
					</a>
				</li>
				
				<li>
					<a href="support-and-help.html" title="" data-toggle="tooltip" data-placement="right" data-original-title="Help">
						<i class="fa fa-question-circle-o">
						</i>
					</a>
				</li>
				<li>
					<a href="faq.html" title="" data-toggle="tooltip" data-placement="right" data-original-title="Faq's">
						<i class="ti-light-bulb"></i>
					</a>
				</li>
			<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
		</div>
		<div class="left-menu-full">
			<ul class="menu-slide ps-container ps-theme-default" data-ps-id="b2a1b639-5479-fe9d-fff6-406f2c7fd3c2">
				<li><a class="closd-f-menu" href="#" title=""><i class="ti-close"></i> close Menu</a></li>
				<li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-home"></i> Home Pages</a>
					<ul class="submenu">
						<li><a href="index-2.html" title="">Pitnik Default</a></li>
						<li><a href="company-landing.html" title="">Company Landing</a></li>
						<li><a href="pitrest.html" title="">Pitrest</a></li>
						<li><a href="redpit.html" title="">Redpit</a></li>
						<li><a href="redpit-category.html" title="">Redpit Category</a></li>
						<li><a href="soundnik.html" title="">Soundnik</a></li>
						<li><a href="soundnik-detail.html" title="">Soundnik Single</a></li>
						<li><a href="career.html" title="">Pitjob</a></li>
						<li><a href="shop.html" title="">Shop</a></li>
						<li><a href="classified.html" title="">Classified</a></li>
						<li><a href="pitpoint.html" title="">PitPoint</a></li>
						<li><a href="pittube.html" title="">Pittube</a></li>
						<li><a href="chat-messenger.html" title="">Messenger</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-film"></i> Pittube</a>
					<ul class="submenu">
						<li><a href="pittube.html" title="">Pittube</a></li>
						<li><a href="pittube-detail.html" title="">Pittube single</a></li>
						<li><a href="pittube-category.html" title="">Pittube Category</a></li>
						<li><a href="pittube-channel.html" title="">Pittube Channel</a></li>
						<li><a href="pittube-search-result.html" title="">Pittube Search Result</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-female"></i>PitPoint</a>
					<ul class="submenu">
						<li><a href="pitpoint.html" title="">PitPoint</a></li>
						<li><a href="pitpoint-detail.html" title="">Pitpoint Detail</a></li>
						<li><a href="pitpoint-list.html" title="">Pitpoint List style</a></li>
						<li><a href="pitpoint-without-baner.html" title="">Pitpoint without Banner</a></li>
						<li><a href="pitpoint-search-result.html" title="">Pitpoint Search</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-graduation-cap"></i>Pitjob</a>
					<ul class="submenu">
						<li><a href="career.html" title="">Pitjob</a></li>
						<li><a href="career-detail.html" title="">Pitjob Detail</a></li>
						<li><a href="career-search-result.html" title="">Job seach page</a></li>
						<li><a href="social-post-detail.html" title="">Social Post Detail</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-repeat"></i>Timeline</a>
					<ul class="submenu">
						<li><a href="timeline.html" title="">Timeline</a></li>
						<li><a href="timeline-photos.html" title="">Timeline Photos</a></li>
						<li><a href="timeline-videos.html" title="">Timeline Videos</a></li>
						<li><a href="timeline-groups.html" title="">Timeline Groups</a></li>
						<li><a href="timeline-friends.html" title="">Timeline Friends</a></li>
						<li><a href="timeline-friends2.html" title="">Timeline Friends-2</a></li>
						<li><a href="about.html" title="">Timeline About</a></li>
						<li><a href="blog-posts.html" title="">Timeline Blog</a></li>
						<li><a href="friends-birthday.html" title="">Friends' Birthday</a></li>
						<li><a href="newsfeed.html" title="">Newsfeed</a></li>
						<li><a href="search-result.html" title="">Search Result</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-heart"></i>Favourit Page</a>
					<ul class="submenu">
						<li><a href="fav-page.html" title="">Favourit Page</a></li>
						<li><a href="fav-favers.html" title="">Fav Page Likers</a></li>
						<li><a href="fav-events.html" title="">Fav Events</a></li>
						<li><a href="fav-event-invitations.html" title="">Fav Event Invitations</a></li>
						<li><a href="event-calendar.html" title="">Event Calendar</a></li>
						<li><a href="fav-page-create.html" title="">Create New Page</a></li>
						<li><a href="price-plans.html" title="">Price Plan</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-forumbee"></i>Forum</a>
					<ul class="submenu">
						<li><a href="forum.html" title="">Forum</a></li>
						<li><a href="forum-create-topic.html" title="">Forum Create Topic</a></li>
						<li><a href="forum-open-topic.html" title="">Forum Open Topic</a></li>
						<li><a href="forums-category.html" title="">Forum Category</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-star-o"></i>Featured</a>
					<ul class="submenu">
						<li><a href="chat-messenger.html" title="">Messenger (Chatting)</a></li>
						<li><a href="notifications.html" title="">Notifications</a></li>
						<li><a href="badges.html" title="">Badges</a></li>
						<li><a href="faq.html" title="">Faq's</a></li>
						<li><a href="contribution.html" title="">Contriburion Page</a></li>
						<li><a href="manage-page.html" title="">Manage Page</a></li>
						<li><a href="weather-forecast.html" title="">weather-forecast</a></li>
						<li><a href="statistics.html" title="">Statics/Analytics</a></li>
						<li><a href="shop-cart.html" title="">Shop Cart</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-gears"></i>Account Setting</a>
					<ul class="submenu">
						<li><a href="setting.html" title="">Setting</a></li>
						<li><a href="privacy.html" title="">Privacy</a></li>
						<li><a href="support-and-help.html" title="">Support &amp; Help</a></li>
						<li><a href="support-and-help-detail.html" title="">Support Detail</a></li>
						<li><a href="support-and-help-search-result.html" title="">Support Search</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-lock"></i>Authentication</a>
					<ul class="submenu">
						<li><a href="login.html" title="">Login Page</a></li>
						<li><a href="register.html" title="">Register Page</a></li>
						<li><a href="logout.html" title="">Logout Page</a></li>
						<li><a href="coming-soon.html" title="">Coming Soon</a></li>
						<li><a href="error-404.html" title="">Error 404</a></li>
						<li><a href="error-404-2.html" title="">Error 404-2</a></li>
						<li><a href="error-500.html" title="">Error 500</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-wrench"></i>Tools</a>
					<ul class="submenu">
						<li><a href="typography.html" title="">Typography</a></li>
						<li><a href="popup-modals.html" title="">Popups/Modals</a></li>
						<li><a href="post-versions.html" title="">Post Versions</a></li>
						<li><a href="sliders.html" title="">Sliders</a></li>
						<li><a href="google-map.html" title="">Google Maps</a></li>
						<li><a href="widgets.html" title="">Widgets</a></li>
					</ul>
				</li>
			<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
		</div>
	</div><!-- left sidebar menu -->
		
	<section>
		<div class="gap2 gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						
				</div>
			</div>
		</div>	
	<p class="post"></p></section>

	<a title="" href="shop-cart.html" class="shopping-cart" data-toggle="tooltip" data-original-title="Your Cart Items">Cart <i class="fa fa-shopping-bag"></i><span>02</span></a>

	<div class="bottombar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<span class="copyright">© Pitnik 2020. All rights reserved.</span>
					<i><img src="images/credit-cards.png" alt=""></i>
				</div>
			</div>
		</div>
	</div>
</div><div class="side-panel">
		<h4 class="panel-title">General Setting</h4>
		<form method="post">
			<div class="setting-row">
				<span>use night mode</span>
				<input type="checkbox" id="nightmode1"> 
				<label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Notifications</span>
				<input type="checkbox" id="switch22"> 
				<label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Notification sound</span>
				<input type="checkbox" id="switch33"> 
				<label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>My profile</span>
				<input type="checkbox" id="switch44"> 
				<label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Show profile</span>
				<input type="checkbox" id="switch55"> 
				<label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
			</div>
		</form>
		<h4 class="panel-title">Account Setting</h4>
		<form method="post">
			<div class="setting-row">
				<span>Sub users</span>
				<input type="checkbox" id="switch66"> 
				<label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>personal account</span>
				<input type="checkbox" id="switch77"> 
				<label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Business account</span>
				<input type="checkbox" id="switch88"> 
				<label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Show me online</span>
				<input type="checkbox" id="switch99"> 
				<label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Delete history</span>
				<input type="checkbox" id="switch101"> 
				<label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Expose author name</span>
				<input type="checkbox" id="switch111"> 
				<label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
			</div>
		</form>
	</div><div class="popup-wraper2">
		<div class="popup post-sharing">
			<span class="popup-closed"><i class="ti-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head">
					<select data-placeholder="Share to friends..." multiple="" class="chosen-select multi" style="display: none;">
						<option>Share in your feed</option>
						<option>Share in friend feed</option>
						<option>Share in a page</option>
						<option>Share in a group</option>
						<option>Share in message</option>
					</select><div class="chosen-container chosen-container-multi" style="width: 144px;" title=""><ul class="chosen-choices"><li class="search-field"><input type="text" value="Share to friends..." class="default" autocomplete="off" style="width: 128px;"></li></ul><div class="chosen-drop"><ul class="chosen-results"></ul></div></div>
					<div class="post-status">
						<span><i class="fa fa-globe"></i></span>
						<ul>
							<li><a href="#" title=""><i class="fa fa-globe"></i> Post Globaly</a></li>
							<li><a href="#" title=""><i class="fa fa-user"></i> Post Private</a></li>
							<li><a href="#" title=""><i class="fa fa-user-plus"></i> Post Friends</a></li>
						</ul>
					</div>
				</div>
				<div class="postbox">
					<div class="post-comt-box">
						<form method="post">
							<input type="text" placeholder="Search Friends, Pages, Groups, etc....">
							<textarea placeholder="Say something about this..."></textarea>
							<div class="add-smiles">
								<span title="add icon" class="em em-expressionless"></span>
								<div class="smiles-bunch">
									<i class="em em---1"></i>
									<i class="em em-smiley"></i>
									<i class="em em-anguished"></i>
									<i class="em em-laughing"></i>
									<i class="em em-angry"></i>
									<i class="em em-astonished"></i>
									<i class="em em-blush"></i>
									<i class="em em-disappointed"></i>
									<i class="em em-worried"></i>
									<i class="em em-kissing_heart"></i>
									<i class="em em-rage"></i>
									<i class="em em-stuck_out_tongue"></i>
								</div>
							</div>

							<button type="submit"></button>
						</form>	
					</div>
					<figure><img src="images/resources/share-post.jpg" alt=""></figure>
					<div class="friend-info">
						<figure>
							<img alt="" src="images/resources/admin.jpg">
						</figure>
						<div class="friend-name">
							<ins><a title="" href="time-line.html">Jack Carter</a> share <a title="" href="#">link</a></ins>
							<span>Yesterday with @Jack Piller and @Emily Stone at the concert of # Rock'n'Rolla in Ontario.</span>
						</div>
					</div>
					<div class="share-to-other">
						<span>Share to other socials</span>
						<ul>
							<li><a class="facebook-color" href="#" title=""><i class="fa fa-facebook-square"></i></a></li>
							<li><a class="twitter-color" href="#" title=""><i class="fa fa-twitter-square"></i></a></li>
							<li><a class="dribble-color" href="#" title=""><i class="fa fa-dribbble"></i></a></li>
							<li><a class="instagram-color" href="#" title=""><i class="fa fa-instagram"></i></a></li>
							<li><a class="pinterest-color" href="#" title=""><i class="fa fa-pinterest-square"></i></a></li>
						</ul>
					</div>
					<div class="copy-email">
						<span>Copy &amp; Email</span>
						<ul>
							<li><a href="#" title="Copy Post Link"><i class="fa fa-link"></i></a></li>
							<li><a href="#" title="Email this Post"><i class="fa fa-envelope"></i></a></li>
						</ul>
					</div>
					<div class="we-video-info">
						<ul>
							<li>
								<span title="" data-toggle="tooltip" class="views" data-original-title="views">
									<i class="fa fa-eye"></i>
									<ins>1.2k</ins>
								</span>
							</li>
							<li>
								<span title="" data-toggle="tooltip" class="views" data-original-title="views">
									<i class="fa fa-share-alt"></i>
									<ins>20k</ins>
								</span>
							</li>
						</ul>
						<button class="main-btn color" data-ripple="">Submit</button>
						<button class="main-btn cancel" data-ripple="">Cancel</button>
					</div>
				</div>
			</div>	
		</div>
	</div><div class="popup-wraper3">
		<div class="popup">
			<span class="popup-closed"><i class="ti-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head">
					<h5>Report Post</h5>
				</div>
				<div class="Rpt-meta">
					<span>We're sorry something's wrong. How can we help?</span>
					<form method="post" class="c-form">
						<div class="form-radio">
						  <div class="radio">
							<label>
							  <input type="radio" name="radio" checked="checked"><i class="check-box"></i>It's spam or abuse
							</label>
						  </div>
						  <div class="radio">
							<label>
							  <input type="radio" name="radio"><i class="check-box"></i>It breaks r/technology's rules
							</label>
						  </div>
							<div class="radio">
							<label>
							  <input type="radio" name="radio"><i class="check-box"></i>Not Related
							</label>
						  </div>
							<div class="radio">
							<label>
							  <input type="radio" name="radio"><i class="check-box"></i>Other issues
							</label>
						  </div>
						</div>
					<div>
						<label>Write about Report</label>
						<textarea placeholder="write someting about Post" rows="2"></textarea>
					</div>
					<div>
						<button data-ripple="" type="submit" class="main-btn">Submit</button>
						<a href="#" data-ripple="" class="main-btn3 cancel">Close</a>
					</div>
					</form>	
				</div>
			</div>	
		</div>
	</div><div class="popup-wraper1">
		<div class="popup direct-mesg">
			<span class="popup-closed"><i class="ti-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head">
					<h5>Send Message</h5>
				</div>
				<div class="send-message">
					<form method="post" class="c-form">
						<input type="text" placeholder="Sophia">
						<textarea placeholder="Write Message"></textarea>
						<button type="submit" class="main-btn">Send</button>
					</form>
					<div class="add-smiles">
						<div class="uploadimage">
							<i class="fa fa-image"></i>
							<label class="fileContainer">
								<input type="file">
							</label>
						</div>
						<span title="add icon" class="em em-expressionless"></span>
						<div class="smiles-bunch">
							<i class="em em---1"></i>
							<i class="em em-smiley"></i>
							<i class="em em-anguished"></i>
							<i class="em em-laughing"></i>
							<i class="em em-angry"></i>
							<i class="em em-astonished"></i>
							<i class="em em-blush"></i>
							<i class="em em-disappointed"></i>
							<i class="em em-worried"></i>
							<i class="em em-kissing_heart"></i>
							<i class="em em-rage"></i>
							<i class="em em-stuck_out_tongue"></i>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div><div class="strp-spinner-move strp-horizontal strp-side-right strp-spinner-move-skin-strip" style="display: none;"><div class="strp-spinner" style="display: none; opacity: 0;"><div class="strp-spinner-rotate" style="animation: 0s ease 0s 1 normal none running none;"><div class="strp-spinner-frame" style="opacity: 0.01; transform: rotate(4.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.03; transform: rotate(9deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.04; transform: rotate(13.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.05; transform: rotate(18deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.06; transform: rotate(22.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.08; transform: rotate(27deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.09; transform: rotate(31.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.1; transform: rotate(36deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.11; transform: rotate(40.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.13; transform: rotate(45deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.14; transform: rotate(49.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.15; transform: rotate(54deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.16; transform: rotate(58.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.18; transform: rotate(63deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.19; transform: rotate(67.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.2; transform: rotate(72deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.21; transform: rotate(76.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.23; transform: rotate(81deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.24; transform: rotate(85.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.25; transform: rotate(90deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.26; transform: rotate(94.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.28; transform: rotate(99deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.29; transform: rotate(103.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.3; transform: rotate(108deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.31; transform: rotate(112.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.33; transform: rotate(117deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.34; transform: rotate(121.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.35; transform: rotate(126deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.36; transform: rotate(130.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.38; transform: rotate(135deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.39; transform: rotate(139.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.4; transform: rotate(144deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.41; transform: rotate(148.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.43; transform: rotate(153deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.44; transform: rotate(157.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.45; transform: rotate(162deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.46; transform: rotate(166.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.48; transform: rotate(171deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.49; transform: rotate(175.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.5; transform: rotate(180deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.51; transform: rotate(184.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.53; transform: rotate(189deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.54; transform: rotate(193.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.55; transform: rotate(198deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.56; transform: rotate(202.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.58; transform: rotate(207deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.59; transform: rotate(211.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.6; transform: rotate(216deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.61; transform: rotate(220.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.63; transform: rotate(225deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.64; transform: rotate(229.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.65; transform: rotate(234deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.66; transform: rotate(238.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.68; transform: rotate(243deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.69; transform: rotate(247.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.7; transform: rotate(252deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.71; transform: rotate(256.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.73; transform: rotate(261deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.74; transform: rotate(265.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.75; transform: rotate(270deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.76; transform: rotate(274.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.78; transform: rotate(279deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.79; transform: rotate(283.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.8; transform: rotate(288deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.81; transform: rotate(292.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.83; transform: rotate(297deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.84; transform: rotate(301.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.85; transform: rotate(306deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.86; transform: rotate(310.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.88; transform: rotate(315deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.89; transform: rotate(319.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.9; transform: rotate(324deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.91; transform: rotate(328.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.93; transform: rotate(333deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.94; transform: rotate(337.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.95; transform: rotate(342deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.96; transform: rotate(346.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.98; transform: rotate(351deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.99; transform: rotate(355.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 1; transform: rotate(360deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div></div></div></div><div class="strp-window strp-horizontal strp-side-right strp-window-skin-strip strp-measured"><div class="strp-pages"></div><div class="strp-nav strp-nav-previous"><div class="strp-nav-button" style="display: none; opacity: 1;"><div class="strp-nav-button-background"></div><div class="strp-nav-button-icon"></div></div></div><div class="strp-nav strp-nav-next"><div class="strp-nav-button" style="display: none; opacity: 1;"><div class="strp-nav-button-background"></div><div class="strp-nav-button-icon"></div></div></div><div class="strp-close"><div class="strp-close-background"></div><div class="strp-close-icon"></div></div></div><div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 10px; right: 5px; opacity: 0; cursor: pointer;"><i class="ti-arrow-up"></i></div></div>

	<!-- side panel -->
	
	<!-- share popup -->
	
	<!-- report popup -->
	
	<!-- send message popup -->	
	
	<script src="<?php echo base_url() ?>assets/js/main.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery-stories.js"></script>
	<script src="../../../cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>
	<script src="<?php echo base_url() ?>assets/js/locationpicker.jquery.js"></script>
	<script src="<?php echo base_url() ?>assets/js/map-init.js"></script>
	<script src="<?php echo base_url() ?>assets/js/script.js"></script>
	<script>
		jQuery(document).ready(function($) {
			
			$('#us3').locationpicker({
			  location: {
			    latitude: -8.681013,
			    longitude: 115.23506410000005
			  },
			  radius: 0,
			  inputBinding: {
			    latitudeInput: $('#us3-lat'),
			    longitudeInput: $('#us3-lon'),
			    radiusInput: $('#us3-radius'),
			    locationNameInput: $('#us3-address')
			  },
			  enableAutocomplete: true,
			  onchanged: function (currentLocation, radius, isMarkerDropped) {
			    // Uncomment line below to show alert on each Location Changed event
			    //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
			  }
			});

		});	
</script>

	

<!-- Mirrored from wpkixx.com/html/pitnik/newsfeed.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Oct 2020 12:42:19 GMT -->
<div id="mm-blocker" class="mm-slideout"></div></body></html>
       

     
   
