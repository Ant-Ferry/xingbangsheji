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
        <div class="main_1">
          <span>
            <!--编码-->
            News&amp;Views｜
            <!--编码-->
            动态观点
          </span>
        </div>
        <div class="main_10">
          <!--编码-->
          <div id="sp3" class="main_10_box">
            <div class="main_10_box_1">
              <a href="#">
                <img alt="" width="326" height="204" src="<?php echo C('DOMAIN');?>/Public/Home/images/1018.png">
              </a>
            </div>
            <div class="main_10_box_2">
              <p>
                <font style="line-height: 31px; font-size: 22px">
                  <a style="margin-top: -5px; height: 62px; font-size: 22px" href="#">
                    让设计，从改变自己开始（MPG合伙人成长计划）
                  </a>
                </font>
                <br>
                <font style="font-size: 12px">
                  June 21,2015
                </font>
                <br>
                <font style="height: 93px; font-size: 14px; overflow: hidden">
                  Studio1018是M&amp;C<?php echo C('WebName');?>国际旗下针对设计理论研究与商业价值创新的专案工作室，团队成员由多名跨领域资深合伙人组成。我们通过与具...
                </font>
              </p>
              <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_38.jpg">
              <a style="margin-left: 5px" href="#">
                了解更多 &gt;
              </a>
            </div>
          </div>
          <!--空-->
          <!--空-->
          <!--空-->
          <div id="sp6" class="main_10_box">
            <div class="main_10_box_1">
              <a href="#">
                <img alt="" width="326" height="204" src="<?php echo C('DOMAIN');?>/Public/Home/images/starbucks_00.jpg">
              </a>
            </div>
            <div class="main_10_box_2">
              <p>
                <font style="line-height: 31px; font-size: 22px">
                  <a style="margin-top: -5px; height: 62px; font-size: 22px" href="#">
                    品牌收缩定律，STARBUCKS星巴克的品牌战略
                  </a>
                </font>
                <br>
                <font style="font-size: 12px">
                  March 19, 2014
                </font>
                <br>
                <font style="height: 93px; font-size: 14px; overflow: hidden">
                  收缩焦点，你的品牌才会更强大。只用了短短几年时间，星巴克就成为美国最有名和最流行的一个品牌。收缩焦点，并不意味着只...
                </font>
              </p>
              <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_38.jpg">
              <a style="margin-left: 5px" href="#">
                了解更多 &gt;
              </a>
            </div>
          </div>
          <!--空-->
          <!--空-->
          <!--空-->
          <div id="sp7" class="main_10_box">
            <div class="main_10_box_1">
              <a href="#">
                <img alt="" width="326" height="204" src="<?php echo C('DOMAIN');?>/Public/Home/images/badtaste_00.jpg">
              </a>
            </div>
            <div class="main_10_box_2">
              <p>
                <font style="line-height: 31px; font-size: 22px">
                  <a style="margin-top: -5px; height: 62px; font-size: 22px" href="#">
                    GOOD DESIGN &amp; BAD TASTE好设计&amp;坏品味
                  </a>
                </font>
                <br>
                <font style="font-size: 12px">
                  June 18 2014
                </font>
                <br>
                <font style="height: 93px; font-size: 14px; overflow: hidden">
                  丑的设计是如何诞生的？<?php echo C('WebName');?>认为丑的设计源于客户的“坏品味”。其中包含两方面含义：1、客户选择合作设计者时的“坏品味”...
                </font>
              </p>
              <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_38.jpg">
              <a style="margin-left: 5px" href="#">
                了解更多 &gt;
              </a>
            </div>
          </div>
          <div id="sp9" class="main_10_box">
            <div class="main_10_box_1">
              <a href="#">
                <img alt="" width="326" height="204" src="<?php echo C('DOMAIN');?>/Public/Home/images/u1.png">
              </a>
            </div>
            <div class="main_10_box_2">
              <p>
                <font style="line-height: 31px; font-size: 22px">
                  <a style="margin-top: -5px; height: 62px; font-size: 22px" href="#">
                    做自己的主人！聊聊设计师如何掌握主动权
                  </a>
                </font>
                <br>
                <font style="font-size: 12px">
                  June 25,2015
                </font>
                <br>
                <font style="height: 93px; font-size: 14px; overflow: hidden">
                  真正有效的工作时间都只有40%，而浪费在争吵、等待、理解错误和反复修改的时间上确是大部分。所以与其浪费时间做错误的事情...
                </font>
              </p>
              <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_38.jpg">
              <a style="margin-left: 5px" href="#">
                了解更多 &gt;
              </a>
            </div>
          </div>
          <!--空-->
          <!--空-->
          <!--空-->
          <div id="sp10" class="main_10_box">
            <div class="main_10_box_1">
              <a href="#">
                <img alt="" width="326" height="204" src="<?php echo C('DOMAIN');?>/Public/Home/images/designer_00.jpg">
              </a>
            </div>
            <div class="main_10_box_2">
              <p>
                <font style="line-height: 31px; font-size: 22px">
                  <a style="margin-top: -5px; height: 62px; font-size: 22px" href="#">
                    唯设计思维者，决胜于未来【M&amp;C<?php echo C('WebName');?>思享】
                  </a>
                </font>
                <br>
                <font style="font-size: 12px">
                  December 26, 2013
                </font>
                <br>
                <font style="height: 93px; font-size: 14px; overflow: hidden">
                  人创造了品牌，品牌改变了人的社会，人最终是改变了自己。品牌的世界变化莫测，每一步都是尝试，而每一次尝试都是改变社会...
                </font>
              </p>
              <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_38.jpg">
              <a style="margin-left: 5px" href="#">
                了解更多 &gt;
              </a>
            </div>
          </div>
          <!--空-->
          <!--空-->
          <!--空-->
          <div id="sp11" class="main_10_box">
            <div class="main_10_box_1">
              <a href="#">
                <img alt="" width="326" height="204" src="<?php echo C('DOMAIN');?>/Public/Home/images/myotee_00.jpg">
              </a>
            </div>
            <div class="main_10_box_2">
              <p>
                <font style="line-height: 31px; font-size: 22px">
                  <a style="margin-top: -5px; height: 62px; font-size: 22px" href="#">
                    创始人答：MYOTee脸萌是怎么做到爆红的
                  </a>
                </font>
                <br>
                <font style="font-size: 12px">
                  June 12 2014
                </font>
                <br>
                <font style="height: 93px; font-size: 14px; overflow: hidden">
                  我在朋友圈里说过，80%是狗屎运，20%是一群机智的骚年，每天被老板（我）威逼利诱加班。运气就不说了，说些可能对大家有用的...
                </font>
              </p>
              <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_38.jpg">
              <a style="margin-left: 5px" href="#">
                了解更多 &gt;
              </a>
            </div>
          </div>
          <!--空-->
          <!--空-->
          <!--空-->
          <div id="sp12" class="main_10_box">
            <div class="main_10_box_1">
              <a href="#">
                <img alt="" width="326" height="204" src="<?php echo C('DOMAIN');?>/Public/Home/images/gooddesign_00.jpg">
              </a>
            </div>
            <div class="main_10_box_2">
              <p>
                <font style="line-height: 31px; font-size: 22px">
                  <a style="margin-top: -5px; height: 62px; font-size: 22px" href="#">
                    如何选择好（bu ai keng）的设计公司
                  </a>
                </font>
                <br>
                <font style="font-size: 12px">
                  July 07,2015
                </font>
                <br>
                <font style="height: 93px; font-size: 14px; overflow: hidden">
                  Sony索尼盛田昭夫说：“我们相信，今后我们的竞争对手将会和我们拥有基本相同的技术、类似的产品性能，乃至市场价格，而唯有...
                </font>
              </p>
              <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_38.jpg">
              <a style="margin-left: 5px" href="#">
                了解更多 &gt;
              </a>
            </div>
          </div>
          <!--空-->
          <!--空-->
          <!--空-->
          <div id="sp13" class="main_10_box">
            <div class="main_10_box_1">
              <a href="#">
                <img alt="" width="326" height="204" src="<?php echo C('DOMAIN');?>/Public/Home/images/mclogo_00.jpg">
              </a>
            </div>
            <div class="main_10_box_2">
              <p>
                <font style="line-height: 31px; font-size: 22px">
                  <a style="margin-top: -5px; height: 62px; font-size: 22px" href="#">
                    设计潜规则之不靠谱的LOGO设计【M&amp;C<?php echo C('WebName');?>思享】
                  </a>
                </font>
                <br>
                <font style="font-size: 12px">
                  April 18 2014
                </font>
                <br>
                <font style="height: 93px; font-size: 14px; overflow: hidden">
                  近日有一客户咨询LOGO设计，其言之：“你们这些设计公司的报价怎么都这么不靠谱，XX给我报了800，XX竟然给我报了15万！”
                </font>
              </p>
              <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_38.jpg">
              <a style="margin-left: 5px" href="#">
                了解更多 &gt;
              </a>
            </div>
          </div>
          <!--空-->
          <!--空-->
          <!--空-->
          <div id="sp14" class="main_10_box">
            <div class="main_10_box_1">
              <a href="#">
                <img alt="" width="326" height="204" src="<?php echo C('DOMAIN');?>/Public/Home/images/d1.png">
              </a>
            </div>
            <div class="main_10_box_2">
              <p>
                <font style="line-height: 31px; font-size: 22px">
                  <a style="margin-top: -5px; height: 62px; font-size: 22px" href="#">
                    换LOGO不能救一家公司，却能毁一个品牌
                  </a>
                </font>
                <br>
                <font style="font-size: 12px">
                  June 24,2015
                </font>
                <br>
                <font style="height: 93px; font-size: 14px; overflow: hidden">
                  企业换标主要有以下几点，企业战略调整的需要、企业品牌形象老化，适应新环境的需要。而更换标志是企业与时俱进中的一个过...
                </font>
              </p>
              <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_38.jpg">
              <a style="margin-left: 5px" href="#">
                了解更多 &gt;
              </a>
            </div>
          </div>
          <!--空-->
          <!--空-->
          <!--空-->
          <div id="sp15" class="main_10_box">
            <div class="main_10_box_1">
              <a href="#">
                <img alt="" width="326" height="204" src="<?php echo C('DOMAIN');?>/Public/Home/images/jj2.png">
              </a>
            </div>
            <div class="main_10_box_2">
              <p>
                <font style="line-height: 31px; font-size: 22px">
                  <a style="margin-top: -5px; height: 62px; font-size: 22px" href="#">
                    设计师能有什么成本
                  </a>
                </font>
                <br>
                <font style="font-size: 12px">
                  August 19,2015
                </font>
                <br>
                <font style="height: 93px; font-size: 14px; overflow: hidden">
                  设计师的成本是时间，每一天的时间是有限的，设计师挣钱，每分钱，都是得靠每个时间去思考、去书写、去执行换来得，也就是...
                </font>
              </p>
              <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_38.jpg">
              <a style="margin-left: 5px" href="#">
                了解更多 &gt;
              </a>
            </div>
          </div>
          <!--空-->
          <!--空-->
          <!--空-->
          <div id="sp21" class="main_10_box">
            <div class="main_10_box_1">
              <a href="#">
                <img alt="" width="326" height="204" src="<?php echo C('DOMAIN');?>/Public/Home/images/c1.png">
              </a>
            </div>
            <div class="main_10_box_2">
              <p>
                <font style="line-height: 31px; font-size: 22px">
                  <a style="margin-top: -5px; height: 62px; font-size: 22px" href="#">
                    维权先懂法！为设计师量身打造的个人版权指南
                  </a>
                </font>
                <br>
                <font style="font-size: 12px">
                  June 23,2015
                </font>
                <br>
                <font style="height: 93px; font-size: 14px; overflow: hidden">
                  设计师是智慧财富的创造者，对于我们而言，了解知识产权的相关知识是保护自我价值的前提与基础。对自己作品所享有的权利进...
                </font>
              </p>
              <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_38.jpg">
              <a style="margin-left: 5px" href="#">
                了解更多 &gt;
              </a>
            </div>
          </div>
          <!--空-->
          <!--空-->
          <!--空-->
          <div id="sp22" class="main_10_box">
            <div class="main_10_box_1">
              <a href="#">
                <img alt="" width="326" height="204" src="<?php echo C('DOMAIN');?>/Public/Home/images/b1.png">
              </a>
            </div>
            <div class="main_10_box_2">
              <p>
                <font style="line-height: 31px; font-size: 22px">
                  <a style="margin-top: -5px; height: 62px; font-size: 22px" href="#">
                    Frank Lloyd Wright:让设计超越时间
                  </a>
                </font>
                <br>
                <font style="font-size: 12px">
                  June 19,2015
                </font>
                <br>
                <font style="height: 93px; font-size: 14px; overflow: hidden">
                  Wright设计的房屋往往包括一个中心点及其周围开放的空间。他相信空间应该是灵活的，多用途的。在设计这些空间时，Wright总是会...
                </font>
              </p>
              <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_38.jpg">
              <a style="margin-left: 5px" href="#">
                了解更多 &gt;
              </a>
            </div>
          </div>
          <!--空-->
          <!--空-->
          <!--空-->
          <div id="sp23" class="main_10_box">
            <div class="main_10_box_1">
              <a href="#">
                <img alt="" width="326" height="204" src="<?php echo C('DOMAIN');?>/Public/Home/images/leica_00.jpg">
              </a>
            </div>
            <div class="main_10_box_2">
              <p>
                <font style="line-height: 31px; font-size: 22px">
                  <a style="margin-top: -5px; height: 62px; font-size: 22px" href="#">
                    选择一种被称作LEICA徕卡的至上生活哲学
                  </a>
                </font>
                <br>
                <font style="font-size: 12px">
                  September 05, 2013
                </font>
                <br>
                <font style="height: 93px; font-size: 14px; overflow: hidden">
                  在相机发展史上，选择某一个品牌的相机对于用户来说，不是选择那部相机，而是选择一种生活方式,这样的品牌可谓就是少之又少...
                </font>
              </p>
              <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_38.jpg">
              <a style="margin-left: 5px" href="#">
                了解更多 &gt;
              </a>
            </div>
          </div>
          <!--空-->
          <input type="hidden" id="idxAll12af45289abc4e4290ac9b9a7dd3c382" value="c79944,c34192,c19138,c90322,c89261,c13597,c85738,c47135,c10034,c92839,c29381,c98101,c5316131,c10929,c45176,c36698,c76204,c36574,c40460,c11146,c44046,c15283,c48724">
          <!--空-->
        </div>
        <div class="main_11">

          <!--空-->
          <!--空-->
          <!--空-->
          <div class="main_11_box">
            <div class="main_11_box_1">
              <a href="#">
                <img alt="" width="326" height="204" src="<?php echo C('DOMAIN');?>/Public/Home/images/aispacenew_00.jpg">
              </a>
            </div>
            <div class="main_11_box_2">
              <p>
                <font style="line-height: 31px; margin-top: 0px; font-size: 22px">
                  <a style="margin-top: -4px; font-size: 22px" href="#">
                    AISPACE爱空间，静享指尖时尚美丽，感受一方迷人空间
                  </a>
                </font>
                <br>
                <font style="font-size: 12px">
                  Jume 17, 2014
                </font>
                <br>
                <font style="height: 98px; font-size: 14px; overflow: hidden">
                  爱空间成立于2008年，是国际美甲业内最具专业、规范、影响力的连锁机构之一。08年风云际会，因缘天成，爱空间开始了对美甲时尚的追梦旅程，寻梦于美丽，筑梦于天下。取名Aispace是希望...
                </font>
              </p>
              <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_38.jpg">
              <a style="margin-left: 5px" href="#">
                了解更多 &gt;
              </a>
            </div>
          </div>

          <!--空-->
          <!--空-->
          <!--空-->
          <div class="main_11_box">
            <div class="main_11_box_1">
              <a href="#">
                <img alt="" width="326" height="204" src="<?php echo C('DOMAIN');?>/Public/Home/images/Q1.png">
              </a>
            </div>
            <div class="main_11_box_2">
              <p>
                <font style="line-height: 31px; margin-top: 0px; font-size: 22px">
                  <a style="margin-top: -4px; font-size: 22px" href="#">
                    设计与自然的思考
                  </a>
                </font>
                <br>
                <font style="font-size: 12px">
                  July 29,2015
                </font>
                <br>
                <font style="height: 98px; font-size: 14px; overflow: hidden">
                  “扯去你的虚荣，去探知绿色的世界，从中找到，你在艺术创作中的真正位置。”自然可以为设计找到表现形式、传达设计的内涵、提供设计的素材，打破某种文化特定的僵化思维模式。设计...
                </font>
              </p>
              <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_38.jpg">
              <a style="margin-left: 5px" href="#">
                了解更多 &gt;
              </a>
            </div>
          </div>
          <!--空-->
          <!--空-->
          <!--空-->
          <div class="main_11_box">
            <div class="main_11_box_1">
              <a href="#">
                <img alt="" width="326" height="204" src="<?php echo C('DOMAIN');?>/Public/Home/images/k1.png">
              </a>
            </div>
            <div class="main_11_box_2">
              <p>
                <font style="line-height: 31px; margin-top: 0px; font-size: 22px">
                  <a style="margin-top: -4px; font-size: 22px" href="#">
                    设计师！迷茫的我们存在哪些问题？
                  </a>
                </font>
                <br>
                <font style="font-size: 12px">
                  July 24,2015
                </font>
                <br>
                <font style="height: 98px; font-size: 14px; overflow: hidden">
                  过于依赖素材或者过于反感素材；过于依赖模仿，缺少自己的理解；无法鉴别作品好坏，作品好与坏也说不出所以然；没有理解设计的真正意义；忽略了设计以外的技巧，包括沟通，换位思考...
                </font>
              </p>
              <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_38.jpg">
              <a style="margin-left: 5px" href="#">
                了解更多 &gt;
              </a>
            </div>
          </div>
          <!--空-->
          <!--空-->
          <!--空-->
          <div class="main_11_box">
            <div class="main_11_box_1">
              <a href="#">
                <img alt="" width="326" height="204" src="<?php echo C('DOMAIN');?>/Public/Home/images/u5.png">
              </a>
            </div>
            <div class="main_11_box_2">
              <p>
                <font style="line-height: 31px; margin-top: 0px; font-size: 22px">
                  <a style="margin-top: -4px; font-size: 22px" href="#">
                    为什么平面设计师要在乎纽约设计周？
                  </a>
                </font>
                <br>
                <font style="font-size: 12px">
                  July 13,2015
                </font>
                <br>
                <font style="height: 98px; font-size: 14px; overflow: hidden">
                  如果平面设计师想要成为这个城市中最大设计庆典中的一部分，他们必须走出第一步。就像那些冒着放弃ICFF行业担保的风险而以个人名义参加展览的设计师们－－在他们试图在过程中和国际...
                </font>
              </p>
              <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_38.jpg">
              <a style="margin-left: 5px" href="#">
                了解更多 &gt;
              </a>
            </div>
          </div>
          <!--空-->
          <!--空-->
          <!--空-->
          <div class="main_11_box">
            <div class="main_11_box_1">
              <a href="#">
                <img alt="" width="326" height="204" src="<?php echo C('DOMAIN');?>/Public/Home/images/ad1.png">
              </a>
            </div>
            <div class="main_11_box_2">
              <p>
                <font style="line-height: 31px; margin-top: 0px; font-size: 22px">
                  <a style="margin-top: -4px; font-size: 22px" href="#">
                    日本设计为什么这么牛，我们能学到什么？
                  </a>
                </font>
                <br>
                <font style="font-size: 12px">
                  June 16, 2015
                </font>
                <br>
                <font style="height: 98px; font-size: 14px; overflow: hidden">
                  日本人对细节的态度——细节和整体对生活的意义是同样的，而整体的品质和可靠则是基于每一个细节的精致，粗糙的细节不可能产生优质的整体,一切设计都基于对行为方式的深入研究
                </font>
              </p>
              <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_38.jpg">
              <a style="margin-left: 5px" href="#">
                了解更多 &gt;
              </a>
            </div>
          </div>
          <!--空-->
          <!--空-->
          <!--空-->
          <div class="main_11_box">
            <div class="main_11_box_1">
              <a href="#">
                <img alt="" width="326" height="204" src="<?php echo C('DOMAIN');?>/Public/Home/images/swiss-design.jpg">
              </a>
            </div>
            <div class="main_11_box_2">
              <p>
                <font style="line-height: 31px; margin-top: 0px; font-size: 22px">
                  <a style="margin-top: -4px; font-size: 22px" href="#">
                    瑞士国际主义平面设计风格
                  </a>
                </font>
                <br>
                <font style="font-size: 12px">
                  June 15, 2015
                </font>
                <br>
                <font style="height: 98px; font-size: 14px; overflow: hidden">
                  Swiss&nbsp;Design这种风格简单明确，传达功能准确，因而很快得到世界范围内的普遍认可，成为战后影响最大的一种平面设计风格，也是国际最流行的风格，因此，又被称为国际主义平面设计风...
                </font>
              </p>
              <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_38.jpg">
              <a style="margin-left: 5px" href="#">
                了解更多 &gt;
              </a>
            </div>
          </div>
          <!--空-->
          <input type="hidden" id="idxAlle87f67e7729d4935b72f7a6e8b433783" value="c95990,c94350,c95301,c59402,c59886,c86407,c78883,c58752,c76287,c46576,c51862,c92650">
          <!--空-->
        </div>
        <div class="main_6" style="display:none;">
          <div class="main_6_1" onclick="subx();" style="cursor: pointer">
            <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_31.jpg">
          </div>
          <div class="main_6_2">
            Read More &amp; 浏览更多案例
          </div>
          <div class="main_6_3" onclick="addx();" style="cursor: pointer">
            <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_30.jpg">
          </div>
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
    
    
</div>
<!-- content end -->
	<!-- /内容 -->
</body>
</html>