 <?php
// Reset this to compile large nesting level of less
ini_set('xdebug.max_nesting_level', 500);
// remove old pageup css if it exists, every time refresh page
$cssfile = 'assets/css/styles.css';
if (file_exists($cssfile)) {
	unlink($cssfile);
}

// Compile less to output a css file
require "lessc.inc.php";
$less = new lessc;
$less->checkedCompile("less/styles.less", "assets/css/styles.css");

?>
