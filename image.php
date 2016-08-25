<?
    session_start();
if(isset($_POST[submit])){
    if(trim($_POST["test"])==$_SESSION['validationcode']){
        echo 'sub success';
    } else {
        echo '<font color="red">验证码输入错误</font>';
    }
}
?>

<html>
<head>
    <title>image</title>
    <meta http-equiv="content-type" content="text/html charset=utf-8">
    <script>
        function newgdcode(obj,url){
            obj.scr = url + '?nowtime' + new Date().getTime();
        }
    </script>
</head>
<body>
    <img src="imgcode.php" alt="看不清楚，换一种" style="cursor: pointer;" onclick="javascrpit:newgdcode(this,this.scr);">
    <form method="post" action="image.php">
        <input type="text" name="test"><br>
        <input type="submit" name="submit" value="提交">
    </form>
</body>
</html>