<!doctype html>
<html lang="en">
.form-inline > * {
   margin:5px 3px;
}
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>SAW Proudction Sheet Entry</title>
  </head>
  
<body>
  <h1>SAW Proudction Sheet Entry</h1>

<form class="form-inline" action="/action_page.php">
  
  <select class="form-control form-control-lg">
    <option>Individual</option>
  </select>

  <div class="form-group">
    <label for="time">Time In:</label>
      <input type="time" class="form-control" id="Time In">
  </div>
  
  <div class="form-group">
    <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd">
  </div>
    
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
    
  <button type="submit" class="btn btn-default">Submit</button>

</form>

</html>