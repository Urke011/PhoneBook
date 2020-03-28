<?php
require 'bootstrap.php';
if(isset($_POST['Sbtbutton']))
{
  $user->insertUser();
}?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Add Contact</title>
</head>
<body>
  <div class="navbar navbar-expend navbar-light bg-light">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="index.php" class="nav-link">Back to Homepage</a>
      </li>
    </ul>
  </div>
          <div class="jumbotron text-center">
            <h4>Add new Contact</h4>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-8 offset-2">
                <?php if($user->userInserted): ?>
                <div class="alert alert-success">New Contact is inserted!</div>
                <?php endif; ?>
                <form action="add.php" method="post">
                  <input type="text" name="firstname" class="form-control" placeholder="Firstname" required><br>
                  <input type="text" name="lastname"  class="form-control" placeholder="Lastname" required><br>
                  <input type="text" name="tlnumber"   class="form-control" placeholder="Number" required><br>
                  <button  class="form-control btn btn-primary" name="Sbtbutton">Insert</button>
                </form>

              </div>
            </div>
          </div>


</body>
</html>
