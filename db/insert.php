<?php

require_once('database.php');

$tbl = "order";
$db = new Database();

$array = array(
    "master_id" => $_POST["master_id"],
    "for_date" => $_POST["for_date"],
    "client_name" => $_POST["client_name"],
    "client_phone_number" => $_POST["client_phone_number"],
    "client_email" => $_POST["client_email"],
    "comment" => $_POST["comment"]
);

$db->insert($tbl, $array);

header("location:../client/index.php");