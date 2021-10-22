####<bb>1.1</bb>
####<gxdz>测试更新功能，暂无新版本！</gxdz>
####<nr1>[太阳]【百悦物业】[太阳]</nr1>
####<nr2>棕榈泉二期物业服务中心☎ ：0393-6655558</nr2>
<?php
header("Content-Type: text/html; charset=utf-8");  		
$data = file_get_contents ('http://api.tianapi.com/txapi/zaoan/index?key=7490ce18b6cf50844e22969d08fe83e1' );//API接口
      $json = json_decode($data,true);//将json解析成数组
      if($json['code'] == 200){ //判断状态码
		  print_r($json); //打印数组
	}else{	
		echo "返回错误，状态消息：".$json['msg'];
	  }
?>