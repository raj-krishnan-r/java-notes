<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="/notify/jquery.notific8.js"></script>
<script src="/notify/jquery.notific8.min.js"></script>
<link rel="stylesheet" href="/notify/jquery.notific8.css">
<link rel="stylesheet" href="/notify/jquery.notific8.min.css">
<script>
function not()
{
    $.notific8('My notification message goes here.');
    // with a life set
    $.notific8('My notification message has a life span.', {life: 5000});
    // with a heading
    $.notific8('My notification has a heading line.', {heading: 'Notification Heading'});
    // with a theme
    $.notific8('My notification has a theme.', {theme: 'amethyst'});
    // make the notification sticky
    $.notific8('My notification is sticky.', {sticky: true});
    // change whether to notification is at the top or bottom
    $.notific8('My notification is at the bottom.', {horizontalEdge: 'bottom'});
    // change whether to notification is on the left or right
    $.notific8('My notification is on the left.', {verticalEdge: 'left'});
    // set the z-index
    $.notific8('My notification has a z-index of 1500.', {zindex: 1500});
    // all options set
    $.notific8('My notification with all options.', {
      life: 5000,
      heading: 'Notification Heading',
      theme: 'amethyst',
      sticky: true,
      horizontalEdge: 'bottom',
      verticalEdge: 'left',
      zindex: 1500
    });
    
    // set up your own default settings to save time and typing later
    // NOTE this is not required
    $.notific8('configure', {
      life: 5000,
      theme: 'ruby',
      sticky: true,
      horizontalEdge: 'bottom',
      verticalEdge: 'left',
      zindex: 1500
    });
    
    // set the zindex
    $.notific8('zindex', 1500);
}
	</script>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<button onclick="not();">Load Notify</button>
</body>
</html>