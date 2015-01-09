<?php

/*
* @package   s9e\TextFormatter
* @copyright Copyright (c) 2010-2015 The s9e Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace s9e\TextFormatter\Configurator;

use ArrayAccess;
use Iterator;
use s9e\TextFormatter\Configurator\Collections\TemplateCheckList;
use s9e\TextFormatter\Configurator\Helpers\TemplateHelper;
use s9e\TextFormatter\Configurator\Items\Tag;
use s9e\TextFormatter\Configurator\Items\UnsafeTemplate;
use s9e\TextFormatter\Configurator\TemplateChecks\DisallowElementNS;
use s9e\TextFormatter\Configurator\TemplateChecks\DisallowXPathFunction;
use s9e\TextFormatter\Configurator\TemplateChecks\RestrictFlashScriptAccess;
use s9e\TextFormatter\Configurator\Traits\CollectionProxy;

class TemplateChecker implements ArrayAccess, Iterator
{
	use CollectionProxy;

	protected $collection;

	protected $disabled = \false;

	public function __construct()
	{
		$this->collection = new TemplateCheckList;
		$this->collection->append('DisallowAttributeSets');
		$this->collection->append('DisallowCopy');
		$this->collection->append('DisallowDisableOutputEscaping');
		$this->collection->append('DisallowDynamicAttributeNames');
		$this->collection->append('DisallowDynamicElementNames');
		$this->collection->append('DisallowObjectParamsWithGeneratedName');
		$this->collection->append('DisallowPHPTags');
		$this->collection->append('DisallowUnsafeCopyOf');
		$this->collection->append('DisallowUnsafeDynamicCSS');
		$this->collection->append('DisallowUnsafeDynamicJS');
		$this->collection->append('DisallowUnsafeDynamicURL');
		$this->collection->append(new DisallowElementNS('http://icl.com/saxon', 'output'));
		$this->collection->append(new DisallowXPathFunction('document'));
		$this->collection->append(new RestrictFlashScriptAccess('sameDomain', \true));
	}

	public function checkTag(Tag $tag)
	{
		if (isset($tag->template) && !($tag->template instanceof UnsafeTemplate))
		{
			$template = (string) $tag->template;
			$this->checkTemplate($template, $tag);
		}
	}

	public function checkTemplate($template, Tag $tag = \null)
	{
		if ($this->disabled)
			return;

		if (!isset($tag))
			$tag = new Tag;

		$dom = TemplateHelper::loadTemplate($template);

		foreach ($this->collection as $check)
			$check->check($dom->documentElement, $tag);
	}

	public function disable()
	{
		$this->disabled = \true;
	}

	public function enable()
	{
		$this->disabled = \false;
	}
}