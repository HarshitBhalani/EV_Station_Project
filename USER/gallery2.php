<!DOCTYPE html>
<html lang="en">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
</style>
<head>
    <title>Gallery</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
include 'navbar.php';
?>

<!-- Header -->
<div class="header">
  <h1>EV-CHARGING STATIONS GALLERY</h1>
  <!--p>Resize the browser window to see the responsive effect.</p-->
</div>

<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="../image/2.jpg" style="width:100%">
    <img src="../image/3.jpg" style="width:100%">
    <img src="../image/4.jpg" style="width:100%">
    <img src="../image/5.jpg" style="width:100%">
    <img src="../image/6.jpg" style="width:100%">
    <img src="../image/7.jpg" style="width:100%">
    <img src="../image/8.jpg" style="width:100%">
    <img src="../image/19.jpg" style="width:100%">
    <img src="../image/20.jpg" style="width:100%">
    <img src="../image/27.jpg" style="width:100%">
    <img src="../image/31.jpg" style="width:100%">
    <img src="../image/13.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="../image/9.jpg" style="width:100%">
    <img src="../image/10.jpg" style="width:100%">
    <img src="../image/11.jpg" style="width:100%">
    <img src="../image/12.jpg" style="width:100%">
    <img src="../image/13.jpg" style="width:100%">
    <img src="../image/14.jpg" style="width:100%">
    <img src="../image/2.jpg" style="width:100%">
    <img src="../image/21.jpg" style="width:100%">
    <img src="../image/22.jpg" style="width:100%">
    <img src="../image/28.jpg" style="width:100%">
    <img src="../image/32.jpg" style="width:100%">
    <img src="../image/4.jpg" style="width:100%" height="11%">
  </div>  
  <div class="column">
    <img src="../image/14.jpg" style="width:100%">
    <img src="../image/15.jpg" style="width:100%">
    <img src="../image/16.jpg" style="width:100%">
    <img src="../image/17.jpg" style="width:100%">
    <img src="../image/18.jpg" style="width:100%">
    <img src="../image/2.jpg" style="width:100%">
    <img src="../image/3.jpg" style="width:100%">
    <img src="../image/23.jpg" style="width:100%">
    <img src="../image/24.jpg" style="width:100%">
    <img src="../image/29.jpg" style="width:100%">
    <img src="../image/33.jpg" style="width:100%">
    <img src="../image/17.jpg" style="width:100%" height="7.3%">
   
  </div>
  <div class="column">
    <img src="../image/4.jpg" style="width:100%">
    <img src="../image/5.jpg" style="width:100%">
    <img src="../image/6.jpg" style="width:100%">
    <img src="../image/7.jpg" style="width:100%">
    <img src="../image/8.jpg" style="width:100%">
    <img src="../image/9.jpg" style="width:100%">
    <img src="../image/15.jpg" style="width:100%">
    <img src="../image/25.jpg" style="width:100%">
    <img src="../image/26.jpg" style="width:100%">
    <img src="../image/30.jpg" style="width:100%">
    <img src="../image/22.jpg" style="width:100%">
    <img src="../image/16.jpg" style="width:100%" height="10.5%">
    
  </div>
</div>

</body>
</html>
