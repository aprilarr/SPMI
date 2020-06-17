<?php
/* config.php */

namespace Config;

class Config
{
	public function __construct()
	{		
		define("CONTROLLER_PATH", "Controllers/");
		define("VIEW_PATH", "Views/");
		define("MODEL_PATH", "Models/");
		define("LIB_PATH", "Libs/");
		define("BASE_URL", "/bantingan");
		define("MASTER_PAGE", "site.master");
		define("SITE_TITLE", "SPMI");
		define("SITE_DESCRIPTION", "Bantingan fast prototyping PHP framework");
		define("SHOW_ERROR", true);
		define("ERROR_VIEWS", "Shared/error.html");
		define("SESSION_DB", false);
		// file json namespaces
		define("BANTINGAN_NAMESPACES", file_get_contents(__DIR__ .'/namespaces.config'));
		// file json routing
		define("ROUTE_CONFIG", file_get_contents(__DIR__ .'/route.config'));
		// file json koneksi database
		define("DATABASE_CONNECTIONS", file_get_contents(__DIR__ .'/dbconnection.config'));
		define("REDBEAN_FREEZE", false);

		// Additional Config //

		define("ERROR_404_URL", "home/error");		
		define("ERROR_LOG", "enabled");
		define("LOGIN_URL", "home/login");
		define("LOGOUT_URL", "home");
		define("DEFAULT_LANGUAGE", "en");
		define("DOWNLOAD_PATH", "downloads/");
		define("UPLOAD_PATH", "files/");
		define("UPLOAD_MAX_SIZE", 5000000);

		/* database */		
		// PHP 7
		// multiple connections
		// moved to database conenctions file DATABASE_CONNECTIONS	 	

		/* mongodb */
		/* kalau pake mongodb, pakai MongoBantingan class, lihat di Libs/Helper
		define("MONGO_SERVER", "10.3.170.142");
		define("MONGO_PORT", "27017");
		define("MONGO_DATABASE", "mydb");
		define("MONGO_USER", "phpuser");
		define("MONGO_PWD", "phppassword");
		*/

		/* path to wkhtmltopdf binary */
		define( "WKHTMLTOPDF_BINARY", "F:\\Software\\wkhtmltopdf\\bin\\wkhtmltopdf.exe" );
		define( "WKHTMLTOPDF_TEMP_DIRECTORY", __DIR__."/../wktmp" );

		/* global paging size */
		define ("PAGE_SIZE","10");

		/* auth disabled */
		define("AUTH_MEMBERSHIP_DISABLED", false);

		// checking $protocol in HTTP or HTTPS 
	 	if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') { 
	 		// this is HTTPS 
	 		define("BASE_PROTOCOL", "https"); 
	 	} else { 
		 	// this is HTTP 
		 	define("BASE_PROTOCOL", "http"); 
		}

		date_default_timezone_set('Asia/Jakarta');

		/* user management configuration */
		define("EMAIL_USE_SMTP", false);
		define("EMAIL_SMTP_HOST", "mail.susilon.com");
		define("EMAIL_SMTP_AUTH", true);
		define("EMAIL_SMTP_USERNAME", "notification@susilon.com");
		define("EMAIL_SMTP_PASSWORD", "secret");
		define("EMAIL_SMTP_PORT", 25);
		define("EMAIL_SMTP_ENCRYPTION", null);

		define("EMAIL_VERIFICATION_URL", BASE_PROTOCOL."://".$_SERVER['HTTP_HOST'].BASE_URL."/home/accountverification");
		define("EMAIL_VERIFICATION_FROM", "no-reply@susilon.com");
		define("EMAIL_VERIFICATION_FROM_NAME", "BantinganPHP Registration");
		define("EMAIL_VERIFICATION_SUBJECT", "Account activation for BantinganPHP");
		define("EMAIL_VERIFICATION_CONTENT", "Silahkan klik link dibawah ini untuk mengaktifkan akun :");

		define("EMAIL_PASSWORDRESET_URL", BASE_PROTOCOL."://".$_SERVER['HTTP_HOST'].BASE_URL."/home/resetpassword");
		define("EMAIL_PASSWORDRESET_FROM", "no-reply@susilon.com");
		define("EMAIL_PASSWORDRESET_FROM_NAME", "BantinganPHP Password Reset");
		define("EMAIL_PASSWORDRESET_SUBJECT", "Password reset for BantinganPHP");
		define("EMAIL_PASSWORDRESET_CONTENT", "Please click on this link to reset your password:");
	}
}
?>
