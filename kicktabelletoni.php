<?php
/**
 * Joomla! Content plugin - KickTabelleToni
 *
 * @author     Niels Nuebel <niels@niels-nuebel.de>
 * @copyright  Copyright 2015-2016 Niels Nuebel. All rights reserved
 * @license    GNU Public License
 * @link       http://www.niels-nuebel.de
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * KickTabelleToni Content Plugin
 */
class plgContentKickTabelleToni extends JPlugin
{
	public function __construct(& $subject, $config)
	{
		parent::__construct($subject, $config);
		$this->loadLanguage();
	}

	/**
	 * Event method that runs on content preparation
	 *
	 * @param   JForm    $form  The form object
	 * @param   integer  $data  The form data
	 *
	 * @return bool
	 */
	public function onContentPrepareForm($form, $data)
	{
		if ($form->getName() == 'com_content.article') {
			JForm::addFormPath(__DIR__ . '/params');
			$form->loadFile('subform', false);
		}
	}

}
