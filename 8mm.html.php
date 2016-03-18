<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<link rel = "stylesheet" href = "styles.css">
<title>Арматура 8мм</title>
</head>




<body>


<ul>
  <li><a class="active" href="Index.html.php">Главная</a></li>
  <li><a href="8mm.html.php">Арматура 8</a></li>
  <li><a href="10mm.html.php">Арматура 10</a></li>
  <li><a href="12mm.html.php">Арматура 12</a></li>
</ul>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">


<h1>Арматура 8мм</h1>

<img class = "img1" src = "http://www.stroymetall.ru/images/1-armatura.jpg">

<table>
  <caption style = "color: blue; font-size:32px;">Стоимость арматуры:</caption>
  <tr>
    <th> От (тонн)</th>
	<th> До (тонн)</th>
	<th> Стоимость(р/т)</th>
  </tr> 
  
  <?php 
      for($i=0; $i<=97; $i++) {
		  $price = rand(10000, 50000);
		  $from  = rand(1, 10);
		  $to    = rand(50, 100);
		  echo "<tr>
                  <td>$from</td>
	              <td>$to</td>
               	<td> $price</td>
              </tr>";
	  }
  ?>
  
  <tr>
    <td> 1</td>
	<td> 3</td>
	<td> 42000</td>
  </tr> 
  <tr>
    <td> 4</td>
	<td> 7</td>
	<td> 41000</td>
  </tr> 
  <tr>
    <td> 8</td>
	<td> и более</td>
	<td> 40000</td>
  </tr>
  <tr>
    <th colspan = "3">
	  <img src = "http://www.protecgroup.ru/upload/for_user_img/88a135d5f7816fcca1e11e9f8ebda30d.jpg" width="100%" height="300">
    </th>
  </tr>  
</table>


<br>
<div class = "back"></div>
<div class = "back"><a href = "Index.html.php">Главная</a></div>
<div class = "back"><a href = "10mm.html.php">10мм</a></div>
</div>
</body>

</html>