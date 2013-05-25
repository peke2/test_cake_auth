<h3>ユーザーを追加</h3>

<?php
	//	$model . $fieldName でDBにアクセスするっぽい
	echo	$form->create(/*$model*/'User', array('action' => 'add'));
	echo	$form->input(/*$fieldName*/'username', array('label'=>'ユーザー名'));
	echo	$form->input(/*$fieldName*/'password', array('label'=>'パスワード'));
	echo	$form->end('Add');

?>