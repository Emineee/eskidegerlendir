<?php 


try {



	$db=new PDO("mysql:host=localhost;dbname=alsat;charset=utf8",'root','Emine@93');

	//echo "veritabanı bağlantısı başarılı";

}



catch (PDOExpception $e) {



	echo $e->getMessage();

}



 ?>