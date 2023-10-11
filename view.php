<?php include_once 'database.php';?>
<!DOCTYPE html>
<html>
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
    <table class="table">
      <?php
        
        $query = 'SELECT * FROM players';
        $result = $database->getData($query);
      ?>
      <!-- add our table headings -->
      <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
      </tr>
      <!-- now run our loop to display our query -->
      <?php
        foreach($result as $key => $res){
          echo "<tr>";
          echo "<td>".$res['name']."</td>";
          echo "<td>".$res['age']."</td>";
          echo "<td>".$res['email']."</td>";
          echo "</tr>";
        }
      ?>
    </table>
  </div>
  </main>
  <footer>
    <p>© Fire Emblem</p>
  </footer>
</body>
</html>

<style>
.container {
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>