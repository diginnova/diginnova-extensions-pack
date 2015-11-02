<?php
/**
 * @copyright   (C) 2011 - 2014 Mike Feng Jinglong - All rights reserved.
 * @license  GNU General Public License, version 3 (http://www.gnu.org/licenses/gpl-3.0.html)
 * @author  Mike Feng Jinglong <mike@simbunch.com>
 * @url   http://www.simbunch.com/license/
 * Images and CSS released under GPLv3. All javascripts are NOT GPL and released under the SIMBunch Proprietary Use License v1.0, unless otherwise stated on the file itself.
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.plugin.plugin' );

class plgSystemCloudFlareUniSSL_system extends JPlugin {
	var $_landingoption		= null;

	function plgSystemCloudFlareUniSSL_system(& $subject, $config) {
		parent::__construct($subject, $config);
	}

	public function onAfterInitialise() {
		if ( isset( $_SERVER['HTTP_CF_VISITOR'] ) && strpos( $_SERVER['HTTP_CF_VISITOR'], 'https' ) !== false ) {
			$_SERVER['HTTPS'] = 'on';
			$uri = JFactory::getURI();
			$uri->setScheme('https');
		}
	}
}
?>