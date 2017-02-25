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
                        <img src="<?=base_url('public/img/default_banner.png')?>" >
                        <i class="spaceProfileCard__tip"></i> <a class="spaceProfileCard__upCover"
                                                                 href="#"></a></div>
                    <div class="spaceProfileCard__bd l-clearfix _box">
                        <div class="_avatar">
                            <div class="imgContainer">
                                <a class="_avatar--user" href="#" title="werxcvl">
                                    <img src="<?=base_url('public/uploads/'.$pic['addr'])?>" alt="werxcvl">
                                </a>
                                <a class="avatarMask">修改头像</a></div>
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
                        <a class="tab-nav__item " href="<?=site_url('set/basis')?>">
                            编辑资料 </a>
                        <a class="tab-nav__item tab-nav__item--active">
                            修改头像 </a>
                    </div>
                    <div class="_box pl20 pr20 pt60 pb60 center">
<!--                        --><?php //echo form_open_multipart('upload/do_upload');?>
                        <div class="well">
                            <div>
                                <img id="ImgPre" width="150" height="150" src="<?=base_url('public/uploads/'.$pic['addr'])?>"/>
                            </div>
                            <br/>
                            <div class="posr">
                                <div class="btn btn-primary">上传图片</div>
                                <input type="file" name="userfile" size="20"  id="userfile" class="UploadImg posa btn btn-primary" style="top:0;right: 180px;opacity: 0;"/>
                            </div>

                            <br/>

                            <input id="save" type="submit" value="保存" class="btn btn-primary"/>
                        </div>


<!--                        </form>-->


                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=base_url('public/js/jquery.min.js')?>"></script>
    <script src="<?=base_url('public/js/bootstrap.js')?>"></script>
    <script src="<?=base_url('public/js/uploadPreview.js')?>"></script>

    <script src="<?=base_url('public/js/ajaxfileupload.js')?>"></script>
    <script>
        $(function () {
            $("#userfile").uploadPreview({ Img: "ImgPre", Width: 150, Height: 150 });

            $("#save").on('click',function () {
                $.ajaxFileUpload({
                    url: '<?=site_url('upload/do_upload')?>',
                    type: 'post',
                    secureuri: false, //一般设置为false
                    fileElementId: 'userfile', // 上传文件的id、name属性名
                    dataType: 'json',
                    complete:function(data) {
                        console.log(data.responseText);
                        if(data.responseText.indexOf('{"state":true}')!=-1){
                            alert("修改成功");
                            location.href = "<?=site_url("space/view")?>";
                        }else{
                            alert("图片不满足要求");
                            location.href = "<?=site_url("set/head")?>";
                        }

                    }
                })
            })
        });
    </script>
</body>
</html>