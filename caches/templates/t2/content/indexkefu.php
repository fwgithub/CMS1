<?php defined('IN_WZ') or exit('No direct script access allowed'); ?>
<script src="<?php echo R;?>t2/js/jquery.js"></script>
<link type="text/css" rel="stylesheet" href="<?php echo R;?>t2/css/kefu.css">

<div id="main">
 <div class="content">
  <div class="cont_left">
  	<div class="lefttop">
     	<span>武圣客服专区帮助引导</span>
    </div>
    <div class="lefttxt">
     <p>为尽快给广大玩家解决各类问题，特开此通道为玩家提供便利。
		我们会以最快的速度为玩家解决问题。</p>
    </div>
    <div class="left_meun">
      <div class="meun_btn">
      	<a href="index.php?m=member&f=index&v=account_safe" target="_self">账号安全</a>
      </div>
      <div class="meun_btn">
      	<a href="index.php?v=listing&cid=43&page=1" target="_self">建议反馈</a>
      </div>
      <div class="meun_btn">
      	<a href="index.php?v=listing&cid=44&page=1" target="_self">BUG反馈</a>
      </div>
      <div class="meun_btn">
      	<a href="index.php?v=listing&cid=46&page=1" target="_self">问题专区</a>
      </div>
      <div class="meun_btn">
      	<a href="index.php?v=listing&cid=47&page=1" target="_self">举报信息</a>
      </div>
        <div class="meun_btn">
            <a href="/welive/demo.html" target="_self">在线客服</a>
        </div>
      <!--<div class="meun_btn">
          &lt;!&ndash;<a onclick="setIsinvited();hz6d_is_exists('window.open%28%22http%3A%2F%2Fwww16.53kf.com%2FwebCompany.php%3Farg%3D10136880%26style%3D1%26language%3Dcn%26charset%3Dgbk%26lytype%3D0%26referer%3D%7Bhz6d_referer%7D%26keyword%3Dhttp%253A%252F%252Flocalhost%252Fwuzhicms%252Fwww%252F%252Findex.php%252F&tfrom=1%26tpl%3Dcrystal_blue%26kf%3D2682771419%40qq.com%26zdkf_type%3D1%26kflist%3Doff%22%2C%22_blank%22%2C%22height%3D473%2Cwidth%3D703%2Ctop%3D200%2Cleft%3D200%2Cstatus%3Dyes%2Ctoolbar%3Dno%2Cmenubar%3Dno%2Cresizable%3Dyes%2Cscrollbars%3Dno%2Clocation%3Dno%2Ctitlebar%3Dno%22%29','2682771419@qq.com');return false;" target="_self">在线客服</a>&ndash;&gt;
         &lt;!&ndash;<a onclick="setIsinvited();window.open(#liyc#http%3A%2F%2Fwww16.53kf.com%2FwebCompany.php%3Farg%3D10136900%26style%3D1%26language%3Dcn%26lytype%3D0%26charset%3DGBK%26kflist%3Doff%26kf%3D%26zdkf_type%3D1%26referer%3Dhttp%253A%252F%252Flocalhost%252FPHPWebSocket%252Findex.html%26keyword%3D%26tfrom%3D1%26tpl%3Dcrystal_blue#liyc#%2C%20#liyc#_blank#liyc#%2C%20#liyc#height%3D473%2Cwidth%3D703%2Ctop%3D200%2Cleft%3D200%2Cstatus%3Dyes%2Ctoolbar%3Dno%2Cmenubar%3Dno%2Cresizable%3Dyes%2Cscrollbars%3Dno%2Clocation%3Dno%2Ctitlebar%3Dno#liyc#);return false;" target="_self">在线客服</a>&ndash;&gt;
          <a onclick="pp=window.open('http://localhost/welive/enter.php?uid=3&amp;code=YjUxZVc2RzRtd3hTQ0MwK2Q3WGlITm9sSy9xYjQrcWpOM3M1WWpJN3VQU3RZc3Y3RlpscXB2R2w=&amp;vvckey=yn4QdztM&amp;url=aHR0cDovL2xvY2FsaG9zdC9XZUxpdmUvZGVtby5odG1s','newWin','height=518,width=658,top=200,left=200,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=no,location=no,titlebar=no');pp.focus();return false;" title="">在线客服</a>
      </div>-->

    </div>

  </div>
     <div class="cont_right">
         <img src="<?php echo R;?>t2/image/right_bg.png" />

     </div>
     <div class="footer">
         <div cla ss="left_foot">
             <img src="<?php echo R;?>t2/image/bangzhu.png" />
             <a href="" target="_blank">武圣帮助</a>
         </div>
         <div class="num">
             <p>若遇到紧急问题，请拨打客服电话：0755-26652163</p>
         </div>
     </div>
  </div>


</div>
</div>
<script src="http://localhost/WeLive/welive.php" language="javascript"></script>
<script>
    (function() {
        var _53code = document.createElement("script");
        _53code.src = "//tb.53kf.com/code/code/10136880/1";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(_53code, s);
    })();
</script>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","foot",TPLID); ?>