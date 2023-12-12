<?php
$loc = __DIR__;
$o = "";
$cmd="\"C:\\Program Files (x86)\\wkhtmltopdf\\wkhtmltopdf\" http://localhost \"".$loc."/out.pdf\' 2>&1";
// Use 2>&1 to capture both standard output and standard error
exec($cmd, $o);
?>

<h3>File is generated, download it from <a href="out.pdf">here</a></h3>