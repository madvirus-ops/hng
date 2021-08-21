<?php
echo "welcome";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>resume</title>
  </head>
<style>
  .body{
    background-position: center;
    text-align: center;
    background-image: url(hng.png);
  }
  .form{
    position: absolute;
    text-align: center;
    background-position: center;
  }
</style>

  <body>
    <br><br>
<h1>Resume</h1>
<p>Personal details</p>
    <ul>
      <li>Name: Edwin Ayabie</li>
      <li>Stack: Back-end web development</li>
    </ul><br><hr>
<p>hobbies</p>
    <ul>
      <li>programming</li>
      <li>eating</li>
      <li>reading</li>
      <li>browsing</li>
    </ul>
<p>skills</p>
  <ul>
    <li>Beginner in php</li>
    <li>Beginner in python</li>
  </ul>
<p>education</p>
  <ul>
    <li>Federal science College Ogoja.</li>
    <li>Airforce institue of tecnology Kaduna.</li>
  </ul>
<p>experience</p>
  <ul>
      <li><a href="http://www.zuri.team"/>
            Zuri</a> X <a href="http://www.ingressive.org"/>i4g</a></li>
  </ul>
<p>refference</p>
  <ul>
    <li><a href="www.hng.tech"/> HNG</a></li>
    <li><a href="http://www.ingressive.org"/>i4g</a></li>
    <li><a href="http://www.zuri.team"/>Zuri</a></li>
  </ul>
  <div class="form">
    <form  action="index.php" method="post">
      <input type="text" name="name" value="" placeholder="Enter name"><br>
      <input type="email" name="email" value="" placeholder="enter email"><br>
      <input type="text" name="message" value="" placeholder="drop a message"><br>
      <input type="submit" name="submit" value="submit">
    </form>
  </div>
  </body>
  <footer>2021</footer>

<?php
//variables
 if(isset($_POST['submit'])){
  //to store in a file
}
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $arrayData = [
    '$name' => $name,
    '$email' => $email,
    '$message' => $message,
   ];
   file_put_contents('task_3/'. 'files'. ".json", json_encode($arrayData));
   

?>
<hr>
<hr>


<br><br><br>
<p>view code</p>
<li><a href="http://www.github.com/madvirus-ops/hng"/>view code</a></li>
</html>
