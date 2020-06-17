<?php

namespace Config;

class Language
{
	public function __construct()
	{	
		require_once('Translation/'.DEFAULT_LANGUAGE.'.php');
	}
}

?>