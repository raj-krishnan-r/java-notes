<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script><script src="http://www.pg.site88.net/dev/notify/jquery.notific8.js"></script>
<script src="http://www.pg.site88.net/dev/notify/jquery.notific8.min.js"></script>

<link rel="stylesheet" href="http://www.pg.site88.net/dev/notify/jquery.notific8.css">
<link rel="stylesheet" href="http://www.pg.site88.net/dev/notify/jquery.notific8.min.css">
<script>
function sh()
{
    $.notific8('My notification with all options.', {
      life: 5000,
      heading: 'Unable to connect !',
      theme: 'amethyst',
      sticky: true,
      horizontalEdge: 'top',
      verticalEdge: 'right',
      zindex: 1500
    });
}
	</script>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="font-family:Arial, Helvetica, sans-serif;">

<button onclick="sh()">Load Notify</button>
</body>
</html>