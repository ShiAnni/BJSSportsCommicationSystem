<?php
/**
 * Created by PhpStorm.
 * User: shino
 * Date: 2016/11/28
 * Time: 20:05
 */
?>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>寻找伙伴 享受健身</title>
    <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/common.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/nav_style.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/bcy.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/format.css')?>">
</head>
<body class="body background">
<div class="header">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">
                    <div class="navbar-header"><img class="logo nav-left" src="<?php echo base_url('public/img/logo.png')?>"></div>
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="glyphicon glyphicon-list" style="color: white;font-size: 16px"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-left no-margin-top">
                    <li><a href="sports.html"><span class="glyphicon glyphicon-stats"></span> 锻炼</a></li>
                    <li><a href="activity.html"><span class="glyphicon glyphicon-flag"></span> 活动</a></li>
                    <li class="active"><a href="space.html"><span class="glyphicon glyphicon-star"></span> 空间</a></li>
                </ul>


                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" style="padding: 0;">
                            <img src="img/avatar_self.jpg" alt="头像" class="thumbImage">
                            迷失的Miku
                        </a></li>
                </ul>
            </div>

        </div>
    </nav>
</div>
<div class="content padder">
    <div class="container staticwhite nodecoration">
        <div class="row mb30 posr">
            <div id="js-profile" class="spaceProfileCard">
                <div class="spaceProfileCard__img">
                    <img src="img/default_banner.png" style="height: 200px;">
                    <i class="spaceProfileCard__tip"></i> <a class="spaceProfileCard__upCover"
                                                             href="#"></a></div>
                <div class="spaceProfileCard__bd l-clearfix _box">
                    <div class="_avatar">
                        <div class="imgContainer">
                            <a class="_avatar--user" href="#" title="werxcvl">
                                <img src="<?php echo base_url('public/img/user_pic_big.png')?>" alt="werxcvl">
                            </a>
                            <a class="avatarMask" href="#">修改头像</a></div>
                        <i class="i-work-sex-30-1 posa avatar-sex"></i>
                    </div>

                    <div class="l-clearfix spaceProfileCard__line">
                        <a class="l-left mr5 fz22 lh28 _white text-shadow" href="#"
                           title="werxcvl">werxcvl</a>
                    </div>
                    <div class="tab-nav tab-nav--space">
                        <a class="tab-nav__item" href="#">
                            主页 </a>
                        <a class="tab-nav__item " href="#">
                            活动 </a>
                        <!--<a class="tab-nav__item " href="#">-->
                        <!--勾搭 </a>-->
                    </div>
                    <div class="l-clearfix center spaceProfileCard__follow hidden-xs">
                        <a class="l-left follow" href="#">
                            <p class="followpnumber">0</p>
                            <p class="followptext">粉丝</p>
                        </a>
                        <b class="b l-left"></b>
                        <a class="l-left follow" href="#">
                            <p class="followpnumber">7</p>
                            <p class="followptext">关注</p>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="row" style="padding: 0 5px 0 10px;">
            <div class="col-xs-3" style="float: right;padding: 0 5px;">
                <a class="_btn _btn--white _btn--l _btn--block mb30" href="space.html">
                    <span class="text">返回个人主页</span>
                </a>
            </div>
            <div class="col-xs-9">
                <div id="l-space-fan-big" page-id="space-follower-following">
                    <div class="tab-nav tab-nav--default _box">
                        <a class="tab-nav__item tab-nav__item--active" href="#">
                            我的关注
                        </a>
                        <a class="tab-nav__item " href="#">
                            我的粉丝 </a>
                        <a class="tab-nav__item " href="#">
                            互相关注 </a>
                        <a class="tab-nav__item " href="#">
                            黑名单 </a></div>
                    <div class="mt10 mb60">
                        <ul class="l-clearfix">
                            <li>
                                <div class="newFanBox hover-show">
                                    <header style="background-color: #F8F3F3">
                                        <a class="_avatar _avatar--user" href="#">
                                            <img src="img/big.jpg">
                                        </a>
                                        <div class="ovf pt16">
                                            <a class="l-left blue1 fz14 mr5" href="#">
                                                柚柚酱 </a>
                                            <i class="l-left i-new-sex-0"></i>
                                        </div>
                                        <a class="js-fanboxRemoveFollow newFanBox__rm minor hover-show__item"
                                           href="javascript:;" data-uid="42610">取关</a>
                                        <a href="javascript:;" class="i-followedBtn newFanBox__follow"></a>
                                    </header>
                                    <div class="newFanBox__cnt l-clearfix">
                                        <div class="l-clearfix lh1 mt5">
                                            <a class="l-left mr3 mt3 _tag _tag--user _tag--user--cos"
                                               href="http://bcy.net/u/2052736/post/cos" target="_blank">1级</a>
                                        </div>
                                        <p class="minor lh14 mt5">
                                            微博@圆滚滚的柚酱博@圆滚滚的柚酱博@圆滚滚的柚酱博@圆滚滚的柚酱博@圆滚滚的柚酱博@圆滚滚的柚酱博@圆滚滚的柚酱博@圆滚滚的柚酱博@圆滚滚的柚酱博@圆滚滚的柚酱博@圆滚滚的柚酱博@圆滚滚的柚酱，欢迎来找我玩ヾ(´… </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="newFanBox hover-show">
                                    <header style="background-color: #F8F3F3">
                                        <a class="_avatar _avatar--user" href="http://bcy.net/u/232860"
                                           title="tenkuuu">
                                            <img src="img/big(1).jpg">
                                        </a>
                                        <div class="ovf pt16">
                                            <a class="l-left blue1 fz14 mr5" href="http://bcy.net/u/232860">
                                                tenkuuu </a>
                                            <i class="l-left i-new-sex-1"></i>
                                        </div>
                                        <a class="js-fanboxRemoveFollow newFanBox__rm minor hover-show__item"
                                           href="javascript:;" data-uid="232860">取关</a>
                                        <a href="javascript:;" class="i-followedBtn newFanBox__follow"></a>
                                    </header>
                                    <div class="newFanBox__cnt">
                                        <div class="l-clearfix lh1 mt5">
                                            <a class="l-left mr3 mt3 _tag _tag--user _tag--user--illust"
                                               href="http://bcy.net/u/2052736/post/illust" target="_blank">1级</a>
                                        </div>
                                        <p class="minor lh14 mt5">
                                            cos小白，萌新画手，努力中。。。 </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="newFanBox hover-show">
                                    <header style="background-color: #F8F3F3">
                                        <a class="_avatar _avatar--user" href="http://bcy.net/u/253292"
                                           title="萤火挽魂兮">
                                            <img src="img/big(2).jpg">
                                        </a>
                                        <div class="ovf pt16">
                                            <a class="l-left blue1 fz14 mr5" href="http://bcy.net/u/253292">
                                                萤火挽魂兮 </a>
                                            <i class="l-left i-new-sex-0"></i>
                                        </div>
                                        <a class="js-fanboxRemoveFollow newFanBox__rm minor hover-show__item"
                                           href="javascript:;" data-uid="253292">取关</a>
                                        <a href="javascript:;" class="i-followedBtn newFanBox__follow"></a>
                                    </header>
                                    <div class="newFanBox__cnt">
                                        <div class="l-clearfix lh1 mt5">
                                            <a class="l-left mr3 mt3 _tag _tag--user _tag--user--illust"
                                               href="http://bcy.net/u/2052736/post/illust" target="_blank">1级</a>
                                        </div>
                                        <p class="minor lh14 mt5">
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="newFanBox hover-show">
                                    <header style="background-color: #F8F3F3">
                                        <a class="_avatar _avatar--user" href="http://bcy.net/u/768355"
                                           title="ElyE子">
                                            <img src="img/big(3).jpg">
                                        </a>
                                        <div class="ovf pt16">
                                            <a class="l-left blue1 fz14 mr5" href="http://bcy.net/u/768355">
                                                ElyE子 </a>
                                            <i class="l-left i-new-sex-0"></i>
                                        </div>
                                        <a class="js-fanboxRemoveFollow newFanBox__rm minor hover-show__item"
                                           href="javascript:;" data-uid="768355">取关</a>
                                        <a href="javascript:;" class="i-followedBtn newFanBox__follow"></a>
                                    </header>
                                    <div class="newFanBox__cnt">
                                        <div class="l-clearfix lh1 mt5">
                                            <a class="l-left mr3 mt3 _tag _tag--user _tag--user--cos"
                                               href="http://bcy.net/u/2052736/post/cos" target="_blank">1级</a>
                                        </div>
                                        <p class="minor lh14 mt5">
                                            大家好~我是來自台灣的ElyE子! ◆http:… </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="newFanBox hover-show">
                                    <header style="background-color: #F8F3F3">
                                        <a class="_avatar _avatar--user" href="http://bcy.net/u/781752"
                                           title="Ekita玄_">
                                            <img src="img/big(4).jpg">
                                        </a>
                                        <div class="ovf pt16">
                                            <a class="l-left blue1 fz14 mr5" href="http://bcy.net/u/781752">
                                                Ekita玄_ </a>
                                            <i class="l-left i-new-sex-0"></i>
                                        </div>
                                        <a class="js-fanboxRemoveFollow newFanBox__rm minor hover-show__item"
                                           href="javascript:;" data-uid="781752">取关</a>
                                        <a href="javascript:;" class="i-followedBtn newFanBox__follow"></a>
                                    </header>
                                    <div class="newFanBox__cnt">
                                        <div class="l-clearfix lh1 mt5">
                                            <a class="l-left mr3 mt3 _tag _tag--user _tag--user--illust"
                                               href="http://bcy.net/u/2052736/post/illust" target="_blank">1级</a>
                                        </div>
                                        <p class="minor lh14 mt5">
                                            想做个立派的绘师www P站id=14793912 … </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="newFanBox hover-show">
                                    <header style="background-color: #F8F3F3">
                                        <a class="_avatar _avatar--user" href="http://bcy.net/u/1099296"
                                           title="奶糖君TOKYO">
                                            <img src="img/big(5).jpg">
                                        </a>
                                        <div class="ovf pt16">
                                            <a class="l-left blue1 fz14 mr5" href="http://bcy.net/u/1099296">
                                                奶糖君TOKY… </a>
                                            <i class="l-left i-new-sex-0"></i>
                                        </div>
                                        <a class="js-fanboxRemoveFollow newFanBox__rm minor hover-show__item"
                                           href="javascript:;" data-uid="1099296">取关</a>
                                        <a href="javascript:;" class="i-followedBtn newFanBox__follow"></a>
                                    </header>
                                    <div class="newFanBox__cnt">
                                        <div class="l-clearfix lh1 mt5">
                                            <a class="l-left mr3 mt3 _tag _tag--user _tag--user--cos"
                                               href="http://bcy.net/u/2052736/post/cos" target="_blank">1级</a>
                                        </div>
                                        <p class="minor lh14 mt5">
                                            CN奶糖君，正在努力前进的小透明一只，… </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="newFanBox hover-show">
                                    <header style="background-color: #F8F3F3">
                                        <a class="_avatar _avatar--user" href="http://bcy.net/u/1933712"
                                           title="wukloo">
                                            <img src="img/user_pic_big.png">
                                        </a>
                                        <div class="ovf pt16">
                                            <a class="l-left blue1 fz14 mr5" href="http://bcy.net/u/1933712">
                                                wukloo </a>
                                            <i class="l-left i-new-sex-1"></i>
                                        </div>
                                        <a class="js-fanboxRemoveFollow newFanBox__rm minor hover-show__item"
                                           href="javascript:;" data-uid="1933712">取关</a>
                                        <a href="javascript:;" class="i-followedBtn newFanBox__follow"></a>
                                    </header>
                                    <div class="newFanBox__cnt">
                                        <div class="l-clearfix lh1 mt5">
                                            <a class="l-left mr3 mt3 _tag _tag--user _tag--user--illust"
                                               href="http://bcy.net/u/2052736/post/illust" target="_blank">1级</a>
                                        </div>
                                        <p class="minor lh14 mt5">
                                            P站id=4401153，微博ID是:wukloo。一个… </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!--<script type="text/javascript">$(function () {
                            followInit("body", '.js-iconFollowBtn', null, 'tpl-followBtn');
                        });</script>
                        <script id="tpl-followBtn" type="text/template">
                            @{if status === 'havefollow'}
                            <a href="javascript:;" class="i-followedBtn newFanBox__follow"></a>
                            @{else}
                            <a href="javascript:;" class="i-eachfollowBtn newFanBox__follow"></a>
                            @{/if}
                        </script>-->
                    </div>
                    <div class="mb30 clearfix">
                        <ul class="pag">
                            <li class="pag__item pag__item--is-cur pag__item--disabled"><span>共45篇</span></li>
                            <li class="pag__item pag__item--disabled"><span>首页</span></li>
                            <li class="pag__item pag__item--disabled"><span>&lt;</span></li>
                            <li class="pag__item pag__item--is-cur pag__item--disabled"><span>1</span></li>
                            <li class="pag__item js-nologinLink"><a href="/u/2052736/following?&amp;p=2">2</a>
                            </li>
                            <li class="pag__item js-nologinLink"><a href="/u/2052736/following?&amp;p=3">3</a>
                            </li>
                            <li class="pag__item js-nologinLink"><a href="/u/2052736/following?&amp;p=2">&gt;</a>
                            </li>
                            <li class="pag__item js-nologinLink"><a href="/u/2052736/following?&amp;p=3">尾页</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/activity.js"></script>
</body>
</html>
