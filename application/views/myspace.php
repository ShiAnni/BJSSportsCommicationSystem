<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>我的空间</title>
    <link rel="stylesheet" href="<?=base_url('public/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/css/common.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/css/nav_style.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/css/bcy.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/css/format.css')?>">

</head>
<body class="body background">
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
                    <li><a href="<?=site_url('sports/view')?>"><span class="glyphicon glyphicon-stats"></span> 锻炼</a></li>
                    <li><a href="<?=site_url('activity/view')?>"><span class="glyphicon glyphicon-flag"></span> 活动</a></li>
                    <li class="active"><a><span class="glyphicon glyphicon-star"></span> 空间</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" style="padding: 0;" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">
                            <img src="<?=base_url('public/uploads/'.$pic['addr'])?>" alt="头像" class="thumbImage">
                            <?=$user['username']?>
                            <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?=site_url('space/view')?>">我的空间</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?=site_url('admin/logout')?>">退出</a></li>
                        </ul>
                    </li>

                </ul>
            </li>
        </div>
    </nav>
</div>
<div class="content padder">
    <div class="container staticwhite nodecoration">
        <div class="row mb30 posr">
            <div class="spaceProfileCard">
                <div class="spaceProfileCard__img">
                    <img src="<?=base_url('public/img/default_banner.png')?>">
                    <i class="spaceProfileCard__tip"></i>
                    <a class="spaceProfileCard__upCover" href="#"></a>
                </div>
                <div class="spaceProfileCard__bd l-clearfix _box">
                    <div class="_avatar">
                        <div class="imgContainer">
                            <a class="_avatar--user" href="#" title="werxcvl">
                                <img src="<?=base_url('public/uploads/'.$pic['addr'])?>" alt="werxcvl">
                            </a>
                            <a class="avatarMask" href="<?=site_url('set/head')?>">修改头像</a>
                        </div>
                        <i class="i-work-sex-30-<?php if($user['sex']==='男')echo 1;else echo 0;?> posa avatar-sex"></i>
                    </div>

                    <div class="l-clearfix spaceProfileCard__line">
                        <a class="l-left mr5 fz22 lh28 _white text-shadow" href="#"
                           title="werxcvl"><?=$user['username']?></a>
                    </div>
                    <!--<div class="tab-nav tab-nav--space">
                        <a class="tab-nav__item tab-nav__item--active" href="space.php">
                            主页 </a>
                        <a class="tab-nav__item " href="../../../../html/bjs/manage.html">
                            运动 </a>
                    </div>-->
                    <div class="center spaceProfileCard__follow hidden-xs">
                        <a class="l-left follow" href="<?=site_url('space/fan');?>">
                            <p class="followpnumber"><?=$follower_num?></p>
                            <p class="followptext">粉丝</p>
                        </a>
                        <b class="b l-left"></b>
                        <a class="l-left follow" href="<?=site_url('space/following');?>">
                            <p class="followpnumber"><?=$star_num?></p>
                            <p class="followptext">关注</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-9 p10">
                <div class="timeline-panel l-clearfix" id="js-timeline" data-sub="user" data-uid="2052736"
                     data-avatar="0" data-ta-space="1" data-filter="origin" data-source="all" data-since="0">
                    <div class="title-nav subnav">
                        <h3 class="title-nav__title">我的动态</h3>
                        <nav class="title-nav__items">
                            <a href="#" class="title-nav__item title-nav__item--active">全部</a>
                            <a href="#" class="title-nav__item">个人</a>
                        </nav>

                    </div>
                    <div class="timeline-panel__bd js-posts clear mt15">
                        <textarea class="form-control" style="height: 150px;" id="up_news" placeholder="发表新消息"></textarea>
                        <div class="mb20 clearfix">
                            <button id="btn-clear" class="btn btn-default" style="margin: 10px;float: right;">清空</button>
                            <button id="btn-up" class="btn btn-primary" style="margin: 10px;float: right;">发布</button>
                        </div>
                        <?php foreach ($messages as $message): ?>
                        <div class="dynamic-box js-post mb30 _box" data-publish-id="6227520" data-type="group_post"
                             data-p-id="370024" data-rp-id="" data-ouid="191835" data-hide-detail="">
                            <table class="setting-table hover-show">
                                <tbody>
                                <tr>
                                    <td class="center vat w180 bgFa">
                                        <div class="pt25 pl10 pr10">
                                            <a class="_avatar _avatar--user" href="#">
                                                <img src="<?=base_url('public/uploads/'.$message['addr'])?>">
                                            </a>
                                            <p class="dynamic-box__time" data-ctime="1477593467"><?=$message['username']?></p>
                                            <p class="dynamic-box__time" data-ctime="1477593467"><?=$message['createtime']?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dynamic-box__bd">
                                            <div class="w650 p20 pb10 w650">
                                                <div class="border-box timeline-box timeline-box--group_post">
                                                    <div class="l-clearfix timeline-box__inner posr">
                                                        <p class="fz14 lh1d5 "><?php echo $message['content']; ?></p>
                                                        <div class="l-img-g mt15 l-clearfix">
                                                            <ul class="image_inner"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="js-publish-container hide dynamic-box__publish"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <?php endforeach;?>

                    </div>


                </div>
            </div>
            <div class="col-xs-3">
                <div class="mb30">
                    <div class="hdCard _box p15 pb5">
                            <span class="hdCard__hd">
                            <h3 class="hdCard__tit">个人资料</h3>
                            <p class="hdCard__link">
                            <a href="<?=site_url('set/basis')?>" class="text"><i class="i-edit-deep"></i><span
                                    class="vam ml5 fz14">编辑资料</span></a>
                            </p></span>
                        <div>
                            <div class="l-clearfix mt15 lh1">
                                <p class="fz0 mb15">
                                    <i class="i-location-s mr10"></i>
                                    <span class="fz14">运动里程<?=$miles?>公里</span>
                                </p>
                                <div class="fz0 mb30">
                                    <i class="i-intro-s l-left mr10 mt4"></i>
                                    <p class="l-left fz14 lh1d5 mb30" style="width: 75%;"><?=$user['description']?></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url('public/js/jquery.min.js')?>"></script>
<script src="<?=base_url('public/js/bootstrap.js')?>"></script>
<script>
    $('#btn-up').on('click',function () {
        var text = $('#up_news').val();
        $.ajax({
            url:"<?=site_url('space/news')?>",
            data:{"text":text},
            method:"POST",
            async:false,
            complete:function (data) {
                alert("发布成功!");
                location.href = "<?=site_url('space/view')?>"
            }
        })
    })
</script>
</body>
</html>