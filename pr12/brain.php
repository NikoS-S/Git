<?
	$user = 'admin';
	$pass = 'pass12';
	if(!isset($_POST['user'])) exit('Sorri,'.$_POST['user'].' you`re not an admin.');
	if($_POST['user'] == $user && $_POST['pass'] == $pass) echo 'Hello, '.$user;
	else echo 'Sorri,'.$_POST['user'].' you`re not an admin.';
?>