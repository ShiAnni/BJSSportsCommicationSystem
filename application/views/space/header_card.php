<?php
/**
 * Created by PhpStorm.
 * User: shino
 * Date: 2016/11/28
 * Time: 11:41
 */
?>
<div class="content padder">
    <div class="container staticwhite nodecoration">
        <div class="row mb30 posr">
            <div class="spaceProfileCard">
                <div class="spaceProfileCard__img">
                    <img src="<?=base_url('public/img/default_banner.png')?>" style="height: 200px;">
                    <i class="spaceProfileCard__tip"></i>
                    <a class="spaceProfileCard__upCover" href="#"></a>
                </div>
                <div class="spaceProfileCard__bd l-clearfix _box">
                    <div class="_avatar">
                        <div class="imgContainer">
                            <a class="_avatar--user" href="#" title="werxcvl">
                                <img src="<?=base_url('public/img/user_pic_big.png')?>" alt="werxcvl">
                            </a>
                            <a class="avatarMask" href="#">修改头像</a>
                        </div>
                        <i class="i-work-sex-30-1 posa avatar-sex"></i>
                    </div>

                    <div class="l-clearfix spaceProfileCard__line">
                        <a class="l-left mr5 fz22 lh28 _white text-shadow" href="#"
                           title="werxcvl">werxcvl</a>
                    </div>
                    <div class="tab-nav tab-nav--space">
                        <a class="tab-nav__item tab-nav__item--active" href="space.php">
                            主页 </a>
                        <a class="tab-nav__item " href="../../../../html/bjs/manage.html">
                            运动 </a>
                    </div>
                    <div class="center spaceProfileCard__follow hidden-xs">
                        <a class="l-left follow" href="#">
                            <p class="followpnumber">0</p>
                            <p class="followptext">粉丝</p>
                        </a>
                        <b class="b l-left"></b>
                        <a class="l-left follow" href="<?=site_url('space/following');?>">
                            <p class="followpnumber">7</p>
                            <p class="followptext">关注</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
