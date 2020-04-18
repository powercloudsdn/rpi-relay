<?php

$setmode16 = shell_exec("/usr/local/bin/gpio -g mode 16 out");

$setmode21 = shell_exec("/usr/local/bin/gpio -g mode 21 out");

#$gpio_on = shell_exec("/usr/local/bin/gpio -g write 16 1");

for ($i=5 ; $i>0 ; $i--) {

    if ($i == 5) {
        echo "$i<br />";
        $gpio_on = shell_exec("/usr/local/bin/gpio -g write 16 0");
    }

    if ($i == 3) {
        echo "$i<br />";
        $gpio_on = shell_exec("/usr/local/bin/gpio -g write 21 0");
    }

    if ($i == 1) {
        echo "$i<br />";
        $gpio_on = shell_exec("/usr/local/bin/gpio -g write 16 1");

        $gpio_on = shell_exec("/usr/local/bin/gpio -g write 21 1");
    }
    
    ob_flush();
    flush();
    sleep(1);
}