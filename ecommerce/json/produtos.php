<?php include("../data.php"); ?>
<?php
header("Content-Type: application/json");
echo json_encode($data);
exit();