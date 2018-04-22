<!DOCTYPE html>
<html>
    <head>
        <title>Solutions At Work Inc.</title>
    </head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
*{
                box-sizing: border-box;
            }
            .column {
                float: left;
                width: 50%;
                padding: 10px;
            }
            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            @media screen and (max-width: 600px) {
                .column {
                    width: 100%;
                }
            }

            form{
                text-align: left;
            }
            
            .submit{
                float: right;
                bottom: 0;
            }

            input[type=text], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type=email], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type=password], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type=submit] {
                width: 100%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

</style>

<title>Showroom Registration</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
        <form>
            <h1 align = "center"> Register New Customer </h1>
                <div = class="row">
                <div class="column">
                    <h2> *First Name: </h2>
                    <input type = text name = "firstname" placeholder="First Name" required><br>
                    <h2> *Last Name: </h2>
                    <input type = text name = "lastname" placeholder="Last Name"><br>
                    <h2> Business Name: </h2>
                    <input type = text name = "businessname" placeholder="Business Name"><br>
                    <h2> *E-Mail Address: </h2>
                    <input type = email name = "e-mailaddress" placeholder="E-mail Address"><br>
                    <h2> *Phone: </h2>
                    <input type = text name = "phone" placeholder="Phone Number"><br>
                    <h2> *Password: </h2>
                    <input type = password name = "password" placeholder="Password"><br>
                </div>
                
                <div class="column">
                    <h2> *Address: </h2>
                    <input type = text name = "address" placeholder="Address"><br>
                    <h2> *City: </h2>
                    <input type = text name = "city" placeholder="City"><br>
                    <h2> *State: </h2>
                    <input type = text name = "state" placeholder="State"><br>
                    <h2> *Zip: </h2>
                    <input type = email name = "e-mailaddress" placeholder="E-mail Address"><br>
                    <h2> *Country: </h2>
                    <input type = text name = "phone" placeholder="Phone Number"><br>
                    <h2> *Confirm Password: </h2>
                    <input type = password name = "password" placeholder="Password"><br>
                </div>    
                </div>
                <input type="checkbox" name="terms" value="yes">I have read and agree to the terms and condidtions<br>
                <input type ="submit" name ="Register"> 
        </form>
    </body>
</html>