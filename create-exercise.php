<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
</head>
<body>
<form class="decor" action="gotopdf2.php" method="post">

  <div class="form-left-decoration"></div>
  <div class="form-right-decoration"></div>
  <div class="circle"></div>
  <div class="form-inner">
	<h3>Выберите тип написания букв</h3>
		<p>серый <input type="radio" name="type_letter_propisi" value=0 checked></p>
		<p>пунктирный <input type="radio" name="type_letter_propisi" value=1></p>  
    <h3>Место для прописи:</h3>
	<textarea name="data1"rows="10"></textarea>
    <input type="submit" value="Создать пропись">
  </div>
</form>
</body>
</html>