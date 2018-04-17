<?php
include_once '../includes/conn.php';
$sQuery = "SELECT *  FROM td_setting WHERE id='1'";
$aAllSettings =mysql_query($sQuery);
$settingrow=mysql_fetch_array($aAllSettings);
	/* Define Settings */
$headertitle=$settingrow['site_title'];
	/*define ('SITE_URL', $aAllSettings[0][SiteUrl]);
	define ('SITE_KEYWORDS', $aAllSettings[0][SiteKeywords]);
	define ('SITE_DESC', $aAllSettings[0][SiteDesc]);
	define ('CONTACT_EMAIL', $aAllSettings[0][ContactEmail]);
	define ('PAY_PAL_EMAIL', $aAllSettings[0][PayPalEmail]);
	define ('CURRENY_CODE', $aAllSettings[0][CurrenyCode]);
	define ('CURRENY_SYMBOL', $aAllSettings[0][CurrenySymbol]);
	define ('RECORD_SIZE', $aAllSettings[0][RecordSize]);
	define ('GOOGLE_ADD_SENSE', $aAllSettings[0][GoogleAddSense]);*/

?>