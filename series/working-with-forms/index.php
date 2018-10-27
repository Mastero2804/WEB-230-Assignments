

<!--
  01. Explain what the action attribute is and does.
  02. Explain what the method attribute is and does.
-->
<form action="index.php" method="GET">
  Day:<br/><input type="text" name="day"><br>
  Date:<br/><input type="text" name="date"><br>
  Year:<br/><input type="text" name="year"><br>
</form>

<!--
  Extra Credit - stretch yourself and try to add some style to your form.
  Add bootstrap to give your form a little style.
-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <div class="fluid-container">
    <div class="row justify-content-center">
      <div class="col-6" style="padding:25px;">
        <h1>Working With Forms</h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-6">
        <form action="index.php" method="GET">
          <div class="form-group">
            <label for="day">Day:</label>
            <input type="text" name="day" class="form-control" placeholder="Enter day here." value="">
          </div>
          <div class="form-group">
            <label for="day">Date:</label>
            <input type="text" name="date" class="form-control" placeholder="Enter date here." value="">
          </div>
          <div class="form-group">
            <label for="day">Year:</label>
            <input type="number" name="year" class="form-control" placeholder="Enter year here." value="">
          </div>
          <div>
            <input type="submit" class="btn" value="Submit">
          </div>
        </form>
      </div>
    </div>
  </div>
