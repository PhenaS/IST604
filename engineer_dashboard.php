<!DOCTYPE html>
<html>
<title>SAW INC</title>
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
  
  <!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      <div class="w3-col s4">
        <h4>Problems, Questions, or Comments?</h4>
        <p>Let us know so we can improve</p>
        <form action="/action_page.php" target="_blank">
          <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
          <button type="submit" class="w3-button w3-block w3-black">Send</button>
        </form>
      </div>

      <div class="w3-col s4">
        <h4>About</h4>
        <p><a href="#">About us</a></p>
        <p><a href="https://www.dol.gov/whd/FOH/ch64/index.htm" target="_blank">WHD FLSA chapter 64</a></p>       
        <p><a href="https://www.dol.gov/whd/regs/compliance/whdfs39b.pdf">Commensurate wages</a></p>
        <p><a href="locations.php">Our Locations</a></p> 
        <p><a href="jobpage.php">We're hiring</a></p>
         <p><a href="helppage.php">Help</a></p>
      </div>

      <div class="w3-col s4 w3-justify">
        <h4>Find us</h4>
        <p><i class="fa fa-fw fa-map-marker"></i> Solutions at Work </p>
        <p><i class="fa fa-fw fa-phone"></i> 012-345-6789</p>
        <p><i class="fa fa-fw fa-envelope"></i> ex@mail.com</p>
        <br>
        <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
        <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
        <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
        <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
        <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
      </div>
    </div>
  </footer>


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
