<?php
header('Content-Type:text/html;charset=utf-8');
/**
 *-----------------------------------
 * @desc 工厂模式(静态工厂方法模式)
 *-----------------------------------
 */
	/**
	 * Interface people 人类
	 */
	interface people{
		public function say();
	}


	/**
	 * Class man 继承people的男人类
	 */
	class man implements people
	{
		//具体实现people的say方法
		public function say(){
			echo '我是男人<br>';
		}
	}

	/**
	 * Class man 继承people的女人类
	 */
	class women implements people
	{
		//具体实现people类的say方法
		public function say(){
			echo '我是女人<br>';
		}
	}

	/**
	 * @desc Class SimpleFactory 工厂类
	 */
	class SimpleFactory
	{
		//简单工厂里的静态方法 -- 用于创建男人对象
		static function createMan()
		{
			return new man();
		}
		//简单工厂里的静态方法 -- 用于创建女人对象
		static function createWomen()
		{
			return new women();
		}
	}

	/**
	 * @desc 具体调用
	 */
	$man = SimpleFactory::createMan();
	echo $man->say();
	$women = SimpleFactory::createWomen();
	echo $women->say();
