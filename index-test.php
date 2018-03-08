<?php 
require_once 'include.php';
$cates=getAllmCate();
$leftParentCates=getAllParentCate();

// var_dump($leftParentCates);
 ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="keywords" content="工作服|定做工作服|西服定制|衬衫定做|职业装定做|广州工作服|广州工作服厂|广州T恤衫|广告衫定制">
    <meta name="description" content="【广东咪奴服装有限公司】专业工作服定做, 职业装定做，衬衫订做,厂服,工衣,工作制服,西装,西服,T恤衫,风衣等制服设计、生产、销售于一体行业龙头企业。">
    <link href="/publicimg/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <title>工作服|定做工作服|广州工作服厂—【广东咪奴服装有限公司】</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/docs.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/css/leftbar.css">
    <!--[if lt IE 9]>
  <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
    <style type="text/css">
         

    /*.nav*/
    </style>

    <link rel="stylesheet" type="text/css" href="/css/m-style.css">
	<!--百度站长验证-->
	<meta name="baidu-site-verification" content="oFoPVobhOi" />
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
					
					
				<!--360网站验证-->
				<meta name="360-site-verification" content="25ffdd4e95216716ba394cc1bfc4a480" />
				
</head>

<body>


       <header class="navbar navbar-static-top bs-docs-nav" id="top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="../" class="navbar-brand">广东咪奴服装</a>
    </div>
    <nav id="bs-navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
      <ul class="nav navbar-nav">
        <li>
          <a href="/product/39/1.html" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', 'T恤定制'])">T恤定制</a>
        </li>

        <li>
          <a href="/product/42/1.html" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', '工作服定制'])">工作服定制</a>
        </li>
        <li>
          <a href="/product/31/1.html" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', '衬衫定制'])">衬衫定制</a>
        </li>
        <li>
          <a href="/product/13/1.html" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', '西装定制'])">西装定制</a>
        </li>
        <li>
          <a href="/allcase/1.html" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', 'V3导航-定制'])">客户案例</a>
        </li>
        <li>
          <a href="/news/2/1.html" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', 'V3导航-定制'])">定做攻略</a>
        </li>

        <li>
          <a href="/about/3.html" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', 'V3导航-定制'])">品牌介绍</a>
        </li>
        <li><a href="/about/6.html" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', '联系我们'])" target="_blank">联系我们</a></li>

  
      </ul>
      <ul class="nav navbar-nav navbar-right">
        

        
                    


      </ul>
    </nav>
  </div>
