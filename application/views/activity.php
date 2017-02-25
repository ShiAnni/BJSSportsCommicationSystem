<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>寻找伙伴 享受健身 伴健身网</title>
    <link rel="stylesheet" href="<?=base_url('public/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/css/common.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/css/nav_style.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/css/table_style.css')?>">


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
        <div class="container">
            <div class="col-sm-3 left_index">
                <section class="bg-road">
                    <nav class="index">
                        <a class="active">活动列表</a>
                        <a href="<?=site_url('activity/putup')?>">发起活动</a>
                    </nav>
                </section>
            </div>

            <div class="col-sm-9 opaquewhite" style="padding: 0 15px 15px;">
                <table>
                    <caption align="top">活动列表</caption>
                    <thead>
                    <tr>
                        <th>活动名称</th>
                        <th>开始时间</th>
                        <th>结束时间</th>
                        <th>参与人数</th>
                        <th>活动状态</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($activities as $activity):?>
                    <tr class="item" title="展开">
                        <td><?=$activity['aname']?></td>
                        <td><?=$activity['stime']?></td>
                        <td><?=$activity['etime']?></td>
                        <td><?=count($activity['joiners'])?></td>
<!--                        <td>--><?php //$activity['type']=?><!--多人赛跑</td>-->
<!--                        <td>日常运动</td>-->
                        <td>进行中</td>
                    </tr>
                    <tr class="detail">
                        <td colspan="7">
                            <div class="form-horizontal activity_detail">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">活动名称</label>
                                    <div class="col-sm-offset-1 col-sm-9">
                                        <h2><?=$activity['aname']?></h2>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">活动简介</label>
                                    <div class="col-sm-offset-1 col-sm-9">
                                        <p><?=$activity['description']?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">活动时间</label>
                                    <div class="col-sm-offset-1 col-sm-9">
                                        <p><span class="glyphicon glyphicon-time"></span> <?=$activity['stime']?> ~ <span class="glyphicon glyphicon-time"></span> <?=$activity['etime']?> 18:10</p>
                                    </div>
                                </div>
                                <!--<div class="form-group">
                                    <label class="col-sm-2 control-label">活动类型</label>
                                    <div class="col-sm-offset-1 col-sm-9">
                                        <p>多人赛跑</p>
                                    </div>
                                </div>-->
                                <!--<div class="form-group">
                                    <label class="col-sm-2 control-label">活动级别</label>
                                    <div class="col-sm-offset-1 col-sm-9">
                                        <p>普通级别</p>
                                    </div>
                                </div>-->
                                <hr>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">发起人</label>
                                    <div class="col-sm-offset-1 col-sm-8">
                                        <a href="#"><img src="<?=base_url('public/uploads/'.$activity['addr'])?>" alt="头像" class="thumbImage" style="margin: 5px;"></a>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">参与者</label>
                                    <div class="col-sm-offset-1 col-sm-8">
                                        <?php foreach ($activity['joiners'] as $joiner):?>
                                        <div class="well">
                                            <a href="#"><img src="<?=base_url('public/uploads/'.$joiner['addr'])?>" alt="头像" class="thumbImage" style="margin: 5px;"></a>
                                            <div style="display: inline;">已运动<?=$joiner['mile'];?>米</div>
                                            <div class="clearfix">
                                                <div class="focus btn btn-primary" style="float: right;" uid="<?=$joiner['uid'];?>">添加关注</div>
                                            </div>

                                        </div>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                                <hr>
                                <div class="button_div" aid="<?=$activity['aid']?>">
                                    <button class="button_collapse">收起</button>
                                    <?php if (!in_array(Array('aid'=>$activity['aid']),$aids,true)):?>
                                    <button class="button_in">参与活动</button>
                                    <?php else:?>
                                    <button class="button_out">已参与</button>
                                    <?php endif;?>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach;?>
                    </tbody>

                </table>
                <!--<nav style="text-align:center;">
                    <ul class="pagination ">
                        <li><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li class="disabled"><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </nav>-->

            </div>

        </div>

    </div>

    <script src="<?=base_url('public/js/jquery.min.js')?>"></script>
    <script src="<?=base_url('public/js/bootstrap.js')?>"></script>
    <script src="<?=base_url('public/js/activity.js')?>"></script>
    <script>
        $('.button_in').on('click',function () {
            var aid = $(this).parents().attr('aid');
            var uid = <?=$user['uid']?>;
            $.ajax({
                url:'<?=site_url('activity/joinactivity')?>',
                data:{"aid":aid,"uid":uid},
                method:'post',
                async:false,
                complete:function (data) {
                    alert("已参与活动");
                    location.href = "<?=site_url('activity/view')?>";
                }
            })
        });
        $('.button_out').on('click',function () {
            /*alert("已取消参与");
            location.href = "";*/
        });

        $('.focus').on('click',function () {
            var staruid = $(this).attr('uid');
            $.ajax({
                url:"<?=site_url('admin/focus')?>",
                data:{'starid':staruid,'followerid':<?=$user['uid']?>},
                method:"post",
                async:false,
                complete:function (data) {
                    alert('添加成功');
                }
            })
        })
    </script>

</body>
</html>