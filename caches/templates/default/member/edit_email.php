<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T('member','head'); ?>
<!--正文部分-->
<div class="container adframe">
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            
        </div>
    </div>
</div>

<div class="container memberframe">
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <!--左侧开始-->
            <div class="memberleft">
                <div class="membertitle"><h3>会员中心</h3></div>
                <div class="memberborder">
                    <?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T('member','left'); ?>
                </div>
            </div>
            <!--左侧结束-->

            <!--右侧开始-->
            <div class="memberright">

                <div class="memberbordertop">
                    <section class="panel">
                        <header class="panel-heading"><span class="title">修改邮箱</span></header>

                        <div id="myTabContent" class="tab-content tabsbordertop">

                            <div role="tabpanel" class="tab-pane fade active in" id="tabs1" aria-labelledby="1tab">
                                <div class="panel-body" id="panel-bodys">
                                    <form class="form-horizontal" role="form" name="passworform" action="?m=member&f=index&v=edit_email" method="post" id="passworform" onsubmit="return check_password();">
                                        <table class="table  table-hover text-center">
                                            <tbody>

                                            <tr>
                                                <td><div class="form-groupinfo"><label class="col-sm-3 control-label text-right">邮箱：</label><div class="col-sm-3 text-left"><input type="text" class="form-control" id="email" placeholder="请输入邮箱" name="email" type="text" value="<?php if(strpos($memberinfo['email'],'@h1jk.cn')===false) { ?><?php echo $memberinfo['email'];?><?php } ?>"></div></div></td>
                                            </tr>


                                            <tr>
                                                <td><div class="form-groupinfo"><label class="col-sm-3 control-label text-right"> </label><div class="col-sm-3 text-left"><button type="submit" name="submit" class="btn btn-order">点击验证</button></div></div></td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </form>
                                </div>

                            </div>






                        </div>


                    </section>
                </div>

            </div>
            <!--右侧结束-->


        </div>
    </div>
</div>
<!--正文部分-->

<script type="text/javascript">
    function send_sms() {
        if($("#mobile").val()=='') {
            var d = dialog({
                content: '手机号不能为空！'
            });
            d.show();
            setTimeout(function () {
                d.close().remove();
                $("#mobile").focus();
            }, 2000);
            return false;
        }
        if($("#Verificationcode").val()=='') {
            var d = dialog({
                content: '验证码不能为空！'
            });
            d.show();
            setTimeout(function () {
                d.close().remove();
                $("#Verificationcode").focus();
            }, 2000);
            return false;
        }
        var mobile = $("#mobile").val();
        var checkcode = $("#Verificationcode").val();
        $.get("index.php?m=sms&f=sms&v=sendsms", { mobile: mobile,checkcode:checkcode, time: Math.random()},
                function(data){
                    if(data==201) {
                        alert('手机号错误');
                    } else if(data==202) {
                        alert('验证码错误');
                    } else if(data==1) {
                        var d = dialog({
                            content: '短信发送成功，请将收到的短信验证码填写到“短信验证码”'
                        });
                        d.show();
                        setTimeout(function () {
                            d.close().remove();
                        }, 5000);
                    } else {
                        alert('短信发送失败，请重试，或者联系客服！');
                    }
                });

    }
</script>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","foot"); ?>