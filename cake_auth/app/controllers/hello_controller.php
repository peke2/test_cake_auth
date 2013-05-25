<?php
	//	動作確認のためのダミーコントローラー
class	HelloController extends AppController
{
	public	$name = 'Hello';
	public	$components = array('Auth');

//	public	$autoRender = false;			//	ビューの自動参照OFF
	public	$uses = null;					//	モデルへの自動参照無し

	function	index()
	{
		session_start();
		var_dump($_SESSION);
	}

	function	logout()
	{
		$this->redirect('/users/logout');
	}

}
?>