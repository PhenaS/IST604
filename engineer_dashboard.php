<!DOCTYPE html>
<html>
<title>SAW INC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">View Expiring Rates</a>
  <a href="#" class="w3-bar-item w3-button">View Outdated Jobs</a>
  <a href="#" class="w3-bar-item w3-button">Enter Time Study Info</a>
  <a href="#" class="w3-bar-item w3-button">View Current Rates</a>
  <a href="#" class="w3-bar-item w3-button">View Current Job Info</a>
  <a href="#" class="w3-bar-item w3-button">View Historical Hourly Rates</a>
  <a href="#" class="w3-bar-item w3-button">View Historical Piece Rates</a>
</div>
  <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
  
 <div class="w3-container w3-padding-32 w3-black" >
     <div style="color:whitesmoke;"><h1>Welcome! </h1></div>
     <div style="color:whitesmoke;"><h1>Please choose what you'd like to do on the sidebar </h1></div>
 </div>
  
  <!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      <div class="w3-col s4">
        <h4>Problems, questions, comments, or requests? Let us know below</h4>
        <form action="/action_page.php" target="_blank">
          <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
          <button type="submit" class="w3-button w3-block w3-black">Send</button>
        </form>
      </div>

      <div class="w3-col s4">
        <h4>About SAWinc.azurewebsites.net</h4>
        <p>Created by Phena Senediak for IST604</p>
        <p>Written in Netbeans using HTML, PHP, and JavaScript</p>
        <p>Web App and SQL Server Datbase Hosted in MS Azure</p>
        <p>Stylesheets by W3</p>
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
