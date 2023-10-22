
<div class="container">
<body>
<h1>Latihan 1c.php</h1>
<div class ="kotakluar">
<div class="row">
    <div class="box">A</div>
  </div>
  <div class="row">
    <?php
      for ($i = 1; $i <= 2; $i++) {
        echo '<div class="box">';
        if ($i == 1) {
          echo 'A';
        } else {
          echo 'B';
        }
        echo '</div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for ($i = 1; $i <= 3; $i++) {
        echo '<div class="box">';
        if ($i == 1) {
          echo 'A';
        } elseif ($i == 2) {
          echo 'B';
        } else {
          echo 'C';
        }
        echo '</div>';
      }
    ?>
    <!DOCTYPE html>
<html>
<head>
  <style>
    .kotakluar{
      border: solid blue;    
      width: 250px;
      height: 200px;
      padding-top:35px;
      padding-bottom:20px;
      padding-left:40px; 
    }
    
    .container {
  display: flex;
  flex-direction: column;
  justify-content: left;
  align-items: left;
  height: 100vh;
}

.row {
  display: flex;
  flex-direction: row;
}

.box {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 50px;
  height: 50px;
  border: 2px solid black;
  margin: 5px;
}
</style>
</head>
  </div>
</div>