<?php
class UsersController extends AppController
{
	//	CakePHP の Auth コンポーネント動作を確認してみる
	public	$name = 'Users';
	public	$components = array('Auth');

	function	beforeFilter()
	{
		$this->Auth->allow('add');
		$this->Auth->allow('logout');
		$this->Auth->authError = "ログインしていません。ログインして下さい。";
		$this->Auth->loginError = "ログインに失敗しました。";
	}


	function	login()
	{
		
	}

	function 	logout()
	{
		$this->Auth->logout();
	}

	function	add()
	{
		if( !empty($this->data) && $this->data )
		{
			$this->User->create();
			$this->User->save($this->data);
			$this->redirect(array('action'=>'login'));
		}
	}

	function	moveToTop()
	{
		$this->redirect('/hello');
	}

}
?>