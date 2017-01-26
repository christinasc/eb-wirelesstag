<?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $file = '/tmp/sample-app.log';
  $message = file_get_contents('php://input');
  file_put_contents($file, date('Y-m-d H:i:s') . " Received message: " . $message . "\n", FILE_APPEND);
}
else
{
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>PHP Application - AWS Elastic Beanstalk</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster+Two" type="text/css">
    <link rel="icon" href="https://awsmedia.s3.amazonaws.com/favicon.ico" type="image/ico" >
    <link rel="shortcut icon" href="https://awsmedia.s3.amazonaws.com/favicon.ico" type="image/ico" >
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="/styles.css" type="text/css">
</head>
<body>
    <section class="congratulations">
        <h1>Gold Lab Cooling Units @EYSM </h1>
        <p><a href="https://my.wirelesstag.net/eth/signin.html"> Wireless Tag Monitoring Login</a></p>
        <p>You are running PHP version <?= phpversion() ?></p>
    </section>

    <section class="instructions">
        <h2>Current Status</h2>
        <ul>



    <li><a href="https://my.wirelesstag.net/eth/tempStats.html?39ba7d42-bab8-40ba-aaa8-68baca0fc996&GLD-Fridge%201&C"> Gold Lab Fridge #1- View Graph </a>

<iframe src="https://my.wirelesstag.net/ethSharedFrame.aspx?pic=1&hide_name=0&hide_temp=0&hide_rh=0&hide_updated=0&hide_signal=1&hide_battery=0&hide_battery_volt=1&hide_motion=1&uuids=39ba7d42-bab8-40ba-aaa8-68baca0fc996" height="62" width="100%" frameborder="0" scrolling="no"></iframe>

    </li>

    
    <li> <a href="https://my.wirelesstag.net/eth/tempStats.html?1fa24424-4b86-464c-bcfc-a873d3d418cb&GLD-Freezer%201&C"> Gold Lab Fridge #2- View Graph</a>

<iframe src="https://my.wirelesstag.net/ethSharedFrame.aspx?pic=1&hide_name=0&hide_temp=0&hide_rh=0&hide_updated=0&hide_signal=1&hide_battery=0&hide_battery_volt=1&hide_motion=1&uuids=1fa24424-4b86-464c-bcfc-a873d3d418cb" height="62" width="100%" frameborder="0" scrolling="no"></iframe>

    </li>

        </ul>

        
    </section>

    <!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
</body>
</html>
<? 
} 
?>
