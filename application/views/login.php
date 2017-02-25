<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>寻找伙伴 享受健身 伴健身网</title>
    <link rel="stylesheet" href="<?=base_url('public/css/nav_style.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/css/login_style.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/css/glyphicon.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/css/common.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/css/format.css')?>">
</head>
<body>
<div class="body">
    <div class="header bgwhite">
        <a href="#" title="伴健身-和朋友一起享受奔跑">
            <img class="logo nav-left" src="<?= base_url('public/img/logo.png') ?>">
        </a>
    </div>
    <div class="content posr">
        <img class="bg" src="<?= base_url('public/img/bg.jpg') ?>" alt="">

        <div class="login_box">
            <div id="load">
                <!--动态加载-->
                <div id="login">
                    <?=form_open('admin/login');?>
                    <div class="login_title">欢迎来到伴健身网</div>
                    <hr>
                    <div class="login">
                        <!--                        <span class="glyphicon glyphicon-user"></span>-->
                        <label class="glyphicon glyphicon-user"></label>
                        <input name="username" type="text" class="login_text" placeholder="请输入用户名"/>
                    </div>
                    <div class="login">
                        <!--                        <span class="glyphicon glyphicon-lock"></span>-->
                        <label class="glyphicon glyphicon-lock"></label>
                        <input name="password" type="password" class="login_text" placeholder="请输入密码"/>
                    </div>
                    <div class="login">
                        <button type="submit">登录</button>
                    </div>
                    <div class="login login_links">
                        没有账号？<a href="#" id="to_signup">免费注册</a>
                    </div>
                    <?=form_close();?>
                </div>
                <div id="signup">
                    <?=form_open('admin/signup');?>
                    <div class="login_title">注册成为新用户</div>
                    <hr>
                    <div class="login">
                        <span class="glyphicon glyphicon-user"></span>
                        <input name="username" type="text" class="login_text" placeholder="请输入用户名"/>
                    </div>
                    <div class="login">
                        <span class="glyphicon glyphicon-envelope"></span>
                        <input name="email" type="text" class="login_text" placeholder="请输入你的邮箱"/>
                    </div>
                    <div class="login">
                        <span class="glyphicon glyphicon-lock"></span>
                        <input name="password" type="password" class="login_text" placeholder="请输入密码"/>
                    </div>
                    <div class="login">
                        <span class="glyphicon glyphicon-lock"></span>
                        <input name="confirm" type="password" class="login_text" placeholder="请确认密码"/>
                    </div>
                    <div class="login">
                        <button type="submit">注册</button>
                    </div>
                    <div class="login login_links">
                        有账号啦？<a href="#" id="to_login">立即登录</a>
                    </div>
                    <?=form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('public/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('public/js/log_sign.js') ?>"></script>
<script>
    $(setTimeout(function () {
            var message = "<?php echo $message;?>";
            if (message) {
                alert(message);
            }
        },300)
    );

</script>
</body>
</html>