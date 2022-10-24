<?
require "../controllers/general_controller.php";

//call all data
$data = sel_all_ctr("phonebook");

//
return json_encode($data);
?>