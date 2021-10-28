<?php
include 'config.php';

$number_bat = $_POST['number_bat'];
$zmina = $_POST['zmina'];
$total_facts = $_POST['total_facts'];

// Create BAT

	if (isset($_POST['submit'])) {
		$sql = ("INSERT INTO `bat`(`number_bat`, `zmina`, `total_facts`) VALUES(?,?,?)");
		$query = $pdo->prepare($sql);
		$query->execute([$number_bat, $zmina, $total_facts]);  
	}

// Read

$sql = $pdo->prepare("SELECT * FROM `users`");
$sql->execute();
$result = $sql->fetchAll();

// DELETE
if (isset($_POST['delete_submit'])) {
	$sql = "DELETE FROM users WHERE id=?";
	$query = $pdo->prepare($sql);
	$query->execute([$get_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}
