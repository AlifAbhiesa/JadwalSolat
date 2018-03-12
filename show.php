<!DOCTYPE html>
<html lang="en">

<head>
    <title>Solat Bro !</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
     <!-- Favicon icon -->
     <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
     <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

     <!-- Google font-->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

     <!-- iconfont -->
     <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

     <!-- simple line icon -->
     <link rel="stylesheet" type="text/css" href="assets/icon/simple-line-icons/css/simple-line-icons.css">

     <!-- Required Fremwork -->
     <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/css/bootstrap.min.css">

     <!-- Weather css -->
     <link href="assets/css/svg-weather.css" rel="stylesheet">

     <!-- Echart js -->
     <script src="assets/plugins/charts/echarts/js/echarts-all.js"></script>

     <!-- Style.css -->
     <link rel="stylesheet" type="text/css" href="assets/css/main.css">

     <!-- Responsive.css-->
     <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

     <!--color css-->
     <link rel="stylesheet" type="text/css" href="assets/css/color/color-1.min.css" id="color"/>

 </head>
 <body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
    <div class="wrapper">
    <!--   <div class="loader-bg">
    <div class="loader-bar">
    </div>
</div> -->
<!-- Navbar-->
<header class="main-header-top hidden-print">
    <a href="index.html" class="logo"><img class="img-fluid able-logo" src="assets/images/logo.png" alt="Theme-logo"></a>
    <nav class="navbar navbar-static-top">
        <!-- Navbar Right Menu-->
        <div class="navbar-custom-menu f-right">
            <div class="upgrade-button m-r-10">
                <a href="https://instagram.com/xcode___" class="icon-circle txt-white btn btn-sm btn-warning upgrade-button">
                    <span>About</span>
                </a>
            </div>
           
                    
                </div>
            </nav>
        </header>
       
<!-- Sidebar chat end-->
<div class="content-wrapper">

   <!-- Container-fluid starts -->
   <!-- Main content starts -->
   <div class="container-fluid">
    <div class="row">
        <div class="main-header">
            <h4>SOLAT BRO</h4>
        </div>
    </div>
    <!-- 4-blocks row start -->
    <a href="kota.php"><div style="align-content: center" class="row m-b-30 dashboard-header">
               
                <div class="col-lg-3 col-sm-6">
                    <div class="col-sm-12 card dashboard-product">
                        <span>Data Kota</span>
                        <h2 class="dashboard-total-products counter">315</h2>
                        
                        <div class="side-box bg-success">
                            <i class="icon-social-soundcloud"></i>
                        </div>
                    </div>
                </div>
        </a>
        
        <?php
        $nama_kota = $_GET['nama_kota'];
        $id = $_GET['idk'];
        $mnt = $_GET['bln'];
        $yr = $_GET['thn'];
$str = file_get_contents("http://wahidganteng.ga/process/api/729f09fbfe94ae60c805aae8cacdcc57/jadwal-sholat?idk=$id&bln=$mnt&thn=$yr");
$json = json_decode($str, true);

        
        
