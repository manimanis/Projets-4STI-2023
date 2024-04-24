<?php
$conn=mysqli_connect("127.0.0.1","root","","gstore");
$sql="SELECT * FROM games order by rating DESC";
$res=mysqli_query($conn,$sql);
echo"<h2>Top Rated Games</h2><br>";
echo"<div id='Games'>";
echo"<style>";
echo"h2{color: #F3F3F3;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;}";
echo"#Games{height: auto;width: 100%;flex-wrap: wrap;display: flex;background-color: #76808C;justify-content:center;}";
echo"span{margin:5px;height: 105px;display: flex;width: 500px;background-color: #212B45}";
echo"img{padding: 8px 8px;border-radius: 10px;}";
echo"#name{margin-right: auto;font-weight: bold;padding-left: 5px;padding-top: 0px;color: #F3F3F3;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;}";
echo"#price{margin: 75px 20px;font-weight: bold;color: #F3F3F3;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;}";
echo"</style>";
for ($i=0; $i <=8 ; $i++) { 
    $tab=mysqli_fetch_array($res);
    echo"<span id='game'>";
    echo"<img id='image'src='".$tab["logo"]."' height='90px'; width='220px';>";
    echo"<p id='name'>".$tab["Name"]."</p>";
    if ($tab["Price"]==0){
        echo"<p id='price'>FREE</p>";
      }
      else{
        echo"<p id='price'>".$tab['Price']."$</p>";
      }
    
    echo"</span>";
}