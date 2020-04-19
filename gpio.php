<?php




$state = $_GET['state'] ?? 'off';
$relay = (string) $_GET['relay'] ?? 0;

$setmode = shell_exec("/usr/local/bin/gpio -g mode $relay out");

switch ($state) {
    case "on":
        $gpio_on = shell_exec("/usr/local/bin/gpio -g write $relay 0");
        $gpio_status = shell_exec("echo 1 > /var/www/html/status/$relay.json");
    break;
    case "off":
        $gpio_on = shell_exec("/usr/local/bin/gpio -g write $relay 1");
        $gpio_status = shell_exec("echo 0 > /var/www/html/status/$relay.json");
    break; 
}

#$gpio_on = shell_exec("/usr/local/bin/gpio -g write 16 1");

// for ($i=5 ; $i>0 ; $i--) {

//     if ($i == 5) {
//         echo "$i<br />";
//         $gpio_on = shell_exec("/usr/local/bin/gpio -g write 16 0");
//     }

//     if ($i == 3) {
//         echo "$i<br />";
//         $gpio_on = shell_exec("/usr/local/bin/gpio -g write 21 0");
//     }

//     if ($i == 1) {
//         echo "$i<br />";
//         $gpio_on = shell_exec("/usr/local/bin/gpio -g write 16 1");

//         $gpio_on = shell_exec("/usr/local/bin/gpio -g write 21 1");
//     }
    
//     ob_flush();
//     flush();
//     sleep(1);
// }