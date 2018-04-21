<!DOCTYPE html>
<html>
<head>
<title>WhatsApp Bug</title>
<meta property="og:title" content="WhatsApp Bug" />
<meta property="og:site_name" content="WhatsApp Bug" />

<meta property="og:type" content="text" />
<meta property="og:description" content="<?php
echo $_SERVER[REMOTE_ADDR]; $line = date('Y-m-d H:i:s') . " – $_SERVER[REMOTE_ADDR]";echo $line;
file_put_contents('visitors.log', $line . PHP_EOL, FILE_APPEND);?>" />


</head>
<body>

<?php
echo "Sorry your public_IP $_SERVER[REMOTE_ADDR] has been stored to server. ";
echo "This was to tell you not to visit unknown websites";
?>
</body>

</html>
