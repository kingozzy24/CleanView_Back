<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>test usage</title>
    </head>
    <body>
		<?php
		require_once('api.php');
		$api = new Api();
		$event = $api->getEventById(1);
		echo json_encode($event);
		?>
    </body>
</html>
