

  <?php require 'bootstrap.php';
          if(isset($_POST['button']))
          {
             $users = $user->selectAll();

          }



      if(isset($_GET['user_id']))
	  {
		  $user->deleteAll($_GET['user_id']);
		  header("Location: index.php");
	  }
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Phonebook</title>
  </head>
  <body>
    <div class="navbar navbar-expend navbar-light bg-light">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="add.php" class="nav-link">Add Contact</a>
        </li>
      </ul>
    </div>

        <div class="jumbotron text-center">
          <h1>Phonebook</h1>
        </div>

              <div class="container">
                <div class="row">
                  <div class="col-8 offset-2">
                    <img src="phonebook.png" class="rounded mx-auto d-block "width=200px"" alt="..."><br>
                    <form action="index.php" method="post">
                      <input type="text" name="criteria" placeholder="Search Contact" class="form-control" required><br>
                      <button class="btn btn-primary form-control" name="button">Search</button>
                    </form>
                      <?php if(!empty($_POST['criteria'])): ?>

                  <?php foreach($users as $user): ?>
                    <a href="index.php?user_id=<?php echo $user->id; ?>" class="nav-link">Remove Contact</a>
                        <li>First name<?php echo " ".$user->Fname ?></li>
                        <li>Last name<?php echo " ".$user->Lname ?></li>
                        <li>Tel<?php echo " ". $user->tel ?></li>
                        <hr>
                  <?php endforeach; ?>
                  <?php endif; ?>


                  </div>
                </div>

              </div>













  </body>
  </html>
