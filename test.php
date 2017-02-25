<?php
/**
 * Created by PhpStorm.
 * User: shino
 * Date: 2016/11/30
 * Time: 19:14
 */
$stime = '2016/11/30 01:50';
$etime = '2016/11/30 21:50';
$svalue = explode(' ',$stime);
$evalue = explode(' ',$etime);
$time = '2016/11/30';
$hour = 21;
$bool1 = $svalue[0]<$time ||($svalue[0]===$time && intval(explode(':',$svalue[1])[0])<=$hour);
$bool2 = $evalue[0]>$time ||($evalue[0]===$time && intval(explode(':',$evalue[1])[0])>=$hour);
echo $bool1&&$bool2;