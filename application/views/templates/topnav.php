<?php
/**
 * Created by PhpStorm.
 * User: shino
 * Date: 2016/11/28
 * Time: 10:49
 */
?>
<div class="header">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">
                    <div class="navbar-header"><img class="logo nav-left" src="<?=base_url('public/img/logo.png')?>"></div>
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="glyphicon glyphicon-list" style="color: white;font-size: 16px"></span>
                </button>
            </div>
            <li class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-left no-margin-top">
                    <li<?php if ($site===1):?> class="active"<? endif;?>><a <?php if ($site!==1):?>href="<?=site_url('sports/view')?>"<? endif;?>><span class="glyphicon glyphicon-stats"></span> 锻炼</a></li>
                    <li<?php if ($site===2):?> class="active"<? endif;?>><a <?php if ($site!==1):?>href="<?=site_url('activity/view')?>"<? endif;?>><span class="glyphicon glyphicon-flag"></span> 活动</a></li>
                    <li<?php if ($site===3):?> class="active"<? endif;?>><a <?php if ($site!==1):?>href="<?=site_url('space/view')?>"<? endif;?>><span class="glyphicon glyphicon-star"></span> 空间</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" style="padding: 0;" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">
                            <img src="<?=base_url('public/uploads/'.$pic['addr'])?>" alt="头像" class="thumbImage">
                            <?=$user['username']?>
                            <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <!--                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>-->
                            <!--                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>-->
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?=site_url('space/view')?>">我的空间</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?=site_url('admin/logout')?>">退出</a></li>
                        </ul>
                    </li>

                </ul>
            </li>
        </div>
    </nav>
</div>