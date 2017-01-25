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
        <h1>EYSM Biochem Lab Cooling Units</h1>
        <p><a href="https://my.wirelesstag.net/eth/signin.html"> Wireless Tag Monitoring Login</a></p>
        <p>You are running PHP version <?= phpversion() ?></p>
    </section>

    <section class="instructions">
        <h2>Current Status</h2>
        <ul>


    <li> 

      <a href="https://my.wirelesstag.net/eth/tempStats.html?125f1d29-70d3-4603-bd0b-0eeb2f2c686c&BCS-1&C"> BCS-1 Biochem Shipping Freezer #1 - FITC - View Graph</a>
       <iframe src="https://my.wirelesstag.net/ethSharedFrame.aspx?pic=1&hide_name=0&hide_temp=0&hide_rh=0&hide_updated=0&hide_signal=1&hide_battery=0&hide_battery_volt=1&hide_motion=1&uuids=125f1d29-70d3-4603-bd0b-0eeb2f2c686c" height="62" width="100%" frameborder="0" scrolling="no"> </iframe>

    </li>

    <li><a href="https://my.wirelesstag.net/eth/tempStats.html?6304f8c6-3581-48c8-a67a-39d288c4b8d6&BCS-2&C">BCS-2 Biochem Shipping Freezer #2 - Biotin - View Graph </a>
    <iframe src="https://my.wirelesstag.net/ethSharedFrame.aspx?pic=1&hide_name=0&hide_temp=0&hide_rh=0&hide_updated=0&hide_signal=1&hide_battery=0&hide_battery_volt=1&hide_motion=1&uuids=6304f8c6-3581-48c8-a67a-39d288c4b8d6" height="62" width="100%" frameborder="0" scrolling="no"></iframe>


    </li>

    <li><a href="https://my.wirelesstag.net/eth/tempStats.html?9b5105ac-4edc-4ff1-8d08-02269919ad5b&BCS-3&C">BCS-3 Biochem Shipping Freezer #3 - HRP TexasRed TRITC Inventory - View Graph</a>
    <iframe src="https://my.wirelesstag.net/ethSharedFrame.aspx?pic=1&hide_name=0&hide_temp=0&hide_rh=0&hide_updated=0&hide_signal=1&hide_battery=0&hide_battery_volt=1&hide_motion=1&uuids=9b5105ac-4edc-4ff1-8d08-02269919ad5b" height="62" width="100%" frameborder="0" scrolling="no"></iframe>


    </li>
  
    <li><a href="https://my.wirelesstag.net/eth/tempStats.html?19e4c4a9-f322-4713-aa46-0f58ed2c9adc&BCS-4&C">BCS-4 Biochem Shipping #4 - Bottom Section: Micro - View Graph</a>
    <iframe src="https://my.wirelesstag.net/ethSharedFrame.aspx?pic=1&hide_name=0&hide_temp=0&hide_rh=0&hide_updated=0&hide_signal=1&hide_battery=0&hide_battery_volt=1&hide_motion=1&uuids=19e4c4a9-f322-4713-aa46-0f58ed2c9adc" height="62" width="100%" frameborder="0" scrolling="no"></iframe>


    </li>
   
    <li><a href="https://my.wirelesstag.net/eth/tempStats.html?2afc53ff-a670-4dc2-89a7-3a168250469e&BCS-5&C">BCS-5 Biochem Shipping #4 - Top Freezer Section: Diagnosticcs Biochem - View Graph</a>
    <iframe src="https://my.wirelesstag.net/ethSharedFrame.aspx?pic=1&hide_name=0&hide_temp=0&hide_rh=0&hide_updated=0&hide_signal=1&hide_battery=0&hide_battery_volt=1&hide_motion=1&uuids=2afc53ff-a670-4dc2-89a7-3a168250469e" height="62" width="100%" frameborder="0" scrolling="no"></iframe>

    </li>


    <li><a href="https://my.wirelesstag.net/eth/tempStats.html?b3630820-d83c-4f98-9d9b-0e7f3ba0009b&Biochem-Lab-Fridge&C"> Biochem Lab Fridge - View Graph </a>

<iframe src="https://my.wirelesstag.net/ethSharedFrame.aspx?pic=1&hide_name=0&hide_temp=0&hide_rh=0&hide_updated=0&hide_signal=1&hide_battery=0&hide_battery_volt=1&hide_motion=1&uuids=b3630820-d83c-4f98-9d9b-0e7f3ba0009b" height="62" width="100%" frameborder="0" scrolling="no"></iframe>
    </li>

    
    <li> <a href="https://my.wirelesstag.net/eth/tempStats.html?71598cee-73d5-403b-b71f-aa686d592dd7&Biochem-Lab-Freezer&C"> Biochem Lab Freezer - View Graph </a>

<iframe src="https://my.wirelesstag.net/ethSharedFrame.aspx?pic=1&hide_name=0&hide_temp=0&hide_rh=0&hide_updated=0&hide_signal=1&hide_battery=0&hide_battery_volt=1&hide_motion=1&uuids=71598cee-73d5-403b-b71f-aa686d592dd7" height="62" width="100%" frameborder="0" scrolling="no"></iframe>
    </li>

        </ul>

        
    </section>

    <!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
</body>
</html>
<? 
} 
?>
