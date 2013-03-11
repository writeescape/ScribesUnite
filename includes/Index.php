<?
/* ScribesUnited */
require('Smarty.class.php');
define("BETA", true);
$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->debugging = BETA;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
?>