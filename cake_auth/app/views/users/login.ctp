<?php
	//	ログイン時のビュー
	if( $session->check('Message.auth') )
	{
		echo	$session->flash('auth');
	}
	
	//	$model . $fieldName でDBにアクセスするっぽい
	echo	$form->create(/*$model*/'User', array('action' => 'login'));
	echo	$form->input(/*$fieldName*/'username', array('label'=>'ユーザー名'));
	echo	$form->input(/*$fieldName*/'password', array('label'=>'パスワード'));
	echo	$form->end('Login');
?>