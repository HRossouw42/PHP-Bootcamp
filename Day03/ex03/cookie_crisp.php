<?php
$input = $_GET;

foreach($input as $key => $value)
{
	if ($key == 'action' && $value == 'set')
	{
		setcookie($input['name'], $input['value']);
		break;
	}
	else if ($key == 'action' && $value == 'get')
	{
		echo ($_COOKIE[$input['name']]."\n");
		break;
	}
	else if ($key == 'action' && $value == 'del')
	{
		setcookie($input['name'], '', 1);
		setcookie($input['value'], '', 1);
		break;
	}
}
?>