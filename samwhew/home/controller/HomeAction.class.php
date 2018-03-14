<?php
ext_import('functions.php');
class HomeAction extends SuperAction{
	function __construct(){//必须要调用构造方法，并且在构造方法里面调用父类的构造方法
		parent::__construct();
	}

    //获取项目资源文件
    private function getimgurl(){
        $imgArr = array(
            'music'=>'music.png',
            'mymusic'=>'music.mp3',
            'home_bg'=>'homebg.jpg',
            'rule_bg'=>'rulebg.png',
            'game_bg'=>'gamebg.jpg',
            'circle_bg'=>'circlebg.png',
            'result1'=>'result1.png',
            'result2'=>'result2.png',
            'result3'=>'result3.png',
            'result0'=>'result0.png',
            'result0_1'=>'result0_1.png',
            'result0_2'=>'result0_2.png',
            'result0_3'=>'result0_3.png',
            'prize1'=>'prize1.png',
            'prize0'=>'prize0.png',
            'loading'=>'loading.jpg',
            'submit'=>'submit.png',
            );
        $proj_name = 'aaa';
        foreach ($imgArr as $key => &$value) {
          /*$key = 'upload_qiniu_'.$proj_name.'_'.$value;
          $value = getfile($key).'&clearvt='.time();//七牛的接口*/
          $value="public/images/".$value.'?'.'clearvt='.time();
        }
        
        $this->assign('imgArr', $imgArr); 
    }

	public function index(){
        $this->getimgurl();//调用获取项目资源文件
		$this->display('index.html');
	}

}


?>