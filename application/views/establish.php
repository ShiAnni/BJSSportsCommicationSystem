<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>竞赛创建</title>
    <link rel="stylesheet" href="<?=base_url('public/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/css/common.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/css/nav_style.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/css/establish.css')?>">
<!--    <link rel="stylesheet" href="--><?//=base_url('public/css/bootstrap-datetimepicker.css')?><!--">-->
    <link rel="stylesheet" href="<?=base_url('public/css/jquery.datetimepicker.css')?>">


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
                    <li class="active"><a><span class="glyphicon glyphicon-flag"></span> 活动</a></li>
                    <li><a href="<?=site_url('space/view')?>"><span class="glyphicon glyphicon-star"></span> 空间</a></li>
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

        <div class="container">
            <div class="col-sm-3 left_index">
                <section class="bg-road">
                    <nav class="index">
                        <a href="<?=site_url('activity/view')?>">活动列表</a>
                        <a class="active">发起活动</a>
                    </nav>
                </section>
            </div>

            <div class="col-sm-9 opaquewhite" style="padding: 0 15px 15px 15px;">
                    <div class="head">
                        发布活动
                    </div>
                    <hr>

                    <div class="form-horizontal">
                        <input id="uid" type="hidden" name="uid" value="<?php echo $user['uid'];?>">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">活动名称</label>
                            <div class="col-sm-offset-1 col-sm-8">
                                <input id="aname" name="aname" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">活动简介</label>
                            <div class="col-sm-offset-1 col-sm-8">
                                <textarea id="description" name="description" id="description" cols="30" rows="10"
                                          class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dtp_input1" class="col-sm-2 control-label">活动时间</label>
                            <div class="input-group date form_datetime col-sm-8 col-sm-push-1" ">
                                <span class="input-group-addon">开始时间</span>
                                <input id="stime" class="form-control some_class" type="text" value="">
                            </div>
                            <input type="hidden" id="dtp_input1" value="" /><br/>
                            <div class="input-group date form_datetime col-sm-8 col-sm-push-3">
                                <span class="input-group-addon">结束时间</span>
                                <input id="etime" class="form-control some_class" type="text" value="">
                            </div>
                            <input type="hidden" id="dtp_input2" value=""/><br/>
                        </div>
                        <!--<div class="form-group">
                            <label class="col-sm-2 control-label">活动类型</label>
                            <div class="col-sm-offset-1 col-sm-8">
                                <select name="type" id="type" class="form-control">
                                    <option>单人运动</option>
                                    <option>多人运动</option>
                                </select>
                            </div>
                        </div>-->
                        <hr>
                        <div class="form">
                            <div class="button_div clearfix" style="margin-right:6%;">
                                <button class="button_in">发布活动</button>
                            </div>
                        </div>
                    </div>

            </div>

        </div>

    </div>

    <script type="text/javascript" src="<?=base_url('public/js/jquery.js')?>" charset="UTF-8"></script>
    <script type="text/javascript" src="<?=base_url('public/js/bootstrap.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('public/js/jquery.datetimepicker.full.js')?>"></script>
    <script type="text/javascript">
        $('.some_class').datetimepicker();
    </script>
    <script type="text/javascript">
        $(".button_in").on('click',function () {

            var post_data = {
                'uid': $('#uid').val(),
                'aname':$('#aname').val(),
                'description':$('#description').val(),
                'stime':$('#stime').val(),
                'etime':$('#etime').val(),
                'type':$('#type').val()

            };
            console.log(post_data);
            $.ajax({
                url:'<?=site_url('activity/establish')?>',
                data:post_data,
                method:'post',
                async:false,
                complete:function (data) {
                    alert("发布成功!");
                    location.href = "<?=site_url('activity/view')?>"
                }
            })
        });
    </script>
</body>
</html>