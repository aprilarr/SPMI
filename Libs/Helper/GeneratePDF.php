#!/usr/bin/php
<?php

if (in_array($argv[1], array('-f','-s','-j'))) {
	if ($argv[1] == "-j" || $argv[1] == "-s")
	{
		error_reporting(0);
	}

    $html = file_get_contents($argv[2]);

    $papersize = isset($argv[4])?$argv[4]:"A4";
    $pageorientation = isset($argv[5])?$argv[5]:"Portrait";    

	require_once __DIR__ .'/../dompdf/autoload.inc.php';

	// instantiate and use the dompdf class
	$dompdf = new \Dompdf\Dompdf();
	if (isset($argv[6]))
	{
		$dompdf->set_option("isPhpEnabled", $argv[6]);	
	}
  $dompdf->set_option('isHtml5ParserEnabled', true);
  $dompdf->setOptions("pdfBackend", "auto");  	
	$dompdf->load_html($html);
	$dompdf->set_paper($papersize, $pageorientation);
	$dompdf->render();

	$output = $dompdf->output();
	file_put_contents($argv[3], $output);


    if ($argv[1] == "-j")
    {
    	$result["input"] = $argv[2];
    	$result["output"] = $argv[3];
    	print_r(json_encode($result));
    }
} else if ($argc != 2 || in_array($argv[1], array('--help', '-help', '-h', '-?'))) {
?>

DOMPDF PHP shell execute for Bantingan Framework.

  Usage:
  <?php echo $argv[0]; ?> <option> <input> <output> <papersize> <pageorientation> <isphpenabled>

  <option> --help, -help, -h,
  or -? options, you can get this help.

  -f, generate pdf with following options

  -s, generate pdf in silence

  -j, generate pdf with json output

  <input> full path of input file

  <output> full path of output file

  <papersize> paper size, default A4

  <pageorientation> page orientation, default portrait

  <isphpenabled> override dompdf isphpenabled option, true or false


<?php
} 
?>