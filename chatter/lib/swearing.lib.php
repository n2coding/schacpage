<?php
// This library allows to check for "swear words". Users cannot login or create a room with such words,
// in messages they are replaced by the "@#$*!" string or the one you choose.

// Added for php4 support of mb functions
if(!function_exists('mb_convert_case'))
{
	function mb_convert_case($str,$type,$Charset)
	{
/*
		if (eregi("TITLE",$type)) $str = ucwords($str);
		elseif (eregi("LOWER",$type)) $str = strtolower($str);
		elseif (eregi("UPPER",$type)) $str = strtoupper($str);
*/
		if (stripos($type,"TITLE") !== false) $str = ucwords($str);
		elseif (stripos($type,"LOWER") !== false) $str = strtolower($str);
		elseif (stripos($type,"UPPER") !== false) $str = strtoupper($str);
		return $str;
	}
};

// Credit for this lib goes to Gustavo Iwamoto <iwamoto@zaz.com.br> and Fabiano R. Prestes <zoso@post.com>
function checkwords($String, $TestOnly, $Charset)
{
	global $Found, $b;

	// You can add the words you don't want users to use in the $BadWords array below. As an eregi
	// function is called to find them in strings, you may use valid POSIX 1003.2 regular expressions
	// (see second line of the array for an example).
	// Note that search is not case sensitive, except for special characters such as accentued ones.
	
	$BadWords = array (
				"ahole",
				"anus",
				"ash0le",
				"ash0les",
				"asholes",
				"^ass$",
				"^ass monkey",
				"^assface",
				"assh0le",
				"assh0lez",
				"asshole",
				"assholes",
				"assholz",
				"^asswipe",
				"azzhole",
				"ballz",
				"my balls",
				"^badass",
				"bassterds",
				"bastard",
				"bastards",
				"bastardz",
				"basterds",
				"basterdz",
				"Biatch",
				"b!tch",
				"bitch",
				"biatch",
				"bayatch",
				"baytch",
				"bitches",
				"blackhole",
				"blow job",
				"blowjob",
				"boffing",
				"b00bs",
				"boobs",
#				"breast([[:alpha:]]*)",
				"butt$",
				"butthole",
				"buttwipe",
				"c0ck",
				"c0cks",
				"c0k",
				"carpet muncher",
				"cawk",
				"cawks",
				"Clit",
				"cnts",
				"cntz",
				"c0ck",
				"c0ckhead",
				"cock",
				"cockhead",
				"cock-head",
				"cocks",
				"cock-sucker",
				"cocksucker",
				"cock-sucker",
				"condom([[:alpha:]]*)",
				"crap",
				"^cum",
				"cumshot",
				"cum-shot",
				"cum shot",
				"cunt$",
				"cunts",
				"cuntz",
				"deepshit",
				"dick",
				"dickhead",
				"dild0",
				"dild0s",
				"dildo",
				"dildos",
				"dilld0",
				"dilld0s",
				"dipshit",
				"douche",
				"douches",
				"dominatricks",
				"dominatrics",
				"dominatrix",
				"dr_tam(pax)",
				"dyke",
				"enema",
				"f u c k",
				"f u c k e r",
				"fag$",
				"fag1t",
				"faget",
				"fagg1t",
				"faggit",
				"faggot",
				"fagit",
				"fags",
				"fagz",
				"faig",
				"faigs",
				"fart",
				"flipping the bird",
				"fuck",
				"fuck([[:alpha:]]*)",
				"fucker",
				"fuckin",
				"fucking",
				"fucks",
				"fudge packer",
				"fuk",
				"fukah",
				"fuken",
				"fuker",
				"fukin",
				"fukk",
				"fukkah",
				"fukken",
				"fukker",
				"fukkin",
				"g00k",
				"gay",
				"gayboy",
				"gaygirl",
				"gays",
				"gayz",
				"god-damned",
				"godamn",
				"goddamn",
				"h00r",
				"h0ar",
				"h0re",
#				"^hit",
				"hells",
				"hoar",
#				"hoor",
				"hoore",
				"hore",
				"hump",
				"jack off",
				"jackass",
				"jackoff",
				"jag off",
				"jagoff",
				"jap",
				"japs",
				"jerk-off",
#				"jesus christ",
				"jisim",
				"jiss",
				"jizm",
				"jizz",
				"knob",
				"knobs",
				"knobz",
				"kunt",
				"kunts",
				"kuntz",
				"lesbian",
				"lezzian",
				"lipshits",
				"lipshitz",
				"masochist",
				"masokist",
				"massterbait ",
				"masstrbait",
				"masstrbate",
				"masterbaiter",
				"masterbate",
				"masterbates",
				"motha fucker",
				"motha fuker",
				"motha fukkah",
				"motha fukker",
				"mother fucker",
				"mother fukah",
				"mother fuker",
				"mother fukkah",
				"mother fukker",
				"mother-fucker",
				"motherfucker",
				"mutha fucker",
				"mutha fukah",
				"mutha fuker",
				"mutha fukkah",
				"mutha fukker",
				"n1gr",
				"nastt",
				"nigger",
				"nigur",
				"niiger",
				"niigr",
				"orafis",
				"orgasim",
				"orgasm",
				"orgasum",
				"oriface",
				"orifice",
				"orifiss",
				"packi",
				"packie",
				"packy",
				"paki",
				"pakie",
				"paky",
				"pecker",
				"peeenus",
				"peeenusss",
				"peenus",
				"peinus",
				"pen1s",
				"penas",
				"penis",
				"penis-breath",
				"penus",
				"penuus",
				"phuc",
				"phuck",
				"phuk",
				"phuker",
				"phukker",
				"piss",
				"pissing",
				"pissed",
				"polac",
				"polack",
				"polak",
				"poonani",
				"pr1c",
				"pr1ck",
				"pr1k",
				"pusse",
				"pussee",
				"pussy",
				"puuke",
				"puuker",
				"queer",
				"queers",
				"queerz",
				"qweers",
				"qweerz",
				"qweir",
				"rape",
				"raped",
				"recktum",
				"rectum",
				"retard",
				"retards",
				"sadist",
				"scank",
				"schlong",
				"screwing",
				"scrot([[:alpha:]]*)",
				"semen",
				"sex",
				"sexy",
				"sh!t",
				"sh!t([[:alpha:]]*)",
				"sh1t",
				"sh1t([[:alpha:]]*)",
				"sh1ter",
				"sh1ts",
				"sh1tter",
				"sh1tz",
				"shit",
				"shit([[:alpha:]]*)",
				"shitload",
				"shits",
				"shitter",
				"shitty",
				"shity",
				"shitz",
				"shyt",
				"shyte",
				"shyte",
				"shytty",
				"shyty",
				"skanck",
				"skank",
				"skankee",
				"skankey",
				"skanks",
				"skanky",
				"slut",
				"sluts",
				"slutty",
				"slutz",
				"son-of-a-bitch",
				"sonofa([[:alpha:]]*)",
				"sonofabitch",
				"sperm([[:alpha:]]*)",
				"tampax",
				"testicals",
				"texticals",
				"^tit",
				"tits",
				"titty",
				"tittyfuck",
				"titts",
				"titties",
				"twat",
				"^turd",
				"untampaxed",
				"untampaxxxed",
				"va1jina",
				"vag1na",
				"vagiina",
				"vagin([[:alpha:]]*)",
				"vaj1na",
				"vajina",
				"vullva",
				"vulva",
				"w0p",
				"wh00r",
				"wh0re",
				"whore",
				"xrated",
				"xxx",
	//following are foreign words (GE,RO,FR,JA)
	# GE:
				"merde",
				"scheisse",
				"arschloch",
				"scheize",
				"scheiz",
				"ficken",
				"fick",
				"kuso",
				"ketsunoana",
				"faku",
				"kutabare",
				"zakennayo",
				"chikishou",
				"baka",
				"yaro",
				"merdo",
				"anusulo",
	# RO:
				"belest",
				"beleşt",
				"boule",
				"coaie",
				"n cur",
				"curva",
				"curvă",
				"curul",
				"te fut",
				"ti fut",
				"futut",
				"futuţ",
				"futui",
				"fututi",
				"futu-te",
				"futu-ti",
				"futu-ţi",
				"lindic",
				"mortii ma",
				"morţii mă",
				"muie",
				"muist",
				"pizda",
				"pizdă",
				"pula",
				"pulă",
				"sugi ",
	# JA:
				"バカ",
				"馬鹿",
				"死ね",
				"セックス",
				"ファック",
				"チンポ",
				"チンコ",
				"マンコ",
				"クソ",
				"糞"
	);

	$ReplaceString = C_SWEAR_EXPR;	// String that will replace "swear words"

	// Don't modify lines below

	$Found = false;
	$b = 0;
	for (reset($BadWords); $ToFind = current($BadWords); next($BadWords))
	{
#		$Found = eregi(mb_convert_case(addslashes($ToFind),MB_CASE_LOWER,$Charset), mb_convert_case($String,MB_CASE_LOWER,$Charset));
		$Found = preg_match("/".mb_convert_case(addslashes($ToFind),MB_CASE_LOWER,$Charset)."/i",mb_convert_case($String,MB_CASE_LOWER,$Charset));
		if ($Found !== false)
		{
			if ($TestOnly)
			{
				break;
			}
			else
			{
				$String = str_replace(addslashes($ToFind), $ReplaceString, $String);
				$b++;
			};
		};
	};

	unset($BadWords);
	return ($TestOnly ? $Found : $String);
};

?>