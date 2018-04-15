<?php
/**
 * @desc 定义策略抽象类
*/
	abstract class baseAgent{
		abstract function PrintPage();
	}

/**
 * @desc 用户客户端是IE时调用的类(环境角色)
 */
    class ieAgent extends baseAgent{
    	function PrintPage(){
    		return 'IE';
    	}
    }

/**
 * @desc 用于客户端不是IE时调用的类(环境角色)
 */
 	class otherAgent extends baseAgent{
 		function PrintPage(){
 			return 'not IE';
 		}
 	}
/**
 * @desc 具体策略角色
 */
 	class Browser{
 		public function call(ieAgent $object){
 			return $object->PrintPage();
 		}
 	}
 //运行
 	$bro = new Browser();
 	echo $bro->call();
?>