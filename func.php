<?php
include 'config.php';

// Post BAT 
$id =                             $_POST['id'];
$number_bat =                     $_POST['number_bat'];
$name_user =                      $_POST['name_user'];
$zmina_bat =                      $_POST['zmina_bat'];
$total_facts_bat =                $_POST['total_facts_bat'];
$name_carrier_bat =               $_POST['name_carrier_bat'];
$provedeno_perevirok_bat =        $_POST['provedeno_perevirok_bat'];
$skladeno_protokoliv_bat =        $_POST['skladeno_protokoliv_bat'];
$subyekty_yaki_vidmovylys_bat =   $_POST['subyekty_yaki_vidmovylys_bat'];
$provedeno_perevirok_zd_bat =     $_POST['provedeno_perevirok_zd_bat'];
$skladeno_protokoliv_zd_bat =     $_POST['skladeno_protokoliv_zd_bat'];
$illegal_carriers_checked_bat =   $_POST['illegal_carriers_checked_bat'];
$vidsutnist_litsenziyi_bat =      $_POST['vidsutnist_litsenziyi_bat'];
$vidsutnist_marshrutu_bat =       $_POST['vidsutnist_marshrutu_bat'];
$vidsutnist_masky_bat =           $_POST['vidsutnist_masky_bat'];  

date_default_timezone_set("Europe/Kiev");
$year_month_day = date('Y-m-d H:i');

// Create BAT
if (isset($_POST['submit'])) {
	$sql_bat = ("INSERT INTO `bat` (
		`id`, 
		`number_bat`, 
		`name_user`, 
		`zmina_bat`,
	 	`total_facts_bat`,
	 	`name_carrier_bat`,
	   	`provedeno_perevirok_bat`,
	    `skladeno_protokoliv_bat`,
		`subyekty_yaki_vidmovylys_bat`, 
		`provedeno_perevirok_zd_bat`, 
		`skladeno_protokoliv_zd_bat`, 
		`illegal_carriers_checked_bat`, 
		`vidsutnist_litsenziyi_bat`, 
		`vidsutnist_marshrutu_bat`, 
		`vidsutnist_masky_bat` 
		) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");	
	$query_bat = $pdo->prepare($sql_bat);
	$query_bat->execute([
		$id,
		$number_bat,
		$name_user,
		$zmina_bat,
		$total_facts_bat,
		$name_carrier_bat,
		$provedeno_perevirok_bat,
		$skladeno_protokoliv_bat,
		$subyekty_yaki_vidmovylys_bat,
		$provedeno_perevirok_zd_bat,
		$skladeno_protokoliv_zd_bat,
		$illegal_carriers_checked_bat,
		$vidsutnist_litsenziyi_bat,
		$vidsutnist_marshrutu_bat,
		$vidsutnist_masky_bat 
	]); 

} 

// Post TOR
$tor = "ТОР";
$id_tor =                         $_POST['id'];
$name_user_tor =                  $_POST['name_user_tor'];
$zmina_tor =                      $_POST['zmina_tor'];
$total_facts_tor =                $_POST['total_facts_tor'];
$name_carrier_tor =               $_POST['name_carrier_tor'];
$provedeno_perevirok_tor =        $_POST['provedeno_perevirok_tor'];
$skladeno_protokoliv_tor =        $_POST['skladeno_protokoliv_tor'];
$subyekty_yaki_vidmovylys_tor =   $_POST['subyekty_yaki_vidmovylys_tor'];
$provedeno_perevirok_zd_tor =     $_POST['provedeno_perevirok_zd_tor'];
$skladeno_protokoliv_zd_tor =     $_POST['skladeno_protokoliv_zd_tor'];
$illegal_carriers_checked_tor =   $_POST['illegal_carriers_checked_tor'];
$vidsutnist_litsenziyi_tor =      $_POST['vidsutnist_litsenziyi_tor'];
$vidsutnist_marshrutu_tor =       $_POST['vidsutnist_marshrutu_tor'];
$vidsutnist_masky_tor =           $_POST['vidsutnist_masky_tor']; 

