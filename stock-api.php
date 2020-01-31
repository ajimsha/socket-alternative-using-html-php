<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');


$x=rand(100,200);
echo "data: <h1 style='color:red;'> Current Stock: {$x} </h1>\n\n";
?>
