<?php
include("configs.php");
$variableScssFile = $CONFIGS['variableScssFile'];
$iconsDataFile = $CONFIGS['iconsDataFile'];

$readBuffer = file_get_contents($variableScssFile);
$lines = explode("\n", $readBuffer);
//print_r($lines);

$writeBuffer = "<?php\n\$icons = array\n(\n";
foreach($lines as $l)
{
	if(strstr($l, "$fa-var-"))
	{
		$lArray = explode(":", $l);
		$key = str_replace('$fa-var-', '', trim($lArray[0]));
		$value = str_replace(array('"'), '', trim($lArray[1]));
		$value2Write = str_replace('\f', '&#xf', $value);
		echo $key . " - " . $value;
		echo "<br>";
		
		$writeBuffer .= sprintf("\t\"%s\" => array('code'=>'%s'),\n", $key, $value2Write);
	}
}
$writeBuffer .= "\n);\n?>";

file_put_contents($iconsDataFile, $writeBuffer);