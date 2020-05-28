<html lang="fr">
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
<head>

      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>TLink | <?php echo $pageTitle ?> </title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="<?php echo base_url() ;  ?>images/icon.svg">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ;  ?>assets/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ;  ?>assets/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ;  ?>assets/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ;  ?>assets/css/responsive.css">
      <link rel="stylesheet" href="<?php echo base_url() ;  ?>assets/css/dropify.min.css">
            <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151434993-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-151434993-1');
      </script>

      <!-- Fire Base-->
      <!-- The core Firebase JS SDK is always required and must be listed first -->
      <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/7.14.5/firebase-app.js"></script>

        <!-- TODO: Add SDKs for Firebase products that you want to use
             https://firebase.google.com/docs/web/setup#available-libraries -->
        <script src="https://www.gstatic.com/firebasejs/7.14.5/firebase-analytics.js"></script>

        <script>
          // Your web app's Firebase configuration
          var firebaseConfig = {
            apiKey: "AIzaSyDfVVw527MNJjPNlERuAh80SGUMfcKwIkM",
            authDomain: "tunivisions-link.firebaseapp.com",
            databaseURL: "https://tunivisions-link.firebaseio.com",
            projectId: "tunivisions-link",
            storageBucket: "tunivisions-link.appspot.com",
            messagingSenderId: "272644001004",
            appId: "1:272644001004:web:dec9a355751019710c69c9",
            measurementId: "G-9ESX0NM8CG"
          };
          // Initialize Firebase
          firebase.initializeApp(firebaseConfig);
          firebase.analytics();
        </script>

      
      
   <style type="text/css">
    .apexcharts-canvas {
  position: relative;
  user-select: none;
  /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
}

/* scrollbar is not visible by default for legend, hence forcing the visibility */
.apexcharts-canvas ::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 6px;
}
.apexcharts-canvas ::-webkit-scrollbar-thumb {
  border-radius: 4px;
  background-color: rgba(0,0,0,.5);
  box-shadow: 0 0 1px rgba(255,255,255,.5);
  -webkit-box-shadow: 0 0 1px rgba(255,255,255,.5);
}
.apexcharts-canvas.dark {
  background: #343F57;
}

.apexcharts-inner {
  position: relative;
}

.legend-mouseover-inactive {
  transition: 0.15s ease all;
  opacity: 0.20;
}

.apexcharts-series-collapsed {
  opacity: 0;
}

.apexcharts-gridline, .apexcharts-text {
  pointer-events: none;
}

.apexcharts-tooltip {
  border-radius: 5px;
  box-shadow: 2px 2px 6px -4px #999;
  cursor: default;
  font-size: 14px;
  left: 62px;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  top: 20px;
  overflow: hidden;
  white-space: nowrap;
  z-index: 12;
  transition: 0.15s ease all;
}
.apexcharts-tooltip.light {
  border: 1px solid #e3e3e3;
  background: rgba(255, 255, 255, 0.96);
}
.apexcharts-tooltip.dark {
  color: #fff;
  background: rgba(30,30,30, 0.8);
}
.apexcharts-tooltip * {
  font-family: inherit;
}

.apexcharts-tooltip .apexcharts-marker,
.apexcharts-area-series .apexcharts-area,
.apexcharts-line {
  pointer-events: none;
}

.apexcharts-tooltip.active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-tooltip-title {
  padding: 6px;
  font-size: 15px;
  margin-bottom: 4px;
}
.apexcharts-tooltip.light .apexcharts-tooltip-title {
  background: #ECEFF1;
  border-bottom: 1px solid #ddd;
}
.apexcharts-tooltip.dark .apexcharts-tooltip-title {
  background: rgba(0, 0, 0, 0.7);
  border-bottom: 1px solid #333;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
  display: inline-block;
  font-weight: 600;
  margin-left: 5px;
}

.apexcharts-tooltip-text-z-label:empty,
.apexcharts-tooltip-text-z-value:empty {
  display: none;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
  font-weight: 600;
}