if (isset($_POST['submit'])) {
	$sql_tor = ("INSERT INTO `tor` (
		`id`, 
		`name_user_tor`, 
		`zmina_tor`, 
		`total_facts_tor`, 
		`name_carrier_tor`, 
		`provedeno_perevirok_tor`, 
		`skladeno_protokoliv_tor`, 
		`subyekty_yaki_vidmovylys_tor`, 
		`provedeno_perevirok_zd_tor`, 
		`skladeno_protokoliv_zd_tor`, 
		`illegal_carriers_checked_tor`, 
		`vidsutnist_litsenziyi_tor`, 
		`vidsutnist_marshrutu_tor`, 
		`vidsutnist_masky_tor`
		) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");	
	$query_tor = $pdo->prepare($sql_tor);
	$query_tor->execute([
		$id_tor,
		$name_user_tor,
		$zmina_tor,
		$total_facts_tor,
		$name_carrier_tor,
		$provedeno_perevirok_tor,
		$skladeno_protokoliv_tor, 
		$subyekty_yaki_vidmovylys_tor, 
		$provedeno_perevirok_zd_tor,
		$skladeno_protokoliv_zd_tor,
		$illegal_carriers_checked_tor, 
		$vidsutnist_litsenziyi_tor, 
		$vidsutnist_marshrutu_tor, 
		$vidsutnist_masky_tor  
	]);  
}

// Post VBDR
$vbdr = "ВБДР";
$id_vbdr =                         $_POST['id'];
$name_user_vbdr =                  $_POST['name_user_vbdr'];
$zmina_vbdr =                      $_POST['zmina_vbdr'];
$total_facts_vbdr =                $_POST['total_facts_vbdr'];
$name_carrier_vbdr =               $_POST['name_carrier_vbdr'];
$provedeno_perevirok_vbdr =        $_POST['provedeno_perevirok_vbdr'];
$skladeno_protokoliv_vbdr =        $_POST['skladeno_protokoliv_vbdr'];
$subyekty_yaki_vidmovylys_vbdr =   $_POST['subyekty_yaki_vidmovylys_vbdr'];
$provedeno_perevirok_zd_vbdr =     $_POST['provedeno_perevirok_zd_vbdr'];
$skladeno_protokoliv_zd_vbdr =     $_POST['skladeno_protokoliv_zd_vbdr'];
$illegal_carriers_checked_vbdr =   $_POST['illegal_carriers_checked_vbdr'];
$vidsutnist_litsenziyi_vbdr =      $_POST['vidsutnist_litsenziyi_vbdr'];
$vidsutnist_marshrutu_vbdr =       $_POST['vidsutnist_marshrutu_vbdr'];
$vidsutnist_masky_vbdr =           $_POST['vidsutnist_masky_vbdr']; 

