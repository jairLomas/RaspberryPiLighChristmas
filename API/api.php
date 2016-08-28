<?php 

    $output = exec('sudo pkill -9 -f /home/pi/lightshowpi/py/synchronized_lights.py');
    $output = exec('sudo python /home/pi/lightshowpi/py/synchronized_lights.py --file=/var/www/html/music/'.$_POST["path_file"]);
    echo json_encode($output);


?>