.apexcharts-tooltip-marker {
  width: 12px;
  height: 12px;
  position: relative;
  top: 0px;
  margin-right: 10px;
  border-radius: 50%;
}

.apexcharts-tooltip-series-group {
  padding: 0 10px;
  display: none;
  text-align: left;
  justify-content: left;
  align-items: center;
}

.apexcharts-tooltip-series-group.active .apexcharts-tooltip-marker {
  opacity: 1;
}
.apexcharts-tooltip-series-group.active, .apexcharts-tooltip-series-group:last-child {
  padding-bottom: 4px;
}
.apexcharts-tooltip-series-group-hidden {
  opacity: 0;
  height: 0;
  line-height: 0;
  padding: 0 !important;
}
.apexcharts-tooltip-y-group {
  padding: 6px 0 5px;
}
.apexcharts-tooltip-candlestick {
  padding: 4px 8px;
}
.apexcharts-tooltip-candlestick > div {
  margin: 4px 0;
}
.apexcharts-tooltip-candlestick span.value {
  font-weight: bold;
}

.apexcharts-tooltip-rangebar {
  padding: 5px 8px;
}

.apexcharts-tooltip-rangebar .category {
  font-weight: 600;
  color: #777;
}

.apexcharts-tooltip-rangebar .series-name {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

.apexcharts-xaxistooltip {
  opacity: 0;
  padding: 9px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
  transition: 0.15s ease all;
}

.apexcharts-xaxistooltip.dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-xaxistooltip:after, .apexcharts-xaxistooltip:before {
  left: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-xaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-left: -6px;
}
.apexcharts-xaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-left: -7px;
}

.apexcharts-xaxistooltip-bottom:after, .apexcharts-xaxistooltip-bottom:before {
  bottom: 100%;
}

.apexcharts-xaxistooltip-top:after, .apexcharts-xaxistooltip-top:before {
  top: 100%;
}

.apexcharts-xaxistooltip-bottom:after {
  border-bottom-color: #ECEFF1;
}
.apexcharts-xaxistooltip-bottom:before {
  border-bottom-color: #90A4AE;
}

.apexcharts-xaxistooltip-bottom.dark:after {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-xaxistooltip-bottom.dark:before {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top:after {
  border-top-color:#ECEFF1
}
.apexcharts-xaxistooltip-top:before {
  border-top-color: #90A4AE;
}
.apexcharts-xaxistooltip-top.dark:after {
  border-top-color:rgba(0, 0, 0, 0.5);
}
.apexcharts-xaxistooltip-top.dark:before {
  border-top-color: rgba(0, 0, 0, 0.5);
}


.apexcharts-xaxistooltip.active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-yaxistooltip {
  opacity: 0;
  padding: 4px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
}

.apexcharts-yaxistooltip.dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-yaxistooltip:after, .apexcharts-yaxistooltip:before {
  top: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}
.apexcharts-yaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-top: -6px;
}
.apexcharts-yaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-top: -7px;
}

.apexcharts-yaxistooltip-left:after, .apexcharts-yaxistooltip-left:before {
  left: 100%;
}

.apexcharts-yaxistooltip-right:after, .apexcharts-yaxistooltip-right:before {
  right: 100%;
}

