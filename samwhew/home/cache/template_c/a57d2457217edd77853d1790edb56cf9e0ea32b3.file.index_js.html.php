<?php /* Smarty version Smarty-3.1.14, created on 2017-01-10 09:34:00
         compiled from "E:\website\samwhew\home\views\index_js.html" */ ?>
<?php /*%%SmartyHeaderCode:24571586c5544bb0807-09407392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a57d2457217edd77853d1790edb56cf9e0ea32b3' => 
    array (
      0 => 'E:\\website\\samwhew\\home\\views\\index_js.html',
      1 => 1484040803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24571586c5544bb0807-09407392',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_586c5544c5cf19_24126312',
  'variables' => 
  array (
    'imgArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586c5544c5cf19_24126312')) {function content_586c5544c5cf19_24126312($_smarty_tpl) {?><script type="text/javascript">
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
            'ruh':(($(win).width())*964)/750,
            'sh':(($(win).width())*840)/750,
            'edge' : 3, //边缘线
            'edgei' : 30, //最大边缘线范围
            'mymusic':null,
            'musicflag':false,//音乐状态：默认关
            'musicBtnflag':false,
            'canvas':null,
            'context':null,
            'circle_x':null,
            'circle_y':null,
            'circle_r':null,
            'circle_o':null,
            'getR':null,
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
        var myAudio = new MyAudio('<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['mymusic'];?>
',true); 

        win.onload = function(){
            loadgameimg();
            imgLoader(gameImgArr, function(percentage){
                if(percentage>=1){//加载完成
                    checkloadok();
                }else{
                    $('#loading_main p').html('Loading '+parseInt(percentage*100)+'%');
                }
            });
            $('#music_img').width(mw*0.08);

            /*首页*/
            $('#home_main').width(mw).height(mh);
            $('#home_main>span').width(mw*0.42).height(ph*0.07);
            $('#home_main .hm_startBtn').css({left:mw*0.29,top:ph*0.66});
            $('#home_main .hm_ruleBtn').css({left:mw*0.29,top:ph*0.73});
            // 规则页
            $('#rule_main').width(mw).height(mh);
            $('#rule').width(mw).height(ruh).css({top:ph*0.1});
            $('#rule_main .rm_closeBtn').width(mw*0.42).height(ruh*0.1).css({left:mw*0.29,top:ph*0.72});
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
            // 提交页面
            $('#submit_main').width(mw).height(mh);
            $('#submit').width(mw).height(sh).css('top', ph*0.1);;
            $('#submit_main .sm_sureBtn').width(mw*0.4).height(rh*0.1).css({left:mw*0.3,top:ph*0.46});
            canvas.width = mw;
            canvas.height = mh;
            circle_x = mw/2;   //圆心的x轴坐标值
            circle_y = ch/2+ph*0.2;    //圆心的y轴坐标值
            circle_r = mw*0.15;   //圆的半径
            circle_o = 1;   //圆的透明度
            touch();
            initDialog();//调用弹窗
            loadFlag = true;
            
        }

        // 每个按钮的点击事件
         win.clickFn = function(n){
            switch(n){
                case 1: $('#rule_main').show();//规则页显示
                        controllMusic1(); 
                        break;
                case 2: $('#rule_main').hide();//规则页隐藏
                        break;
                case 3: $('#home_main').hide();
                        $('#game_main,#circle_main,#center').show();//游戏页面显示
                        controllMusic1(); 
                        break;
                case 4: $('#result_main').hide();
                        $('#prize_main').show();
                        $('#prize'+prizeNum).show(); //奖项页面显示
                        break;
                case 5:  //ReloadUrl();
                         $('#result_main').hide();
                         $('#result0_main').hide();
                         $('#game_main').hide();
                         $('#home_main').show();
                         context.clearRect(0, 0, canvas.width, canvas.height);
                         circle_x = mw/2;   //圆心的x轴坐标值
                         circle_y = ch/2+ph*0.2;    //圆心的y轴坐标值
                         circle_r = mw*0.15;   //圆的半径
                         circle_o = 1;   //圆的透明度
                        break;
                case 6: registe();//验证信息
                        break;
                // case 6: registe();//验证信息
                //         break;
            }
        }

        //游戏页
        var c3 = mw*0.44;
        var c2 = mw*0.37;
        var c1 = mw*0.27;//边缘线
        document.getElementById = (function(func){
            return function(){
                return func.apply(document, arguments);
            };
        })(document.getElementById);
        var getId = document.getElementById;
        canvas = getId('canvas');
        context=canvas.getContext("2d");
        var circle_a ; //动画 
        function drawPoint(){
            context.clearRect(0, 0, canvas.width, canvas.height);
            context.fillStyle="#f58d30";  
            context.beginPath();        
            context.arc(circle_x,circle_y,circle_r,0,Math.PI*2,true);
            context.closePath();      
            context.fill(); 
            context.globalAlpha=circle_o;//透明度
        }   
        // 空调风（圆）
        function animates(){
            var max = c3+edgei;//边缘最大值
            circle_r+=2.5;
            if(circle_r>=c3+edge){
               circle_o-=0.04;
                if(circle_o<=0){
                   circle_r=0;
                   circle_o=1; 
                } 
            }
            if(circle_r>=max){
                circle_r=max;
            }
            drawPoint();
            console.log(circle_r,circle_o,max)
            circle_a = requestAnimationFrame(animates);        
        }
        //结果页显示
        function selectFn(){
            $('#result_main').show();
            if( getR <=c1+edge && getR >= c1-edge){
                $('.com').hide();
                $('#result1').show();      //父母
            }else if(getR <= c2+edge && getR >= c2-edge){
                $('.com').hide();
                $('#result2').show();      //爱人
            }else if(getR <= c3+edge && getR >= c3-edge){
                $('.com').hide();
                $('#result3').show();      //孩子
            }else if(getR>=0 && getR<c1-edge){  
                $('#result0_main,#resultbg').show();
                $('.com').hide();
                $('#result0_1').show();  //未及父母
            }else if(getR>c1+edge && getR< c2-edge){
               $('#result0_main,#resultbg').show();
                $('.com').hide();
                $('#result0_2').show();    //未及爱人
            }else if(getR>c2+edge && getR< c3-edge || getR > c3+edge){
                $('#result0_main,#resultbg').show();
                $('.com').hide();
                $('#result0_3').show() //未及孩子
            }
        }
        //触屏点击
        function touch(){
            var ele=document.getElementById("center");
            ele.addEventListener('touchstart',fn, false);
            ele.addEventListener('touchmove',fn, false);
            ele.addEventListener('touchend',fn, false);
            function fn(e){
                var e = e || window.e;
                switch(e.type){
                    case "touchstart":
                        e.preventDefault();
                        requestAnimationFrame(animates);                             
                         break;
                    case "touchend":
                         cancelAnimationFrame(circle_a);
                         getR = circle_r;     //点击结束后获取的半径-selectFn
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
              ShowAlertView('请填写完整信息',0);
              return;
           }
           if(!Checkphones(pm_phone)){
              ShowAlertView('输入的电话号有误',0);
              return;
           }
            $('#submit_main,#submit').show();
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
                // initpage();
               check_audio();
              // $('#music_img').addClass('music_move');
              $('#music_img').show();
              // musicflag = true;
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
        //音频
        win.check_audio = function(){
            if(myAudio.isComplete()){
                 // myAudio.play();
                initpage();
                return;
             }
             requestAnimationFrame(check_audio);
        }
        //初始化页面
        win.initpage = function(){
            $('#loading_main').hide();
            $('#home_main').show();
            //  $('#prize_main').show();
            // $('#prize'+prizeNum).show();
        }

        win.controllMusic = function(){
            if(musicflag){
              myAudio.pause();
              $('#music_img').removeClass('music_move');
              musicflag = false;
            }else{
              myAudio.play();
              $('#music_img').addClass('music_move');
              musicflag = true;
            }
        }
        win.controllMusic1 = function(){
            if(musicflag || musicBtnflag){
              return;
            }else{
              myAudio.play();
              $('#music_img').addClass('music_move');
              musicflag = true;
              musicBtnflag = true;
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