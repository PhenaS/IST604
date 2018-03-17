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
  
<body>
  <div class="w3-row-padding">
      <div class="w3-col s4">
        <h4>Solutions at Work inc</h4>
        <p>We are a 501(c)(3) Non-Profit Organization <br><br> Our sole mission is to improve the lives <br> of people with developmental disabilities</p>
        <form action="/action_page.php" target="_blank">
          <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Address Line 1" name="Address Line 1" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Address Line 2" name="Address Line 2" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="City" name="City" required></p>
          <select>
            <option value="" disabled selected>Select your Payment Method</option>
            <option value="Credit Card">Credit Card</option>
            <option value="PayPal">Paypal</option>
          </select>
          <p><input type="radio" name="Term" value="Monthly"> Monthly Pledge</p>
          <p><input type="radio" name="Term" value="One Time">   One Time Donation<br></p>
          <button type="submit" class="w3-button w3-block w3-black">Continue to Payment</button>
        </form>
      </div>
</body>