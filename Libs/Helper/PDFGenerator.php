<?php
/**
PDF Generator Helper Module
Copyright Bantingan Framework 2017
Use with your own risk
*/
namespace Helper;

class PDFGenerator 
{
	public $binary;
	public $papersize = "A4";
	public $pageorientation = "Portrait";

	public function __construct()
	{
		if (defined("WKHTMLTOPDF_BINARY"))
        {
        	$this->binary = WKHTMLTOPDF_BINARY;
        } else {
        	$this->binary = "wkhtmltopdf";
        }
	}

	public function Convert($input,$output,$papersize=null,$pageorientation=null)
	{		
		if (!isset($papersize))
		{
			$papersize = $this->papersize;
		}

		if (!isset($pageorientation))
		{
			$pageorientation = $this->pageorientation;
		}

		$output = shell_exec($this->binary.' -s '.$papersize." -O ".$pageorientation." ".$input." ".$output);

		return $output;
	}

	// using temporary file
	public function Generate($html,$papersize=null,$pageorientation=null)
	{				
		$random = GUID::get();
		// save html to file
		$input = __DIR__."\\..\\..\\temp\\input".$random.".html";
		file_put_contents($input, $html);
						
		$output = __DIR__."\\..\\..\\temp\\output".$random.".pdf";
		$convertresult = $this->Convert($input,$output,$papersize,$pageorientation);		
		
		if (file_exists($output)) {
		    //header('Content-Description: File Transfer');
		    //header('Content-Type: application/octet-stream');
		    header('Content-Type: application/pdf');		    
		    header('Expires: 0');
		    header('Cache-Control: must-revalidate');
		    header('Pragma: public');
		    header('Content-Length: ' . filesize($output));
		    header('Content-Disposition: inline; filename=output'.$random.'.pdf";');
		    readfile($output);

		    // remove file after download
		    ignore_user_abort(true);
		    unlink($input);
		    unlink($output);
		    exit;
		}
	}

	// using std in, out
	function WkHTMLToPDF($html, $papersize=null,$pageorientation=null, $filename = 'download.pdf')
	{
		if (!isset($papersize))
		{
			$papersize = $this->papersize;
		}

		if (!isset($pageorientation))
		{
			$pageorientation = $this->pageorientation;
		}

	    // Run wkhtmltopdf
	    $descriptorspec = array(
	        0 => array('pipe', 'r'), // stdin
	        1 => array('pipe', 'w'), // stdout
	        2 => array('pipe', 'w'), // stderr
	    );

	    $process = proc_open($this->binary.' -q -s '.$papersize.' -O '.$pageorientation.' - - ', $descriptorspec, $pipes);

	    // Send the HTML on stdin
	    fwrite($pipes[0], $html);
	    fclose($pipes[0]);

	    // Read the outputs
	    $pdf = stream_get_contents($pipes[1]);
	    $errors = stream_get_contents($pipes[2]);

	    // Close the process
	    fclose($pipes[1]);
	    $return_value = proc_close($process);

	    // Output the results
	    if ($errors) {
	        throw new \Exception('PDF generation failed: ' . $errors);
	    } else {
	        header('Content-Type: application/pdf');
	        header('Cache-Control: public, must-revalidate, max-age=0'); // HTTP/1.1
	        header('Pragma: public');
	        header('Expires: Sat, 26 Jul 1997 05:00:00 GMT'); // Date in the past
	        header('Last-Modified: ' . gmdate('D, d M Y H:i:s').' GMT');
	        header('Content-Length: ' . strlen($pdf));
	        header('Content-Disposition: inline; filename="' . $filename . '";');
	        echo $pdf;
	    }
	}

}