<?php

class Inflector extends Kohana_Inflector {

	public static function plural_icelandic($word, $count = NULL)
	{
		$count = ($count === NULL) ? 0.0 : (float) $count;

		if ($count == 1)
        	return $word;

		$url = 'http://mymemory.translated.net/api/get';

		$i18n = json_decode(file_get_contents($url.'?q='.rawurlencode($word).'&langpair=is|en'));

		if ($i18n->responseStatus == 200 AND isset($i18n->matches[0]->match) AND $i18n->matches[0]->match > 0.8)
		{
			$word_en = Inflector::plural($i18n->matches[0]->translation, $count);

			$i18n = json_decode(file_get_contents($url.'?q='.rawurlencode($word_en).'&langpair=en|is'));

			if ($i18n->responseStatus == 200 AND isset($i18n->matches[0]->match) AND $i18n->matches[0]->match > 0.8)
			{
				$word = UTF8::strtolower($i18n->matches[0]->translation);
			}
		}

		return $word;
	}

	public static function noun($str = NULL, $count = 1)
	{
		$b = '';
		$w = 0;
		$s = substr($count, -1) == '1' AND $count != 11 ? 1 : 0;
	
		for ($i = 0; $i < strlen($str); $i++)
		{
			if ($str[$i] == '|')
				$w = 2;
			else if ($str[$i] == '[')
				$w = 1;
			else if ($str[$i] == ']')
				$w = 0;
			else if ($w == 1 AND $s == 0 OR $w == 2 AND $s == 1)
				$b .= $str[$i];
			else if ($w == 0)
				$b .= $str[$i];
		}
	
		return $b;
	}

} // End Inflector