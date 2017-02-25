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
    <link rel="stylesheet" href="<?=base_url('public/css/bootstrap-datetimepicker.css')?>">




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
                        <a class="active">锻炼数据</a>
                        <a href="<?=site_url('sports/statistics')?>">锻炼分析</a>
                    </nav>
                </section>
            </div>

            <div class="col-sm-9 opaquewhite" style="padding: 0 15px 15px 15px;">
                <div id="main" style="width: 100%;height:400px;"></div>
                    <!--<div class="head">
                        添加运动数据
                    </div>
                    <hr>

                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="dtp_input1" class="col-sm-2 control-label">活动日期</label>
                            <div class="input-group date form_datetime col-sm-8 col-sm-push-1" data-date="2016-11-16T05:25:07Z" data-date-format="yyyy年 MM dd日" data-link-field="dtp_input1">
                                <input class="form-control" type="text">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                            </div>
                            <input type="hidden" id="dtp_input1" value=""/><br/>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">运动距离</label>
                            <div class="input-group col-sm-push-1 col-sm-8">
                                <input type="number" class="form-control">
                                <span class="input-group-addon"><span class="">米</span></span>
                            </div>
                        </div>

                        <hr>
                        <div class="form">
                            <div class="button_div clearfix" style="margin-right:6%;">
                                <button class="button_in">添加数据</button>
                            </div>
                        </div>

                    </form>-->

                </div>
        </div>

    </div>

    <script src="<?=base_url('public/js/jquery.js')?>"></script>
    <script src="<?=base_url('public/js/bootstrap.js')?>"></script>
    <script src="<?=base_url('public/js/echarts.min.js')?>" charset="UTF-8"></script>
    <script src="<?=base_url('public/js/sports_chart.js')?>" charset="UTF-8"></script>

<script>
        $(function () {

            $('.form_datetime').datetimepicker({
                language:  'zh-CN',
                weekStart: 1,
                todayBtn:  1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                minView: 2,
                forceParse: 0
            });
        });
</script>
<script type="text/javascript">
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main'));

    $.ajax({
        url:"<?=site_url('sports/getSportsData')?>",
        method:"POST",
        data:{"uid":"<?=$user['uid']?>"},
        async:false,
        complete: function (data) {
            console.log(data.responseJSON);
            data=data.responseJSON;


        myChart.setOption(option = {
            title: {
                text: '<?=$user['username']?>的运动统计'
            },
            tooltip: {
                trigger: 'axis'
            },
            xAxis: {
                data: data.map(function (item) {
                    return item[0];
                })
            },
            yAxis: {
                splitLine: {
                    show: false
                },
                axisLabel : {
                    formatter: '{value}米'
                }

            },
            toolbox: {
                left: 'center',
                feature: {
                    dataZoom: {
                        yAxisIndex: 'none'
                    },
                    restore: {},
                    saveAsImage: {}
                }

            },
            dataZoom: [{
                startValue: '2016/11/21'
            }, {
                type: 'inside'
            }],
            visualMap: {
                top: 10,
                right: 10,
                pieces: [{
                    gt: 0,
                    lte: 500,
                    color: '#096'
                }, {
                    gt: 500,
                    lte: 600,
                    color: '#ffde33'
                }, {
                    gt: 600,
                    lte: 750,
                    color: '#ff9933'
                }, {
                    gt: 750,
                    lte: 900,
                    color: '#cc0033'
                }, {
                    gt: 900,
                    lte: 1100,
                    color: '#660099'
                }, {
                    gt: 1100,
                    color: '#7e0023'
                }],
                outOfRange: {
                    color: '#999'
                }
            },
            series: {
                name: '运动距离',
                type: 'line',
                data: data.map(function (item) {
                    return item[1];
                }),
                markLine: {
                    silent: true,
                    data: [{
                        yAxis: 500
                    }, {
                        yAxis: 600
                    }, {
                        yAxis: 750
                    }, {
                        yAxis: 900
                    }, {
                        yAxis: 1100
                    }]
                }
            }
        });
    }});


</script>
</body>
</html>