<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet/less" href="less/main.less" type="text/css" />
    <script src="js/less.js"></script>
    <title></title>
</head>
<body>
<?php
if(isset ($_GET['lang']))
{
    $l = $_GET['lang'];
    include 'lang/'.$l.'_lang.php';
}
echo "<br>";
echo $str['hello'];


?>
<a href="index.php?lang=en" >English</a>

</body>
</html>