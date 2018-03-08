﻿<?php 
require_once 'include.php';
$moudles=getAllmModule();
$leftParentCates=getAllParentCate();
// $leftParentCates=getAllParentCate();
// var_dump($leftParentCates);
$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
$id=$_REQUEST['id'];
$mrow = getmModuleById($id);
// var_dump($mrow);
$sql="select id,atitle,akey,adescription,asummary,aName,aSource,aAuthor,aDesc,aHit,createTime,isShow from mind_article where iId={$id}";
$totalRows=getResultNum($sql);
// var_dump($totalRows);
$pageSize=10;
$totalPage=ceil($totalRows/$pageSize);
if($page<1||$page==null||!is_numeric($page))$page=1;
if($page>=$totalPage)$page=$totalPage;
$offset=($page-1)*$pageSize;
$sql="select id,iId,atitle,akey,adescription,asummary,aName,aSource,aAuthor,aDesc,aHit,createTime,isShow,aImg from mind_article where iId={$id} order by id desc limit {$offset},{$pageSize}";
$arows=fetchAll($sql);
// var_dump($arows);
 ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/publicimg/favicon.ico" type="image/x-icon" rel="shortcut icon">
	
	<title>定做攻略__咪奴服装</title>
	<meta name="description" content="4S店工作服,工作服定做,销售工作服,酒店工作服厂,广告衫工作服，保安工作服">
    <meta name="keywords" content="新闻动态｜服装知识｜定做问题">
	
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/reset.css">
    <!--[if lt IE 9]>
  <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
    <style type="text/css">
         

    /*.nav*/
    </style>

    <link rel="stylesheet" type="text/css" href="/css/m-style.css">
<!-- gdminu.com Baidu tongji analytics -->

									<!--百度统计代码-->
									<script>
									var _hmt = _hmt || [];
									(function() {
									  var hm = document.createElement("script");
									  hm.src = "//hm.baidu.com/hm.js?cc9991a77ec6b8b55786049d233b3cc1";
									  var s = document.getElementsByTagName("script")[0]; 
									  s.parentNode.insertBefore(hm, s);
									})();
									</script>
</head>