</header>

			<!--调用自动推送代码-->
			<?php include_once("baidu_js_push.php") ?>



    <!--header end-->
   
    <!-- nav start -->
	
	
    <!-- nav end -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators banner start -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="img-responsive" src="images/index1.jpg" alt="0">
            </div>
            <div class="item">
                <img class="img-responsive" src="images/index2.jpg" alt="1">
            </div>
            <div class="item">
                <img class="img-responsive" src="images/index3.jpg" alt="2">
            </div>
            <div class="item">
                <img class="img-responsive" src="images/index4.jpg" alt="3">
            </div>
            <div class="item">
                <img class="img-responsive" src="images/index5.jpg" alt="4">
            </div>
            
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">上一页</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">下一页</span>
        </a>
    </div>
    <!-- 产品部分内容 start -->
    <div class="container g-bd-ser-newpro">
      <div class="row">
        <div class="col-sm-3 hidden-xs index-left g-sd-ser" id="index-left">
          <div class="block">
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
					<!-- <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1556658072&site=qq&menu=yes">
					<img border="0" src="http://wpa.qq.com/pa?p=2:1556658072:41" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> -->

          <a target="_blank" href="tencent://message/?uin=1556658072&Site=www.gdminu.com&Menu=yes">
          <img border="0" src="http://wpa.qq.com/pa?p=2:1556658072:41" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>

            <!--<img style="CURSOR: pointer" onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&sid=1556658072&o=www.gdminu.com&q=7', '_blank', 'height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');" border="0" SRC=http://wpa.qq.com/pa?p=1:2537524937:1 alt="点击这里给我发消息"> -->   
            <span>1556658072</span>
          </div>
          <div class="m-ser-tel">
					<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1367836114&site=qq&menu=yes">
					<img  border="0" src="http://wpa.qq.com/pa?p=2:1367836114:41" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
            <!--<img style="CURSOR: pointer" onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&sid=1367836114&o=www.gdminu.com&q=7', '_blank', 'height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');" border="0" SRC=http://wpa.qq.com/pa?p=1:1367836114:1 alt="点击这里给我发消息">-->    
            <span>1367836114</span>
          </div>
          <div class="m-ser-tel">
            <span>国际部：</span>
          </div>
          <div class="m-ser-tel">
				  <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1508026900&site=qq&menu=yes">
				  <img  border="0" src="http://wpa.qq.com/pa?p=2:1508026900:41" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
            <!--<img style="CURSOR: pointer" onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&sid=1508026900&o=www.gdminu.com&q=7', '_blank', 'height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');" border="0" SRC=http://wpa.qq.com/pa?p=1:1508026900:1 alt="点击这里给我发消息">-->    
            <span>1508026900</span>
          </div>
          <div class="m-ser-tel">
            <span>生产部：</span>
          </div>
          <div class="m-ser-tel">
				  <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1550966973&site=qq&menu=yes">
				  <img  border="0" src="http://wpa.qq.com/pa?p=2:1550966973:41" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
            <!--<img style="CURSOR: pointer" onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&sid=1550966973&o=www.gdminu.com&q=7', '_blank', 'height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');" border="0" SRC=http://wpa.qq.com/pa?p=1:1550966973:1 alt="点击这里给我发消息">-->    
            <span>1550966973</span> 
          </div>
          <div class="m-wxchat-tit">
            <span>咪奴微信号：</span>
          </div>
          <div class="m-wxchat">
            <img src="/images/wxchat.jpg" >
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
      <div class="col-sm-9 hot-pro-intro" id="hot-pro">
        <div class="block">
          <header>
            <div class="hot-pro-title">
                <h2 class="text-h2">最新产品</h2>
                <!-- <hr> -->
            </div>
            </header>

            <!-- <div class="row hot-pro-list"> -->
              <?php foreach($cates as $cate):
              // $proImg=getCateImgById($cate['id']);
              // var_dump($proImg);
              ?>
              <div class="col-xs-6 col-sm-4 hot-pro">
                <div class="hot-pro-pic">
                  <a href="product/<?php echo $cate['id']; ?>/1.html" target="_blank">
                    <img height="204px" width ="165px" class="fill" src="admin/uploads/<?php echo $cate['pimg'];?>" alt="咪奴服装"></a>
                </div>
                <div class="hot-title">
                  <h2>
                    <a href="product/<?php echo $cate['id']; ?>.html" target="_blank"><?php echo $cate['cName']; ?></a>
                  </h2>
                </div>
              </div>
              <?php  endforeach;?>
              
            <!-- </div> -->
          
        </div>
      </div>
    </div>
    </div>
    <!-- 产品部分内容 end-->
    <!-- 制作流程部分 end-->
    <div class="container ">
      <div class="row product-process-list hidden-xs">
        <div class="process-tit">
            <h2>定做流程</h2>
            <em>企业权益第一，咪奴始终保障着企业工作服质量！</em>
            <div class="more pull-right"><a href="#" target="_blank">三分钟学会定做</a></div>
        </div>

                
        <div class="product-process-item col-sm-4 col-xs-12">
          <a href="/about/14.html" target="_blank"><span class="img-1"></span></a>
          <span>
            <a href="about/14.html" target="_blank">方案沟通</a>
          </span>
        </div>    
        <div class="col-xs-1 hidden-xs pro-glyphicon" >
          <span class="glyphicon glyphicon-arrow-right"></span>
        </div>
        <div class="product-process-item col-sm-4 col-xs-12">
          <a href="about/8.html" target="_blank"><span class="img-2"></span></a>
          <span>
            <a href="about/8.html" target="_blank">样衣制作</a>
          </span>
        </div>
        <div class="col-xs-1 hidden-xs pro-glyphicon" >
          <span class="glyphicon glyphicon-arrow-right"></span>
        </div>
        <div class="product-process-item col-sm-4 col-xs-12">
          <a href="" target="_blank"><span class="img-3"></span></a>
          <span>
            <a href="" target="_blank">签订合同</a>
          </span>
        </div>
        <div class="col-xs-1 hidden-xs pro-glyphicon" >
          <span class="glyphicon glyphicon-arrow-right"></span>
        </div>
        <div class="product-process-item col-sm-4 col-xs-12">
          <a href="about/9.html" target="_blank"><span class="img-4"></span></a>
          <span>
            <a href="about/9.html" target="_blank">上门量体</a>
          </span>
        </div>
        <div class="col-xs-1 hidden-xs pro-glyphicon" >
          <span class="glyphicon glyphicon-arrow-right"></span>
        </div>
        <div class="product-process-item col-sm-4 col-xs-12">
          <a href="about/10.html" target="_blank"><span class="img-5"></span></a>
          <span>
            <a href="about/10.html" target="_blank">制作生产</a>
          </span>
        </div>
        <div class="col-xs-1 hidden-xs pro-glyphicon" >
          <span class="glyphicon glyphicon-arrow-right"></span>
        </div>
        <div class="product-process-item col-sm-4 col-xs-12">
          <a href="about/11.html" target="_blank"><span class="img-6"></span></a>
          <span>
            <a href="about/11.html" target="_blank">质量检验</a>
          </span>
        </div>
        <div class="col-xs-1 hidden-xs pro-glyphicon" >
          <span class="glyphicon glyphicon-arrow-right"></span>
        </div>
        <div class="product-process-item col-sm-4 col-xs-6">
          <a href="about/12.html" target="_blank"><span class="img-7"></span></a>
          <span> 
            <a href="about/12.html" target="_blank">免费送货</a>
          </span>
        </div>
        <div class="col-xs-1 hidden-xs pro-glyphicon" >
          <span class="glyphicon glyphicon-arrow-right"></span>
        </div>
        <div class="product-process-item col-sm-4 col-xs-6">
          <a href="about/3.html" target="_blank"><span class="img-8"></span></a>
          <span>
            <a href="about/3.html" target="_blank">售后服务</a>
          </span>
        </div>
        
      </div>
    </div>
    <!-- 是否在担心 -->
    <div class="worry hidden-xs">
      <div class="container">
        <div class="row">
          <div class="worry homepage-panel" id="worryview">
            <img src="/images/worry.jpg" class="img-responsive" ></div>
        </div>
      </div>
    </div>
    
    
    <!-- 案例部分 -->
    <div class="container case-tit hidden-xs">
    <div class="row">
        <header>
            <h2 class="case-tit text-h2">部分合作企业</h2>
          </header> 
    </div>
       
    </div>
    <div class="container caselist hidden-xs">
      <div class="row">
        <div class="col-sm-9 select-left" id="select-left">
          <?php $indexCases = getIndexmCasesByCid();
          foreach ($indexCases as $indexCase):?>
          <div class=" select-cust-list">
            <div class="col-sm-4 col-xs-6 cust-list">
              <div class="cust-list-pic">
                <a href="/caseDetails/<?php echo $indexCase['id']; ?>
                  .html" target="_blank">
                  <img class="fill avatar img-responsive" src="/admin/uploads/<?php echo $indexCase['aImg']; ?>"></a>
              </div>
              <div class="hot-title">
                <h4>
                  <?php echo $indexCase['aName']; ?></h4>
                <p class="text-leter">
                  <?php echo $indexCase['asummary']; ?></p>
                <div class="cust-deta">
                  <a href="/caseDetails/<?php echo $indexCase['id']; ?>
                    .html" target="_blank">了解详情
                    <span ></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach ?>
        </div>

        <div class="col-sm-3 hidden-xs customer-list" id="customer-list">
            <div class="col-sm-12  customer-list-tit">
                <h3>部分合作客户</h3>
                <!-- <img src="images/consumer-logo.jpg"> -->	
				</div>

					 <!--<marquee  
                    		 align="left" 

                             bgcolor="#FFFFFF" 
                             direction="up" behavior="alternate"
                             height="500" 	
                             width="300" 
                             hspace="0" 
                             vspace="0" 
                             loop="-1" 
                             scrollamount="5" 
                             scrolldelay="5" 
                             onMouseOut="this.start()" 
                             onMouseOver="this.stop()"
                             >-->
 
                                            <!--
                                            #demo {
                                            background: #FFF;
                                            overflow:hidden;
                                            border: 0px dashed #CCC;
                                            height: 550px;
                                            text-align: center;
                                            float: left;
                                            }
                                            #demo img {
                                            border: 3px solid #F2F2F2;
                                            display: block;
                                            }
                                            -->
                                            
                                            
												<style>
                                                <!--
                                                #demo {
                                                background: #FFF;
                                                overflow:hidden;
                                                border: 0px dashed #CCC;
                                                height: 500px;
                                                text-align: center;
                                                float: left;
                                                }
                                                #demo img {
                                                border: 3px solid #F2F2F2;
                                                display: block;
                                                }
                                                -->
                                                </style>
                                                
                                                <div id="demo">
                                                <div id="demo1">
                                               
                                               <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar img-responsive" src="/images/anlie1.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar img-responsive" src="/images/anlie2.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar img-responsive" src="/images/anlie3.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar img-responsive" src="/images/anlie4.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar" src="/images/anlie5.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar img-responsive" src="/images/anlie6.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar img-responsive" src="/images/anlie7.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar img-responsive" src="/images/anlie8.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar img-responsive" src="/images/anlie9.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar img-responsive" src="/images/anlie10.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar img-responsive" src="/images/anlie11.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar img-responsive" src="/images/anlie12.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar img-responsive" src="/images/anlie13.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar img-responsive" src="/images/anlie14.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar img-responsive" src="/images/anlie15.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar img-responsive" src="/images/anlie16.jpg"></div>
				
			<div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar img-responsive" src="/images/anlie17.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar img-responsive" src="/images/anlie18.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar img-responsive" src="/images/anlie19.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar img-responsive" src="/images/anlie20.jpg"></div>
			<div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar img-responsive" src="/images/anlie21.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar img-responsive" src="/images/anlie22.jpg"></div>
                                                 
                                                </div>
                                                <div id="demo2"></div>
                                                </div>
                                                 
                                                <script>
                                                <!--
                                                var speed=30; //数字越大速度越慢
                                                var tab=document.getElementById("demo");
                                                var tab1=document.getElementById("demo1");
                                                var tab2=document.getElementById("demo2");
                                                tab2.innerHTML=tab1.innerHTML; //克隆demo1为demo2
                                                tab.scrollTop=tab.scrollHeight
                                                function Marquee(){
                                                if(tab1.offsetTop-tab.scrollTop>=0)//当滚动至demo1与demo2交界时
                                                tab.scrollTop+=tab2.offsetHeight //demo跳到最顶端
                                                else{
                                                tab.scrollTop--
                                                }
                                                }
                                                var MyMar=setInterval(Marquee,speed);
                                                tab.onmouseover=function() {clearInterval(MyMar)};//鼠标移上时清除定时器达到滚动停止的目的
                                                tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)};//鼠标移开时重设定时器
                                                -->
                                                </script>
 
        </div>
    </div>
    </div>
    <!-- 选择理由 -->
    <div class="container">
        <div class="row why-list">
            <div class="col-sm-12 col-xs-12 why-pic hidden-xs">
                <img src="/images/why.jpg"  class="img-responsive" >
            </div>
            <div class="col-xs-12 why-sol">
                <h2 class="text-h2">为什么选择咪奴的理由？</h2>
            </div>
        </div>
    </div>
    <!-- 为什么选择咪奴的理由 -->
    <div class="tab1">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12 float-right">
            <img src="/images/cause-1.jpg" class="img-responsive center-block"></div>
            <div class="col-sm-6 col-xs-12 float-left">
            <div class="col-xs-12 why-list-deta">
              <header class="col-xs-12">
                <h3 class="text-h3"> <i class="why-num">1</i>
                  行业版型领导者
                </h3>
              </header>
              <div class="why-tel">
                <p>
                  咪奴服装由技术精湛、经验丰富的设计团队，定期参加国际服装展，抓取当季服装行业流行趋势及元素。结合制服特点进行设计制作，让您企业工服永不落伍。
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="tab2">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12">
            <img src="/images/cause-2.jpg" class="img-responsive center-block"></div>
          <div class="col-sm-6 col-xs-12">
            <div class="col-xs-12 why-list-deta">
              <header class="col-xs-12">
                <h3 class="text-h3"> <i class="why-num">2</i>
                  专注顶尖工作服定制
                </h3>
              </header>
              <div class="why-tel">
                <p>十年定制经验，先进的生产设备，拥有国内顶尖的设计团队，为企业个性化需要，量身定制行业标杆工作服。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab3">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12 float-right">
                <img src="/images/cause-3.jpg" class="img-responsive center-block">
            </div>
          <div class="col-sm-6 col-xs-12 float-left">
                <div class="col-xs-12 why-list-deta">
                    <header class="col-xs-12">
                      <h3 class="text-h3"> <i class="why-num">3</i>
                        品牌塑造口碑
                      </h3>
                    </header>
                    <div class="why-tel">
                      <p>严格按照质量管理体系，从原材料进厂，车间生产抽检，尾部系统质检。无论一粒扭扣．一根缎带．还是一个徽章严格按照咪奴5检3查系统的检验标准，确保每件产品的品质！</p>
                    </div>
              </div>
            </div>
            
        </div>
      </div>
    </div>
    <div class="tab4">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12">
                <img src="/images/cause-4.jpg" class="img-responsive center-block">
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="col-xs-12 why-list-deta">
                    <header class="col-xs-12">
                    <h3 class="text-h3">
                    <i class="why-num">4</i>独有设计顾问一对一定制
                    </h3>
                    </header>
                    <div class="why-tel">
                      <p>业内首家拥有企业形象设计顾问团队，为每一家合作企业提供一对一式的企业员工形象塑造设计，让您的工作服更有企业文化。</p>
                        <!-- <div class="why-cau"> 确保每件出厂服装都是精品<i></i></div> -->
                        <!-- <a href=""><img src="images/o_btn4.gif"></a> -->
                    </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="tab5">
      <div class="container">
        <div class="row">
        <div class="col-sm-6 col-xs-12 float-right">
                <img src="/images/cause-5.jpg" class="img-responsive center-block">
            </div>
          <div class="col-sm-6 col-xs-12 float-left">
                <div class="col-xs-12 why-list-deta">
                    <header class="col-xs-12">
                    <h3 class="text-h3">
                    <i class="why-num">5</i>三大服务体系，让您高兴满意
                    </h3>
                    </header>
                    <div class="why-tel">
                      <p>我司严格按照：售前、售中、售后三大服务体系，由指定人员24小时跟踪服务。我们将以优质的产品、百分百的热情，竭诚为您服务。</p>
                    </div>
              </div>
            </div>
            
        </div>
      </div>
    </div>
    <!-- 企业介绍 -->
     <div class="comp-intr-bg">
       <div class="container comp-intr">
         <div class="row">
           <div class="col-sm-6 col-xs-12 comp-intr-pic">
             <img src="/images/company-intr.jpg" class="img-responsive center-block"></div>
           <div class="comp-intr-tit">
               <h2 class="text-h2">广东咪奴服装有限公司企业简介</h2>
           </div>
           <div class="col-sm-6 col-xs-12 comp-intr-deta">
             <p>
               一家集设计，制版，生产，销售为一体服装企业。公司制服部专业为企业团体“量身订做”各种制服、工作服、厂服等。公司建立了完善的专业化、一体化的企业服务体系。本着“以质量求生存，以创新求发展”管理理念，重视观念更新，全面引进最新电脑设备及先进缝纫技术，加强高工艺培训，由技术精湛、经验丰富的设计师及工艺师们组成的设计部，可根据客户的企业文化氛围、经营风格和理念等特殊需求进行全新的富有独特创意的设计和制作。
             </p>
             <p>
               公司旗下制衣厂年产各类服饰130余万件，产品有毛料、棉料、TR等面料的各式服装，种类有单、夹、棉等，以珠江三角洲为中心向全国各地及港澳、欧美，东南亚地区辐射，建立了稳定的销售网络，形成了先进科学的网络营销和交易模式。
             </p>
             <div class="more">
               <a href="/about/3.html" target="_blank">更多介绍</a>
             </div>

           </div>
         </div>
       </div>
     </div>
    <!-- 文字介绍 -->
    <div class="container">
        <div class="row newlist ">
            <div class="col-sm-3 col-xs-12  hidden-xs">
                <div class="new-list-tit">
                    <h3>新闻动态</h3>
                    <div class="new-more"><a class="btn btn-default " href="/news/1/1.html" role="button" target="_blank">more</a></div>
                </div>
                <div class="new-cont">
                    <ul class="list-unstyled">
                      <?php $newrows= getSmallmArticlesByiId(1);
                      foreach ($newrows as $newrow):
                      ?>                    
                      <li> 
                      <a href="/newsDetails/<?php echo $newrow['id']; ?>.html" target="_blank" title="<?php echo $newrow['aName']; ?>
                            " class="text-overflow"> <i class="glyphicon glyphicon-triangle-right"></i>
                            <?php echo $newrow['aName']; ?></a>
                      </li>
                      <?php endforeach ?></ul>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12 new-list-deta">
                <div class="new-list-tit">
                    <h3>服装知识</h3>
                    <div class="new-more"><a class="btn btn-default " href="/news/2/1.html" role="button" target="_blank">more</a></div>
                    
                    <!-- <a href=""><i class=""></i><button class=""></button></a> -->
                </div>
                <div class="cloth-know">
                  
                    <ul class="list-unstyled">
                    <?php $clorows= getSmallmArticlesByiId(2); 
                    if($clorows!=null)
                    foreach ($clorows as $clorow):
                      ?>
                        <li> 
                        <a href="newsDetails/<?php echo $clorow['id']; ?>.html" target="_blank" title="<?php echo $clorow['aName']; ?>
                            " class="text-overflow"> <i class="glyphicon glyphicon-triangle-right"></i>
                            <?php echo $clorow['aName']; ?></a>
                        </li>
                      <?php endforeach ?>
                        
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="new-list-tit">
                    <h3>定做问题</h3>
                    <div class="new-more"><a class="btn btn-default " href="/news/3/1.html" role="button" target="_blank">more</a></div>
                </div>
                <div>
                    <ul class="list-unstyled ">
                    <?php $prorows= getSmallmArticlesByiId(3);  
                    // var_dump($prorows);
                    if($prorows!=null)
                      foreach ($prorows as $prorow):
                      ?>
                        <li >
                          <a href="/newsDetails/<?php echo $prorow['id']; ?>.html" target="_blank" title="<?php echo $prorow['aName']; ?>
                            " class="text-overflow"> <i class="glyphicon glyphicon-triangle-right"></i>
                            <?php echo $prorow['aName']; ?></a>
                        </li>
                      <?php endforeach ;?> 
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12  hidden-xs">
                <div class="online-mes-tit">
                  <h3>在线留言</h3>
                    <!-- <img src="images/problem.jpg"> -->
                    <!-- <div class="new-more"><a class="btn btn-default " href="#" role="button">more</a></div> -->
                </div>
                <div class="online-mes-list">
                    <form action="doMessageAction.php?act=addProblem" method="post" class="form-horizontal" aria-invalid="true">
                    

                    <table border="0" cellpadding="5" cellspacing="0">
                    <tbody>
                      <tr>
                        <td align="right"><label class="label-control">联系人</label></td>
                        <td>
                          <input class="form-control" type="text" name="mCustName" id="mCustName" required />
                        </td>
                      </tr>
                      <tr>
                        <td align="right">电话</td>
                        <td>
                          <input class="form-control has-feedback" type="tel" name="mCustTel" id="mCustTel" required />
                        </td>
                      </tr>
                      <tr>
                        <td align="right">Email</td>
                        <td>
                          <input class="form-control has-feedback" type="email" name="mCustEmail" id="mCustEmail"/>
                        </td>
                      </tr>
                      <tr>
                        <td align="right">内容</td>
                        <td>
                          <textarea class="form-control cproblem" name="mCustDesc" id="mCustDesc" style="height:60px;" required></textarea>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <input class="btn btn-default btn-submit" type="submit" value="提交"/>                      
                        </td>
                      </tr>
                    </tbody>
                    </table>
                    </form>
                </div>
            </div>


        </div>
    </div>
    <!-- 荣誉证书 -->
    <div class="container bd-cert hidden-xs">
        <div class="row">
          <div class="col-sm-1 col-xs-6">
            <img src="/images/cert00.jpg" class="img-responsive">
          </div>
          <div class="col-sm-2 col-xs-6">
            <img src="/images/cert01.jpg" class="img-responsive">
          </div>
          <div class="col-sm-2 col-xs-6">
            <img src="/images/cert02.jpg" class="img-responsive">
          </div>
          <div class="col-sm-2 col-xs-6">
            <img src="/images/cert03.jpg" class="img-responsive">
          </div>
          <div class="col-sm-2 col-xs-6">
            <img src="/images/cert04.jpg" class="img-responsive">
          </div>
          <div class="col-sm-2 col-xs-6">
            <img src="/images/cert05.jpg" class="img-responsive">
          </div>
            <!-- <ul class="list-unstyled">
              <li><img src="images/cert00.jpg"></li>
              <li><img src="images/cert01.jpg"></li>
              <li><img src="images/cert02.jpg"></li>
              <li><img src="images/cert03.jpg"></li>
              <li><img src="images/cert04.jpg"></li>
            </ul> -->
        </div>
    </div>
    
    <footer class="bs-docs-footer" role="contentinfo">
        <div class="container bd-foot">
          <div class="row">
            <div class="ms-hidden hidden-xs">
              <div class="col-sm-12 col-xs-12">
                <p>广州市天河区珠村东横五路一号东裕商务大厦4楼</p>
              </div>
              <div  class="col-sm-12 col-xs-12 center-block">
                <p>总机 ：020-32364991 32364661 国内部：020-66623595 国际部：020-66690091</p>
              </div>
            </div>

            <div class="md-hidden hidden-xs-n">
              <div  class="col-sm-4 col-xs-12 center-block">
                <p>总机 ：020-32364991 32364661</p>
              </div>
              <div  class="col-sm-4 col-xs-12">
                <p>国内部：020-66623595</p>
              </div>
              <div  class="col-sm-4 col-xs-12 center-block">
                <p>国际部：020-66690091</p>
              </div>
            </div>
            
          </div>
          <div class="container">
            <div class="row">
              <div class="center-block">
                <p>
                  传真 ：020-32364991-808 QQ：1556658072 E-mai：
                  <a href="mailto:888@gdminu.com">888@gdminu.com</a>
                  <!-- &subject=工作服定制&body=工作服定制需求.... --> </p>
              </div>

            </div>
          </div>
            
            <div class="container">
              <div class="row">
                <div class="hidden-xs">  
                     <div class="footer-bottom">
                        <ul class="list-inline text-center">
                          <li>
                            <span class="copyright">Copyright ©2016 广东咪奴服装有限公司 - 版权所有 |</span>
                            <a href="http://www.miibeian.gov.cn/" target="_blank">粤ICP备14088311</a>
                          </li>
                          <li>
                            <!--<script language="javascript" type="text/javascript" src="http://js.users.51.la/17555432.js"></script>
                          -->
                          <script language="javascript" type="text/javascript" src="http://js.users.51.la/18985049.js"></script>
                          <noscript>
                            <a href="http://www.51.la/?18985049" target="_blank" rel="nofollow">
                              <img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;"
                         src="http://img.users.51.la/18985049.asp" style="border:none" />            
                            </a>
                          </noscript>
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
                <div class="hidden-xs-n">
                    <div class="footer-bottom">
                        <ul class="list-inline text-center">
                          <li>
                            <span class="copyright">Copyright ©2016 广东咪奴服装有限公司 - 版权所有 |</span>
                          </li>
                      </ul>
                      </div>
                </div>
              </div>
            </div>
           
								<style type="text/css">  
                                #menuContainer{
                                    width:100%;
                                    height:40px;
                                    line-height:40px;
                                    background-color:#CCCCCC;
                                    text-align:center;       
                                    }
                                     
                                #menuContainer ul{
                                    display:inline;
                                    list-style:none;
                                    text-align:center;       
                                    }
                                 
                                #menuContainer ul li{
                                    display:inline;
                                    }
                            </style>
                            </head>
                             
                            <body>
							
							<!--友情链接1-->
              <div class="container hidden-xs">
                <div class="row">
                  <div id="menuContainer">
                        <ul class="bs-docs-footer-links text-muted list-inline">
                          <li>友情链接：</li>

                          <!--
            <li>                            
                          <a href="http://www.fanuman.com/" target="_blank"> <font color="#FF0000">工作服定做</font>
                          </a>
                        </li>
                        <li>|</li>
                        -->
                        <li>
                          <a href="http://www.vansichina.com/" target="_blank">Vans官网</a>
                        </li>
                        <li>|</li>

                        <li>
                          <a href="http://xiuxian.qudao.com/" target="_blank">休闲服装加盟</a>
                        </li>
                        <li>|</li>

                        <li>
                          <a href="http://www.syyzjfz.com/" target="_blank">沈阳工作服</a>
                        </li>
                        <li>|</li>

                        <li>
                          <a href="http://www.mumloveme.com " target="_blank">孕妇连衣裙</a>
                        </li>
                        <li>|</li>

                        <li>
                          <a href="http://www.bjyhhr.com" target="_blank">劳保工作服定做</a>
                        </li>
                        <li>|</li>
                        <li>
                          <a href="http://www.szxiaofu.cn" target="_blank">校服定做</a>
                        </li>
                        <li>|</li>
                        <li>
                          <a href="http://www.jnala.com/" target="_blank">济南工作服</a>
                        </li>
                        <li>|</li>
                        <li>
                          <a href="http://www.bosimao88.com" target="_blank">高端服装定制</a>
                        </li>
                        <li>|</li>
                        <li>
                          <a href="http://www.yicun1.com" target="_blank">职业装定制</a>
                        </li>
                        <li>|</li>
                        <li>
                          <a href="http://www.bjyhhr.com" target="_blank">工作服定做</a>
                        </li>
                        <li>|</li>
                        <li>
                          <a href="http://xiezi.91jm.com/ " target="_blank">鞋子加盟</a>
                        </li>
                        <li>|</li>
                        <li>
                          <a href="http://www.jianyuefushi.com" target="_blank">西服高级定制</a>
                        </li>
                        <li>|</li>
                        <li>
                          <a href="http://www.meilijee.com" target="_blank">穿衣打扮</a>
                        </li>
                        <li>|</li>
                        <li>
                          <a href="http://cn.baiwanzhan.com" target="_blank">百万网址导航</a>
                        </li>
                      </ul>
                      </div>
                </div>
              </div>
                      
							
							<div class="container hidden-xs">
                 <div class="row">
                   <div id="menuContainer">
                <ul class="bs-docs-footer-links text-muted list-inline">
                  <li>
                    <a href="http://www.gdool.com/" target="_blank">大码女装</a>
                  </li>
                  <li>|</li>
                  <li>
                    <a href="http://www.chuxiangyi.com" target="_blank">时装</a>
                  </li>
                  <li>|</li>    
                  <li>              
                  <a href="http://www.chinarjfs.com" target="_blank">深圳工作服定做</a>
                </li>
                <li>|</li>
                <li>
                  <a href="http://www.rjingxz.com/" target="_blank">西服定制</a>
                </li>
              </ul>
              </div>
                 </div>       
              </div>
              
        </div>
    </footer>

    <!--footer开始  hidden-lg-->
  
    <div class="lfooter">
      <ul>
        <li><a href="/"><img src="/images/dbsy.png" width="30" height="30" /><br />网站首页</a></li>
        <li id="yidongtel"><a href="tel:02032364991"><img src="/images/dbdh.png" width="30" height="30" /><br />电话咨询</a></li>
        <li id="yidongqq"><a href="mqqwpa://im/chat?chat_type=wpa&uin=1556658072&version=1"><img src="/images/dbqq.png" width="30" height="30" /><br />QQ咨询</a></li>
        <li id="yidongsq"><a href="http://p.qiao.baidu.com/cps/chat?siteId=6744402&userId=10317762"><img src="/images/dblx.png" width="30" height="30" /><br />在线咨询</a></li> 
      </ul> 
    </div>

  
    
