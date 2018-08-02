<?php
	echo "Вывод информации введенных в поля ввода ";
	echo $_POST['user-name'].";".$_POST['password-name'];
	echo "<br><hr>";
	echo "<pre>";
		print_r($_POST);
	echo "</pre>";	

?>
<a href="http://localhost/AutoLineX/Operators/Ввод данных post();/index.html">home</a>