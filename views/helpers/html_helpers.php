<?php
class html_helpers{
	public static function url($options=null) {
		if($options=='/')
			return 'index.php';
			
		global $cn, $app;
		if(!isset($options['ctl'])) {
			$options['ctl'] = $cn;
			//$options['ctl'] = $app['ctl'];
		}
		$act = '';
		if(isset($options['act'])) {
			$act = '&act='.$options['act'];
			//$options['act'] = $app['act'];
		}
		$params = '';
		if(isset($options['params']) and $options['params']) {
			foreach($options['params'] as $k=>$v) {
				$params .= '&'.$k.'='.$v;
			}
		}
		return 'index.php?ctl='.$options['ctl'].$act.$params;
	}
}
?>