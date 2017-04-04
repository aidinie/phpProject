<base href="<?php echo site_url()?>">
<meta charset="utf-8">
<link rel="stylesheet" href="assets/css/style.css">
<script src="assets/js/jquery-3.0.0.min.js"></script>
<div id="div1">
    <form action="<?php echo site_url('user/doreg')?>" method="post">
        用户名:<input type="text" name="uname" id="u1"> <br>
        密&nbsp;&nbsp;&nbsp;码:<input type="password" name="pwd" id="p1"> <br>
        确认密码:<input type="password" name="pwd" id="p2"> <br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="注册" >
    </form>  
    
</div>
<script>
 $(function () {
     $('#u1').blur(function () {
       var name=$(this).val();
         $.post("<?php echo site_url('user/check')?>","uname="+name,function (data) {
             if(data=='success'){
                 var oSpan=$('<span id="s1">用户名可用</span>');
                 $('#u1').after(oSpan);
             }
             if (data=='exist'){
                 var oSpan=$('<span id="s1">用户名重复</span>');
                 $('#u1').after(oSpan);
             }
         })
     });
     $('#u1').focus(function () {
         $('#s1').remove();
     });
     $('#p2').blur(function () {
         var pass=$('#p1').val();
         var repass=$(this).val();
         console.log(pass);
         console.log(repass);
         if(pass==repass){
             var oSpan=$('<span id="s2">密码一致</span>');
             $('#p2').after(oSpan);
         }else {
             var oSpan=$('<span id="s2">密码不一致</span>');
             $('#p2').after(oSpan);
         }
     });
     $('#p2').focus(function () {
         $('#s2').remove();
     })
 })
</script>
