<?php

class_exists('CApi') or die();

class CCustomPlugin extends AApiPlugin
{
	/**
	 * @param CApiPluginManager $oPluginManager
	 */
	public function __construct(CApiPluginManager $oPluginManager)
	{
		parent::__construct('1.0', $oPluginManager);
	}

	public function Init()
	{
		parent::Init();

		$this->AddJsFile('js/customScreen.js');
		$this->AddJsFile('js/include.js');
		
		$this->AddTemplate('CustomScreen', 'templates/customScreen.html');
	}
}

return new CCustomPlugin($this);
