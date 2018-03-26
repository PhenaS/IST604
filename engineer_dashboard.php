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

 
  
  <div class="w3-container w3-padding-32 w3-black" >
      <div style="color:#DAF7A6;"><h1>Welcome <?php echo $sow[2];?>! </h1></div>
          <H3><span style="color:#FF3333;">You made $102 last pay period </span></H3>          
          <H3><span style="color:#CC6699;">You made $102 last pay period </span></H3>
          <H3><span style="color:#9575cd;">You made $102 last pay period </span></H3>
          <H3><span style="color:#b39ddb;">You made $102 last pay period </span></H3>
          <H3><span style="color:#00bcd4;">You made $102 last pay period </span></H3>
  </div>
  

              

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
