<?php /* Smarty version Smarty-3.1.14, created on 2017-01-03 10:00:09
         compiled from "E:\website\project\proj3\home\views\index_js.html" */ ?>
<?php /*%%SmartyHeaderCode:18454586a6c610aa173-01602992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '907f9746c91c57e09078a7d7ff121a0fffe273f2' => 
    array (
      0 => 'E:\\website\\project\\proj3\\home\\views\\index_js.html',
      1 => 1483437606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18454586a6c610aa173-01602992',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_586a6c610e67d3_83830068',
  'variables' => 
  array (
    'imgArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a6c610e67d3_83830068')) {function content_586a6c610e67d3_83830068($_smarty_tpl) {?><script type="text/javascript">
    (function(win){//立即执行函数
        define({
            'mw':$(win).width(),
            'mh':$(win).height(),//屏幕宽高
            'ph':(($(win).width())*1334)/750,
            'w0':(750*($(win).height()))/1334,
            'ch':(($(win).width())*665)/750,
            'rh':(($(win).width())*788)/750,
            'wh':(($(win).width())*48)/750,
            'prh':(($(win).width())*1020)/750,
            'ruh':(($(win).width())*918)/750,
            'prizeNum':1,  //奖项（0-未抽中；1-一等奖）

            'loadFlag':false,//页面是否加载完：默认没有
            'gameArr':[],//图片数组
            'checkloadok_flag':false//图片是否加载完：默认没有
        });
        
        var gameImgArr = ['<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['home_bg'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['rule_bg'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['game_bg'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['circle_bg'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['result1'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['result2'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['result3'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['result0'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['prize1'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['prize0'];?>
'];
        win.onload = function(){
            loadgameimg();
            imgLoader(['<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['home_bg'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['rule_bg'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['game_bg'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['circle_bg'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['result1'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['result2'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['result3'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['result0'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['prize1'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['prize0'];?>
'], function(percentage){
                if(percentage>=1){//加载完成
                    checkloadok();
                }
                $('#loading_main p').html('Loading '+parseInt(percentage*100)+'%');
            });

            /*首页*/
            $('#home_main').width(mw).height(mh);
            $('#home_main>span').width(mw*0.42).height(ph*0.07);
            $('#home_main .hm_startBtn').css({left:mw*0.29,top:ph*0.66});
            $('#home_main .hm_ruleBtn').css({left:mw*0.29,top:ph*0.73});
            // 规则页
            $('#rule_main').width(mw).height(mh);
            $('#rule').width(mw).height(ruh).css({top:ph*0.1});
            $('#rule_main .rm_closeBtn').width(mw*0.42).height(ruh*0.1).css({left:mw*0.29,top:ph*0.68});
            //游戏页
            $('#game_main').width(mw).height(mh);
            $('#circle_main').width(mw).height(ch).css('top',ph*0.2);
            $('#center').width(mw*0.4).height(mw*0.4).css({left:mw*0.3,top:ph*0.34});
            // 结果页
            $('#result_main').width(mw).height(mh);
            $('#result1,#result2,#result3').width(mw).height(rh).css('top',ph*0.1);
            $('#result_main .rm_prizeBtn').width(mw*0.56).height(rh*0.12).css({left:mw*0.22,top:ph*0.58});
            // 结果页--风力不足
            $('#result0_main').width(mw).height(mh);
            $('#resultbg').width(mw).height(rh).css('top',ph*0.1);
            $('#result0_1,#result0_2,#result0_3').width(mw).height(wh).css('top',ph*0.22);
            $('#result0_main .rm_againBtn').width(mw*0.6).height(rh*0.12).css({left:mw*0.2,top:ph*0.58});
            // 中奖页
            $('#prize_main').width(mw).height(mh);
            $('#prize1').width(mw).height(prh);
            $('#prize1 input').width(mw*0.46).height(prh*0.06);
            $('#prize1 .pm_name').css({left:mw*0.27,top:ph*0.46});
            $('#prize1 .pm_phone').css({left:mw*0.27,top:ph*0.52});
            $('#prize1 .pm_address').css({left:mw*0.27,top:ph*0.58});
            $('#prize_main .pm_sureBtn').width(mw*0.4).height(prh*0.08).css({left:mw*0.3,top:ph*0.66});
            $('#prize0').width(mw).height(rh).css({top:ph*0.1});
            $('#prize_main .pm_againBtn').width(mw*0.6).height(rh*0.1).css({left:mw*0.2,top:ph*0.58});
            touch();
            $('#home_main').show();
            initDialog();
            loadFlag = true;
            
        }

        // 每个按钮的点击事件
         win.clickFn = function(n){
            switch(n){
                case 1: $('#rule_main').show();//规则页显示
                        break;
                case 2: $('#rule_main').hide();//规则页隐藏
                        break;
                case 3: $('#home_main').hide();
                        $('#game_main,#circle_main,#center').show();//游戏页面显示
                        break;
                case 4: $('#result_main').hide();
                        $('#prize_main').show();
                        $('#prize'+prizeNum).show(); //奖项页面显示
                        break;
                case 5: ReloadUrl();//刷新
                        break;
                case 6: registe();
                        // $('#prize_main').hide();
                        // $('#prize'+prizeNum).hide(); //奖项页面显示
                        break;
            }
        }

        //游戏页
        var c3 = mw*0.44;
        var c2 = mw*0.37;
        var c1 = mw*0.27;
        var canvas=document.getElementById("canvas");
        var context=canvas.getContext("2d");
        canvas.width = mw;
        canvas.height = mh;
        var x = mw/2;   //圆心的x轴坐标值
        var y = ch/2+ph*0.2;    //圆心的y轴坐标值
        var r = 0;   //圆的半径
        var a ; //动画
        var flag = true; // 切换条件     
        function drawPoint(){
            context.clearRect(0, 0, canvas.width, canvas.height);
            context.fillStyle="#f58d30";  
            context.beginPath();        
            context.arc(x,y,r,0,Math.PI*2,true);
            context.closePath();      
            context.fill(); 
        }   
        // 空调风（圆）-扩大缩小
        var j = 20;
        function animates(){
            var max = c3+j;//边缘最大值
            context.clearRect(0, 0, canvas.width, canvas.height);
            if(flag){
                r+=1.5;
                drawPoint();
                if(r>=max){
                    flag = false;
                }
            }else{
                r-=1.5;
                drawPoint();
                if(r<=0){
                    flag = true;
                }
            }
            // console.log(r,c1,c2,c3,x,y)
            a = requestAnimationFrame(animates);        
        }
        //结果页显示
        var i; 
        var ii = 10; //边缘线范围
        function selectFn(){
            $('#result_main').show();
            if( i < c1+ii && i > c1-ii){
                $('#result1').show();      //父母
            }else if(i < c2+ii && i > c2-ii){
                $('#result2').show();      //爱人
            }else if(i < c3+ii && i > c3-ii){
                $('#result3').show();      //孩子
            }else if(i>0 && i< c1-ii){  
                $('#result0_main,#resultbg').show();
                $('#result0_1').show();
            }else if(i>c1+ii && i< c2-ii){
               $('#result0_main,#resultbg').show();
                $('#result0_2').show();
            }else if(i>c2+ii && i< c3-ii){
                $('#result0_main,#resultbg').show();
                $('#result0_3').show();
            }
        }
        //触屏点击
        function touch(){
            var ele=document.getElementById("center");
            ele.addEventListener('touchstart',fn, false);
            ele.addEventListener('touchmove',fn, false);
            ele.addEventListener('touchend',fn, false);
            function fn(event){
                var event = event || window.event;
                switch(event.type){
                    case "touchstart":
                        event.preventDefault();
                        requestAnimationFrame(animates);                             
                         break;
                    // case "touchmove":
                    //     event.preventDefault();
                    //     break;
                    case "touchend":
                         cancelAnimationFrame(a);
                         i = r;     //点击结束后获取的半径-selectFn
                         selectFn();
                        break;
                }
            }
        }


        /*验证信息*/
        function registe(){
           var pm_name = $.trim($('#pm_name').val());
           var pm_phone = $.trim($('#pm_phone').val());
           var pm_address = $.trim($('#pm_address').val());
           if(pm_name.length <= 0 || pm_phone.length <= 0 || pm_address.length <= 0){
              // alert('1')
              ShowAlertView('请填写完整信息',0);
              return;
           }
           if(!Checkphones(pm_phone)){
              // alert("message")
              ShowAlertView('输入的电话号有误',0);
              return;
           }
        }

        /*验证手机*/
        function Checkphones(tel){
            var mob = /^(0[0-9]{2,3}\-)?([2-9][0-9]{6,7})+(\-[0-9]{1,4})?$/;
            var reg = /^0?1[3|4|5|8][0-9]\d{8}$/;
            if (reg.test(tel) || mob.test(tel)) {
                return true;
            }else{
                return false;
            };
        }


       
        
        //定时查看游戏部分图片是否加载完成，完成就初始化游戏
        function checkloadok(){
            if(checkloadok_flag && loadFlag){
              $('#loading_main').hide();
              return;
            }
            var count0 = 0;
            for(var i=0;i<gameArr.length;i++){
              if(gameArr[i].complete){
                count0 +=1;
              }
            }
            if(gameArr.length==count0){
              checkloadok_flag = true;
            }
            requestAnimationFrame(checkloadok);
        }

        //加载游戏图片
        win.loadgameimg = function(){
            var tempArr = new Array();
            for(var i=0;i<gameImgArr.length;i++){
              tempArr[i] = new Image();
              tempArr[i].src = gameImgArr[i];
              gameArr.push(tempArr[i]);
            }
        }

        //随机数
        function random(min,max){
            return Math.floor(Math.random()*(max-min+1)+min);
        }
    }(window)); 


    (function () {    
        function isArray(obj) {    
            return Object.prototype.toString.call(obj) === '[object Array]';    
        }    
        /**   
        * @param imgList 要加载的图片地址列表，['aa/asd.png','aa/xxx.png']   
        * @param callback 每成功加载一个图片之后的回调，并传入“已加载的图片总数/要加载的图片总数”表示进度   
        * @param timeout 每个图片加载的超时时间，默认为5s   
        */    
        var loader = function (imgList, callback, timeout) {    
            timeout = timeout || 5000;    
            imgList = isArray(imgList) && imgList || [];    
            callback = typeof(callback) === 'function' && callback;    
            var total = imgList.length,    
            loaded = 0,    
            imgages = [],    
            _on = function () {    
                loaded < total && (++loaded, callback && callback(loaded / total));    
            };    
            if (!total) {    
                return callback && callback(1);    
            }    
            for (var i = 0; i < total; i++) {    
                imgages[i] = new Image();    
                imgages[i].onload = imgages[i].onerror = _on;    
                imgages[i].src = imgList[i];    
            }    
            /**   
            * 如果timeout * total时间范围内，仍有图片未加载出来（判断条件是loaded < total），通知外部环境所有图片均已加载   
            * 目的是避免用户等待时间过长   
            */    
            setTimeout(function () {    
                loaded < total && (loaded = total, callback && callback(loaded / total));    
            }, timeout * total);    
        };    
        "function" === typeof define && define.cmd ? define(function () {    
            return loader    
        }) : window.imgLoader = loader;    
    })();  
</script><?php }} ?>