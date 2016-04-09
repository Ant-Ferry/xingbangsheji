<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
       <?php echo C('WebName');?>/<?php echo ((isset($webtitle) && ($webtitle !== ""))?($webtitle):"设计助力"); ?>
    
    </title>
    <meta http-equiv="keywords" content="">
    <meta http-equiv="description" content="">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <meta name="copyright" content="">
    <meta name="Robots" content="all">
    <link rel="shortcut icon" href="./favicon.ico">
    <link rel="icon" href="./favicon.ico" type="image/vnd.microsoft.icon">
    <link href="<?php echo C('DOMAIN');?>/Public/Home/css/quanju.css" rel="stylesheet" type="text/css">
    <link href="<?php echo C('DOMAIN');?>/Public/Home/css/index.css" rel="stylesheet" type="text/css">
    <link href="<?php echo C('DOMAIN');?>/Public/Home/css/public.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo C('DOMAIN');?>/Public/Home/css/slide_share.css">
    <link rel="stylesheet" type="text/css" href="<?php echo C('DOMAIN');?>/Public/Home/css/fix.css">
    <link rel="stylesheet" type="text/css" href="<?php echo C('DOMAIN');?>/Public/Home/css/page.css">
    
    <script src="<?php echo C('DOMAIN');?>/Public/Home/lib/jquery-1.12.2.min.js" type="text/javascript"></script>
    <style type="text/css">
      .adx{ float:left; width:100%; height:538px; /*background:url(admin/fileadmin/upfile/images/index_04.png)
      center top no-repeat;*/}
      .ad_neix{text-align:center;width:100%;min-width:1155px;}
    </style>
  </head>