?>
               
               
               
            </div>
            <!-- 4-blocks row end -->
            <!-- 1-3-block row start -->
            <div class="row">
               
            </div>
           
            
        </div>
        <!-- 1-3-block row end -->

        <!-- 3-1-block start -->
        <div class="row">
            <!-- Recent Items start -->
            <div class="col-lg-4 col-md-12 grid-item">
                
            </div>
            <!-- Recent Items end -->
            <div style="margin-left: 10px;margin-right: 10px" class="col-lg-8 col-md-12 grid-item">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-7 p-r-0 txt-white climacon-left">
                            <div class="card-block bg-primary">
                                <div class="m-b-5">
                                    <h4 class="dashboard-city"><?php echo $nama_kota ?>, ID</h4>
                                    
                                </div>
                                <div>
                                    <h6 class="cloud-date">Yesterday, 12th October 2015</h6>
                                    <div class="cloud-speed">
                                       <h5 class="city-cloud">Jadwal Solat</h5>
                                    </div>
                                </div>
                                <div class="svg-cloud">
                                    <svg version="1.1" id="sun" class="climacon climacon_sun" viewBox="15 15 70 70">
                                        <clipPath id="sunFillClip">
                                            <path d="M0,0v100h100V0H0z M50.001,57.999c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C57.999,54.417,54.418,57.999,50.001,57.999z" />
                                        </clipPath>
                                        <g class="climacon_iconWrap climacon_iconWrap-sun">
                                            <g class="climacon_componentWrap climacon_componentWrap-sun">
                                                <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M72.03,51.999h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S73.136,51.999,72.03,51.999z" />
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northEast" d="M64.175,38.688c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L64.175,38.688z" />
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M50.034,34.002c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C52.034,33.106,51.136,34.002,50.034,34.002z" />
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northWest" d="M35.893,38.688l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C37.94,39.469,36.674,39.469,35.893,38.688z" />
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-west" d="M34.034,50c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C33.14,48,34.034,48.896,34.034,50z" />
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southWest" d="M35.893,61.312c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L35.893,61.312z" />
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-south" d="M50.034,65.998c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C48.034,66.893,48.929,65.998,50.034,65.998z" />
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southEast" d="M64.175,61.312l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C62.126,60.531,63.392,60.531,64.175,61.312z" />
                                                </g>
                                                <g class="climacon_componentWrap climacon_componentWrap_sunBody" clip-path="url(#sunFillClip)">
                                                    <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="50.034" cy="50" r="11.999" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    

                                </div>
                                <ul class="weather-temp">
                                    
                                    <li>
                                        <h6 class="txt-white"><?php echo $json['data'][0]['shubuh']; ?></h6>
                                        <h7>Subuh</h7>
                                    </li>
                                    <li>
                                        <h6 class="txt-white"><?php echo $json['data'][0]['dzuhur']; ?></h6>
                                        <h7>Dzuhur</h7>
                                    </li>
                                    <li>
                                        <h6 class="txt-white"><?php echo $json['data'][0]['ashr']; ?></h6>
                                        <h7>Ashr</h7>
                                    </li>
                                    <li>
                                        <h6 class="txt-white"><?php echo $json['data'][0]['maghrib']; ?></h6>
                                        <h7>Maghrib</h7>
                                    </li>
                                    <li>
                                        <h6 class="txt-white"><?php echo $json['data'][0]['isya']; ?></h6>
                                        <h7>Isya</h7>
                                    </li>
                               
                </ul>
            </div>
        </div>
        <div class="col-lg-5 p-l-0 climacon-right">
            <div class="p-10">

                <div class="table-responsive">

                    <table class="table weather-table m-t-15">
                        <tbody>
                            <tr class="svg-icon">
                                <td>Imsyak</td>
                               
                            <td><?php echo $json['data'][0]['imsyak']; ?></td>

                        </tr>
                            <tr class="svg-icon">
                                <td>Terbit</td>
                               
                            <td><?php echo $json['data'][0]['terbit']; ?></td>

                        </tr>
                             <tr class="svg-icon">
                                <td>Duha</td>
                               
                            <td><?php echo $json['data'][0]['dhuha']; ?></td>

                        </tr>
                            
                            
                        
   
</tbody>
</table>
</div>

</div>
</div>
</div>

</div>
</div>
</div>

<!-- 3-1-block end -->

<!-- 2-1 block start -->
<!-- 2-1 block end -->
</div>
<!-- Main content ends -->
<!-- Container-fluid ends -->
<div class="fixed-button">
    <a href="https://instagram.com/xcode___" class="btn btn-md btn-primary">
      <i class="fa fa-shopping-cart" aria-hidden="true"></i> About
  </a>
</div>
</div>



<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 9]>
      <div class="ie-warning">
          <h1>Warning!!</h1>
          <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
          <div class="iew-container">
              <ul class="iew-download">
                  <li>
                      <a href="http://www.google.com/chrome/">
                          <img src="assets/images/browser/chrome.png" alt="Chrome">
                          <div>Chrome</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.mozilla.org/en-US/firefox/new/">
                          <img src="assets/images/browser/firefox.png" alt="Firefox">
                          <div>Firefox</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://www.opera.com">
                          <img src="assets/images/browser/opera.png" alt="Opera">
                          <div>Opera</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.apple.com/safari/">
                          <img src="assets/images/browser/safari.png" alt="Safari">
                          <div>Safari</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                          <img src="assets/images/browser/ie.png" alt="">
                          <div>IE (9 & above)</div>
                      </a>
                  </li>
              </ul>
          </div>
          <p>Sorry for the inconvenience!</p>
      </div>
      <![endif]-->
      <!-- Warning Section Ends -->

      <!-- Required Jqurey -->
      <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
      <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
      <script src="assets/plugins/tether/dist/js/tether.min.js"></script>

      <!-- Required Fremwork -->
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

      <!-- waves effects.js -->
      <script src="assets/plugins/Waves/waves.min.js"></script>

      <!-- Scrollbar JS-->
      <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
      <script src="assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

      <!--classic JS-->
      <script src="assets/plugins/classie/classie.js"></script>

      <!-- notification -->
      <script src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>

      <!-- Rickshaw Chart js -->
      <script src="assets/plugins/d3/d3.js"></script>
      <script src="assets/plugins/rickshaw/rickshaw.js"></script>

      <!-- Sparkline charts -->
      <script src="assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

      <!-- Counter js  -->
      <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
      <script src="assets/plugins/countdown/js/jquery.counterup.js"></script>

      <!-- custom js -->
      <script type="text/javascript" src="assets/js/main.min.js"></script>
      <script type="text/javascript" src="assets/pages/dashboard.js"></script>
      <script type="text/javascript" src="assets/pages/elements.js"></script>
      <script src="assets/js/menu.min.js"></script>

      <script>
        var $window = $(window);
        var nav = $('.fixed-button');
        $window.scroll(function(){
            if ($window.scrollTop() >= 200) {
             nav.addClass('active');
         }
         else {
             nav.removeClass('active');
         }
     });
    </script>
</body>

</html>
