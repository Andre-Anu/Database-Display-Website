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
    <link rel="shortcut icon" href="img/icon.png" type="icon.png" />
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
        <!-- Product container 1 -->
        <div class="container">
          <h1>Golden Deer</h1>
          <h2>Join the Golden Deer and Ignite Your Destiny!</h2>

          <p>Attention, aspiring adventurers, free spirits, and seekers of knowledge! The Golden Deer house at Garreg Mach Monastery beckons to those who dare to embrace a life beyond the ordinary. Led by the charismatic and enigmatic Claude, our house stands as a beacon of prosperity, curiosity, and unbridled potential.</p>
          <p>Embark on an adventure that transcends the battlefield. Join the Golden Deer, where laughter, camaraderie, and the pursuit of knowledge reign supreme.</p>
          <br>
          <h2>Your destiny awaits—ignite it with the Golden Deer!</h2>

          <section class="form-row row justify-content-center">
          <form method="post" action="add.php" class="form-horizontal col-md-6 col-md-offset-3">
          <p><input class="text-box" type="text" name="name" placeholder="Your Name"></p>
          <p><input class="text-box" type="text" name="age" placeholder="Your Age"></p>
          <p><input class="text-box" type="text" name="email" placeholder="Your Email"></p>
          <button class="button" type="submit" name="Submit" value="Add">JOIN !</button>
          <button class="button" type="reset" value="Clear">Clear</button>
        </div>
    </main>

    <footer>
        <p>© Fire Emblem</p>
    </footer>
</body>
</html>
