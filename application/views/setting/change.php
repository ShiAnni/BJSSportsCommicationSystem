<?php
/**
 * Created by PhpStorm.
 * User: shino
 * Date: 2016/11/29
 * Time: 8:12
 */
?>
<div class="col-xs-9">
    <div class="tab-nav tab-nav--default _box mb10">
        <a class="tab-nav__item tab-nav__item--active" href="#">
            编辑资料 </a>
        <a class="tab-nav__item " href="#">
            修改头像 </a>
        <a class="tab-nav__item " href="#">
            修改封面 </a>
        <a class="tab-nav__item " href="#">
            修改密码 </a>
    </div>
    <div class="_box pl20 pr20 pt60 pb60">
        <form id="js-form" action="#" method="post" oncomplete="false">
            <input type="hidden" name="dotype" value="upbase">
            <div class="form-group mb30">
                <label class="form-group__left fz14 lh28">站内昵称</label>
                <div class="flyout flyout--alt">
                    <input class="_form-control form-input form-input--l mb10" name="nickname" type="text"
                           value="werxcvl" require="" datatype="limitB|userName|ajax"
                           msg="用户名不符合要求|用户名不符合要求|用户名已被占用" min="4" max="30"
                           url="/home/public/isvalidnickname">
                    <p class="fz12 lh1d5 minor">请输入4-30位字符，支持中英文、数字、下划线或中划线</p>
                    <p class="fz12 lh1d5 minor">修改昵称会造成已发布动态中@你的昵称失效</p>
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
            <!--<div class="form-group mb30">
                <label class="form-group__left fz14 lh24">地区</label>
                <div class="flyout flyout&#45;&#45;alt">
                    <script>ui.getarea('area', '', 0, 0);</script>
                    <select id="area_provence" name="area_province"
                            style="position: absolute; opacity: 0; font-size: 14px;">
                        <option>省/直辖市</option>
                        <option value="1" rel="0">北京</option>
                        <option value="21" rel="1">天津</option>
                        <option value="41" rel="2">河北</option>
                        <option value="225" rel="3">山西</option>
                        <option value="356" rel="4">内蒙古</option>
                        <option value="471" rel="5">辽宁</option>
                        <option value="586" rel="6">吉林</option>
                        <option value="656" rel="7">黑龙江</option>
                        <option value="802" rel="8">上海</option>
                        <option value="823" rel="9">江苏</option>
                        <option value="943" rel="10">浙江</option>
                        <option value="1045" rel="11">安徽</option>
                        <option value="1168" rel="12">福建</option>
                        <option value="1263" rel="13">江西</option>
                        <option value="1374" rel="14">山东</option>
                        <option value="1532" rel="15">河南</option>
                        <option value="1709" rel="16">湖北</option>
                        <option value="1826" rel="17">湖南</option>
                        <option value="1963" rel="18">广东</option>
                        <option value="2106" rel="19">广西</option>
                        <option value="2230" rel="20">海南</option>
                        <option value="2257" rel="21">重庆市</option>
                        <option value="2299" rel="22">四川</option>
                        <option value="2502" rel="23">贵州</option>
                        <option value="2600" rel="24">云南</option>
                        <option value="2746" rel="25">西藏</option>
                        <option value="2827" rel="26">陕西</option>
                        <option value="2945" rel="27">甘肃</option>
                        <option value="3046" rel="28">青海</option>
                        <option value="3098" rel="29">宁夏</option>
                        <option value="3125" rel="30">新疆</option>
                        <option value="3261" rel="31">台湾</option>
                        <option value="3297" rel="32">香港</option>
                        <option value="3298" rel="33">澳门</option>
                        <option value="3299" rel="34">海外</option>
                        <option value="3300" rel="35">其他</option>
                    </select><span class="customStyleSelectBox _form-control form-select changed"
                                   style="display: inline-block;"><span class="customStyleSelectBoxInner"
                                                                        style="width: 102px; display: inline-block;">辽宁</span></span>
                    <select id="area_city" name="area_city"
                            style="position: absolute; opacity: 0; font-size: 14px;">
                        <option>不限</option>
                        <option value="472">沈阳市</option>
                        <option value="486">大连市</option>
                        <option value="497">鞍山市</option>
                        <option value="505">抚顺市</option>
                        <option value="513">本溪市</option>
                        <option value="520">丹东市</option>
                        <option value="527">锦州市</option>
                        <option value="535">营口市</option>
                        <option value="542">阜新市</option>
                        <option value="550">辽阳市</option>
                        <option value="558">盘锦市</option>
                        <option value="563">铁岭市</option>
                        <option value="571">朝阳市</option>
                        <option value="579">葫芦岛市</option>
                    </select><span class="customStyleSelectBox _form-control form-select changed"
                                   style="display: inline-block;"><span class="customStyleSelectBoxInner"
                                                                        style="width: 101px; display: inline-block;">抚顺市</span></span>
                </div>
            </div>-->
            <div class="form-group mb30">
                <label class="form-group__left fz14">性别</label>
                <div class="l-clearfix">
                    <label class="checkbox checkbox--radio l-left mr10 js-radio mt10">
                        <input type="radio" name="sex" value="1" checked="">男<div class="checkbox__bg"></div>
                    </label>
                    <label class="checkbox checkbox--radio l-left js-radio mt10">
                        <input type="radio" name="sex" value="0">女<div class="checkbox__bg"></div>
                    </label>
                </div>
            </div>
            <div class="form-group mb30">
                <label class="form-group__left fz14 lh28">个人简介</label>
                <textarea class="_form-control form-textarea form-input--l" name="self_intro"
                          placeholder="最多输入100字">werwerwerwerwerwerwerwerwerwerwerwerwerwerwerwerwerwer werwerwerwerwerwer</textarea>
            </div>
            <div class="form-group">
                <input id="js-submit" class="_btn--red _btn--xxl" type="submit" value="保存">
            </div>
        </form>
    </div>
</div>