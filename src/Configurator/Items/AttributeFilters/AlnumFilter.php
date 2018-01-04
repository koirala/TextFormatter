<?php

/*
* @package   s9e\TextFormatter
* @copyright Copyright (c) 2010-2018 The s9e Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace s9e\TextFormatter\Configurator\Items\AttributeFilters;
class AlnumFilter extends RegexpFilter
{
	public function __construct()
	{
		parent::__construct('/^[0-9A-Za-z]+$/D');
		$this->markAsSafeAsURL();
		$this->markAsSafeInCSS();
	}
}