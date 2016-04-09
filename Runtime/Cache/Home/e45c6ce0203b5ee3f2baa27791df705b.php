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
            About <?php echo C('WebNameSpell');?>｜关于<?php echo C('WebName');?>
          </span>
        </div>
        <!--编码-->
        <div class="main_2" style="font-size:34px;">
          致最具“革新精神”的品牌
          <br>
          —— 那些因设计而发生改变的品牌
        </div>
        <div class="main_3">
         广告，最原始状态下就是广而告之，而现代广告 则是把产品品牌化，从产品走向品牌，需要几年、十几年、甚至几十年..... <?php echo C('WebName');?>广告，就是您品牌成长道路上最贴心的合作伙伴。
         <br><br>
          <?php echo C('WebName');?>广告 是一家以4A公司运营模式为基础，嫁接于本土化服务性质的专业广告公司，公司致力于以品牌建设为中心，以为客户提供360度全方位品牌服务为己任，全力以赴为客户提供最专业的广告服务，我们会议阳光般的服务和无限的创意潜能，与您携手共进，共创辉煌。
          <br><br>
          我们是一支年轻、充满活力的创意团队
          <br><br>
          我们一直致力于将国际主流设计、公关、营销、影响力的时尚理念，融入公司的战略部署与发展规划中去，我们先后与天津银行，盛京银行、招商银行、光大银行、华润万家、哈雷戴维森等有影响力的企业建立战略合作伙伴关系，借助多元化、跨平台的多重商务体系，在充分理解和满足客户的基础上，为客户量身定制适合目标市场的全方位CI系统，营销解决方案和公关支持、设计、策划、执行，一体系的服务架构，成熟的运作模式，高效的沟通，对行业的热爱，结合第一执行力，为团队赢得了良好的口碑，我们坚信实力是所有努力的沉淀，我们珍惜每一次机会，全力以赴帮助客户以最精确、最直接的方式，有效提升企业品牌形象。 
        </div>
        <div class="main_4">
          <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_24.jpg">
        </div>
        <div class="main_2">
          <?php echo C('WebName');?>品牌策略与商业设计机构能够帮助您
          <br>
          解决以下所面临的难题：
        </div>
        <div class="main_3">
          我们如何完成一个新生品牌从无到有的孵化，让梦想成为现实？
          <br>
          我们如何帮助生长期品牌打造成为行业翘楚，并在市场中具备可持续地竞争力？
          <br>
          我们如何给予客户最完美的品牌情感体验？
          <br>
          我们如何提升产品竞争能力，并取得商业价值的提升？
          <br>
          我们如何完善我们的品牌架构和企业精神，促进并提升创新能力？
          <br>
          我们如何打造一个具备设计思维的创新组织或城市？
          <br>
          &nbsp;
          <a id="about2" style="margin-top: -12px" name="about2">
            &nbsp;
          </a>
        </div>
        <div style="border-bottom: 0px; margin-top: 10px; border-top: #c1c1c1 1px solid; padding-top: 27px"
        class="main_1">
          <span>
            <?php echo C('WebNameSpell');?> Lead｜<?php echo C('WebName');?>设计优势
          </span>
        </div>
        <!--编码-->
        <div class="main_4" style="padding-top:0px;">
          <a id="about3" style="margin-top: -12px" name="about3">
          </a>
          <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_25.jpg">
        </div>
        <div class="main_2" style="font-size:34px;">
          设计影响力、革新精神、国际思维
        </div>
        <div class="main_3" style="margin-top: 25px">
          <?php echo C('WebName');?>作为最具革新精神的广告公司，团队集结了业内品牌、空间、产品等资深的设计师与品牌顾问，并与国际知名设计团队及众多设计学院的行业精英保持着紧密地交流与合作。国际领先的商业设计理念与品牌管理经验，使<?php echo C('WebName');?>始终保持着领先于行业的思维模式与工作方法。<?php echo C('WebName');?>认为所有品牌地投入都源自对其品牌资产的积累，而所有品牌资产地积累都源自对其品牌个性地精准定义与表达。<?php echo C('WebName');?>专业领域涉及：品牌策略、品牌定义、品牌识别、产品研发&amp;包装设计、SI空间系统设计、互联网品牌建设、年度品牌管理等，以策略引导设计帮助客户创造可持续的最大化商业价值。
        </div>
        <div class="main_2" style="margin-top: 20px">
          NB01、GB02、BM03三大品牌革新体系，针对企业不同的行业特征与发展阶段
          <br>
          量身定制出适合、专属的设计解决方案。
        </div>
        <div class="main_2" style="margin-top: 20px">
          01、[NB01品牌初创体系]（适用于全新或初创品牌的定义与表达）
        </div>
        <div class="main_3" style="margin-top: 18px">
          每一个创业者都是梦想家、革新者与冒险王，追寻独立、信仰与自由。如果您已经洞察到一个潜在的市场机会，并决定将它转化为可实现的商业价值。那么首先您需要创建一个品牌，相信毫无个性优势的品牌是难以与消费者形成情感共鸣的。<?php echo C('WebName');?>可以协助您准确定义独特且差异的品牌价值，打造出适合的品牌识别，并可以帮助您拉近与目标消费者的心灵距离。品牌从来都不是所谓大公司的专属，在您播种下梦想的那一刻，品牌随之起航。
        </div>
        <div class="main_3" style="margin-top: 18px">
          [NB01品牌初创体系]六大模块构成：
          <br>
          01 品牌定义&amp;核心价值提炼 —&gt; 02 命名&amp;SLOGAN —&gt; 03 标志&amp;VI系统设计 —&gt;
          04 SI空间环境设计 —&gt; 05 网站规划&amp;整体设计 —&gt; 06 品牌管理&amp;设计执行
        </div>
        <div class="main_2" style="margin-top: 20px">
          02、[GB02品牌升级体系]（适用于发展中品牌的改造升级）
        </div>
        <div class="main_3" style="margin-top: 18px">
          梦想逐步发展与升级，作为经营者的您是否困惑于市场增长的迟缓、产品定位的模糊、品牌形象的陈旧，最致命的是您开始发现老主顾们开始喜欢上对手的品牌，甚至让您开始质疑最初的梦想。在品牌革新的年代里拒绝墨守陈规与安于当下。<?php echo C('WebName');?>可以与您一起让策略定位重归清晰，建立全新的商业价值与品牌形象系统，更为重要的是改变消费者的认知，从而使得品牌重塑耀眼之光芒。
        </div>
        <div class="main_3" style="margin-top: 18px">
          [GB02品牌升级体系]七大模块构成：
          <br>
          01 品牌诊断&amp;现状评估 —&gt; 02 品牌策略升级&amp;产品架构梳理 —&gt; 03 企业文化&amp;核心价值提炼 —&gt;
          04 标志&amp;VI系统升级 —&gt; 05 SI空间环境升级 —&gt; 06 互联网品牌升级 —&gt; 07 品牌管理&amp;设计执行
        </div>
        <div class="main_2" style="margin-top: 20px">
          03、[BM03品牌管理体系]（适用于集团公司&amp;上市企业的品牌管理）
        </div>
        <div class="main_3" style="margin-top: 18px">
          或许您早已相信了品牌的力量。在繁杂的品牌日常管理中，投入了大量的时间与精力。可品牌建设差强人意，品牌资产积累成效甚微；<?php echo C('WebName');?>的“BM03品牌设计体系”可以帮助您来梳理整个品牌设计管理中所涉及的每一个环节，使得有限的品牌建设资源来产生无限的品牌价值。
        </div>
        <div class="main_3" style="margin-top: 18px">
          [BM03品牌管理体系]五大模块构成：
          <br>
          01 品牌诊断&amp;现状评估 —&gt; 02 品牌战略规划&amp;品牌架构梳理 —&gt; 03 企业文化系统提炼 —&gt; 04
          品牌识别系统管理 —&gt; 05 营销传播&amp;设计推广
        </div>
        <div style="border-bottom: 0px; margin-top: 30px; border-top: #c1c1c1 1px solid; padding-top: 27px"
        class="main_1">
          <span>
            Design Process｜<?php echo C('WebName');?>设计流程
          </span>
        </div>
        <!--编码-->
        <div class="main_4" style="padding-top:0px;">
          <img alt="" src="<?php echo C('DOMAIN');?>/Public/Home/images/index_26.jpg">
        </div>
        <div class="main_2" style="margin-top: 23px">
          NO.1 前期沟通
        </div>
        <div class="main_5" style="margin-top: 18px">
          1.1、邀请<?php echo C('WebName');?>做前期沟通：您可以通过<?php echo C('phone');?>与我们的品牌顾问进行沟通。针对您的真实设计诉求和品牌现状介绍，我们会根据实际情况协商与您会面的时间、地点与方式，沟通过程中双方尊重彼此的商业机密与知识产权；
          <br>
          1.2、邀请<?php echo C('WebName');?>提交相关设计案例与取费标准：您可以根据自身品牌发展现状与总体项目预算，针对<?php echo C('WebName');?>公司相关案例与取费标准进行比较。正式签订具有法律约束力的设计委托协议；
        </div>
        <div class="main_2">
          NO.2 组建项目团队
        </div>
        <div class="main_5" style="margin-top: 18px">
          2.1、<?php echo C('WebName');?>组建项目团队，任命具有相关行业经验的项目总监并明确设计目标与方向，应包括设计成本和时间进度；
          <br>
          2.2、针对真实设计诉求进行必要的品牌现状、市场调研与信息收集工作；
          <br>
          2.3、对调研与评估结果形成策略性建议并正确引导下一阶段的设计工作；
          <br>
          2.4、项目团队开展具体深入的设计工作；
          <br>
          2.5、项目团队内部提案，保证设计方向性的正确；
          <br>
          2.6、正式提案<?php echo C('WebName');?>向您展现首次的意念作品；
          <br>
          2.7、对方案作出客观、理性的评判，进行更深入的设计延展；
          <br>
          2.8、提交最终的设计成果；
        </div>
        <div class="main_2">
          NO.3 品牌维护
        </div>
        <div class="main_5" style="border-bottom: 0px; border-left: 0px; margin-top: 18px; border-top: 0px; border-right: 0px">
          3.1、项目总监担任项目执行顾问，以确保设计的完美导入与执行；
          <br>
          3.2、品牌顾问对设计执行作出检查与评估，使得品牌得到无限的可持续的生长动力。
          <a id="about4" style="margin-top: -12px" name="about4">
            &nbsp;
          </a>
        </div>
        <div style="border-bottom: 0px; margin-top: 10px; border-top: #c1c1c1 1px solid; padding-top: 27px"
        class="main_1">
          <span>
            <?php echo C('WebNameSpell');?> Brand Spirit｜<?php echo C('WebName');?>品牌精神
          </span>
        </div>
        <div style="padding-top: 0px" class="main_4">
          <img src="<?php echo C('DOMAIN');?>/Public/Home/images/index_27.jpg" alt="">
        </div>
        <!--编码-->
        <div class="main_2">
          专业、态度、伙伴
        </div>
        <div class="main_3">
          <?php echo C('WebName');?>珍惜与您的每一次合作，并坚守专业精神与商业道德，工作中的任何细节绝不违背我们的良知与信仰。<?php echo C('WebName');?>坚信每一次美妙地合作，无不源于彼此的价值认同和良好沟通。
          <br>
          <br>
          1、以帮助客户塑造成功品牌为己任，为其提供切实可行的设计解决方案；
          <br>
          2、拒绝不切实际的合作承诺，严禁对自身专业能力与设计价值的盲目浮夸；
          <br>
          3、坚信设计可以利于他人，可以创造价值，可以让我们的生活更为美妙；
          <br>
          4、伙伴是<?php echo C('WebName');?>的唯一称谓，做一家专业并值得尊重的设计机构；
          <br>
          5、<?php echo C('WebName');?>不以任何理由或方式，做出损害伙伴、客户与供应商正当利益的任何行为。
          <br>
          &nbsp;
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