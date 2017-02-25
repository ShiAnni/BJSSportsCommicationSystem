<?php
/**
 * Created by PhpStorm.
 * User: shino
 * Date: 2016/11/28
 * Time: 22:14
 */
?>
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
                        <input name="username" type="text" class="login_text" placeholder="请输入用户名厚"/>
                    </div>
                    <div class="login">
<!--                        <span class="glyphicon glyphicon-lock"></span>-->
                        <label class="glyphicon glyphicon-lock"></label>
                        <input name="password" type="password" class="login_text" placeholder="请输入密码吸吸"/>
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
                        <input name="username" type="text" class="login_text" placeholder="请输入用户名厚"/>
                    </div>
                    <div class="login">
                        <span class="glyphicon glyphicon-envelope"></span>
                        <input name="email" type="text" class="login_text" placeholder="请输入你的邮箱厚"/>
                    </div>
                    <div class="login">
                        <span class="glyphicon glyphicon-lock"></span>
                        <input name="password" type="password" class="login_text" placeholder="请输入密码吸吸"/>
                    </div>
                    <div class="login">
                        <span class="glyphicon glyphicon-lock"></span>
                        <input name="confirm" type="password" class="login_text" placeholder="请确认密码吸吸"/>
                    </div>
                    <div class="login">
                        <button type="submit">登录</button>
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