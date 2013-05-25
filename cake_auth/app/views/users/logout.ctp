<?php
	//	ログアウト時のビュー
	echo $html->tag('h3', 'ログアウトしました。');
	echo "<br>";

	echo $form->create(null, array('action' => 'moveToTop'));
	echo $form->button('TOPへ移動');
	echo $form->end();

?>