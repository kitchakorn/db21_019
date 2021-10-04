<?php

if(isset($_GET['controllers'])&&isset($_GET['action']))
{
    $controller = $_GET['controllers'];
    $action = $_GET['action'];
}else
{
    $controller = 'pages';
    $action = 'home';
}?>
<html>
<head>
<style>
.button {
    background-color: #3399FF; 
    border: 1px solid blue;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
}

.button:hover {
    background-color: #3330FF;
}
</style>
</head>
<body style="background-color: #D1EAF5; position: relative; " align="center" >
<?php echo "controller = ".$controller.",action = ".$action;?>
<br>
<html>
    <head></head>
    <body>
        <?php echo "controllers= ".$controller.",action=".$action;?>
        <br>[<a href="?controllers=pages&action=home">HOME</a>]
        [<a href="?controllers=order&action=index_order">ORDER</a>]
      [<a href="?controllers=detail_order&action=index">รายละเอียดสินค้า</a>]
        [<a href="?controllers=price&action=index">ราคา</a>]<br>
         
        <?php require_once("./routes.php");?>
    </body>
</html>