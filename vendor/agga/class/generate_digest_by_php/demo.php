<?php
	/**
	 * 生成摘要
	 * @param  string  $content='' 富文本源码
	 * @param  integer $length=3000 摘要字数，默认是3000字，包括标签在内
	 * @return [type]
	 */
	function generateDigest($content='',$length=3000) {
		// 引入Fl
		require_once('Fl/Fl.class.php');
		// 获取实例
		$flInstance = Fl::getInstance();

		// 获取摘要
		return $flInstance->generateDigest($content,$length);
	}
?>

	