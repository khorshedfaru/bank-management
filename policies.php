<?php
require_once "dbconfig.php";

$loanPols = $con->query("SELECT * FROM loan_policies")->fetch_object();
?>