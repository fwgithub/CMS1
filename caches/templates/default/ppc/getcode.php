<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","head"); ?>
<style type="text/css">
    .table_form tr{line-height: 3.2}
</style>
<div class="container membercenter">
    <div class="row">
        <div class="span3 memberleft">
            <?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T('member','left'); ?>
        </div>
        <div class="memberright">

            <div class="memberframe order">
                <div class="memberinfotitle"><h4>我的推广链接</h4></div>
                <div id="formdiv">
                        <table width="100%" cellspacing="0" class="table_form">
                            <tr>
                                <td><input id="myurl" type="text" style="width: 500px;" value="<?php echo WEBURL;?>index.php?m=ppc&uid=<?php echo $memberinfo['uid'];?>"  class="input-text" /><input type="submit" name="submit" id="copy-button" value="复制到剪贴板" class="btn btn-info btn-lg" style="height: 42px;padding-top: 0px;margin-bottom: 10px;">
                                    <script src="<?php echo R;?>js/ZeroClipboard/ZeroClipboard.min.js"></script>
                            </tr>

                        </table>
                    <div class="orderstate">
                        成功邀请注册一个会员可以获得 <?php echo $setting['point'];?>个积分。积分越多，可兑换的商品越多。
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>
<style type="text/css">
    .payment-show .payment-desc {
        color: #999;
        display: block;
        overflow: auto;
    }
    .table_form {
        width: 980px;
        margin: auto;
    }

</style>

<script type="text/javascript">
    var client = new ZeroClipboard( $('#copy-button') );

    client.on( 'ready', function(event) {
        // console.log( 'movie is loaded' );

        client.on( 'copy', function(event) {
            event.clipboardData.setData('text/plain', "<?php echo $setting['tips'];?>\r\n"+$("#myurl").val());
        } );

        client.on( 'aftercopy', function(event) {
            alert('复制成功，您可以黏贴到QQ或者发送邮件给您的好友！');
           // console.log('Copied text to clipboard: ' + event.data['text/plain']);
        } );
    } );

    client.on( 'error', function(event) {
        // console.log( 'ZeroClipboard error of type "' + event.name + '": ' + event.message );
        ZeroClipboard.destroy();
    } );
</script>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","foot"); ?>