<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

require_once dirname(__FILE__).'/validation.php';

class RSFormProCustomValidations extends RSFormProValidations {

	public static function greaterThanZero($value, $extra = null, $data = null) {
		if (RSFormProValidations::numeric($value, $extra, $data) && $value > 0) {
			return true;
		} else {
			return false;
		}
	}

}
?>