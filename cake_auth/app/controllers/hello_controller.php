<?php
	//	動作確認のためのダミーコントローラー
class	HelloController extends AppController
{
	public	$name = 'Hello';
	public	$components = array('Auth');

	public	$autoRender = false;			//	ビューの自動参照OFF
	public	$uses = null;					//	モデルへの自動参照無し

	function	index()
	{
		echo	"<font size='7'><b>ハロー！</b></font>";
	}
}
?>