</head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
<body>
  <!--<![endif]-->
	<!-- 导航 -->
	 <!--编码-->
    <div class="top_all">
      <div class="top">
        <div class="top_1">
          <a href="<?php echo U('index');?>">
            <img src="<?php echo C('DOMAIN');?>/Public/Home/images/logo.jpg" alt="">
          </a>
        </div>
        <div class="top_2">
          <div class="top_2_1">
            <span style="margin-top: 6px; display: inline; margin-right: 10px">
              <a href="">
                联系我们
              </a>
              |
              <a href="">
                Contact Us
              </a>
            </span>
            <span>
              <a style="cursor: pointer" onmouseover="document.getElementById('weixin').style.display=''"
              onmouseout="document.getElementById('weixin').style.display='none'">
                <img src="<?php echo C('DOMAIN');?>/Public/Home/images/index_01.jpg" alt="">

              </a>
              <a href="" >
                <img src="<?php echo C('DOMAIN');?>/Public/Home/images/index_02.jpg" alt="">
              </a>
              <a href="" >
                <img src="<?php echo C('DOMAIN');?>/Public/Home/images/index_03.jpg" alt="">
              </a>
              <a href="" >
                <img src="<?php echo C('DOMAIN');?>/Public/Home/images/index_04.jpg" alt="">
              </a>
              <a href="<?php echo U('JoinUs/index');?>" >
                <img src="<?php echo C('DOMAIN');?>/Public/Home/images/index_05.jpg" alt="">
              </a>
            </span>
            <div style="z-index: 999999; display: none" onmouseover="document.getElementById('weixin').style.display=''"
          onmouseout="document.getElementById('weixin').style.display='none'"
          class="bdshare_popup_box" id="weixin">
              <div class="bd_weixin_popup_head" style="text-align: center;">
                <span style="float: initial;">
                  分享到微信朋友圈
                </span>
              </div>
              <div class="bd_weixin_popup_main" id="bdshare_weixin_qrcode_dialog_qr" style="text-align: center;">
                <img src="<?php echo C('DOMAIN');?>/Public/Home/images/weixin.jpg" alt="">
              </div>
              <div class="bd_weixin_popup_foot" style="text-align: center;">
                打开微信，点击底部的“发现”
                <br>
                使用“扫一扫”即可分享至朋友圈
              </div>
            </div>
          </div>
          <div class="top_2_2">
            <font style="width: 100%; float: right; text-align: right">
               <?php echo C('WebName');?>广告｜设计助利品牌革新
            </font>
            <font style="width: 100%; float: right; text-align: right; margin-top: 5px">
              直线（天津）<?php echo C('phone');?>
            </font>
            <font style="width: 100%; float: right; text-align: right; margin-top: 5px">
              I'm （QQ）<?php echo C('phoneQQ');?>
            </font>
          </div>

        </div>
      </div>
    </div>
    <style type="text/css">
      .bd_weixin_popup_head { color: #000000; font-size: 12px; font-weight:
      700; height: 16px; line-height: 16px; position: relative; text-align: left;
      } .bdshare_popup_box{ height:275px;margin-left:140px;top:33px;width:180px;background:
      #FFFFFF; border: 1px solid #D8D8D8; font-size: 12px; height:213px; padding:
      10px; position: absolute; z-index: 11001; } .bd_weixin_popup_main{margin:10px
      auto;} .bd_weixin_popup_foot { color: #666666; font-size: 12px; line-height:
      22px; text-align: left; }
    </style>
    <div style="height: 74px; width: 100%; float: left">
      &nbsp;
    </div>
    <!--编码-->
    <script type="text/javascript" src="<?php echo C('DOMAIN');?>/Public/Home/js/mootools-core-1.4.5.js">
    </script>
    <script type="text/javascript">
      var hastop = false;

      window.addEvent('domready',
      function() {
        initSubnav();
      });

      function initSubnav() {
        if (!Browser.ie6) {
          var subNav = document.getElement('div.sub-nav');
          var top = subNav.getPosition().y;
          var state = 1;
          var styleAb = {
            'position': 'absolute',
            'top': '157px',
            'background-image': "url(<?php echo C('DOMAIN');?>/Public/Home/images/index_06.jpg)"
          };
          var styleFixed = {
            'position': 'fixed',
            'top': '0px',
            'background-image': ''
          };

          if (document.documentElement.scrollTop > top || document.body.scrollTop > top) {

            if (state == 0) {
              subNav.setStyles(styleFixed);
              hastop = true;
              hastopfunc();
              state = 1;
            }
          } else {
            if (state > 0) {
              subNav.setStyles(styleAb);
              hastop = false;
              unhastopfunc();
              state = 0;
            }
          }

          window.addEvent('scroll',
          function() {
            if (document.documentElement.scrollTop > top || document.body.scrollTop > top) {
              if (state == 0) {
                subNav.setStyles(styleFixed);
                hastop = true;
                hastopfunc();
                state = 1;
              }
            } else {
              if (state > 0) {
                subNav.setStyles(styleAb);
                hastop = false;
                unhastopfunc();
                state = 0;
              }
            }
          });
        }
      }
    </script>
    <style>
      .nav_s_1{ float:left; color:#fff; font-size:16px; margin-top:10px; margin-left:24px;
      display:inline;} .nav_2_2_11{ float:right; width:80px; height:20px; background-image:url(<?php echo C('DOMAIN');?>/Public/Home/images/index_10_1.jpg);}
      .nav_2_2_11 input{ float:right; width:100%/*90px*/; height:14px; line-height:14px;
      border:0px; /*background-color:#FF0000;*/ margin-top:2px; vertical-align:top;
      }
    </style>
    <div style="float:left; width:100%;">
      <div class="sub-nav nav_all" style="position: fixed; top: 0px; z-index: 99; background-color: rgb(55, 52, 52);">
        <div class="nav">
          <div class="nav_1">
            <!-- style="background-color:#373434"-->
            <ul>
              <li style="" onmouseover="if(hastop){this.childNodes[0].style.color='#363636';}"
              onmouseout="if(hastop){this.childNodes[0].style.color='#ffffff';}">
                <a href="<?php echo U('index/index');?>" class="nav_s_1" id="cd0" style="color: rgb(255, 255, 255);">
                  <?php echo C('WebName');?>首页
                </a>
              </li>

              <li style="" onmouseover="outx[0]=true;if(hastop){this.childNodes[0].style.color='#363636';this.childNodes[1].src='/Public/Home/images/index_07.png'}"
              onmouseout="outx[0]=false;if(hastop){this.childNodes[0].style.color='#ffffff';this.childNodes[1].src='/Public/Home/images/index_07_1.png';}">
                <a href="<?php echo U('ContactMe/index');?>" class="nav_s_1" style="margin-left: 19px; color: rgb(255, 255, 255);"
                id="cd1">
                  关于<?php echo C('WebName');?>
                </a>
                <img src="<?php echo C('DOMAIN');?>/Public/Home/images/index_07_1.png" id="picjian1">
                <div class="xialac" style="z-index:999999">
                  <div class="xialac_nei" style="height:0px; overflow:hidden;" id="about">
                    <div class="xialac_nei_a">
                      <a href="<?php echo U('ContactMe/index');?>#about1" class="bs_2" style="margin:0px;"
                      onmouseover="this.className='bs_1a'" onmouseout="this.className='bs_2'">
                        <?php echo C('WebName');?>介绍｜About <?php echo C('WebNameSpell');?>
                      </a>
                    </div>
                    <div class="xialac_nei_a">
                      <a href="<?php echo U('ContactMe/index');?>#about2" class="bs_2" style="margin:0px;"
                      onmouseover="this.className='bs_1a'" onmouseout="this.className='bs_2'">
                        <?php echo C('WebName');?>优势｜<?php echo C('WebNameSpell');?> Process
                      </a>
                    </div>
                    <div class="xialac_nei_a">
                      <a href="<?php echo U('ContactMe/index');?>#about3" class="bs_2" style="margin:0px;"
                      onmouseover="this.className='bs_1a'" onmouseout="this.className='bs_2'">
                        设计流程｜Design Ourlead
                      </a>
                    </div>
                    <div class="xialac_nei_a">
                      <a href="<?php echo U('ContactMe/index');?>#about4" class="bs_2" style="margin:0px;"
                      onmouseover="this.className='bs_1a'" onmouseout="this.className='bs_2'">
                        品牌精神｜Brand Spirit
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li style="" onmouseover="if(hastop){this.style.color='#363636';this.childNodes[1].src='/Public/Home/images/index_07.png'}"
              onmouseout="document.getElementById('xian_1').style.display='none';document.getElementById('xian_2').style.display='none';if(hastop){this.childNodes[0].style.color='#ffffff';this.childNodes[1].src='/Public/Home/images/index_07_1.png';}">
                <a href="<?php echo U('MyCase/index');?>" class="nav_s_1"
                style="margin-left: 19px; color: rgb(255, 255, 255);" id="cd2">
                  <?php echo C('WebName');?>案例
                </a>
                <img style="display:none;" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_07_1.png" id="picjian2">
                <div class="xialac" style="z-index:999999">
                  <div class="xialac_nei" style="height:0px; overflow:hidden;" id="anli">
                    <div class="xialac_nei_a">
                      <a href="<?php echo U('MyCase/index');?>#anli_maodian1" class="bs_2"
                      style="margin:0px;" onmouseover="this.className='bs_1';outx[3]=true;document.getElementById('xian_1').style.display='';document.getElementById('xian_2').style.display='none';"
                      onmouseout="this.className='bs_2';outx[3]=false;" id="zhuangyecenter">
                        案例中心 | Professional Center
                      </a>
                    </div>
                    <div class="xialac_nei_a" style="">
                      <a href="<?php echo U('MyCase/index');?>#anli_maodian2" class="bs_2"
                      style="margin:0px;" onmouseover="this.className='bs_1';outx[4]=true;document.getElementById('xian_1').style.display='none';document.getElementById('xian_2').style.display='';"
                      onmouseout="this.className='bs_2';outx[4]=false;" id="hangyecenter">
                        其他案例 | Industry Center
                      </a>
                    </div>
                  </div>

                </div>
              </li>
              <li style="" onmouseover="if(hastop){this.childNodes[0].style.color='#363636';this.childNodes[1].src='/Public/Home/images/index_07.png'}"
              onmouseout="if(hastop){this.childNodes[0].style.color='#ffffff';this.childNodes[1].src='/Public/Home/images/index_07_1.png';}">
                <a href="<?php echo U('MyRadar/index');?>" class="nav_s_1"
                id="cd3" style="color: rgb(255, 255, 255);">
                  <?php echo C('WebName');?>发现
                </a>
              </li>
              <li style="" onmouseover="if(hastop){this.childNodes[0].style.color='#363636';this.childNodes[1].src='/Public/Home/images/index_07.png'}"
              onmouseout="if(hastop){this.childNodes[0].style.color='#ffffff';this.childNodes[1].src='/Public/Home/images/index_07_1.png';}">
                <a href="<?php echo U('MyIdeas/index');?>" class="nav_s_1" id="cd4"
                style="color: rgb(255, 255, 255);">
                  动态观点
                </a>
              </li>
              <li style="" onmouseover="if(hastop){this.childNodes[0].style.color='#363636';this.childNodes[1].src='/Public/Home/images/index_07.png'}"
              onmouseout="if(hastop){this.childNodes[0].style.color='#ffffff';this.childNodes[1].src='/Public/Home/images/index_07_1.png';}">
                <a href="<?php echo U('JoinUs/index');?>" class="nav_s_1" id="cd5"
                style="color: rgb(255, 255, 255);">
                  联系我们
                </a>
              </li>
              <li style="" onmouseover="outx[2]=true;if(hastop){this.childNodes[0].style.color='#363636';this.childNodes[1].src='/Public/Home/images/index_07.png'}"
              onmouseout="outx[2]=false;if(hastop){this.childNodes[0].style.color='#ffffff';this.childNodes[1].src='/Public/Home/images/index_07_1.png';}">
                <a href="<?php echo U('AboutMe/index');?>" class="nav_s_1" style="margin-left: 19px; color: rgb(255, 255, 255);"
                id="cd6">
                  加入<?php echo C('WebName');?>
                </a>
                <img src="<?php echo C('DOMAIN');?>/Public/Home/images/index_07_1.png" id="picjian3">
                <div class="xialac">
                  <div class="xialac_nei" style="height:0px; overflow:hidden;" id="lianxi">
                    <div class="xialac_nei_a">
                      <a href="<?php echo U('AboutMe/index');?>#lianxi1" class="bs_2" style="margin:0px;"
                      onmouseover="this.className='bs_1a'" onmouseout="this.className='bs_2'">
                        加入<?php echo C('WebName');?>｜Careers
                      </a>
                    </div>
                    <div class="xialac_nei_a">
                      <a href="<?php echo U('AboutMe/index');?>#lianxi2" class="bs_2" style="margin:0px;"
                      onmouseover="this.className='bs_1a'" onmouseout="this.className='bs_2'">
                        成长价值｜Growth Value
                      </a>
                    </div>
                    <div class="xialac_nei_a">
                      <a href="<?php echo U('AboutMe/index');?>#lianxi3" class="bs_2" style="margin:0px;"
                      onmouseover="this.className='bs_1a'" onmouseout="this.className='bs_2'">
                        薪酬福利｜Salary &amp; Benefits
                      </a>
                    </div>
                    <div class="xialac_nei_a">
                      <a href="<?php echo U('AboutMe/index');?>#lianxi4" class="bs_2" style="margin:0px;"
                      onmouseover="this.className='bs_1a'" onmouseout="this.className='bs_2'">
                        应聘帮助｜FAQs
                      </a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="nav_2">
            <!-- style="background-color:#FF9900"-->
            <form>
              <div class="nav_2_3">
                <img src="<?php echo C('DOMAIN');?>/Public/Home/images/index_11_1.jpg">
              </div>
              <div class="nav_2_2_11" id="bdx">
                <input type="text" name="namex" id="namex" value="" onfocus="outx[5]=true;"
                onblur="outx[5]=false;">
              </div>
              <div class="nav_2_1">
                <img src="<?php echo C('DOMAIN');?>/Public/Home/images/index_09_1.jpg" style="cursor:pointer;">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      var outx = new Array(false, false, false, false, false, false);
      var maxx = new Array(160, 80, 160, 300, 300, 160);
      var minx = new Array(0, 0, 0, 0, 0, 80);
      var nowx = new Array(0, 0, 0, 0, 0, 80);
      var heightx = new Array(true, true, true, false, false, false);
      var idx = new Array('about', 'anli', 'lianxi', 'xian_1', 'xian_2', 'bdx');
      function mymarquee() {
        //document.getElementById('t1').value+=maxx[ix];
        for (var ix = 0; ix < outx.length; ix++)
        //for(var ix=0;ix<4;ix++)
        {
          if (outx[ix] && nowx[ix] == maxx[ix]) {
            continue;
          }
          if (!outx[ix] && nowx[ix] == minx[ix]) {
            continue;
          }
          if (outx[ix]) {
            nowx[ix] += 20;
          } else {
            nowx[ix] -= 20;
          }
          if (heightx[ix]) {
            document.getElementById(idx[ix]).style.height = nowx[ix] + 'px';
          } else {
            document.getElementById(idx[ix]).style.width = nowx[ix] + 'px';
          } //alert(document.getElementById(idx[ix]).style.width);}
        }
      }
      var myIterval = setInterval(mymarquee, 25);
    </script>
    <script type="text/javascript">
      function hastopfunc() {
        for (i = 1; i <= 3; i++) {
          document.getElementById('picjian' + i).src = "<?php echo C('DOMAIN');?>/Public/Home/images/index_07_1.png";
        }
        for (i = 0; i <= 6; i++) {
          document.getElementById('cd' + i).className = 'nav_s_1';
          document.getElementById('cd' + i).style.color = '#fff';
        }

      }

      function unhastopfunc() {
        for (i = 1; i <= 3; i++) {
          document.getElementById('picjian' + i).src = "<?php echo C('DOMAIN');?>/Public/Home/images/index_07.png";
        }
        for (i = 0; i <= 6; i++) {
          document.getElementById('cd' + i).className = 'nav_s';
          document.getElementById('cd' + i).style.color = '#363636';
        }

      }
    </script>

	<!-- /导航 -->

	<!-- 内容 -->
	<!-- content start -->
