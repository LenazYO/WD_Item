<?php /* Smarty version Smarty-3.1.14, created on 2017-01-10 09:28:37
         compiled from "E:\website\samwhew\home\views\index.html" */ ?>
<?php /*%%SmartyHeaderCode:3061586c5544657180-17794277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33365310b61dba205ae915b69deb0a1a609e7460' => 
    array (
      0 => 'E:\\website\\samwhew\\home\\views\\index.html',
      1 => 1484040412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3061586c5544657180-17794277',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_586c554486f046_73113299',
  'variables' => 
  array (
    'imgArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586c554486f046_73113299')) {function content_586c554486f046_73113299($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
<meta content="no-cache,no-store,must-revalidate" http-equiv="Cache-Control">
<meta content="no-siteapp" http-equiv="Cache-Control"/>
<meta content="0" http-equiv="expires">
<meta content="telephone=no, address=no" name="format-detection">
<link href="public/css/reset.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="public/js/jquery-1.7.2-min.js"></script>
<script type="text/javascript" src="public/js/define.js"></script>
<script type="text/javascript" src="public/js/freshpage.js"></script><!-- 刷新 -->
<script type="text/javascript" src="public/js/Dialog.js"></script><!--弹窗 -->
<script type="text/javascript" src="public/js/MyAudio.js"></script><!-- 音频 -->
<script type="text/javascript" src="public/js/requestAnimationFrame.js"></script><!-- 动画 -->
<title>xxxxx</title>
<?php echo $_smarty_tpl->getSubTemplate ("index_css.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>
<body>
	<!-- loadding -->
    <div id="loading_main">
		<p>Loading 0%</p>
	</div>
    <!-- 音乐 -->
    <img id="music_img" src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['music'];?>
" onClick="controllMusic();"/>
	<!--  首页 -->
    <div id="home_main" style="background:url(<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['home_bg'];?>
) no-repeat;background-size:100% auto;">
        <span class="hm_startBtn" onclick="clickFn(3)"></span>
        <span class="hm_ruleBtn" onclick="clickFn(1)"></span>
    </div>
     <!-- 规则页 -->
    <div id="rule_main">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['rule_bg'];?>
" id="rule">
        <span class="rm_closeBtn" onclick="clickFn(2)"></span>
    </div>
     <!-- 游戏页 -->
    <div id="game_main"  style="background:url(<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['game_bg'];?>
) no-repeat;background-size:100% auto;">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['circle_bg'];?>
" id="circle_main">
        <div id="center"></div>
        <canvas id="canvas">您的浏览器不支持 canvas 标签</canvas>
    </div>
    <!-- 结果页 -->
    <div id="result_main">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['result1'];?>
" id="result1" class="com">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['result2'];?>
" id="result2" class="com">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['result3'];?>
" id="result3" class="com">
        <span class="rm_prizeBtn" onclick="clickFn(4)"></span>
    </div>
    <!-- 结果页——风力不足 -->
    <div id="result0_main">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['result0'];?>
" id="resultbg">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['result0_1'];?>
" id="result0_1" class="com">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['result0_2'];?>
" id="result0_2" class="com">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['result0_3'];?>
" id="result0_3" class="com">
        <span class="rm_againBtn" onclick="clickFn(5)"></span>
    </div>
    <!-- 中奖页 -->
    <div id="prize_main">
         <div id="prize1"  style="background:url(<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['prize1'];?>
) no-repeat;background-size:100% auto;">
            <input type="text" class="pm_name" id="pm_name" placeHolder="姓名"></input>
            <input type="text" class="pm_phone" id="pm_phone" placeHolder="电话"></input>
            <input type="text" class="pm_address" id="pm_address" placeHolder="地址"></input>
            <span class="pm_sureBtn" onclick="clickFn(6)"></span>
        </div>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['prize0'];?>
" id="prize0">
        <span class="pm_againBtn" onclick="clickFn(5)"></span>
    </div>
    <!-- 提交页面 -->
    <div id="submit_main">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['submit'];?>
" id="submit">
        <span class="sm_sureBtn" onclick="clickFn(5)"></span>
    </div>
   

    

</body>
</html>
<?php echo $_smarty_tpl->getSubTemplate ("index_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>