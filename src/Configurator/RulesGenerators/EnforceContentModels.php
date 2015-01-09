<?php

/*
* @package   s9e\TextFormatter
* @copyright Copyright (c) 2010-2015 The s9e Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace s9e\TextFormatter\Configurator\RulesGenerators;

use s9e\TextFormatter\Configurator\Helpers\TemplateForensics;
use s9e\TextFormatter\Configurator\RulesGenerators\Interfaces\BooleanRulesGenerator;
use s9e\TextFormatter\Configurator\RulesGenerators\Interfaces\TargetedRulesGenerator;

class EnforceContentModels implements BooleanRulesGenerator, TargetedRulesGenerator
{
	protected $br;

	public function __construct()
	{
		$this->br = new TemplateForensics('<br/>');
	}

	public function generateBooleanRules(TemplateForensics $src)
	{
		$rules = [];

		if ($src->isTransparent())
			$rules['isTransparent'] = \true;

		if (!$src->allowsChild($this->br))
		{
			$rules['preventLineBreaks'] = \true;
			$rules['suspendAutoLineBreaks'] = \true;
		}

		if (!$src->allowsDescendant($this->br))
		{
			$rules['disableAutoLineBreaks'] = \true;
			$rules['preventLineBreaks'] = \true;
		}

		return $rules;
	}

	public function generateTargetedRules(TemplateForensics $src, TemplateForensics $trg)
	{
		$rules = [];

		if (!$src->allowsChild($trg))
			$rules[] = 'denyChild';

		if (!$src->allowsDescendant($trg))
			$rules[] = 'denyDescendant';

		return $rules;
	}
}