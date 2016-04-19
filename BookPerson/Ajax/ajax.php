<?php
// XML output
header('Content-Type: text/xml');
// XML header
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
// print the <response> element
echo '<response>';
// retrieve the user name
$name = $_GET['name'];

echo htmlentities($name) . ', have a nice day!';
// end of <response> element
echo '</response>';
?>