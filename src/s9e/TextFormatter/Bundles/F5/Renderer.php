<?php
/**
* @package   s9e\TextFormatter
* @copyright Copyright (c) 2010-2013 The s9e Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/

namespace s9e\TextFormatter\Bundles\F5;

class Renderer extends \s9e\TextFormatter\Renderer
{
	protected $htmlOutput=false;
	protected $dynamicParams=[];
	protected $params=['BASE_URL'=>'','IS_SIGNATURE'=>'','L_WROTE'=>'wrote:','SHOW_IMG'=>'1','SHOW_IMG_SIG'=>''];
	protected $xpath;
	public function __sleep()
	{
		$props = get_object_vars($this);
		unset($props["out"], $props["proc"], $props["source"], $props["xpath"]);

		return array_keys($props);
	}
	public function setParameter($paramName, $paramValue)
	{
		$this->params[$paramName] = $paramValue;
		unset($this->dynamicParams[$paramName]);
	}
	public function renderRichText($xml)
	{
		$dom = $this->loadXML($xml);
		$this->xpath = new \DOMXPath($dom);
		$this->out = "";
		$this->at($dom->documentElement);

		return $this->out;
	}
	protected function at($root, $xpath = null)
	{
		if ($root->nodeType === 3)
		{
			$this->out .= htmlspecialchars($root->textContent,0);
		}
		else
		{
			$nodes = (isset($xpath)) ? $this->xpath->query($xpath, $root) : $root->childNodes;
			foreach ($nodes as $node)
			{
				$nodeName = $node->nodeName;if($nodeName==='E'){if($node->textContent===':)'||$node->textContent==='=)'){$this->out.='<img src="'.htmlspecialchars($this->params['BASE_URL'],2).'img/smilies/smile.png" width="15" height="15" alt="smile"/>';}elseif($node->textContent===':|'||$node->textContent==='=|'){$this->out.='<img src="'.htmlspecialchars($this->params['BASE_URL'],2).'img/smilies/neutral.png" width="15" height="15" alt="neutral"/>';}elseif($node->textContent===':('||$node->textContent==='=('){$this->out.='<img src="'.htmlspecialchars($this->params['BASE_URL'],2).'img/smilies/sad.png" width="15" height="15" alt="sad"/>';}elseif($node->textContent===':D'||$node->textContent==='=D'){$this->out.='<img src="'.htmlspecialchars($this->params['BASE_URL'],2).'img/smilies/big_smile.png" width="15" height="15" alt="big_smile"/>';}elseif($node->textContent===':o'||$node->textContent===':O'){$this->out.='<img src="'.htmlspecialchars($this->params['BASE_URL'],2).'img/smilies/yikes.png" width="15" height="15" alt="yikes"/>';}elseif($node->textContent===';)'){$this->out.='<img src="'.htmlspecialchars($this->params['BASE_URL'],2).'img/smilies/wink.png" width="15" height="15" alt="wink"/>';}elseif($node->textContent===':/'){$this->out.='<img src="'.htmlspecialchars($this->params['BASE_URL'],2).'img/smilies/hmm.png" width="15" height="15" alt="hmm"/>';}elseif($node->textContent===':P'||$node->textContent===':p'){$this->out.='<img src="'.htmlspecialchars($this->params['BASE_URL'],2).'img/smilies/tongue.png" width="15" height="15" alt="tongue"/>';}elseif($node->textContent===':lol:'){$this->out.='<img src="'.htmlspecialchars($this->params['BASE_URL'],2).'img/smilies/lol.png" width="15" height="15" alt="lol"/>';}elseif($node->textContent===':mad:'){$this->out.='<img src="'.htmlspecialchars($this->params['BASE_URL'],2).'img/smilies/mad.png" width="15" height="15" alt="mad"/>';}elseif($node->textContent===':rolleyes:'){$this->out.='<img src="'.htmlspecialchars($this->params['BASE_URL'],2).'img/smilies/roll.png" width="15" height="15" alt="roll"/>';}elseif($node->textContent===':cool:'){$this->out.='<img src="'.htmlspecialchars($this->params['BASE_URL'],2).'img/smilies/cool.png" width="15" height="15" alt="cool"/>';}else{$this->out.=htmlspecialchars($node->textContent,0);}}elseif($nodeName==='LI'){$this->out.='<li>';$l30=strlen($this->out);$this->at($node);if($l30===strlen($this->out)){$this->out=substr($this->out,0,-1).'/>';}else{$this->out.='</li>';}}elseif($nodeName==='LIST'){if($node->getAttribute('type')==='1'){$this->out.='<ol class="decimal">';$l27=strlen($this->out);$this->at($node);if($l27===strlen($this->out)){$this->out=substr($this->out,0,-1).'/>';}else{$this->out.='</ol>';}}elseif($node->getAttribute('type')==='a'){$this->out.='<ol class="alpha">';$l28=strlen($this->out);$this->at($node);if($l28===strlen($this->out)){$this->out=substr($this->out,0,-1).'/>';}else{$this->out.='</ol>';}}else{$this->out.='<ul>';$l29=strlen($this->out);$this->at($node);if($l29===strlen($this->out)){$this->out=substr($this->out,0,-1).'/>';}else{$this->out.='</ul>';}}}elseif($nodeName==='CODE'){$this->out.='<div class="codebox"><pre';if($this->xpath->evaluate('string-length(.)- string-length(translate(.,\'
\',\'\'))>28',$node)){$this->out.=' class="vscroll"';}$this->out.='><code>';$l26=strlen($this->out);$this->at($node);if($l26===strlen($this->out)){$this->out=substr($this->out,0,-1).'/>';}else{$this->out.='</code>';}$this->out.='</pre></div>';}elseif($nodeName==='QUOTE'){$this->out.='<div class="quotebox">';if($node->hasAttribute('author')){$this->out.='<cite>'.htmlspecialchars($node->getAttribute('author'),0).' '.htmlspecialchars($this->params['L_WROTE'],0).'</cite>';}$this->out.='<blockquote><div>';$l23=strlen($this->out);$this->at($node);if($l23===strlen($this->out)){$this->out=substr($this->out,0,-1).'/>';}else{$this->out.='</div>';}$this->out.='</blockquote></div>';}elseif($nodeName==='IMG'){if($this->xpath->evaluate($this->getParamAsXPath('IS_SIGNATURE').' and'.$this->getParamAsXPath('SHOW_IMG_SIG'),$node)){$this->out.='<img class="sigimage" src="'.htmlspecialchars($node->getAttribute('content'),2).'" alt="'.htmlspecialchars($node->getAttribute('alt'),2).'"/>';}elseif($this->xpath->evaluate('not('.$this->getParamAsXPath('IS_SIGNATURE').')and'.$this->getParamAsXPath('SHOW_IMG').'=1',$node)){$this->out.='<span class="postimg"><img src="'.htmlspecialchars($node->getAttribute('content'),2).'" alt="'.htmlspecialchars($node->getAttribute('alt'),2).'"/></span>';}else{$this->at($node);}}elseif($nodeName==='USER'){$this->out.='<a href="'.htmlspecialchars($this->params['BASE_URL'],2).'profile.php?id='.htmlspecialchars($node->getAttribute('id'),2).'">';$l16=strlen($this->out);if($this->xpath->evaluate('text()=@id',$node)){$this->out.=htmlspecialchars($this->params['BASE_URL'],0).'profile.php?id='.htmlspecialchars($node->getAttribute('id'),0);}else{$this->at($node);}if($l16===strlen($this->out)){$this->out=substr($this->out,0,-1).'/>';}else{$this->out.='</a>';}}elseif($nodeName==='FORUM'){$this->out.='<a href="'.htmlspecialchars($this->params['BASE_URL'],2).'viewforum.php?id='.htmlspecialchars($node->getAttribute('id'),2).'">';$l15=strlen($this->out);if($this->xpath->evaluate('text()=@id',$node)){$this->out.=htmlspecialchars($this->params['BASE_URL'],0).'viewforum.php?id='.htmlspecialchars($node->getAttribute('id'),0);}else{$this->at($node);}if($l15===strlen($this->out)){$this->out=substr($this->out,0,-1).'/>';}else{$this->out.='</a>';}}elseif($nodeName==='POST'){$this->out.='<a href="'.htmlspecialchars($this->params['BASE_URL'],2).'viewtopic.php?pid='.htmlspecialchars($node->getAttribute('id'),2).'#'.htmlspecialchars($node->getAttribute('id'),2).'">';$l14=strlen($this->out);if($this->xpath->evaluate('text()=@id',$node)){$this->out.=htmlspecialchars($this->params['BASE_URL'],0).'viewtopic.php?pid='.htmlspecialchars($node->getAttribute('id'),0).'#'.htmlspecialchars($node->getAttribute('id'),0);}else{$this->at($node);}if($l14===strlen($this->out)){$this->out=substr($this->out,0,-1).'/>';}else{$this->out.='</a>';}}elseif($nodeName==='TOPIC'){$this->out.='<a href="'.htmlspecialchars($this->params['BASE_URL'],2).'viewtopic.php?id='.htmlspecialchars($node->getAttribute('id'),2).'">';$l13=strlen($this->out);if($this->xpath->evaluate('text()=@id',$node)){$this->out.=htmlspecialchars($this->params['BASE_URL'],0).'viewtopic.php?id='.htmlspecialchars($node->getAttribute('id'),0);}else{$this->at($node);}if($l13===strlen($this->out)){$this->out=substr($this->out,0,-1).'/>';}else{$this->out.='</a>';}}elseif($nodeName==='EMAIL'){$this->out.='<a href="mailto:'.htmlspecialchars($node->getAttribute('email'),2).'">';$l12=strlen($this->out);$this->at($node);if($l12===strlen($this->out)){$this->out=substr($this->out,0,-1).'/>';}else{$this->out.='</a>';}}elseif($nodeName==='URL'){$this->out.='<a href="'.htmlspecialchars($node->getAttribute('url'),2).'" rel="nofollow">';$l11=strlen($this->out);if($this->xpath->evaluate('text()=@url and.=@url and 55<string-length(.)- string-length(st)- string-length(et)',$node)){$this->out.=htmlspecialchars($this->xpath->evaluate('substring(.,1,39)',$node),0).' … '.htmlspecialchars($this->xpath->evaluate('substring(.,string-length(.)- 10)',$node),0);}else{$this->at($node);}if($l11===strlen($this->out)){$this->out=substr($this->out,0,-1).'/>';}else{$this->out.='</a>';}}elseif($nodeName==='H'){$this->out.='<h5>';$l10=strlen($this->out);$this->at($node);if($l10===strlen($this->out)){$this->out=substr($this->out,0,-1).'/>';}else{$this->out.='</h5>';}}elseif($nodeName==='COLOR'){$this->out.='<span style="color: '.htmlspecialchars($node->getAttribute('color'),2).'">';$l9=strlen($this->out);$this->at($node);if($l9===strlen($this->out)){$this->out=substr($this->out,0,-1).'/>';}else{$this->out.='</span>';}}elseif($nodeName==='INS'){$this->out.='<ins>';$l8=strlen($this->out);$this->at($node);if($l8===strlen($this->out)){$this->out=substr($this->out,0,-1).'/>';}else{$this->out.='</ins>';}}elseif($nodeName==='DEL'){$this->out.='<del>';$l7=strlen($this->out);$this->at($node);if($l7===strlen($this->out)){$this->out=substr($this->out,0,-1).'/>';}else{$this->out.='</del>';}}elseif($nodeName==='S'){$this->out.='<span class="bbs">';$l6=strlen($this->out);$this->at($node);if($l6===strlen($this->out)){$this->out=substr($this->out,0,-1).'/>';}else{$this->out.='</span>';}}elseif($nodeName==='U'){$this->out.='<span class="bbu">';$l5=strlen($this->out);$this->at($node);if($l5===strlen($this->out)){$this->out=substr($this->out,0,-1).'/>';}else{$this->out.='</span>';}}elseif($nodeName==='EM'||$nodeName==='I'){$this->out.='<em>';$l4=strlen($this->out);$this->at($node);if($l4===strlen($this->out)){$this->out=substr($this->out,0,-1).'/>';}else{$this->out.='</em>';}}elseif($nodeName==='B'){$this->out.='<strong>';$l3=strlen($this->out);$this->at($node);if($l3===strlen($this->out)){$this->out=substr($this->out,0,-1).'/>';}else{$this->out.='</strong>';}}elseif($nodeName==='et'||$nodeName==='i'||$nodeName==='st'){}elseif($nodeName==='br'){$this->out.='<br/>';}elseif($nodeName==='p'){$this->out.='<p>';$l1=strlen($this->out);$this->at($node);if($l1===strlen($this->out)){$this->out=substr($this->out,0,-1).'/>';}else{$this->out.='</p>';}}else $this->at($node);
			}
		}
	}				protected function getParamAsXPath($k)
{
	if (isset($this->dynamicParams[$k]))
	{
		return $this->dynamicParams[$k];
	}
	if (!isset($this->params[$k]))
	{
		return "''";
	}
	$str = $this->params[$k];
	if (strpos($str, "'") === false)
	{
		return "'" . $str . "'";
	}
	if (strpos($str, '"') === false)
	{
		return '"' . $str . '"';
	}

	$toks = [];
	$c = '"';
	$pos = 0;
	while ($pos < strlen($str))
	{
		$spn = strcspn($str, $c, $pos);
		if ($spn)
		{
			$toks[] = $c . substr($str, $pos, $spn) . $c;
			$pos += $spn;
		}
		$c = ($c === '"') ? "'" : '"';
	}

	return 'concat(' . implode(',', $toks) . ')';
}
}