<?php
try {
	//$pdo = new PDO('mysql:dbname=onavt_28931418_test; host=sql205.hostronavt.ru', 'onavt_28931418', '54321');
	$pdo = new PDO('mysql:dbname=zvitvchs; host=localhost', 'root', '');
} catch (PDOException $e) {
	die($e->getMessage());
}