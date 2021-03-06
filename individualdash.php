<!DOCTYPE html>
<html>
    
<title>Solutions At Work Inc.</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>SAW</b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="individuallogin.php" class="w3-bar-item w3-button">Your Employee Info</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Full History <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="" class="w3-bar-item w3-button w3-light-grey">Paychecks</a>
      <a href="" class="w3-bar-item w3-button">Pieces Produced</a>
      <a href="" class="w3-bar-item w3-button">Hourly Rates</a>
     </div>
  </div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a> 
  <a href="donations.php"  class="w3-bar-item w3-button w3-padding">Donate</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">SAW</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">Solutions At Work Inc</p>
    <p class="w3-right"></p>
  </header>

  <div class="w3-display-container w3-container">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
        <br>
    </div>
  </div>
  
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Pay Rate'],
          ['Mar 2016',  3.33],
          ['Aug 2016',  4.08],
          ['Mar 2017',  4.25],
          ['Aug 2017',  4.10],
          ['Mar 2018',  4.40]
        ]);

        var options = {
          title: 'Your Pay Rate History',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>  
      <div class="w3-container w3-padding-32 w3-black" >
      <div style="color:#DAF7A6;"><h1>Welcome <?php session_start();
                                                    echo $_SESSION["indname"];
          ?>! </h1></div>
         
    
          <H3><span style="color:#FF3333;">You made $256 last pay period before taxes </span></H3>          
          <H3><span style="color:#CC6699;">You currently make $4.40 per hour </span></H3>
          <H3><span style="color:#9575cd;">You seem to be best at cleaning tables </span></H3>
          <H3><span style="color:#b39ddb;">You could use the most work on changing trash bags </span></H3>
          <H3><span style="color:#00bcd4;">You will be rated again in February 2018 </span></H3>
  </div>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', '%Productivity'],
          ['Vaccuum', 80],
          ['Dust Mop', 30],
          ['Wet Mop', 33],
          ['Tables', 90],
          ['Toilets', 50],
          ['Sinks', 80],
          ['Windows', 20],
          ['Trash Bags', 18]
        ]);

        var options = {
          chart: {
            title: 'Your Performance',
            subtitle: '% Productivity on Your Most Recent 90/10 by Task',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="barchart_material" style="width: 900px; height: 500px;"></div>
  </body> 
   <!-- Welcome section -->

  
  <!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      <div class="w3-col s4">           
      <div class="w3-col s4">
    </div>
      <div class="w3-col s4 w3-justify">
      </div>
    </div>
  </footer>
  

  <!-- End page content -->
</div>

<!-- Newsletter Modal -->
<div id="newsletter" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      <h2 class="w3-wide">Mailing List</h2>
      <p>Join our mailing list to receive updates on us</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<script>
// Accordion 
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
