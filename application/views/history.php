










<!--Not Used Now!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->












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
    <link rel="stylesheet" href="<?=base_url('public/css/jquery.datetimepicker.css')?>">


</head>
<body class="body background">
<?php include('templates/topnav.php');?>
    <div class="content">

        <div class="container clearfix padder">
            <div class="col20 left_index">
                <section class="bg-road">
                    <nav class="index">
                        <a href="sports.html">锻炼数据</a>
                        <a href="history.php" class="active">锻炼历史</a>
                        <a href="statistic.php">锻炼分析</a>
                    </nav>
                </section>


            </div>
            <div class="col80 opaquewhite" style="padding: 0 15px 15px 15px;">
                <div class="form">
                    <div class="head">
                        发布活动
                    </div>
                    <hr>
                    <form action="">
                        <div class="clearfix">
                            <label for="name" class="col20">活动名称</label>
                            <input type="text" id="name" class="col70">
                        </div>
                        <div class="clearfix">
                            <label for="description" class="col20">活动简介</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="col70"></textarea>
                        </div>
                        <div class="clearfix">

                            <label for="time" class="col20">活动时间</label>
                            <div id="time" class="col70">
                                <label for="datestart" class="col10" style="text-align:center;font-size: 18px;">从</label>
                                <input type="text" id="datestart" class="col40 timepick"/>
                                <label for="timeend" class="col10" style="text-align:center;font-size: 18px;">至</label>
                                <input type="text" id="timeend" class="col40 timepick">
                            </div>


                        </div>
                        <hr>
                        <div class="clearfix">
                            <label for="type" class="col20">活动类型</label>
                            <select name="type" id="type" class="col70">
                                <option>单人运动</option>
                                <option>多人运动</option>
                            </select>
                        </div>
                        <div class="button_div clearfix" style="margin-right:10%;">
                            <button class="button_in">发布活动</button>
                        </div>


                    </form>

                </div>
            </div>

        </div>

    </div>

<script src="<?=base_url('public/js/jquery.js')?>"></script>
<script src="<?=base_url('public/js/jquery.datetimepicker.full.js')?>"></script>
<script>
    $(function () {
        $('.timepick').datetimepicker();
    });
</script>
</body>
</html>