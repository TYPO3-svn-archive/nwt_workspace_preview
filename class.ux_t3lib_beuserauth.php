<?php

require_once(PATH_t3lib.'class.t3lib_beuserauth.php');
class ux_t3lib_beUserAuth extends t3lib_beUserAuth {
	function modAccess($conf, $exitOnError)  {
		$disabledModules = $this->getTSConfig('tx_modulecleaner.disable');
		if($disabledModules['value']) {
			$disabledModulesArray = t3lib_div::trimExplode(',', $disabledModules['value']);
			if(in_array($conf['name'], $disabledModulesArray)) {
				if ($exitOnError)       {
					t3lib_BEfunc::typo3PrintError ('Fatal Error','The module "'.$conf['name'].'" is disabled in tx_modulecleaner',0);
					exit;
				}
				return false;
			}
		}
		return parent::modAccess($conf, $exitOnError);
	}
}

?>