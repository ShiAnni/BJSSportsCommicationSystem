<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>寻找伙伴 享受健身</title>
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
    <div class="content padder">
        <div class="container staticwhite nodecoration">
            <div class="row mb30 posr">
                <div id="js-profile" class="spaceProfileCard">
                    <div class="spaceProfileCard__img">
                        <img src="<?=base_url('public/img/default_banner.png')?>">
                        <i class="spaceProfileCard__tip"></i> <a class="spaceProfileCard__upCover"
                                                                 href="#"></a></div>
                    <div class="spaceProfileCard__bd l-clearfix _box">
                        <div class="_avatar">
                            <div class="imgContainer">
                                <a class="_avatar--user" href="#" title="werxcvl">
                                    <img src="<?=base_url('public/uploads/'.$pic['addr'])?>" alt="werxcvl">
                                </a>
                                <a class="avatarMask" href="<?=site_url('set/head')?>">修改头像</a></div>
                            <i class="i-work-sex-30-<?php if($user['sex']==='男')echo 1;else echo 0;?>  posa avatar-sex"></i>
                        </div>

                        <div class="l-clearfix spaceProfileCard__line">
                            <a class="l-left mr5 fz22 lh28 _white text-shadow" href="#"
                               title="werxcvl"><?=$user['username']?></a>
                        </div>
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
            <div class="row" style="padding: 0 5px 0 10px;">
                <div class="col-xs-3" style="float: right;padding: 0 5px;">
                    <a class="_btn _btn--white _btn--l _btn--block mb30" href="<?=site_url('space/view')?>">
                        <span class="text">返回个人主页</span>
                    </a>
                </div>
                <div class="col-xs-9">
                    <div class="tab-nav tab-nav--default _box mb10">
                        <a class="tab-nav__item tab-nav__item--active">
                            编辑资料 </a>
                        <a class="tab-nav__item " href="<?=site_url('set/head')?>">
                            修改头像 </a>
<!--                        <a class="tab-nav__item " href="#">-->
<!--                            修改封面 </a>-->
<!--                        <a class="tab-nav__item " href="#">-->
<!--                            修改密码 </a>-->
                    </div>
                    <div class="_box pl20 pr20 pt60 pb60">
<!--                        --><?//=form_open('admin/edit')?>

                            <input id="uid" type="hidden" name="uid" value="<?php echo $user['uid'];?>">
                            <div class="form-group mb30">
                                <label class="form-group__left fz14 lh28">站内昵称</label>
                                <div class="flyout flyout--alt">
                                    <input id="username" class="_form-control form-input form-input--l mb10" name="username" type="text"
                                           value="<?php echo $user['username'];?>" required datatype="limitB|userName|ajax"
                                           min="4" max="30">
                                    <p class="fz12 lh1d5 minor">请输入3-30位字符，支持中英文、数字、下划线或中划线</p>
                                    <div class="flyout__content">
                                        <div class="ml5 mt6 ico_cue_ok" id="success_nickname" style="display: none;">
                                        </div>
                                        <div class="ml5 error_nickname wide ovf mt6" style="display:none;">
                                            <span class="ico_cue_no db l-left mr5"></span>
                                            <span class="l-left vam lh1 fz14" id="error_nickname"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb30">
                                <label class="form-group__left fz14">性别</label>
                                <div class="l-clearfix">
                                    <label class="checkbox checkbox--radio l-left mr10 js-radio mt10">
                                        <input type="radio" name="sex" value="男" <?php if ($user['sex']==='男'):?>checked<?php endif;?>>男<div class="checkbox__bg"></div>
                                    </label>
                                    <label class="checkbox checkbox--radio l-left js-radio mt10">
                                        <input type="radio" name="sex" value="女"<?php if ($user['sex']==='女'):?>checked<?php endif;?>>女<div class="checkbox__bg"></div>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb30">
                                <label class="form-group__left fz14 lh28">个人简介</label>
                                <textarea id="description" class="_form-control form-textarea form-input--l" name="description"
                                          placeholder="最多输入100字"><?php echo $user['description'];?></textarea>
                            </div>
                            <div class="form-group">
<!--                                <button type="submit">登录</button>-->
                                <input id="save" class="btn btn-primary" type="submit" value="保存">
                            </div>
<!--                        --><?//=form_close();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=base_url('public/js/jquery.min.js')?>"></script>
    <script src="<?=base_url('public/js/bootstrap.js')?>"></script>
    <script>
        $("#save").on('click',function () {

            var post_data = {
                'uid':$('#uid').val(),
                'username':$('#username').val(),
                'sex':$('input[name="sex"]:checked').val(),
                'description':$('#description').val(),
            };
            var regx=/[a-zA-Z0-9]{2,30}/;
            if(!regx.test(post_data.username)){
                alert("用户名长度不符合要求！");
                return;
            }
            $.ajax({
                url:'<?=site_url('admin/edit')?>',
                data:post_data,
                method:'post',
                async:false,
//                contentType:'json',
                complete:function (data) {
                    alert("保存成功！");
                    location.href="<?=site_url('space/view')?>";
                }
            })
        });
    </script>

</body>
</html>