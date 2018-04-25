<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <style>
.form-inline > * {
   margin:5px 3px;
}
</style>

    <title>SAW Proudction Sheet Entry</title>
</head>
  
<body>
  <h1>SAW Proudction Sheet Entry</h1>

<form class="form-inline" method="post" action="prod_entry_auth.php">
  
  <select class="form-control form-control-lg" id="Individual">
    <option>Individual</option>
  </select>

  <div class="form-group">
    <label for="work_date">Work Date:</label>
      <input type="date" class="form-control" id="work_date" required>
  </div>
  
  <div class="form-group">
    <label for="time">Time In:</label>
      <input type="time" class="form-control" id="Time In" required>
  </div>

  <div class="form-group">
    <label for="time">Time Out:</label>
      <input type="time" class="form-control" id="Time Out" required>
  </div>

  <select class="form-control form-control-lg" id="job">
    <option>Job Number</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
  </select>

    <select class="form-control form-control-lg" id="op">
    <option>Operation Number</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
  </select>
    
  <div class="form-group">
    <label for="example-number-input" class="col-2 col-form-label">Number of Pieces</label>
    <div class="col-10">
    <input class="form-control" type="number" value="42" id="piece_qty" required>
  </div></div>

  <div class="checkbox">
    <label><input type="checkbox"> Absent Full Day</label>
  </div>

  <div class="checkbox">
    <label><input type="checkbox"> Absent Part Day</label>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>

</form>

</html>

