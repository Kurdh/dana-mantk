<html>

<form name="login" action="" method="post">
name: <input type="text" name="text"><br>
password: <input type="password" name="pass"><br>
<input type="submit" name="submit" value="login">
</form>
<?php
$connect = mysql_connect("localhost","root","");
if(isset($connect))
{
echo"sucess";
}
else
{
echo"faild";
}

?>
</html>