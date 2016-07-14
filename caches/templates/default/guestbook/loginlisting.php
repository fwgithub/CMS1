<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T('member','head'); ?>
<script src="<?php echo R;?>member/js/jscarousel.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#jsCarousel').jsCarousel({ onthumbnailclick: function(src) {
            // 可在这里加入点击图片之后触发的效果
            $("#overlay_pic").attr('src', src);
            $(".overlay").show();
        }, autoscroll: true });

        $(".overlay").click(function(){
            $(this).hide();
        });
    });
</script>
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
                        <header class="panel-heading"><span class="title">我的登录记录</span></header>

                        <div class="myask">我的登录记录：</div>
                        <div class="submitbtn"></div>
                        <div role="tabpanel" class="tab-pane fade active in" id="tabs1" aria-labelledby="1tab">
                            <div class="panel-body" id="panel-bodys">
                                <table class="table table-striped table-advance table-hover text-center">
                                    <thead>
                                    <tr>
                                        <th class="tablehead">ID</th>
                                        <th class="tablehead" width="300">账号</th>
                                        <th class="tablehead">登录状态</th>

                                        <th class="tablehead" width="300">登录IP</th>
                                        <th class="tablehead">登录时间</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $n=1;if(is_array($result)) foreach($result AS $r) { ?>
                                    <tr>
                                        <td ><?php echo $r['id'];?></td>
                                        <td ><?php echo $mid; ?></td>
                                        <td>
<?php
if($r['status']==0) {
    echo '后台验证失败';
} elseif($r['status']==1) {
    echo '后台登录成功';
} elseif($r['status']==2) {
    echo '前台验证失败';
} elseif($r['status']==3) {
    echo '会员登录成功';
}
?>
                                        </td>

                                        <td><?php echo $r['ip'];?></td>
                                        <td><?php echo time_format($r['logintime']);?></td>
                                    </tr>
<?php $n++;}?>

                                    </tbody>
                                </table>
                            </div>
<!--<?php if($total>10) { ?>-->
                            <!--分页开始-->
                            <div class="paginationpage text-center">
                                <nav>
                                    <ul class="pagination">
                                        <?php echo $pages;?>
                                    </ul>
                                </nav>
                            </div>
                           <!-- <?php } ?>-->
                            <!--分页结束-->
                        </div>
                    </section>
                </div>

            </div>
            <!--右侧结束-->


        </div>
    </div>
</div>
<!--正文部分-->
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T('member','foot'); ?>

