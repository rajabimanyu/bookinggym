<?php
$m=6;
@$effectiveDate = date('Y-m-d', strtotime("+$m months"));
echo $effectiveDate;
?>