<?php /* Smarty version Smarty-3.1.14, created on 2016-12-28 08:18:44
         compiled from "E:\website\practice\proj\home\views\index_js.html" */ ?>
<?php /*%%SmartyHeaderCode:529958636ef91385f6-41404965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e81d87b154a4345b68d20976b706bcc011837f63' => 
    array (
      0 => 'E:\\website\\practice\\proj\\home\\views\\index_js.html',
      1 => 1482913121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '529958636ef91385f6-41404965',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58636ef9154812_32122031',
  'variables' => 
  array (
    'imgArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58636ef9154812_32122031')) {function content_58636ef9154812_32122031($_smarty_tpl) {?><script type="text/javascript">
    (function(win){//立即执行函数

        define({
            'mw':$(win).width(),
            'mh':$(win).height(),//屏幕宽高
            'ph':(($(win).width())*1334)/750,
            'w0':(750*($(win).height()))/1334,
            'mymusic':null,
            'musicflag':false,//音乐状态：默认关
            'loadFlag':false,//页面是否加载完：默认没有
            'gameArr':[],//图片数组
            'checkloadok_flag':false//图片是否加载完：默认没有
        });

        var gameImgArr = ['<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['home_bg'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['music'];?>
'];
        var myAudio = new MyAudio('<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['mymusic'];?>
',true); 

        win.onload = function(){
            loadgameimg();
            imgLoader(['<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['home_bg'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['music'];?>
'], function(percentage){
                if(percentage>=1){//加载完成
                    checkloadok();
                }
                $('#loading_main p').html('Loading '+parseInt(percentage*100)+'%');
            });
            $('#music_img').width(mw*0.08);
            // mymusic = document.getElementById("mymusic");
            // mymusic.play();
            // mymusic.pause();
            check_audio();
            /*首页*/
            $('#home_main').width(mw).height(mh);
            $('#home_main .hm_startBtn').width(mw*0.38).height(ph*0.07);
            $('#home_main .hm_startBtn').css({left:mw*0.31,top:ph*0.64});

            $('#home_main').show();
            loadFlag = true;
            
        }

        
        //定时查看游戏部分图片是否加载完成，完成就初始化游戏
        function checkloadok(){
            if(checkloadok_flag && loadFlag){
              $('#loading_main').hide();
              // mymusic.play();
              check_audio();
              $('#music_img').addClass('music_move');
              $('#music_img').show();
              musicflag = true;
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
                myAudio.play();//这是播放音频
                //myAudio.stop();//停止音频
                //myAudio.pause();//暂停音频
                return;
             }
             requestAnimationFrame(check_audio);
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