.apexcharts-yaxistooltip-left:after {
  border-left-color: #ECEFF1;
}
.apexcharts-yaxistooltip-left:before {
  border-left-color: #90A4AE;
}
.apexcharts-yaxistooltip-left.dark:after {
  border-left-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-yaxistooltip-left.dark:before {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right:after {
  border-right-color: #ECEFF1;
}
.apexcharts-yaxistooltip-right:before {
  border-right-color: #90A4AE;
}
.apexcharts-yaxistooltip-right.dark:after {
  border-right-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-yaxistooltip-right.dark:before {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip.active {
  opacity: 1;
}
.apexcharts-yaxistooltip-hidden {
  display: none;
}

.apexcharts-xcrosshairs, .apexcharts-ycrosshairs {
  pointer-events: none;
  opacity: 0;
  transition: 0.15s ease all;
}

.apexcharts-xcrosshairs.active, .apexcharts-ycrosshairs.active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-ycrosshairs-hidden {
  opacity: 0;
}

.apexcharts-zoom-rect {
  pointer-events: none;
}
.apexcharts-selection-rect {
  cursor: move;
}

.svg_select_points, .svg_select_points_rot {
  opacity: 0;
  visibility: hidden;
}
.svg_select_points_l, .svg_select_points_r {
  cursor: ew-resize;
  opacity: 1;
  visibility: visible;
  fill: #888;
}
.apexcharts-canvas.zoomable .hovering-zoom {
  cursor: crosshair
}
.apexcharts-canvas.zoomable .hovering-pan {
  cursor: move
}

.apexcharts-xaxis,
.apexcharts-yaxis {
  pointer-events: none;
}

.apexcharts-zoom-icon,
.apexcharts-zoom-in-icon,
.apexcharts-zoom-out-icon,
.apexcharts-reset-zoom-icon,
.apexcharts-pan-icon,
.apexcharts-selection-icon,
.apexcharts-menu-icon,
.apexcharts-toolbar-custom-icon {
  cursor: pointer;
  width: 20px;
  height: 20px;
  line-height: 24px;
  color: #6E8192;
  text-align: center;
}


.apexcharts-zoom-icon svg,
.apexcharts-zoom-in-icon svg,
.apexcharts-zoom-out-icon svg,
.apexcharts-reset-zoom-icon svg,
.apexcharts-menu-icon svg {
  fill: #6E8192;
}
.apexcharts-selection-icon svg {
  fill: #444;
  transform: scale(0.76)
}

.dark .apexcharts-zoom-icon svg,
.dark .apexcharts-zoom-in-icon svg,
.dark .apexcharts-zoom-out-icon svg,
.dark .apexcharts-reset-zoom-icon svg,
.dark .apexcharts-pan-icon svg,
.dark .apexcharts-selection-icon svg,
.dark .apexcharts-menu-icon svg,
.dark .apexcharts-toolbar-custom-icon svg{
  fill: #f3f4f5;
}

.apexcharts-canvas .apexcharts-zoom-icon.selected svg,
.apexcharts-canvas .apexcharts-selection-icon.selected svg,
.apexcharts-canvas .apexcharts-reset-zoom-icon.selected svg {
  fill: #008FFB;
}
.light .apexcharts-selection-icon:not(.selected):hover svg,
.light .apexcharts-zoom-icon:not(.selected):hover svg,
.light .apexcharts-zoom-in-icon:hover svg,
.light .apexcharts-zoom-out-icon:hover svg,
.light .apexcharts-reset-zoom-icon:hover svg,
.light .apexcharts-menu-icon:hover svg {
  fill: #333;
}

.apexcharts-selection-icon, .apexcharts-menu-icon {
  position: relative;
}
.apexcharts-reset-zoom-icon {
  margin-left: 5px;
}
.apexcharts-zoom-icon, .apexcharts-reset-zoom-icon, .apexcharts-menu-icon {
  transform: scale(0.85);
}

.apexcharts-zoom-in-icon, .apexcharts-zoom-out-icon {
  transform: scale(0.7)
}

.apexcharts-zoom-out-icon {
  margin-right: 3px;
}

.apexcharts-pan-icon {
  transform: scale(0.62);
  position: relative;
  left: 1px;
  top: 0px;
}
.apexcharts-pan-icon svg {
  fill: #fff;
  stroke: #6E8192;
  stroke-width: 2;
}
.apexcharts-pan-icon.selected svg {
  stroke: #008FFB;
}
.apexcharts-pan-icon:not(.selected):hover svg {
  stroke: #333;
}

.apexcharts-toolbar {
  position: absolute;
  z-index: 11;
  top: 0px;
  right: 3px;
  max-width: 176px;
  text-align: right;
  border-radius: 3px;
  padding: 0px 6px 2px 6px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.apexcharts-toolbar svg {
  pointer-events: none;
}

.apexcharts-menu {
  background: #fff;
  position: absolute;
  top: 100%;
  border: 1px solid #ddd;
  border-radius: 3px;
  padding: 3px;
  right: 10px;
  opacity: 0;
  min-width: 110px;
  transition: 0.15s ease all;
  pointer-events: none;
}

.apexcharts-menu.open {
  opacity: 1;
  pointer-events: all;
  transition: 0.15s ease all;
}

.apexcharts-menu-item {
  padding: 6px 7px;
  font-size: 12px;
  cursor: pointer;
}
.light .apexcharts-menu-item:hover {
  background: #eee;
}
.dark .apexcharts-menu {
  background: rgba(0, 0, 0, 0.7);
  color: #fff;
}

@media screen and (min-width: 768px) {
  .apexcharts-toolbar {
    /*opacity: 0;*/
  }

  .apexcharts-canvas:hover .apexcharts-toolbar {
    opacity: 1;
  }
}

.apexcharts-datalabel.hidden {
  opacity: 0;
}

.apexcharts-pie-label,
.apexcharts-datalabel, .apexcharts-datalabel-label, .apexcharts-datalabel-value {
  cursor: default;
  pointer-events: none;
}

.apexcharts-pie-label-delay {
  opacity: 0;
  animation-name: opaque;
  animation-duration: 0.3s;
  animation-fill-mode: forwards;
  animation-timing-function: ease;
}

.apexcharts-canvas .hidden {
  opacity: 0;
}

.apexcharts-hide .apexcharts-series-points {
  opacity: 0;
}

.apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events, .apexcharts-radar-series path, .apexcharts-radar-series polygon {
  pointer-events: none;
}

/* markers */

.apexcharts-marker {
  transition: 0.15s ease all;
}

@keyframes opaque {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

/* Resize generated styles */
@keyframes resizeanim {
  from {
    opacity: 0;
  }
  to {
    opacity: 0;
  }
}

.resize-triggers {
  animation: 1ms resizeanim;
  visibility: hidden;
  opacity: 0;
}

.resize-triggers, .resize-triggers > div, .contract-trigger:before {
  content: " ";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
}

.resize-triggers > div {
  background: #eee;
  overflow: auto;
}

.contract-trigger:before {
  width: 200%;
  height: 200%;
}
</style><style id="smooth-scrollbar-style">
[data-scrollbar] {
  display: block;
  position: relative;
}

.scroll-content {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}

.scrollbar-track {
  position: absolute;
  opacity: 0;
  z-index: 1;
  background: rgba(222, 222, 222, .75);
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  -webkit-transition: opacity 0.5s 0.5s ease-out;
          transition: opacity 0.5s 0.5s ease-out;
}
.scrollbar-track.show,
.scrollbar-track:hover {
  opacity: 1;
  -webkit-transition-delay: 0s;
          transition-delay: 0s;
}

.scrollbar-track-x {
  bottom: 0;
  left: 0;
  width: 100%;
  height: 8px;
}
.scrollbar-track-y {
  top: 0;
  right: 0;
  width: 8px;
  height: 100%;
}
.scrollbar-thumb {
  position: absolute;
  top: 0;
  left: 0;
  width: 8px;
  height: 8px;
  background: rgba(0, 0, 0, .5);
  border-radius: 4px;
}
</style>


                            <style type="text/css">
                                            .alligator-turtle {
                                        object-fit: cover;
                                        object-position: 50% 50%;
                                    
                                        border-radius: 20%;

                                        width: 55px;
                                        height: 55px;
                                      }
                            </style>

</head>
   <body class="sidebar-main-active right-column-fixed" onload="getLocation()">
      <!-- loader Start -->
      <div id="loading" style="display: none;">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div id="sidebar-scrollbar" data-scrollbar="true" tabindex="-1" style="overflow: hidden; outline: none;"><div class="scroll-content">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li>
                        <a href="<?php echo base_url() ?>Posts/Acceuil" class="iq-waves-effect"><i class="las la-newspaper"></i><span>Acceuil</span></a>
                     </li>
                     <li>
                        <a href="<?php echo base_url() ?>dashboard" class="iq-waves-effect"><i class="las la-newspaper"></i><span>Dashboard</span></a>
                     </li>
                     <li>
                        <a href="<?php echo base_url() ?>club/clubInfo/<?php echo $clubID ?>" class="iq-waves-effect"><i class="las la-users"></i><span>Mon club</span></a>
                     </li>
                     <li>
                        <a href="<?php echo base_url() ?>Project/projectListing" class="iq-waves-effect"><i class="las la-users"></i><span>Evenement</span></a>
                     </li>
                     <li>
                       <a href="<?php echo base_url() ?>Club/clubListing" class="iq-waves-effect"><i class="ri-list-check"></i><span>Clubs</span></a>
                     </li>
                     
                  </ul>
               </nav>
               <div class="p-3"></div>
            </div><div class="scrollbar-track scrollbar-track-x" style="display: none;"><div class="scrollbar-thumb scrollbar-thumb-x" style="width: 250px; transform: translate3d(0px, 0px, 0px);"></div></div><div class="scrollbar-track scrollbar-track-y" style="display: block;"><div class="scrollbar-thumb scrollbar-thumb-y" style="height: 83.0078px; transform: translate3d(0px, 0px, 0px);"></div></div></div>
         </div>
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-navbar-logo d-flex justify-content-between">
                     <a href="<?php echo base_url() ?>">
                     <img src="<?php echo base_url()?>images/logo rouge.svg" class="img-fluid" alt="">
                     <span> </span>
                     </a>
                     <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-menu-line"></i></div>
                     </div>
                  </div>
                  </div>
                  <div class="iq-search-bar">
                     <form action="<?php echo base_url() ?>User/userListing2" method="post" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Chercher" name="searchText" >
                        
                     </form>
                  </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <?php if ($name != '') { ?>
                     <ul class="navbar-nav ml-auto navbar-list">
                        <li>
                           <a href="<?php echo base_url() ; ?>User/ProfileShow/<?php echo $MyUserId ; ?>" class="iq-waves-effect d-flex align-items-center">

    
                              <img src="https://tunivisions.link/uploads/avatar/<?php echo $avatar ?>" class="alligator-turtle  mr-3 " alt="<?php echo $name ?>">
                             
                              <div class="caption">
                                 <b class="mb-0 line-height"> <?php echo $name ?></b>
                              </div>
                           </a>
                        </li>
                        <li>
                           <a href="<?php echo base_url() ?>" class="iq-waves-effect d-flex align-items-center">
                           <i class="ri-home-4-fill"></i>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="search-toggle iq-waves-effect" href="#"><i class="ri-question-answer-fill"></i></a>
                           <div class="iq-sub-dropdown iq-sub-dropdown-large">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">Messages<small class="badge  badge-light float-right pt-1"></small></h5>
                                    </div>
                                    
                                   <?php foreach ($ChatRecords as $key ) {
                                            
                                          ?>
                                    <div class="iq-friend-request">
                                       <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                          <div class="d-flex align-items-center">
                                             <div class="">
                                                <?php foreach ($key->ChatPartListing as $keyCP ) {
                                                            if( $keyCP->userId != $MyUserId ){ ?>
                                                               <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $keyCP->avatar ?>" alt="chatuserimage" class="alligator-turtle">
                                                         <?php  } } ?>
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 "><?php foreach ($key->ChatPartListing as $keyCP ) {
                                                            if( $keyCP->userId != $MyUserId ){
                                                               echo $keyCP->name.',' ;
                                                            }
                                                         } ?></h6>
                                                <p class="mb-0">15  friends</p>
                                             </div>
                                          </div>
                                          
                                       </div>
                                    </div>
                                     <?php  } ?>

                                    <div class="text-center">
                                       <a href="#" class="mr-3 btn text-primary">Voir plus</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                         <li class="nav-item">
                           <a class="search-toggle iq-waves-effect" href="#"><i class="ri-notification-4-fill"></i></a>
                           <div class="iq-sub-dropdown iq-sub-dropdown-large">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">Notification<small class="badge  badge-light float-right pt-1"></small></h5>
                                    </div>
                                    <?php foreach ($notifRecords as $key ) {
                                      ?>
                                   
                                   
                                    <div class="iq-friend-request">
                                       <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                          <div class="d-flex align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 "><?php echo $key->text ; ?></h6>
                                                <p class="mb-0">Il y a <?php echo xTimeAgo($key->dateNotif,date('Y-m-d H:i:s')) ; ?> </p>
                                             </div>
                                          </div>

                                       </div>
                                    </div>
                                       <?php } ?>

                                    <div class="text-center">
                                       <a href="#" class="mr-3 btn text-primary">Voir plus</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        
                     </ul>
                    <?php } ?>

                      <ul class="navbar-list">
                        <li>
                           <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                           <i class="ri-arrow-down-s-fill"></i>
                           </a>
                           <div class="iq-sub-dropdown iq-user-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3 line-height">
                                       <h5 class="mb-0 text-white line-height">Salut ! <?php echo $name ?></h5>
                                       <span class="text-white font-size-12">En ligne  </span>
                                           
                                    </div>
                                    <a href="<?php echo base_url() ; ?>User/ProfileShow/<?php echo $MyUserId ; ?>" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-file-user-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Mon profile</h6>
                                             <p class="mb-0 font-size-12">mes données personelle.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="<?php echo base_url() ; ?>User/editOld/<?php echo $MyUserId ; ?>" class="iq-sub-card iq-bg-warning-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-warning">
                                             <i class="ri-profile-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Mise à jour mon profile</h6>
                                             <p class="mb-0 font-size-12">Modifier mes informations personelle.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="account-setting.html" class="iq-sub-card iq-bg-info-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-info">
                                             <i class="ri-account-box-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Gestionaire de compte </h6>
                                             <p class="mb-0 font-size-12">gerer mon compte .</p>

                                          </div>
                                       </div>
                                    </a>
                                    
                                    <div class="d-inline-block w-100 text-center p-3">
                                      <p id="demo"></p>
                                       <a class="bg-primary iq-sign-btn" href="<?php echo base_url() ?>logout" role="button">Déconnection<i class="ri-login-box-line ml-2"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
         <!-- TOP Nav Bar END -->
         <!-- Right Sidebar Panel Start-->
         <div class="right-sidebar-mini">
            <div class="right-sidebar-panel p-0">
               <div class="iq-card shadow-none">
                  <div class="iq-card-body p-0">

                     <div class="media-height p-3">
                     <h5><?php echo count($ConnrectedUser) ; ?> Tunimateurs connectés </h5>
                     <hr>
                     

                        <?php foreach ($ConnrectedUser as $key ) {
                          
                   ?>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-online">
                              <img class="alligator-turtle" src="https://tunivisions.link/uploads/avatar/<?php echo $key->avatar ?>" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href="#"><?php echo $key->name ; ?></a></h6>
                              <p class="mb-0">il y a <?php echo xTimeAgo($key->createdDtm,date('Y-m-d H:i:s')) ; ?></p>
                              <p class="mb-0">via <?php echo $key->platform ; ?></p>

                           </div>
                        </div>
                        
                          <?php    }  ?>
                          <hr>

                          <!--
                        <div class="media align-items-center">
                           <div class="iq-profile-avatar">
                              <img class="rounded-circle avatar-50" src="images/user/02.jpg" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href="#">Monty Carlo</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>

                        -->
                     </div>
                     <div class="right-sidebar-toggle bg-primary mt-3">
                        <i class="ri-arrow-left-line side-left-icon"></i>
                        <i class="ri-arrow-right-line side-right-icon"><span class="ml-3 d-inline-block">Close Menu</span></i> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Right Sidebar Panel End-->
         <!-- Page Content  -->
