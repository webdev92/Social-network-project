<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

<style>
body{
	padding:10px;}
#banner,#banner2{
	
	border:black solid 1px;}
#bannerContent{
	height:35px;}
#footer1,#footer2{
	border:black solid 1px;
	margin-top:20pt;}
#footer{
	height:80px;}
#menu{
	text-decoration:none;
	display:block;
	margin-left:20pt;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:22px;}
#menu:hover{
	color:#006;}
#loginLink{
	float:right;
	margin-right:20px;}
/*template*/
li{
	list-style:none;
	float:left;
	margin-left:20pt;}
#register{
	border:#009 solid 1px;
	height:300px;
	width:300px;
	padding:20px;
	margin-top:10pt;
	background:#06C;}
#postBox{
	border:none;
	height:30px;
	width:200px;
	padding:4px;
	font-size:16px;}
#leftContent{
	float:right;
	height:300px;
	width:700px;
	padding:20px;
	margin-top:10pt;
	border:black solid 1px;}
#box{
	height:200px;
	width:200px;
	border: black solid 2px;
	padding:10px;}
</style>
</head>
<body>
    <div id="banner">
    </div>
        <div id="bannerContent">
            <ul id="menuUL">
                <li><a href="home.php" id="menu">Home</a></li>
                <li><a href="chat.php" id="menu">Chat</a></li>
                <li><a href="friends.php" id="menu">Friend</a></li>
                <li><a href="photos.php" id="menu">Photos</a></li>
            </ul>
            <?php echo "<p style='color:red'> Welcome $_SESSION[username]</p>"?>
            <a href="logout.php" id="loginLink">Logout</a>
        </div>
    <div id="banner2">
    </div>
    <div id="leftContent">
    <?php echo "status : " .$_SESSION['status']; ?>
    </div>
    <div id="register">
    <form method="post" name="chat" action="chatRoom.php">
            <input type="text" id="postBox" name="post" placeholder="Post something" />
            <input type="submit" name="submitPost" />
        </form>
    </div>
    <div id="footer1">
    </div>
    <div id="footer">
    </div>
    <div id="footer2">
    </div>
</body>
</html>