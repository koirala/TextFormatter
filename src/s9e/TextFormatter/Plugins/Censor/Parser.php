<?php

/**
* @package   s9e\TextFormatter
* @copyright Copyright (c) 2010-2014 The s9e Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace s9e\TextFormatter\Plugins\Censor;

use s9e\TextFormatter\Plugins\ParserBase;

class Parser extends ParserBase
{
	/**
	* {@inheritdoc}
	*/
	public function parse($text, array $matches)
	{
		$tagName  = $this->config['tagName'];
		$attrName = $this->config['attrName'];

		$replacements = (isset($this->config['replacements']))
		              ? $this->config['replacements']
		              : [];

		foreach ($matches as $m)
		{
			$tag = $this->parser->addSelfClosingTag($tagName, $m[0][1], strlen($m[0][0]));

			foreach ($replacements as list($regexp, $replacement))
			{
				if (preg_match($regexp, $m[0][0]))
				{
					$tag->setAttribute($attrName, $replacement);
					break;
				}
			}
		}
	}
}