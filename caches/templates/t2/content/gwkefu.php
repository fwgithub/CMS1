<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","gwhead",TPLID); ?>
<script type="text/javascript">
    function check(form) {

        if(form.biaoti.value=='') {
            alert("请输入标题!");
            form.biaoti.focus();
            return false;
        }
        if(form.yijian.value==''){
            alert("请输入意见!");
            form.yijian.focus();
            return false;
        }
        if(form.yi_sc.value==''){
            alert("请上传文件!");
            form.yi_sc.focus();
            return false;
        }
        return true;
    }
</script>

  <div class="account"> 
	<div class="ac_head">
    	<div class="head_meun back">
          <a href="index.html" target="_self">客服大厅</a>
        </div>
        <div class="head_meun">
          <a href="accout.html" target="_self">账号安全</a>
        </div>
         <div class="head_meun">
          <a href="jianyi.html" target="_self">建议反馈</a>
        </div>
         <div class="head_meun">
          <a href="bug.html" target="_self">BUG反馈</a>
        </div>
         <div class="head_meun ">
          <a href="wenti.html" target="_self">问题专区</a>
        </div>
         <div class="head_meun">
             <div class="head_meunb ">
              <a href="" target="_self">举报信息</a>
               <div class="head_li">
                <div class="btn_jb"><a href="jbxx.html" target="_self">举报不良信息</a></div>
                <div class="btn_wg"><a href="jbwg.html" target="_self">举报外挂</a></div>
              </div>
            </div>
        </div>
         <div class="head_meun head_on">
          <a href="kefu.html" target="_self">在线客服</a>
        </div>
         <div class="head_right">
        </div>
    </div>
    <div class="act_mid">
        <div class="act_cont1">
          <div class="act_head">
            <img src="<?php echo R;?>t2/image/zaixian.png" width="72" title="在线客服"/>
            <span>在线客服</span>
            <a href="index.html">返回首页</a>
            <p>可直接与游戏客服进行交流，更快解决问题。</p>
          </div>
        <div class="kefu_head">
        	 <span>欢迎使用在线客服系统，请在下方输入提问内容。</span>
        </div>
        <div class="kefu_box">
          <div class="kefu_play">
            <div class="play_name">
              <span>玩家名称</span>
            </div>
            <div class="chat_time">
              <span>2016-05-30 11:47:40</span>
            </div>
          </div>
          <div class="play_chat">
          <p>你好GM，请问下.....</p>
          </div>
           <div class="kefu_gm">
            <div class="gm_name">
              <span>武圣GM</span>
            </div>
            <div class="chat_time">
              <span>2016-05-30 11:47:40</span>
            </div>
          </div>
          <div class="play_chat">
          <p>您好玩家，您的问题的回答是...</p>
          </div>
        </div>
          
        <form method="post">
        <div class="kf_srk">
         <textarea type="text" id="kefu_sr" class="kefu_srk" name="kefu_srk"  value="" placeholder="欢迎进入在线客服，GM将竭诚为您服务，如果您将提交关于游戏玩法的咨询，我们强烈推荐您能更多的自行搜索，查阅资料或与同伴一起探讨，相信您会感受到游戏更多的乐趣"></textarea>

          <input type="submit" class="kefu_btn" value="提问" />
         </div>
        </form>        
        </div>
    </div>
  </div>  
<div class="footer">
    <div class="num">
      <p>若遇到紧急问题，请拨打客服电话：0755-26652163</p>
    </div>
</div>

</div>
<div id="foot">
  <div class="foot_cont">
    <div class="fcont_top">
     <img src="<?php echo R;?>t2/image/flogo.png"/>
     <a href="" target="_blank"><img src="<?php echo R;?>t2/image/www.png"/></a>
     <div class="top_top">
         <a href="" target="_blank">用户协议</a>
         <span>|</span>
          <a href="" target="_blank">关于北极光</a>
         <span>|</span>
          <a href="" target="_blank">联系我们</a>
         <span>|</span>
          <a href="" target="_blank">商务合作</a>
         <span>|</span>
          <a href="" target="_blank">法律声明</a>
      </div>
      <div class="top_top">
          <span>网络文化经营许可证号：粤网文〔2015〕2246-495号</span>
         <span>|</span>
          <a href="" target="_blank"> 粤ICP备15071838号-2</a>
        
      </div>
    </div>
    <div class="fcont_mid">
         <span>健康游戏忠告：抵制不良游戏  </span>
         <span>拒绝盗版游戏</span>
         <span>注意自我保护</span>
         <span>谨防受骗上当</span>
         <span>适度游戏益脑</span>
         <span>沉迷游戏伤身 </span>
         <span>合理安排时间 </span>
         <span>享受健康生活</span>
    </div>
    <div class="fcont_fot">
       <p>Copyright © 2010-2016 iwanws. All rights reserved.深圳北极光网络科技有限公司</p>
       <span>本公司旗下所运营游戏均适合18周岁以上人群。</span>
    </div>
  </div>
</div>
</body>
</html>
