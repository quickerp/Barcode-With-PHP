<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
if($_POST['url']==""){
$link="http://quickerpthailand.com";
}else{
$link="http://".$_POST['url'];	
}
?>
<form action="#" method="post" id="form" name="form">
<input id="url" name="url" placeholder="ใส่ link url ที่นี่" value="<?=$link?>"  />
<input type="submit" id="genQr" name="genQR" value="Gen Code" />
</form>
<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?=$link?>&choe=UTF-8" title="quickerp" />
</body>
</html>