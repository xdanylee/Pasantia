<?php

session_start();
	require("bancoconexion.php");

	$usuario=$_POST['mail'];
	$pass=$_POST['pass'];


	$sql2=mysqli_query($mysqli,"SELECT * FROM cuentas WHERE email='$usuario'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pasadmin']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("BIENVENIDO A Banco Popular ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
		
		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM cuentas WHERE email='$usuario'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			$_SESSION['rol']=$f['rol'];

			echo '<script>alert("BIENVENIDO A Banco Popular")</script> ';
			echo "<script>location.href='inicio.php'</script>";
		}else{
			echo 'CONTRASEÑA INCORRECTA';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>