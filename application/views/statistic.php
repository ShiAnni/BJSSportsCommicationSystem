<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>寻找伙伴 享受健身</title>
    <link rel="stylesheet" href="<?=base_url('public/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/css/common.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/css/nav_style.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/css/establish.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/css/glyphicon.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/css/statistic.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/css/format.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/css/base.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/css/codoon.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/css/messages.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/css/data_v.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/css/codoon_inner.css')?>">

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
                    <li class="active"><a><span class="glyphicon glyphicon-stats"></span> 锻炼</a></li>
                    <li><a href="<?=site_url('activity/view')?>"><span class="glyphicon glyphicon-flag"></span> 活动</a></li>
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
                        <a href="<?=site_url('sports/view')?>">锻炼数据</a>
                        <a class="active">锻炼分析</a>
                    </nav>
                </section>


            </div>
            <div class="col-sm-9 opaquewhite" style="padding: 0 15px 15px 15px;">

                <div class="head">
                    运动统计
                </div>
                <hr>
                <!--<div class="clearfix">
                    <div class="pt20 pb20 col-xs-6">
                        <div class="st-circle ma"><p>25<span>次</span></p><p class="fz18">运动</p></div>
                    </div>
                    <div class="pt20 pb20 col-xs-6">
                        <div class="st-circle ma"><p>301225<span>米</span></p></div>
                    </div>
                </div>
                <hr>

                <div class="sportitem bgWhite posr clearfix">
                    <div class="col-xs-3 date"><p>11<span>月</span>1<span>日</span></p></div>
                    <div class="col-xs-9 step">运动距离 7743<span>米</span></div>
                    <div class="action">
                        <a href="#" class="edit">编辑</a>
                        <a href="#" class="delete">删除</a>
                    </div>
                </div>

                <div class="sportitem bgWhite posr clearfix">
                    <div class="col-xs-3 date"><p>10<span>月</span>30<span>日</span></p></div>
                    <div class="col-xs-9 step">运动距离 7743<span>米</span></div>
                    <div class="action">
                        <a href="#" class="edit">编辑</a>
                        <a href="#" class="delete">删除</a>
                    </div>
                </div>


                <div class="sportitem bgWhite posr clearfix">
                    <div class="col-xs-3 date"><p>10<span>月</span>22<span>日</span></p></div>
                    <div class="col-xs-9 step">运动距离 7743<span>米</span></div>
                    <div class="action">
                        <a href="#" class="edit">编辑</a>
                        <a href="#" class="delete">删除</a>
                    </div>
                </div>

                <div class="sportitem bgWhite posr clearfix">
                    <div class="col-xs-3 date"><p>10<span>月</span>18<span>日</span></p></div>
                    <div class="col-xs-9 step">运动距离 7743<span>米</span></div>
                    <div class="action">
                        <a href="#" class="edit">编辑</a>
                        <a href="#" class="delete">删除</a>
                    </div>
                </div>

                <div class="sportitem bgWhite posr clearfix">
                    <div class="col-xs-3 date"><p>10<span>月</span>13<span>日</span></p></div>
                    <div class="col-xs-9 step">运动距离 7743<span>米</span></div>
                    <div class="action">
                        <a href="#" class="edit">编辑</a>
                        <a href="#" class="delete">删除</a>
                    </div>
                </div>

                <div class="sportitem bgWhite posr clearfix">
                    <div class="col-xs-3 date"><p>10<span>月</span>10<span>日</span></p></div>
                    <div class="col-xs-9 step">运动距离 7743<span>米</span></div>
                    <div class="action">
                        <a href="#" class="edit">编辑</a>
                        <a href="#" class="delete">删除</a>
                    </div>
                </div>-->
                <div class="my_d_T">
                    <div class="clearfix fl Tydjl">
                        <div class="fl ico3 Tydjl_i"></div>
                        <div class="fl marl10 f14 co13">
                            <div>累积运动距离</div>
                            <div class="blank10"></div>
                            <div>
                                <span class="fb fl f30 "><?=$miles?></span>
                                <div class="fl" style="line-height:48px;">公里</div>
                                <div class="blank0"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix fl TydT">
                        <div class="fl ico3 TydT_i"></div>
                        <div class="fl marl10 f14 co13">
                            <div>累积运动时间</div>
                            <div class="blank10"></div>
                            <div>
                                <span class="fb fl f30"><?=$day?></span>
                                <div class="fl" style="line-height:48px;">天</div>
                                <div class="blank0"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix fl TydK">
                        <div class="fl ico3 Tydk_i"></div>
                        <div class="fl marl10 f14 co13">
                            <div>累积燃烧热量</div>
                            <div class="blank10"></div>
                            <div>
                                <span class="fb fl f30"><?=$ka?></span>
                                <div class="fl" style="line-height:48px;">大卡</div>
                                <div class="blank0"></div>
                            </div>
                        </div>
                    </div>
                    <div class="blank0"></div>
                </div>
                <div class="blank30"></div>
                <div class="blank20"></div>
                <div class="blank20"></div>
                <div class="f24 co14">这些运动量可以</div>
                <div class="blank20"></div>
                <div class="REW clearfix">
                    <div class="fl REWR">
                        <div class="blank20"></div>
                        <div class="ico3 mc photo_png REWR_i "></div>
                        <div class="blank5"></div>

                        <div class="tc co3 fb">绕环形跑道<span class="f12 fn">(圈)</span></div>
                        <div class="blank10"></div>
                        <div class="tc co3  fb f60"><?=$round?></div>

                    </div>
                    <div class="fl REWM marl1">
                        <div class="blank20"></div>
                        <div class="REWM_i ico3 mc photo_png"></div>
                        <div class="blank5"></div>
                        <div class="tc co3 fb">消耗肥肉<span class="f12 fn">(公斤)</span></div>
                        <div class="blank10"></div>
                        <div class="tc co3 fb f60"><?=$kg?></div>
                    </div>
                    <div class="fl REWG marl1">
                        <div class="blank20"></div>
                        <div class="REWG_i ico3 mc photo_png"></div>
                        <div class="blank5"></div>
                        <div class="tc co3 fb">省93#汽油<span class="f12 fn">(升)</span></div>
                        <div class="blank10"></div>
                        <div class="tc co3  fb f60 "><?=$volumn?></div>
                    </div>
                    <div class="fl REWL marl1">
                        <div class="blank15"></div>
                        <div class="REWL_i ico3 mc photo_png"></div>
                        <div class="blank10"></div>
                        <div class="tc co3 fb">60W灯泡亮<span class="f12 fn">(小时)</span></div>
                        <div class="blank10"></div>
                        <div class="tc co3  fb f60"><?=$time?></div>
                    </div>
                </div>





            </div>

        </div>

    </div>

    <script src="<?=base_url('public/js/jquery.js')?>"></script>
    <script src="<?=base_url('public/js/bootstrap.js')?>"></script>
</body>
</html>