if (isset($_POST['submit'])) {
	$sql_tor = ("INSERT INTO `vbdr` (
		`id`, 
		`name_user_vbdr`, 
		`zmina_vbdr`, 
		`total_facts_vbdr`, 
		`name_carrier_vbdr`, 
		`provedeno_perevirok_vbdr`, 
		`skladeno_protokoliv_vbdr`, 
		`subyekty_yaki_vidmovylys_vbdr`, 
		`provedeno_perevirok_zd_vbdr`, 
		`skladeno_protokoliv_zd_vbdr`, 
		`illegal_carriers_checked_vbdr`, 
		`vidsutnist_litsenziyi_vbdr`, 
		`vidsutnist_marshrutu_vbdr`, 
		`vidsutnist_masky_vbdr`
		) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");	
	$query_tor = $pdo->prepare($sql_tor);
	$query_tor->execute([
		$id_vbdr,
		$name_user_vbdr,
		$zmina_vbdr,
		$total_facts_vbdr,
		$name_carrier_vbdr,
		$provedeno_perevirok_vbdr,
		$skladeno_protokoliv_vbdr, 
		$subyekty_yaki_vidmovylys_vbdr, 
		$provedeno_perevirok_zd_vbdr,
		$skladeno_protokoliv_zd_vbdr,
		$illegal_carriers_checked_vbdr, 
		$vidsutnist_litsenziyi_vbdr, 
		$vidsutnist_marshrutu_vbdr, 
		$vidsutnist_masky_vbdr  
	]);  
}
// Post VMAZ
$vmaz = "ВМАЗ";
$id_vmaz =                         $_POST['id'];
$name_user_vmaz =                  $_POST['name_user_vmaz'];
$zmina_vmaz =                      $_POST['zmina_vmaz'];
$total_facts_vmaz =                $_POST['total_facts_vmaz'];
$name_carrier_vmaz =               $_POST['name_carrier_vmaz'];
$provedeno_perevirok_vmaz =        $_POST['provedeno_perevirok_vmaz'];
$skladeno_protokoliv_vmaz =        $_POST['skladeno_protokoliv_vmaz'];
$subyekty_yaki_vidmovylys_vmaz =   $_POST['subyekty_yaki_vidmovylys_vmaz'];
$provedeno_perevirok_zd_vmaz =     $_POST['provedeno_perevirok_zd_vmaz'];
$skladeno_protokoliv_zd_vmaz =     $_POST['skladeno_protokoliv_zd_vmaz'];
$illegal_carriers_checked_vmaz =   $_POST['illegal_carriers_checked_vmaz'];
$vidsutnist_litsenziyi_vmaz =      $_POST['vidsutnist_litsenziyi_vmaz'];
$vidsutnist_marshrutu_vmaz =       $_POST['vidsutnist_marshrutu_vmaz'];
$vidsutnist_masky_vmaz =           $_POST['vidsutnist_masky_vmaz']; 

if (isset($_POST['submit'])) {
	$sql_vmaz = ("INSERT INTO `vmaz` (
		`id`, 
		`name_user_vmaz`, 
		`zmina_vmaz`, 
		`total_facts_vmaz`, 
		`name_carrier_vmaz`, 
		`provedeno_perevirok_vmaz`, 
		`skladeno_protokoliv_vmaz`, 
		`subyekty_yaki_vidmovylys_vmaz`, 
		`provedeno_perevirok_zd_vmaz`, 
		`skladeno_protokoliv_zd_vmaz`, 
		`illegal_carriers_checked_vmaz`, 
		`vidsutnist_litsenziyi_vmaz`, 
		`vidsutnist_marshrutu_vmaz`, 
		`vidsutnist_masky_vmaz`
		) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");	
	$query_vmaz = $pdo->prepare($sql_vmaz);
	$query_vmaz->execute([
		$id_vmaz,
		$name_user_vmaz,
		$zmina_vmaz,
		$total_facts_vmaz,
		$name_carrier_vmaz,
		$provedeno_perevirok_vmaz,
		$skladeno_protokoliv_vmaz, 
		$subyekty_yaki_vidmovylys_vmaz, 
		$provedeno_perevirok_zd_vmaz,
		$skladeno_protokoliv_zd_vmaz,
		$illegal_carriers_checked_vmaz, 
		$vidsutnist_litsenziyi_vmaz, 
		$vidsutnist_marshrutu_vmaz, 
		$vidsutnist_masky_vmaz  
	]);  
} 

