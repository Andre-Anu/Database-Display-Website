<!doctype html>
<html lang="en">
<head>
    <!-- Metadata and title for the page -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fire Emblem</title>
    <!-- Link to external CSS stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- Favicon for the website -->
    <link rel="shortcut icon" href="icon.png" type="image/x-icon" />
    <!-- Validate the HTML at https://validator.w3.org/ -->
</head>

<body>
  <header>

    <a class="navbar-brand" href="index.php"><img src="./img/Golden_Deer_Banner.webp" alt="header logo"></a>
    <h1>Garreg Mach Monastery</h1>
        <!-- Navigation menu -->
    <nav>
      <ul>
        <li><a href="index.php">Golden Deer</a></li>
        <li><a href="view.php">View</a></li>
      </ul>
    </nav>

  </header>

  <main>
    <div class="container">
      <?php
        // start by including our classes
      
        include_once ('validate.php');
        include_once ('database.php');
        // create our class objects
        $valid = new validate();
        
        if(!empty($_POST['Submit'])){
          // using our escape_string function
          $name = $_POST['name'];
          $age = $_POST['age'];
          $email = $_POST['email'];
          // using our functions found in our validate class 
          // (checkEmpty validAge validEmail)
          $msg = $valid->checkEmpty($_POST, array('name', 'age', 'email'));
          $checkAge = $valid->validAge($_POST['age']);
          $checkEmail = $valid->validEmail($_POST['email']);
          // now handle any empty fields
          if($msg != null){
            echo $msg;
            //link to the previous page
            echo "<a href='javascript:self.history.back();'>Go Back</a>";
          }elseif(!$checkAge){
            echo '<p>Please provide a valid age.</p>';
            echo "<a href='javascript:self.history.back();'>Go Back</a>";
          }elseif(!$checkEmail){
            echo '<p>Please provide a valid email.</p>';
            echo "<a href='javascript:self.history.back();'>Go Back</a>";
          }else{
            // if all the fields are valid
            $result = $database->execute("INSERT INTO players(name,age,email) VALUES('$name','$age','$email')");
            // let the user know that the record has been added
            if($result){
              echo "<p>Data added successfully.</p>";
              echo "<a href='view.php' class='button'>View Result</a>";
            }
                
          }
        }
      ?>
    </div>
  </main>
  <footer>
    <p>© Fire Emblem</p>
  </footer>
</body>
</html>
