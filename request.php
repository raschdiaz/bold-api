<?php

switch($_POST['curl_version']){
    case "old":
        $p="c://curl//bin//curl.exe --connect-timeout 60 --max-time 60 --location -g ".$_POST['method']." -H \"Authorization: x-api-key ".$_POST['api_key']."\" \"".$_POST['url']."\"";
        break;
    case "new":
        $p="curl -H \"Authorization: x-api-key ".$_POST['api_key']."\" ".$_POST['method']." ".$_POST['url'];
        break;
    default:
}
echo $p."</br>";
$s=shell_exec($p);
echo "Response: ".$s;