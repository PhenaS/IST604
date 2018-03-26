<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>

 
  
  <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container w3-black w3-padding-32">
    <h1>Welcome </h1>       
          <H3><span style="color:#b0e0e6">You made $102 last pay period </span></H3>
          <H3> You seem to be best at custodial work </H3>
          <H3> You can work on toilets to do better </H3>
  </div>
  
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