<body>
    <!--header end-->
   
    <!-- nav start -->
     <div class="navbar navbar-default  bs-docs-nav minu-navbar" id="mainnav" role="navigation">
        <div class="container">
        <!-- <div class="module left">
                <a href="/entrepreneurs/">
                    <img class="logo logo-dark" alt="Pitch Data" src="images/big-logo.jpg">
                </a>
            </div> -->
            <div class="navbar-header">
            <a class="navbar-brand" href="#">
                  <img alt="Brand" src="/images/big-logo.jpg"></a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="http://www.gdminu.com">咪奴首页</a> -->
            </div>
            <div class="navbar-collapse collapse in" aria-expanded="true">
                <ul class="nav navbar-nav">
                    <!-- <li class="active">
                        <a href="/">
                            <span class="glyphicon glyphicon-home"></span>
                        </a>
                    </li> -->
                    <li class="myclass-test">
                        <a href="/index.php"><span>咪奴首页</span></a>
                    </li>
                    <li class="myclass-test">
                        <a href="/product/39/1.html" target="_blank"><span>T恤定制</span></a>
                    </li>
                    <li class="myclass-test">
                        <a href="/product/42/1.html" target="_blank"><span>工作服定制</span></a>
                    </li>
          
          <li>
                        <a href="/product/31/1.html" target="_blank"><span>衬衫定制</span></a>
                    </li>
                    <li class="">
                        <a href="/product/13/1.html" target="_blank"><span>西装定制</span></a>
                    </li>

                    <li class="">
                        <a href="/allcase/1.html" target="_blank"><span>客户案例</span></a>
                    </li>
                    <li class="">
                        <a href="/news/2/1.html" target="_blank"><span>定做攻略</span></a>
                    </li>
                    <li class="">
                        <a href="/about/3.html" target="_blank"><span>品牌介绍</span></a>
                    </li>
                    <li class="">
                        <a href="/about/6.html" target="_blank"><span>联系我们</span></a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
    <!-- nav end -->
    <div class="minupro homepage-panel minu-news" id="minupro">
      <!-- <img src="images/minupro.jpg"> -->
    </div>
    
    <!-- 产品部分内容 start -->
    <div class="container g-bd-ser-newpro g-bd-news">
      <div class="row">
        <div class="col-sm-3 hidden-xs index-left g-sd-ser" id="index-left">
          <div class="block">
          <div class="m-ser-tel onlineservice">
            <h3>新闻中心</h3>
          </div>
          <ul class="list-unstyled g-bd-news-tit">
            <?php foreach ($moudles as $moudle):
            // var_dump($moudles);
               ?>          
            <li> <i class="icon-cross-left glyphicon glyphicon-plus"></i>
              <a href="/news/<?php echo $moudle['id']; ?>/1.html" target="_blank" alt="<?php echo $moudle['mName'];?>
                ">
                <?php echo $moudle['mName']; ?></a>
            </li>
            <?php endforeach ?></ul>
            <div class="m-ser-tel onlineservice">
              <h3>在线客户中心</h3>
              <!-- <img src="images/onlineservice.jpg"> -->
              </div>
            <div class="m-ser-tel">
               <span>总机:&nbsp;020-32364991</span>
            </div>
            <div class="m-ser-tel">
              <span>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;020-32364661
              </span>
            </div>
            <div class="m-ser-tel">
              <span>国内部：</span>
            </div>
            <div class="m-ser-tel">
              <!--  <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=1556658072&amp;site=qq&amp;menu=yes" target="_blank">    
              <img title="点击这里给我发消息" alt="点击这里给我发消息" src="http://wpa.qq.com/pa?p=2:1556658072:41" border="0"></a>
            -->
					<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1556658072&site=qq&menu=yes">
					<img border="0" src="http://wpa.qq.com/pa?p=2:1556658072:41" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
            <!--<img style="CURSOR: pointer" onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&sid=1556658072&o=www.gdminu.com&q=7', '_blank', 'height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');" border="0" SRC=http://wpa.qq.com/pa?p=1:2537524937:1 alt="点击这里给我发消息"> -->   
            <span>1556658072</span>
          </div>
          <div class="m-ser-tel">
					<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1367836114&site=qq&menu=yes">
					<img border="0" src="http://wpa.qq.com/pa?p=2:1367836114:41" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
            <!--<img style="CURSOR: pointer" onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&sid=1367836114&o=www.gdminu.com&q=7', '_blank', 'height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');" border="0" SRC=http://wpa.qq.com/pa?p=1:1367836114:1 alt="点击这里给我发消息">-->    
            <span>1367836114</span>
          </div>
          <div class="m-ser-tel">
            <span>国际部：</span>
          </div>
          <div class="m-ser-tel">
				  <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1508026900&site=qq&menu=yes">
				  <img border="0" src="http://wpa.qq.com/pa?p=2:1508026900:41" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
            <!--<img style="CURSOR: pointer" onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&sid=1508026900&o=www.gdminu.com&q=7', '_blank', 'height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');" border="0" SRC=http://wpa.qq.com/pa?p=1:1508026900:1 alt="点击这里给我发消息">-->    
            <span>1508026900</span>
          </div>
          <div class="m-ser-tel">
            <span>生产部：</span>
          </div>
          <div class="m-ser-tel">
				  <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1550966973&site=qq&menu=yes">
				  <img border="0" src="http://wpa.qq.com/pa?p=2:1550966973:41" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
            <!--<img style="CURSOR: pointer" onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&sid=1550966973&o=www.gdminu.com&q=7', '_blank', 'height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');" border="0" SRC=http://wpa.qq.com/pa?p=1:1550966973:1 alt="点击这里给我发消息">-->    
            <span>1550966973</span>
          </div>
          <div class="m-wxchat-tit">
            <span>咪奴微信号：</span>
          </div>
          <div class="m-wxchat">
            <img src="/images/wxchat.jpg">
          </div>
          <!-- cloth left start -->
          <!-- <div class="m-cloth-class">
            <img src="images/clothclass.gif"></div> -->
        </div>

        <ul class="list-unstyled m-cloth-class-det" id="cloth-sort"> 
          <?php foreach ($leftParentCates as $leftParentCate):
            $leftCates =getmLeftCatesById($leftParentCate['id']); 
            // var_dump($leftCates);
            
            ?>
          <li>
            <div class="m-cloth-pic panel">
               <!-- <img src="images/pp01.gif"> -->
                <!-- <h3>西装量身定制</h3> -->
                <h3><?php echo $leftParentCate['cName']; ?></h3>
            </div>
            
            <div class="">
              <ul class="cloth-list list-unstyled">
                <?php foreach ($leftCates as $leftCate):  ?>
                <li> <i class="icon-cross-left glyphicon glyphicon-plus"></i>
                  <a href="/product/<?php echo $leftCate['id']; ?>/1.html" target="_blank"><?php echo $leftCate['cName']; ?></a>
                </li>
              <?php endforeach ?>
              </ul>
            </div>
          </li>
          <?php endforeach ?>
          
        </ul>
        <!-- cloth left end  http://flagpolesky.com/ -->
      </div>
      <div class="col-sm-9 m-news-intro" id="hot-pro">
        <div class="block">
          <header>
            <div class="m-news-big-title">
                <h2><?php echo $mrow['mName']; ?></h2>
                <!-- <hr> -->
            </div>
            </header>
            
            <!-- <div class="row hot-pro-list"> -->
              <?php foreach($arows as $arow):
              // $proImg=getCateImgById($arow['id']);
              // var_dump($proImg);
              ?>
              <div class="col-sm-12 col-xs-12  m-news">
              <div class="row">
                <div class="col-sm-3 m-news-pic">
                  <a href="/newsDetails/<?php echo $arow['id']; ?>.html" target="_blank">
                    <img class="fill avatar" src="/admin/uploads/<?php echo $arow['aImg'];?>"></a>
                </div>
                  <div class="col-sm-9 m-news-tit">
                  
                    <a href="/newsDetails/<?php echo $arow['id']; ?>.html" target="_blank"><h3><?php echo $arow['aName']; ?></h3></a>
                  
                  <p><?php echo $arow['asummary']; ?></p>
                  <span class="pull-right looksum"><?php echo $arow['aHit']; ?>&nbsp;人浏览&nbsp;&nbsp; [&nbsp;<?php echo date('Y-m-d',$arow['createTime']); ?>&nbsp;]</span>
                </div>
        
              </div>
                
              </div>
              <?php  endforeach;?>
             
            <!-- </div> -->
          <!--ces-->
          
          <!--ces-->
        </div>
        <div class="clearfix"></div>
              <div class="pull-right">
                <nav><ul class="pagination"><?php echo showProductPage($page, $totalPage,$id);?></ul></nav>
              </div>
      </div>
    </div>
    </div>
    <!-- 产品部分内容 end-->


   
  
   
  
    <!-- foot title -->
    <!-- <div class="container">
        <div class="row ">
            <ul class="bs-docs-footer-links text-muted list-inline">
                <li>友情链接：</li>
                <li></li>
                <li>
                    <a href="#"></a>
                </li>
                <li>·</li>
                <li>
                    <a href="#"></a>
                </li>
                
                
            </ul>
        </div>
    </div> -->
    <!--footer-->
    <footer class="bs-docs-footer" role="contentinfo">
        <div class="container bd-foot">

            <p>
                广州市天河区珠村东横五路一号东裕商务大厦4楼
            </p>
            <p>
                总机 ：020-32364991 32364661 国内部：020-66623595 国际部：020-66690091 
            </p>
            <p>
                传真 ：020-66633676转808 QQ：1556658072 E-mai： 
                <a href="mailto:888@gdminu.com">888@gdminu.com</a> 
                <!-- &subject=工作服定制&body=工作服定制需求.... -->
            </p>
            
            <div class="footer-bottom">
          <ul class="list-inline text-center">
            <li>
              <span class="copyright">Copyright ©2016 广东咪奴服装有限公司 - 版权所有 |</span>
              <a href="http://www.miibeian.gov.cn/" target="_blank">粤ICP备14088311</a>
            </li>
            <li>
              <script type="text/javascript" src="js/require.js" data-main="js/barmain"></script>
              

