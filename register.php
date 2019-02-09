<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Code Central</title>
    <link rel="stylesheet" href="style.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="login.css" type="text/css" charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Joti+One" rel="stylesheet">
</head>

<body>
    <header>
        <h1>Code Central</h1>
    </header>
    <nav>
            <a href="index.php">Home</a>
            <div class="dropdown">
                <button class="dropbtn">Scratch Basics 
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href = scratchinfo.html>Scratch Info</a>  
                </div>
    
            <div class="dropdown">
                <button class="dropbtn">HTML/CSS basics 
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="htmlcss.html">Basics - File Setup</a>
                  <a href="cssbasics.html">Basics - CSS</a>
                </div>
              </div>
              <a href="register.php">Register</a>
    </nav>
    <br>
    <br>
    <h3>Code Central</h3>
    <br>
    <br>  
    <form action="action_page.php">
        <div class="container">
          <h1>Register</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
      
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
      
          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
          <hr>
      
          <p>By creating an account you agree to our <a href="tcp.html" target="_blank">Terms & Privacy</a>.</p>
          <button type="submit" class="registerbtn">Register</button>
        </div>
      
        <div class="container signin">
          <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>
      </form>
        <div class = "ad">
         <img src="images/advert1.gif" width="400" height="700" class="tutorialimg1"border="0" alt="meh">
        </div>
        </a>
</body>

</html>