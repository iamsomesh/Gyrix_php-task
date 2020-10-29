<?php

echo "Select number for taking current time<br>1.for NZ<br>2.for AUS<br>3.for US<br>4.for DE";

//taking switch case for choosing one of country current time
$select='3';
switch($select)
{
    case 1:
      //The date_default_timezone_set() function sets the default timezone
      date_default_timezone_set('NZ');

      //date() return the current date/time of server
      echo " Current time in newzeland is ".date("h:i:sa");
    break;

    case 2:
        date_default_timezone_set('Australia/Melbourne');
        echo " <br> Current time in Australia is ".date("h:i:sa");
    break;

    case 3:
        date_default_timezone_set('America/New_York');
        echo " <br> Current time in US is ".date("h:i:sa");
    break;

    case 4:
        date_default_timezone_set('Europe/Berlin');
        echo " <br> Current time in Germany is ".date("h:i:sa");
    break;

}
?>