// Post VROMDTP
$vromdtp = "ВРОМ ДТП";
$id_vromdtp =                         $_POST['id'];
$name_user_vromdtp =                  $_POST['name_user_vromdtp'];
$zmina_vromdtp =                      $_POST['zmina_vromdtp'];
$total_facts_vromdtp =                $_POST['total_facts_vromdtp'];
$name_carrier_vromdtp =               $_POST['name_carrier_vromdtp'];
$provedeno_perevirok_vromdtp =        $_POST['provedeno_perevirok_vromdtp'];
$skladeno_protokoliv_vromdtp =        $_POST['skladeno_protokoliv_vromdtp'];
$subyekty_yaki_vidmovylys_vromdtp =   $_POST['subyekty_yaki_vidmovylys_vromdtp'];
$provedeno_perevirok_zd_vromdtp =     $_POST['provedeno_perevirok_zd_vromdtp'];
$skladeno_protokoliv_zd_vromdtp =     $_POST['skladeno_protokoliv_zd_vromdtp'];
$illegal_carriers_checked_vromdtp =   $_POST['illegal_carriers_checked_vromdtp'];
$vidsutnist_litsenziyi_vromdtp =      $_POST['vidsutnist_litsenziyi_vromdtp'];
$vidsutnist_marshrutu_vromdtp =       $_POST['vidsutnist_marshrutu_vromdtp'];
$vidsutnist_masky_vromdtp =           $_POST['vidsutnist_masky_vromdtp']; 

if (isset($_POST['submit'])) {
	$sql_vromdtp = ("INSERT INTO `vromdtp` (
		`id`, 
		`name_user_vromdtp`, 
		`zmina_vromdtp`, 
		`total_facts_vromdtp`, 
		`name_carrier_vromdtp`, 
		`provedeno_perevirok_vromdtp`, 
		`skladeno_protokoliv_vromdtp`, 
		`subyekty_yaki_vidmovylys_vromdtp`, 
		`provedeno_perevirok_zd_vromdtp`, 
		`skladeno_protokoliv_zd_vromdtp`, 
		`illegal_carriers_checked_vromdtp`, 
		`vidsutnist_litsenziyi_vromdtp`, 
		`vidsutnist_marshrutu_vromdtp`, 
		`vidsutnist_masky_vromdtp`
		) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");	
	$query_vromdtp = $pdo->prepare($sql_vromdtp);
	$query_vromdtp->execute([
		$id_vromdtp,
		$name_user_vromdtp,
		$zmina_vromdtp,
		$total_facts_vromdtp,
		$name_carrier_vromdtp,
		$provedeno_perevirok_vromdtp,
		$skladeno_protokoliv_vromdtp, 
		$subyekty_yaki_vidmovylys_vromdtp, 
		$provedeno_perevirok_zd_vromdtp,
		$skladeno_protokoliv_zd_vromdtp,
		$illegal_carriers_checked_vromdtp, 
		$vidsutnist_litsenziyi_vromdtp, 
		$vidsutnist_marshrutu_vromdtp, 
		$vidsutnist_masky_vromdtp  
	]);  
}

// Read BAT
$sql = $pdo->prepare("SELECT * FROM `bat`");
$sql->execute();
$result = array_reverse($sql->fetchAll(),true);

// Read TOR
$sql_tor = $pdo->prepare("SELECT * FROM `tor`");
$sql_tor->execute();
$result_tor = array_reverse($sql_tor->fetchAll(),true);

// Read VROMDTP
$sql_vromdtp = $pdo->prepare("SELECT * FROM `vromdtp`");
$sql_vromdtp->execute();
$result_vromdtp = array_reverse($sql_vromdtp->fetchAll(),true); 

// Read VMAZ
$sql_vmaz = $pdo->prepare("SELECT * FROM `vmaz`");
$sql_vmaz->execute();
$result_vmaz = array_reverse($sql_vmaz->fetchAll(),true);

// Read VBDR
$sql_vbdr = $pdo->prepare("SELECT * FROM `vbdr`");
$sql_vbdr->execute();
$result_vbdr = array_reverse($sql_vbdr->fetchAll(),true);




// Delete 
/* if (isset($_POST['delete_submit'])) {
	$sql = "DELETE FROM users WHERE id=?";
	$query = $pdo->prepare($sql);
	$query->execute([$get_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}
 */