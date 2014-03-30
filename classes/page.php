<?php
class page
{
	public $debug=true;

	public $base_url = 'https://www.zendgame.com/';
	public $includes = '/home/www-data/includes/';
	public $company = 'zendgame.com';
	public $email = 'admin@zendgame.com';
	public $phone = '(410)262-5245';	
	
	public $title = 'ZendGame, the end of the game as you know it';
	public $content = "Hello, Friend!";
	public $keywords = "zendgame, games, gaming";
	public $menu_items = array('home'=>'index.php');
	
	public function __construct()
	{
		if ($this->debug) $email = 'bonbons0220@gmail.com';

		$this->session = new session();
	}
	
	public function __set($var,$value)
	{
		$this->$var = $value;
	}

	public function display() 
	{
		$this->display_head();
		$this->display_body();
	}

	public function display_head() 
	{
	echo "<html>\n<head>\n";
	$this->display_title();
	$this->display_meta();
	$this->display_links();
	echo "</head>\n";
	}

	public function display_title() 
	{
		echo "<title>$this->title</title>";
	}

	public function display_meta() 
	{
		echo "<meta name=\"keywords\" content=\" ". $this->keywords . "\"/>";
	}

	public function display_links() 
	{
		echo "<link rel=\"stylesheet\" href=\"/css/general.css?v=1.3\" media=\"screen\"/>";
		echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"></script>";
		echo "<script type=\"text/javascript\" src=\"/js/core.js\" ></script>";
		echo "<link rel=\"icon\" href=\"/favicon.ico\" type=\"image/x-icon\"/>";
	}

	public function display_body() 
	{
		echo "<body>";
		$this->display_header();
		$this->display_navmenu();
		echo $this->content;
		$this->display_footer();
		echo "</body></html>";
	}
	
	public function display_header() 
	{
		echo "<h1>ZENDGame, the Beginning of Z Game</h1>";
	}
	
	public function display_navmenu() 
	{
		echo "<ul>";
		foreach ($this->menu_items as $key => $value) {
			echo "<li><a href=\"$value\">$key</a></li>";
		}
		echo "</ul>";
	}
	
	public function display_submenu() 
	{
	}
	
	public function display_content() 
	{
	}
	
	public function display_footer() 
	{
		echo "<p>Copyright Endgame LLC, 2014</p>";
	}
}
?>