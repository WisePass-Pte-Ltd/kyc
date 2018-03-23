<?php
include 'config.php';
include '../libraries/NvooyUtils.php';

// insert default admin
$dataArr = array(
		$config->COL_userRegistration_unique_id => TagdToUtils::getUniqueId(),
		$config->COL_userRegistration_username      => $config->admin_login_username,
		$config->COL_userRegistration_email      => $config->admin_login_email,
		$config->COL_userRegistration_password   => TagdToUtils::createPasswordHash($config->admin_login_pass),
		$config->COL_userRegistration_status => 1,
    $config->COL_userRegistration_email_verify_status => 1
);

$sql1 = $db->createInsertQuery($config->Table_userRegistration, $dataArr);
print_r($db->executeQuery($sql1));
