<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<style>
  img{
    height:300px
  }
  #right{
    margin-left: 50px;
    border:1px solid black;
    height:460px;
  }
  #left{
    border:1px solid black;
    padding:10px;
    margin: 5px;
  }
  .desc{
    height: 5px;
    width: 100%;
    padding: 8% 0px;
  }
  .rating{
    height: 0px;
    margin-top: 0px;
  }
  .genre{
    height: 0px;
    margin-top: 10px;
  }
  .launch{
    height: 0px;
    margin-top: 10px;
  }
  .dev{
    height: 0px;
    margin-top: 10px;
  }
  #discover{
    display: flex;
    height: 500px;
    background-color:#76808C;
    color:white;
  }
  .desc{
    margin: 0px 0px;
  }
</style>
<?php
    $conn=mysqli_connect("127.0.0.1","root","","gstore");
    mysqli_set_charset($conn,"utf8");
    $sql="SELECT max(id) as num from games";
    $res=mysqli_query($conn,$sql);
    $num=mysqli_fetch_array($res);
    $game_id=rand(1,$num["num"]);
    $sql="SELECT * from games where id='$game_id'";
    $res=mysqli_query($conn,$sql);
    $t=mysqli_fetch_array($res);
    echo"<div id='discover'>";
    echo"<div id='left'>";
    echo"  <h2>".$t["Name"]."</h2>";
    echo"  <img src='".$t["logo"]."'>";
    echo"</div>";
    echo"<div id='right'>";
    echo"  <p class='desc'>".$t["Description"]."</p><br>";
    echo"  <p class='rating'>Rating: ".$t["rating"]."/10</p><br>";
    echo"  <p class='genre'>Genre: ".$t["Genre"]."</p><br>";
    echo"  <p class='laucnh'>Launch date: ".$t["release_date"]."</p><br>";
    echo"  <p class='dev'>Developer: ".$t["developer"]."</p><br>";
    if ($t["Price"]==0){
      echo"  <p class='price'>Price: FREE </p><br>";
    }
    else{
      echo"  <p class='price'>Price: ".$t["Price"]."$</p><br>";
    }
    
    echo"</div>";
    echo"</div>";