<!--footer结束-->

    <!-- 侧栏显示 -->
    <div class="toolbar hidden-xs" >
      <a href="#" class="toolbar-item">
        <span class="toolbar-btn"> 
        <i class="toolbar-icon glyphicon glyphicon-earphone"></i>
          <span class="toolbar-text">
            电话<br />服务
          </span>
        </span>
        <span class="toolbar-layer toolbar-layer-tel">电话服务：020-32364991</span>
      </a>
      <a href="#" class="toolbar-item">
        <span class="toolbar-btn"> 
        <!-- <i class="toolbar-icon glyphicon icon-wechat"></i> -->
        <i class="toolbar-icon glyphicon glyphicon-qrcode"></i>
          <span class="toolbar-text">
            公众
            <br />    
            账号
          </span>
        </span>
        <span class="toolbar-layer toolbar-layer-weixin"></span>
      </a>
      <!-- <a href="javascript:;" class="toolbar-item" id="backtop">
        <span class="toolbar-btn"> 
        <i class="toolbar-icon glyphicon glyphicon-menu-up"></i>
          <span class="toolbar-text ">
            返回
            <br />    
            顶部
          </span>
        </span>
      </a> -->
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/js/jquery-3.1.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/require.js" data-main="js/barmain"></script>


</body>
</html>
