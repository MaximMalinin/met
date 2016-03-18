<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<link rel = "stylesheet" href = "styles.css">
<title>Начальная страница</title>

<script>
  function contacti () {
    document.getElementById ("cont") .innerHTML = "Тел:89105846224"; 
  }
</script>

<script>
  function ris (m) {
    var pic;
	if (m == 0) {
	   pic = "http://k-daikan.ru/images/armatura-a3.jpg"
	   
	} else {
	     if (m == 1) {
	   pic = "http://www.materik-m.ru/images/shop_items/6288_5_armatura_riflenaya_8mm_a500s_6m.jpg"
	} else {
	   pic = "http://uni-man.com/uploads/image/armatura.jpg"
	}
	}
    document .getElementById ('myImage').src = pic;
  }
</script>

</head>




<body>

<ul>
  <li><a class="active" href="Index.html.php">Главная</a></li>
  <li><a href="8mm.html.php">Арматура 8</a></li>
  <li><a href="10mm.html.php">Арматура 10</a></li>
  <li><a href="12mm.html.php">Арматура 12</a></li>
</ul>



<div style="margin-left:25%;padding:1px 16px; height:1000px;">

<h1>Арматура</h1>
<a href = "8mm.html.php" class = "links"><div>8мм</div></a>
<a href = "10mm.html.php" class = "links"><div>10мм</div></a>
<a href = "12mm.html.php" class = "links"><div>12мм</div></a>

<img id = "myImage" src = "http://k-daikan.ru/images/armatura-a3.jpg" width="100%" height="300">
<p>
  <button type = "button" onclick = "ris (0)"> 1 </button>
  <button type = "button" onclick = "ris (1)"> 2 </button>
  <button type = "button" onclick = "ris (2)"> 3 </button>
</p>

<button class = "con" type = "button" onclick = "contacti()"> Контакты</button>

<p id = "cont"></p>




</div>
</body>

</html>