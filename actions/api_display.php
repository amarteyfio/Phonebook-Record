<?
require "../controllers/general_controller.php";

//call all data
$data = sel_all_ctr("phonebook");

//
echo json_encode($data);
?>