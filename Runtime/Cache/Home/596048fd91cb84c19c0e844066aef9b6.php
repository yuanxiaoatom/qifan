<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>产业园区</title>
<link href="/Public/Home/css/head.css" rel="stylesheet" type="text/css" />
<link href="/Public/Home/css/gion.css" rel="stylesheet" type="text/css" />
<script src="/Public/Home/js/jquery-1.9.1.min.js"></script>
<script src="/Public/Home/js/common.js"></script>
</head>

<body>
<div class="top">
	<p class="login"><span>登陆</span><span>注册</span>  <span class="span-right-border">我的订单</span></p>
</div>

<div class="box">
	<div class="logo-serch">
		<div class="logo"><img src="/Public/Home/images/logo.png"></div>
        <div class="address"><p>北京</p><p>[切换城市]</p></div>
        <div class="serch"><input type="text" name="serch"><input type="button" value="搜索"></div>
    </div>
    <div class="clear"></div>
    <div class="nav-type">
    	<div class="type">全部服务分类</div>
        <div class="nav">
        	<ul>
            	<li><a href="">首页</a></li>
                <li><a href="">企业资讯</a></li>
                <li><a href="">产业园区</a></li>
                <li><a href="">楼宇经济</a></li>
                <li><a href="">厂房租售</a></li>
                <li><a href="">土地</a></li>
                <li><a href="">购买服务</a></li>
                <li><a href="">税务筹划</a></li>
                <li><a href="">行业新闻</a></li>
                <li><a href="">问答</a></li>
                <li><a href="">在线查询</a></li>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
    
    <div class="area-address">
    	<div class="area-address-qu">
        	<ul>
            	<li>区域</li>
                <li class="li-style">不限</li>
                
                <?php foreach($area as $v){?>
                <li><?php echo $area_name?></li>
                <?php } ?>
                
            </ul>
        </div>
        
        <div class="area-address-qu">
        	<ul>
            	<li>租金</li>
                <li class="li-style">不限</li>
                <li>仓库</li>
                <li>厂房</li>
            </ul>
        </div>
        
        <div class="area-address-qu">
        	<ul>
            	<li>面积</li>
                <li class="li-style">不限</li>
                <li>300-500</li>
            </ul>
        </div>
    </div>

    <div class="nav-gion">
    	<ul>
    		<li><a href="">求租</a></li>
            <li><a href="">求售</a></li>
        	<li><a href="">出租</a></li>
            <li><a href="">出售</a></li>
        </ul>
    
    </div>
    
    <!--列表开始-->
    
    <div class="rental-list">
    	<ul>
        	<li>
            	<div class="float-left rental-img"><img src="/Public/Home/images/rental-1.png"></div>
                
                <div class="float-left">
                	<p class="rental-p1"><a href="">密云北新科技园</a></p>
                    <p class="rental-p2"><span>密云</span><span>密云周边</span></p>
                    <p><span>1000-10000</span></p>
                    <p class="rental-p2"><span>北京市万达广场周东路</span></p>
                </div>
                
                <div class="float-right lianxi-rental"><p class="lianxi-rental-p1">面议</p><h3>400-820-5787转10005</h3></div>
            </li>
            
            <li>
            	<div class="float-left rental-img"><img src="/Public/Home/images/rental-1.png"></div>
                
                <div class="float-left">
                	<p class="rental-p1"><a href="">密云北新科技园</a></p>
                    <p class="rental-p2"><span>密云</span><span>密云周边</span></p>
                    <p><span>1000-10000</span></p>
                    <p class="rental-p2"><span>北京市万达广场周东路</span></p>
                </div>
                
                <div class="float-right lianxi-rental"><p class="lianxi-rental-p1">面议</p><h3>400-820-5787转10005</h3></div>
            </li>
            
            <li>
            	<div class="float-left rental-img"><img src="/Public/Home/images/rental-1.png"></div>
                
                <div class="float-left">
                	<p class="rental-p1"><a href="">密云北新科技园</a></p>
                    <p class="rental-p2"><span>密云</span><span>密云周边</span></p>
                    <p><span>1000-10000</span></p>
                    <p class="rental-p2"><span>北京市万达广场周东路</span></p>
                </div>
                
                <div class="float-right lianxi-rental"><p class="lianxi-rental-p1">面议</p><h3>400-820-5787转10005</h3></div>
            </li>
            
            <li>
            	<div class="float-left rental-img"><img src="/Public/Home/images/rental-1.png"></div>
                
                <div class="float-left">
                	<p class="rental-p1"><a href="">密云北新科技园</a></p>
                    <p class="rental-p2"><span>密云</span><span>密云周边</span></p>
                    <p><span>1000-10000</span></p>
                    <p class="rental-p2"><span>北京市万达广场周东路</span></p>
                </div>
                
                <div class="float-right lianxi-rental"><p class="lianxi-rental-p1">面议</p><h3>400-820-5787转10005</h3></div>
            </li>
            
            <li>
            	<div class="float-left rental-img"><img src="/Public/Home/images/rental-1.png"></div>
                
                <div class="float-left">
                	<p class="rental-p1"><a href="">密云北新科技园</a></p>
                    <p class="rental-p2"><span>密云</span><span>密云周边</span></p>
                    <p><span>1000-10000</span></p>
                    <p class="rental-p2"><span>北京市万达广场周东路</span></p>
                </div>
                
                <div class="float-right lianxi-rental"><p class="lianxi-rental-p1">面议</p><h3>400-820-5787转10005</h3></div>
            </li>
            
            
        </ul>
    
    	
    
    </div>
    <div class="clear"></div>
    
    <!--分页代码-->
    <div class="page">
    	<ul>
        	<li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li>8</li>
            <li>9</li>
            <li>10</li>
        </ul>
    </div>
 </div>
 <!--主题部分结束-->
 <div class="clear"></div>
<!--底部-->
<div class="footer">
	<div class="footer-box">
    	<div class="float-left auout-us">
        	<ul>
            	<li class="title"><a href="">关于我们</a></li>
                <li><a href="">了解我们</a></li>
                <li><a href="">联系我们</a></li>
                <li><a href="">加入我们</a></li>
            </ul>
        </div>
        
        <div class="float-left auout-us">
        	<ul>
            	<li class="title"><a href="">服务类容</a></li>
                <li><a href="">工商注册</a></li>
                <li><a href="">财务代理</a></li>
                <li><a href="">创业套餐</a></li>
            </ul>
        </div>
        
        <div class="float-right">
        	<p>在线客服（工作日9:00-18:00）</p>
            <h1>400-666-0888</h1>
        </div>
    
    </div>
     <div class="clear"></div>
     
     <div class="banquan">
     	<p>Copyright @ 2016 qibangbang.com Inc. All Rights Reserved</p>
        <p>企业服务（北京）有限公司 京ICP 备案16015423号</p>
     </div>

</div>


</body>
</html>