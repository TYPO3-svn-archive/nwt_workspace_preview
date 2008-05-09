<?php

if (!defined ('TYPO3_MODE'))     die ('Access denied.');

if (TYPO3_MODE=='BE') {
	$TYPO3_CONF_VARS["BE"]["XCLASS"]["t3lib/class.t3lib_loadmodules.php"] = t3lib_extMgm::extPath($_EXTKEY,'class.ux_t3lib_loadmodules.php');
	$TYPO3_CONF_VARS["BE"]["XCLASS"]["t3lib/class.t3lib_beuserauth.php"] = t3lib_extMgm::extPath($_EXTKEY,'class.ux_t3lib_beuserauth.php');
}

?>