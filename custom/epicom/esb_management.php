<?php

$redirect = <<<ESB

<div style="width: 600px; margin: 0 auto 0;">
	<img src="index.php?entryPoint=getImage&imageName=loading.gif" style="margin: 0 auto 0; display: block;">
	<h3 style="font-family: Verdana, Tahoma, Sans-Serif;">You are now being re-directed to Epicom's QuickBooks configuration site. If you're not re-directed, please click <a href="https://quickbooks.epicom.com">here</a></h3>
<script type='text/javascript'>
	setTimeout("window.location='https://quickbooks.epicom.com'", 3000);
</script>

ESB;

echo $redirect;