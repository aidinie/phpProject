
login in
<?php
/**
 * Created by PhpStorm.
 * User: nad
 * Date: 2017/4/8
 * Time: 18:54
 */
if($this->session->uid){
    echo ("<h3>".$this->session->uname."已登录"."</h3>");
    header('user/index');
}
foreach ($bloglist as $v) {
    ?>
    <h3>标题:<?php echo $v->title?></h3>
    <p>内容:<?php echo $v->content?></p><br/>
    <p>时间:<?php echo $v->time?></p><br/>
    <p>访问量:<?php echo $v->hits?></p>
    <hr>
    <?php
}
?>
<?php echo $this->pagination->create_links();?>
