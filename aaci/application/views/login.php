<base href="<?php echo site_url()?>">
<meta charset="utf-8">
<link rel="stylesheet" href="assets/css/style.css">
<script src="assets/js/jquery-3.0.0.min.js"></script>
<div id="div1">
    <form action="<?php echo site_url('user/dologin')?>" method="post">
        用户名:<input type="text" name="uname"> <br>
        密&nbsp;&nbsp;&nbsp;码:<input type="password" name="pwd"> <br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="登录" >
    </form>

</div>