<script language="javascript" type="text/javascript" src="http://js.users.51.la/18985049.js"></script>
<noscript><a href="http://www.51.la/?18985049" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/18985049.asp" style="border:none" /></a></noscript>

              <!-- <script language="javascript" type="text/javascript" src="http://js.users.51.la/17555432.js"></script> -->
            </li>
			
			<li>
			<!--CNZZ站长统计代码-->
			<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
			document.write(unescape("%3Cspan id='cnzz_stat_icon_1260742015'%3E%3C/span%3E%3Cscript src='" 
			+ cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1260742015%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
			</li>
          </ul>
        </div>
        </div>
    </footer>
    <!--footer开始-->
  <div class="container hidden-lg">
    <div class="row lfooter">
      <ul>
        <li><a href="/"><img src="/images/dbsy.png" width="30" height="30" /><br />网站首页</a></li>
        <li id="yidongtel"><a href="tel:02032364991"><img src="/images/dbdh.png" width="30" height="30" /><br />电话咨询</a></li>
        <li id="yidongqq"><a href="mqqwpa://im/chat?chat_type=wpa&uin=1556658072&version=1"><img src="/images/dbqq.png" width="30" height="30" /><br />QQ咨询</a></li>
        <!-- <li id="yidongsq"><a href="http://qiao.baidu.com/v3/?module=mobile&controller=mobileim&action=index&ucid=6699431&type=z&siteid=9900960"><img src="/images/dblx.png" width="30" height="30" /><br />在线咨询</a></li>  -->
      </ul> 
    </div>

  </div>
    
<!--footer结束-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/js/jquery-3.1.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
<!--调用自动推送代码-->
<?php include_once("baidu_js_push.php") ?>
</body>

</html>
