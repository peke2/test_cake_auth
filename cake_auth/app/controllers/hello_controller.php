<?php
	//	動作確認のためのダミーコントローラー
class	HelloController extends AppController
{
	public	$name = 'Hello';
	public	$components = array('Auth');

//	public	$autoRender = false;			//	ビューの自動参照OFF
	public	$uses = null;					//	モデルへの自動参照無し


	function	beforeFilter()
	{
		$this->Auth->allow('index');
		$this->Auth->allow('logout');

		$this->Auth->deny('index');	//	「allow」でリストに登録されたアクションを取り除く
	}

	function	index()
	{
		session_start();
		var_dump($_SESSION);
	}

	function	logout()
	{
		$this->redirect('/users/logout');
	}


	//	内部からの呼び出しと外部からの呼び出しの挙動確認
		//	そもそも AuthComponent::deny() の挙動がわからなかったため。
		//	ドキュメントにあった通り、AuthComponent::allow() で登録されたアクションをリストから除去するためのものだった。
	function	testCall()
	{
		$this->autoRender = false;
		$this->call();
	}
	//	認証済みであっても外部からの呼び出しはできないはず
	function	call()
	{
		echo "呼び出し完了";
	}

}
?>