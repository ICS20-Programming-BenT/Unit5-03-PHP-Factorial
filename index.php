<!DOCTYPE html>
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Factorial Webpage - PHP">
    <meta name="keywords" content="Immaculata, ICS2O">
    <meta name="author" content="Ben Thomson">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index1/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index1/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index1/favicon-16x16.png">
    <link rel="manifest" href="./fav_index1/site.webmanifest">

    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-deep_orange.min.css" />
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Web page title -->
    <title>Product Of Numbers</title>
  </head>
  <body>
    
    <!-- Google's MDL -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  
    <!-- Container for web page content -->
    <main style = "padding-left:20px; padding-right:20px;">

      <!-- Web page heading -->
      <?php echo "<h1>Product of Numbers</h1>" ?>

      <!-- Image -->
      <center>
        <img src="./images/factorial.png" alt="Factorial" width="400" height="300">
      </center>
      <br><br>
      
      <!-- Body text -->
      <?php echo "<p>Welcome! Please input a whole number below, and this webpage uses a DO... WHILE loop to give you that number’s factorial.</p>" ?>
      <?php echo "<h4>Your Input:</h4>" ?>
       
      <!-- Form for user input -->
      <form action="./results.php" method="post" target="results">
        <label for="number">Enter a whole number:</label>
        <input type="number" step="1" id="user-number" placeholder="A whole number..." name="user-number"><br><br>
        <input type="submit" id="button" value="Calculate Factorial!" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
      </form>
      <br>
      
      <!-- iFrame for product of numbers to be displayed -->
      <iframe name="results" id="results"></iframe>
      <br>
      <br>
    </main>
  </body>
</html>