<div class="content-wrapper">
        <!--编码-->
    
   <script language="javascript">
      var plarray = new Array();
      plarray[0] = new Array("<?php echo C('DOMAIN');?>/Public/Home/images/banner04.jpg", '');
      plarray[1] = new Array("<?php echo C('DOMAIN');?>/Public/Home/images/banner02.jpg", '');
      plarray[2] = new Array("<?php echo C('DOMAIN');?>/Public/Home/images/banner03.jpg", '');
    </script>	
    <div id="bbb" class="adx" style="opacity: 1;">
      <!--style="background-color:#040922"-->
      <div class="ad_neix">
        <div id="srcid" onmouseover="document.getElementById(&#39;arrowleft&#39;).style.display=&#39;&#39;;document.getElementById(&#39;arrowright&#39;).style.display=&#39;&#39;;"
        onmouseout="document.getElementById(&#39;arrowleft&#39;).style.display=&#39;none&#39;;document.getElementById(&#39;arrowright&#39;).style.display=&#39;none&#39;;"
        style="position: relative; width: 100%; min-width: 1043px; height: 538px; background: url(&quot;<?php echo C('DOMAIN');?>/Public/Home/images/banner02.jpg&quot;) 50% 0% no-repeat;">
          <img src="<?php echo C('DOMAIN');?>/Public/Home/images/zuojiantou.png" width="50" height="126" id="arrowleft"
          onclick="leftOne0e76228ea4384003b1e970bf2bd40536();" style="position: absolute; text-align: center; top: 206px; cursor: pointer; left: 45px; display: none;">
          <img src="<?php echo C('DOMAIN');?>/Public/Home/images/youjiantou.png" width="50" height="126" id="arrowright"
          onclick="rightOne0e76228ea4384003b1e970bf2bd40536();" style="position: absolute; text-align: center; top: 206px; cursor: pointer; right: 45px; display: none;">
        </div>
      </div>
    </div>
    <script language="javascript">
      var lock = false;
      var daqian = 0;
      var nextx = 0;
      var srcidx = document.getElementById('srcid');

      var setAlphaOpacity = function(el, i) {
        i = i / 100.0;
        if (window.getComputedStyle) { // for non-IE
          el.style.opacity = i;
        } else if (document.documentElement.currentStyle) { // for IE
          if (!el.currentStyle.hasLayout) {
            el.style.zoom = 1;
          }
          if (!el.currentStyle.hasLayout) { //在IE8中zoom不生效，所以再次设置inline-block
            el.style.display = 'inline-block';
          }
          try {
            //测试是否已有filter
            //http://msdn.microsoft.com/en-us/library/ms532847%28VS.85%29.aspx
            if (el.filters) {
              if (el.filters('alpha')) {
                el.filters('alpha').opacity = i * 100;
              } else {
                el.style.filter += 'alpha(opacity=' + i * 100 + ')';
              }
            }
          } catch(e) {
            el.style.filter = 'alpha(opacity=' + i * 100 + ')';
          }
        }
      }

      function leftOne0e76228ea4384003b1e970bf2bd40536() {
        if (lock) {
          return;
        } else {
          lock = true;
        }
        nextx = (daqian - 1 + plarray.length) % plarray.length;

        $("#bbb").animate({
          opacity: "0.2"
        },
        {
          complete: callbackx,
          queue: false,
          duration: 400
        });
      }

      function rightOne0e76228ea4384003b1e970bf2bd40536() {
        if (lock) {
          return;
        } else {
          lock = true;
        }
        nextx = (daqian + 1) % plarray.length;

        $("#bbb").animate({
          opacity: "0.2"
        },
        {
          complete: callbackx,
          queue: false,
          duration: 400
        });

      }

      function callbackx() {
        srcidx.style.backgroundImage = "url(" + plarray[nextx][0] + ")"; //document.getElementById('bbb').style.backgroundColor=plarray[nextx][1];
        setAlphaOpacity(document.getElementById('bbb'), 100);
        daqian = nextx;
        lock = false;
      }

      setInterval(rightOne0e76228ea4384003b1e970bf2bd40536, 12000);
    </script>

    
       <div class="main_all">
      <div class="main">
        <br id ="anli_maodian1">
        <div  class="main_1">
          <span > <!--编码--><?php echo C('WebNameSpell');?>&nbsp;Case｜ <!--编码--><?php echo C('WebName');?>案例 </span>
          <a style="margin-top: -12px" name="anli_maodian" ></a>
          <font style="float: right">
            <a style="margin-right: 10px" href="#">
              <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/01.png"></a>
              <a style="margin-right: 10px" href="#">
              <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/02.png"></a>
              <a href="#">
              <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/03.png"></a>
            </font></div>

            <div class="main_1pic">
              <a target="_blank" href="#">
                <img onmouseout="this.src='<?php echo C('DOMAIN');?>/Public/Home/images/anpic01.png'" onmouseover="this.src='<?php echo C('DOMAIN');?>/Public/Home/images/anpic01a.png'" alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/anpic01.png" style="margin-left:8px"></a>
              <a target="_blank" href="#">
                <img onmouseout="this.src='<?php echo C('DOMAIN');?>/Public/Home/images/anpic02.png'" onmouseover="this.src='<?php echo C('DOMAIN');?>/Public/Home/images/anpic02a.png'" alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/anpic02.png" style="margin-left:52px"></a>
              <a target="_blank" href="#">
                <img onmouseout="this.src='<?php echo C('DOMAIN');?>/Public/Home/images/anpic03.png'" onmouseover="this.src='<?php echo C('DOMAIN');?>/Public/Home/images/anpic03a.png'" alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/anpic03.png" style="margin-left:60px"></a>
              <a target="_blank" href="#">
                <img onmouseout="this.src='<?php echo C('DOMAIN');?>/Public/Home/images/anpic04.png'" onmouseover="this.src='<?php echo C('DOMAIN');?>/Public/Home/images/anpic04a.png'" alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/anpic04.png" style="margin-left:36px"></a>
              <a target="_blank" href="#">
                <img onmouseout="this.src='<?php echo C('DOMAIN');?>/Public/Home/images/anpic05.png'" onmouseover="this.src='<?php echo C('DOMAIN');?>/Public/Home/images/anpic05a.png'" alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/anpic05.png" style="margin-left:41px"></a>
              <a target="_blank" href="#">
                <img onmouseout="this.src='<?php echo C('DOMAIN');?>/Public/Home/images/anpic06.png'" onmouseover="this.src='<?php echo C('DOMAIN');?>/Public/Home/images/anpic06a.png'" alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/anpic06.png" style="margin-left:54px"></a>
            </div>
            <div class="main_1a">
              <a href="#">餐饮&amp;会所</a>
              <a href="#">互联网&amp;科技</a>
              <a href="#">金融&amp;投资 </a>
              <a href="#">健康&amp;医药</a>
              <a href="#">农业&amp;产品</a>
              <a href="#">制造&amp;工业</a>
              <a href="#">企业&amp;集团</a>
              <a href="#">奢侈品&amp;红酒</a>
              <a href="#">文化&amp;教育</a>
              <a href="#">孕婴&amp;儿童</a>
              <a href="#">运动&amp;旅游</a>
              <a href="#">零售&amp;服饰</a>
            </div>
        <div class="main_1"  style="">
          <a id="anli_maodian" style="margin-top: -12px; height: 20px" name="anli">
          </a>
          <span>
            <!--编码-->
            Business&nbsp;&amp;&nbsp;Company｜
            <!--编码-->
            企业&amp;集团公司
          </span>
        </div>
        <div class="main_list" style="">
          <!--编码-->
          <ul>
            <?php $_result=C('CASE_DISPLAY');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                <a href="#" target="_blank">
                <img mouseenter="mouseenters(this)"  mouseleaver="mouseleavers(this)" class="listimags gray"
                src="<?php echo C('DOMAIN');?>/Public/Home/images<?php echo ($vo["caseImg"]); ?>" style="border: 1px solid #b9b9b9; width: 332px;height: 284px;">
              </a>
              <div id="block_12"  style="display:none;">
                <a href="#" target="_blank"  style="display: none">
                  <div class="yinc_2">
                    <p>
                      <font style="font-size: 26px">
                         <?php echo ($vo["caseName"]); ?>
                      </font>
                      <br>
                      <font style="font-size: 18px">
                        <?php echo ($vo["caseParameter1"]); ?>
                      </font>
                      <br>
                      <font style="font-size: 14px">
                        <?php echo ($vo["caseParameter2"]); ?>
                      </font>
                      <br>
                      <font style="font-size: 14px">
                        <?php echo ($vo["caseParameter3"]); ?>
                      </font>
                    </p>
                  </div>
                </a>
              </div>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </div>
        <div class="main_6" style="display:none;">
          <div class="main_6_1" onclick="subx();" style="cursor: pointer">
            <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_31.jpg">
          </div>
          <div class="main_6_2" >
            Read More &amp; 浏览更多案例
          </div>
          <div class="main_6_3" onclick="addx();" style="cursor: pointer">
            <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_30.jpg">
          </div>
        </div>
        <br id ="anli_maodian2" style="display:none;">
        <div  class="main_1" style="margin-top: 53px;display:none;">
          <span >
            Other Work｜其他案例
          </span>
        </div>
        <div class="main_list_2" style="display:none;">
          <!--编码-->
          <ul>
            <?php $_result=C('CASE_DISPLAY');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["caseImg"]); ?>:<?php echo ($vo["caseParameter1"]); ?><br/>
              <li>
                <a href="#">
                  <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images<?php echo ($vo["caseImg"]); ?>">
                </a>
                <a href="#" style="dispaly:none;" >
                  <font style="margin-top: 5px; font-size: 20px">
                    <?php echo ($vo["caseName"]); ?>
                  </font>
                  <font style="font-size: 28px;" >
                    <?php echo ($vo["caseParameter1"]); ?>
                  </font>
                  <font style="margin-top: 5px; font-size: 14px">
                    <?php echo ($vo["caseParameter2"]); ?>
                  </font>
                  <font style="font-size: 14px;display:none;">
                   <?php echo ($vo["caseParameter3"]); ?>
                  </font>
                </a>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <ul style="display:none;">
            
            <li>
              <a href="#">
                <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/rongchuang_00.jpg">
              </a>
              <a href="#" >
                <font style="margin-top: 5px; font-size: 20px">
                  CATERING&nbsp;ETDC
                </font>
                <font style="font-size: 28px;" >
                  RONGCHUANG荣创
                </font>
                <font style="margin-top: 5px; font-size: 14px">
                  品牌策略&amp;标志设计&amp;VI设计
                </font>
                <font style="font-size: 14px;display:none;">
                  企业&amp;集团
                </font>
              </a>
            </li>
            <!--空-->
            <li>
              <a href="#">
                <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/juyouches_00.jpg">
              </a>
              <a href="#">
                <font style="margin-top: 5px; font-size: 20px">
                  聚优二手车商交互平台
                </font>
                <font style="font-size: 28px">
                  JUYOUCHE聚优车
                </font>
                <font style="margin-top: 5px; font-size: 14px">
                  品牌标志&amp;空间设计&amp;网站设计
                </font>
                <font style="font-size: 14px">
                  互联网&amp;汽车
                </font>
              </a>
            </li>
            <!--空-->
            <li>
              <a href="#">
                <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/summer_00.jpg">
              </a>
              <a href="#">
                <font style="margin-top: 5px; font-size: 20px">
                  LOVE爱上夏派对
                </font>
                <font style="font-size: 28px">
                  SUMMER夏派
                </font>
                <font style="margin-top: 5px; font-size: 14px">
                  品牌策略&amp;品牌标志&amp;VI设计
                </font>
                <font style="font-size: 14px">
                  奢侈品&amp;派对
                </font>
              </a>
            </li>
            <input type="hidden" id="idxAlld1c6cc4145f146949bf0d41316080dc7" value="c63189,c71619,c93977">
          </ul>
        </div>
      </div>
    </div>

    <!-- footer start -->
        <!--编码-->
    <div class="bottom_all">
      <div class="bottom">
        <div class="bottom_1">
          <div class="bottom_1_1">
            <span style="width: 100%">
              Contact Us &amp; 联系我们
            </span>
            <span style="margin-top: 20px; font-size: 12px">
              直线（天津）：<?php echo C('phone');?>
            </span>
          </div>
          <div class="bottom_1_2">
            <span style="line-height: 19px; margin-top: 20px; font-size: 12px">
              E-mail &amp; <?php echo C('name');?>邮箱
              <br>
              <?php echo C('email');?>
            </span>
          </div>
          <div class="bottom_1_3">
            地址 &amp; <?php echo C('address');?>
            <br>
            邮编 &amp; <?php echo C('zipCode');?>
          </div>
          <div class="bottom_1_3">
            Brand Consulting &amp; 品牌咨询 <?php echo C('linkQQ');?>
          </div>
        </div>
        <div class="bottom_2" style="display:none;">
          <div class="bottom_2_1">
            <span>
              Sitemap &amp; 网站地图
            </span>
          </div>
          <div class="bottom_2_2">
            <ul>
              <li>
                <a href="<?php echo U('index/index');?>">
                  Home | 主页
                </a>
              </li>
              <li>
                <a href="">
                  About Us | 关于我们
                </a>
              </li>
              <li style="float: right">
                <a href="">
                  Contact Us | 联系我们
                </a>
              </li>
              <li>
                <a href="">
                  Work Case  | 工作案例
                </a>
              </li>
              <li style="float: right">
                <a href="">
                  Job
                </a>
              </li>
              <li>
                <a href="">
                  Service
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="bottom_3">
          <div class="bottom_2_1">
            <span>
              Poressional &amp; 专业中心
            </span>
          </div>
          <div class="bottom_3_2">
            <ul>
              <li>
                <a href="">
                  品牌策略&amp;命名
                </a>
              </li>
              <li>
                <a href="">
                  品牌标志&amp;VI设计
                </a>
              </li>
              <li>
                <a href="">
                  包装&amp;产品设计
                </a>
              </li>
              <li>
                <a href="">
                  营销传播&amp;视觉设计
                </a>
              </li>
              <li>
                <a href="">
                  SI空间&amp;零售店面
                </a>
              </li>
              <li>
                <a href="">
                  互动体验&amp;多媒体
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="bottom_4">
          <div class="bottom_2_1">
            <span>
              Subscribe &amp; 留言
            </span>
          </div>
          <div class="bottom_4_2">
            <!--编码-->
            <form name="formx_673944feacb64013a05ff5eafd8a9d35" id="formx_673944feacb64013a05ff5eafd8a9d35"
            method="post" action=""
            onsubmit="return check_673944feacb64013a05ff5eafd8a9d35();">
              <input type="hidden" value="./index.html?" name="prepage" id="prepage">
              <ul>
                <li>
                  <textarea id="attr0" name="attr0" rows="10" cols="55">
                  </textarea>
                </li>
                <li>
                  <span class="shu_1">
                    <input id="attr1" size="25" onblur="if(value==&#39;&#39;){value=&#39;姓名&#39;}"
                    onfocus="if(value==&#39;姓名&#39;){value=&#39;&#39;}" style="color: #ccc"
                    name="attr1" value="姓名" type="text">
                  </span>
                </li>
                <li>
                  <span class="shu_1">
                    <input id="attr2" size="25" onblur="if(value==&#39;&#39;){value=&#39;邮箱&#39;}"
                    onfocus="if(value==&#39;邮箱&#39;){value=&#39;&#39;}" style="color: #ccc"
                    name="attr2" value="邮箱" type="text">
                  </span>
                </li>
                <li>
                  <span class="shu_1">
                    <input id="attr3" size="25" onblur="if(value==&#39;&#39;){value=&#39;手机号码&#39;}"
                    onfocus="if(value==&#39;手机号码&#39;){value=&#39;&#39;}" style="color: #ccc"
                    name="attr3" value="手机号码" type="text">
                  </span>
                </li>
                <li>
                  <span class="shu_2">
                    <input src="<?php echo C('DOMAIN');?>/Public/Home/images/index_21.jpg" type="image">
                  </span>
                </li>
              </ul>
            </form>
            </script>
            <script language="javascript">
              function check_673944feacb64013a05ff5eafd8a9d35() {
                var formx = document.getElementById("formx_673944feacb64013a05ff5eafd8a9d35");

                /////#####注册表单附加js(直接代码组件名称)

                if (GetWater()) {
                  alert('您发布得太快,请稍后再试...');
                  return false;
                }
                SetWater();

                return true;
              }

              function trim(x) {
                var tou, wei
                for (i_jq = 0; i_jq < x.length; i_jq++) {
                  if (x.charAt(i_jq) != ' ') {
                    tou = i_jq
                    break
                  }
                }
                for (i_jq = x.length - 1; i_jq >= 0; i_jq--) {
                  if (x.charAt(i_jq) != ' ') {
                    wei = i_jq
                    break
                  }
                }
                return x.substring(tou, wei + 1)
              }

              function voidnum(argvalue, argvalue1) {
                if (argvalue == '') return true;
                var flag1 = false;
                //var compstr="1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_";
                var compstr = argvalue1;
                var length2 = argvalue.length;
                for (iIndex = 0; iIndex < length2; iIndex++) {
                  var temp1 = compstr.indexOf(argvalue.charAt(iIndex));
                  if (temp1 == -1) {
                    flag1 = false;
                    break;
                  } else {
                    flag1 = true;
                  }
                }
                return flag1
              }
            </script>
          </div>
        </div>
        <div class="bottom_5">
          <p style="text-align: center;" >
            <?php echo C('button');?>
          </p>
          <span style="float:right; margin-top:3px;">
            <!--编码-->
            </script>
          </span>
        </div>
      </div>
    </div>

      <script>
        $(function(){
          var win = $(window);
          var gototopHtml = '<div id="topcontrol"><a href="javascript:void(0);" class="top_stick"><img border="0" alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_22.jpg"></a></div>';
          $("body").append(gototopHtml);
          $("#topcontrol").css({
            "display": "none",
            "margin-left" : "auto",
            "margin-right" : "auto",
            "width" : 1000
          });
          $("#topcontrol").find(".top_stick").css({
            "position" : "fixed",
            "bottom" : 50,
            "right": 50,
            "z-index":999999
          });

          win.scroll(function(){
            var scrTop = win.scrollTop();
            if( scrTop > 100 ) {
              $("#topcontrol").fadeIn();
            } else {
              $("#topcontrol").fadeOut();
            }
          });

          $("#topcontrol").click(function(){
            $('body,html').animate({scrollTop: 0}, 500);
          })
        })
      </script>
    <!-- footer end -->
    
    
   <script type="text/javascript">
  
     

      $(document).ready(function(){
         $('.listimags').mouseover(function(){
          $(this).removeClass("gray");
        });
      
        $('.listimags').mouseout(function(){
          $(this).addClass("gray");
        });
      });
   </script>
 
</div>
<!-- content end -->
	<!-- /内容 -->
</body>
</html>