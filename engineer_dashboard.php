<!DOCTYPE html>
<html>
<title>Engineer Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
p.speech {
  position: relative;
  width: 1200px;
  height: 100px;
  text-align: center;
  line-height: 100px;
  background-color: #fff;
  border: 8px solid #666;
  -webkit-border-radius: 30px;
  -moz-border-radius: 30px;
  border-radius: 30px;
  -webkit-box-shadow: 2px 2px 4px #888;
  -moz-box-shadow: 2px 2px 4px #888;
  box-shadow: 2px 2px 4px #888;
}  
  </style>
<body>

<div class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">Ratings Due Dates</a>
  <a href="#" class="w3-bar-item w3-button">Rating Tool</a>
  <a href="#" class="w3-bar-item w3-button">Analog Rating Entry</a>
  <a href="#" class="w3-bar-item w3-button">View Current Rates</a>
  <a href="#" class="w3-bar-item w3-button">View Historial Rates</a>
</div>

<div>
  <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>Engineer Dashboard</h1>
    <p class="speech">New job arriving at Euclid AAC Today</p>
      </div>
</div>

<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
     
</body>
</html> 
