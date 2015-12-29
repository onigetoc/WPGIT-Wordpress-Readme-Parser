
<?php

require_once("wp_readme-parser.php");

// from content
//$readme_file = "==Hello==";

// From url
$readme_file = "https://raw.githubusercontent.com/onigetoc/Zajax-Wordpress-ajax-navigation/master/readme.txt";

$wpParser = new readme_parser();
echo $wpParser->url($readme_file);

?>