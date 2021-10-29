<?php
try {
	
	$pdo = new PDO('mysql:dbname=zvitvchs; host=localhost', 'root', '');
} catch (PDOException $e) {
	die($e->getMessage());
}
