  !DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
  <html>
  <head>
  <title>Dog Museum</title>
  </head>
  <body>
  <div class="space">
  <div style="padding: 60px; text-align: center;background-color: #FAAFBE; border-color: #FAAFBE;"> 
  <div style="color: #F52887; font-family: Tahoma, sans-serif;"><h1> Dog Museum </h1></div>
  <div style="color: #FF69B4; font-family: Tahoma, sans-serif;"><h2>Welcome to the Dog Museum</h2></div>
  </div>
  </div>
  </body>
  <div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a class="active" href="dogs.php">Dogs</a>
  </div>
  <div style="max-width: 500px; height: 600px; background-color: #FAAFBE; margin: auto; border-color:#FAAFBE;">
  <body>
  <div style="font-family: Tahoma, sans-serif; margin-right: 30px; margin-left: 30px; height 600px; background-color: #FFC0CB; COLOR: #f52887">
  <center><h2>Here are some of our cute adoptees</h2></center>
  </div>
  </body>
  <center>
  <table border="1">
  <tr><th>Dog Names</th><th>Dog Price</th><th>Dog Age</th></tr>

  <?php

  $db_host   = '';
  $db_name   = 'A2databse';
  $db_user   = 'admin';
  $db_passwd = '';

  $pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

  $pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

  $q = $pdo->query("SELECT * FROM dog_options");

  while($row = $q->fetch()){
  echo "<tr><td>".$row["dog_name"]."</td><td>".$row["dog_price"]."</td><td>".$row["dog_age"]."</td></tr>\n";
  }

  ?>
  </table>
  </center>

  <div style="font-family: Tahoma, sans-serif; margin-top: 10px;  margin-right: 30px; margin-left: 30px; height 600px; background-color: #FFC0CB; COLOR: #f52887">
  <center><h3>We made the conscious decision to leave out the breeds and sex of the adoptees. Primarily to incentivise adopters to meet the pet beforehand.</h3>
  <h2> To get in contact Call: 1010 1010</h2></center>
  </div>

  </div>
  </html>
  <style>
  .space {
  max-width: 500px;
  margin: auto;
  text-align: center;
  }
  .image1{
  margin: 10px auto 20px;
  display: block;
  }
  .topnav {
  width: 750px;
  margin:0 auto;
  position: relative;
  background-color: #F52887;
  overflow: hidden;
  border-color: #F52887;
  }

  .topnav a {
  width: 150px;
  float: left;
  color: #FAAFBE;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  }

  .topnav a:hover {
  background-color: #E38AAE;
  color: black;
  }

  .topnav a.active {
  background-color: #E38AAE;
  color: white;
  }

  label {
  display: block;
  font: 1rem 'Fira Sans', sans-serif;
  }

  input,
  label {
  margin: .4rem 0;
  }
</style>

