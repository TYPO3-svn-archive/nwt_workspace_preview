<?php

require_once(PATH_t3lib.'class.t3lib_loadmodules.php');
class ux_t3lib_loadmodules extends t3lib_loadmodules {
	/*
	 * Override method to disable access to modules configured in User TSconfig under key
	 * "tx_modulecleaner.disable".
	 *
	 */
	function checkModAccess($name, $MCONF) {
		$disabledModules = $this->BE_USER->getTSConfig('tx_modulecleaner.disable');
		if($disabledModules['value']) {
			$disabledModulesArray = t3lib_div::trimExplode(',', $disabledModules['value']);
			if(in_array($name, $disabledModulesArray)) {
				return false;
			}
		}
		return parent::checkModAccess($name, $MCONF);
	}
}  

?>