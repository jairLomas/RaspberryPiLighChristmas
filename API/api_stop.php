<?php 

    $output = exec('sudo pkill -9 -f /home/pi/lightshowpi/py/synchronized_lights.py');
    echo json_encode($output);


?>
