<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport( 'joomla.plugin.plugin' );
 
/**
 * Example system plugin
 */
class plgSystemUsergroup extends JPlugin
{
	public function onUserBeforeSave($user, $isnew, $data)
	{
		// Code for assigning a user group.
	}
}
	?>