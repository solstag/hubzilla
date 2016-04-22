<?php
namespace Zotlabs\Module;

// What do we need this for?


class Rsd_xml extends \Zotlabs\Web\Controller {

	function get() {
		header ("Content-Type: text/xml");
		echo '<?xml version="1.0" encoding="UTF-8"?>
	 <rsd version="1.0" xmlns="http://archipelago.phrasewise.com/rsd">
	   <service>
	     <engineName>Red</engineName>
	     <engineLink>http://friendica.com/</engineLink>
	     <apis>
	       <api name="Twitter" preferred="true" apiLink="'.z_root().'/api/" blogID="">
	         <settings>
	           <docs>http://status.net/wiki/TwitterCompatibleAPI</docs>
	           <setting name="OAuth">false</setting>
	         </settings>
	       </api>
	     </apis>
	   </service>
	 </rsd>
		';
	die();
	}
}