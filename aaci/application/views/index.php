
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
}
?>