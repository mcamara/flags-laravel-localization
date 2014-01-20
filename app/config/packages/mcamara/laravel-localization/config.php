<?php

	return array(

        // List of all languages supported by your site.
        // Add any supported to the supportedLanguages array.
        // A list of many languages has been added to the bottom of this file for your convenience.
        'supportedLocales' => array(
            "en" => array("name" => "English",			"script" => "Latin",		"dir" => "ltr",		"native" =>  "English"),
            "es" => array("name" => "Spanish",			"script" => "Latin",		"dir" => "ltr",		"native" =>  "Español"),
            "de" => array("name" => "German",           "script" => "Latin",        "dir" => "ltr",     "native" =>  "Deutsch"),
            "fr" => array("name" => "French",           "script" => "Latin",        "dir" => "ltr",     "native" =>  "Français"),
        ),

		// Take the browser language if it's not defined in the route?
		// If false, system will take app.php locale attribute
		'useBrowserLanguage'	=> true,

        // Should application use the language stored in a session
        // if the language is not defined in the url?
        // If false and language not defined in the url, system will
        // take the default language (defined in config/app.php) or
        // the browser preferred language (if useBrowserLanguage is true) or
        // the cookie language (if useCookieLanguage is true)
        'useSessionLanguage' => true,

        // Should application use and store the language stored in a cookie
        // if the language is not defined in the url or the session?
        // If true and language not defined in the url or the session,
        // system will take the default language (defined in config/app.php)
        // or the browser preferred language (if useBrowserLanguage is true)
        'useCookieLanguage' => true,

		// If LaravelLocalizationRedirectFilter is actived and hideDefaultLanguageInRoute
		// is true, the url would not have the default application language
		'hideDefaultLanguageInRoute'	=> false,

	);

/*
    "ab" => array("name" => "Abkhaz",           "script" => "Cyrillic",     "dir" => "ltr",     "native" =>  "Аҧсуа бызшәа",),
    "aa" => array("name" => "Afar",             "script" => "Ge'ez",        "dir" => "ltr",     "native" =>  "Afaraf"),
    "af" => array("name" => "Afrikaans",        "script" => "Latin",        "dir" => "ltr",     "native" =>  "Afrikaans"),
    "ak" => array("name" => "Akan",             "script" => "Latin",        "dir" => "ltr",     "native" =>  "Akan"),
    "sq" => array("name" => "Albanian",         "script" => "Latin",        "dir" => "ltr",     "native" =>  "Gjuha shqipe"),
    "am" => array("name" => "Amharic",          "script" => "Ge'ez",        "dir" => "ltr",     "native" =>  "አማርኛ"),
    "ar" => array("name" => "Arabic",           "script" => "Arabic",       "dir" => "rtl",     "native" =>  "العربية"),
    "an" => array("name" => "Aragonese",        "script" => "Latin",        "dir" => "ltr",     "native" =>  "Aragonés"),
    "hy" => array("name" => "Armenian",         "script" => "Armenian",     "dir" => "ltr",     "native" =>  "Հայերեն"),
    "as" => array("name" => "Assamese",         "script" => "Assamese",     "dir" => "ltr",     "native" =>  "অসমীয়া"),
    "av" => array("name" => "Avaric",           "script" => "Cyrillic",     "dir" => "ltr",     "native" =>  "Aвар мацӀ"),
    "ae" => array("name" => "Avestan",          "script" => "Pahlavi",      "dir" => "rtl",     "native" =>  "Avesta"),
    "ay" => array("name" => "Aymara",           "script" => "Latin",        "dir" => "ltr",     "native" =>  "Aymar aru"),
    "az" => array("name" => "Azerbaijani",      "script" => "Latin",        "dir" => "ltr",     "native" =>  "Azərbaycan dili"),
    "bm" => array("name" => "Bambara",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Aamanankan"),
    "ba" => array("name" => "Bashkir",          "script" => "Cyrillic",     "dir" => "ltr",     "native" =>  "башҡорт теле"),
    "eu" => array("name" => "Basque",           "script" => "Latin",        "dir" => "ltr",     "native" =>  "Euskara"),
    "be" => array("name" => "Belarusian",       "script" => "Cyrillic",     "dir" => "ltr",     "native" =>  "беларуская мова"),
    "bn" => array("name" => "Bengali",          "script" => "Bengali",      "dir" => "ltr",     "native" =>  "বাংলা"),
    "bh" => array("name" => "Bihari",           "script" => "Devanagari",   "dir" => "ltr",     "native" =>  "भोजपुरी"),
    "bi" => array("name" => "Bislama",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Bislama"),
    "bs" => array("name" => "Bosnian",          "script" => "Cyrillic",     "dir" => "ltr",     "native" =>  "Bosanski jezik"),
    "br" => array("name" => "Breton",           "script" => "Latin",        "dir" => "ltr",     "native" =>  "Brezhoneg"),
    "bg" => array("name" => "Bulgarian",        "script" => "Cyrillic",     "dir" => "ltr",     "native" =>  "български език"),
    "my" => array("name" => "Burmese",          "script" => "Burmese",      "dir" => "ltr",     "native" =>  "ဗမာစာ"),
    "ca" => array("name" => "Catalan",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Català"),
    "ny" => array("name" => "Chewa",            "script" => "Latin",        "dir" => "ltr",     "native" =>  "ChiCheŵa"),
    "ch" => array("name" => "Chamorro",         "script" => "Latin",        "dir" => "ltr",     "native" =>  "Chamoru"),
    "ce" => array("name" => "Chechen",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "нохчийн мотт"),
    "zh" => array("name" => "Chinese",          "script" => "Chinese",      "dir" => "ltr",     "native" =>  "中文"),
    "cv" => array("name" => "Chuvash",          "script" => "Cyrillic",     "dir" => "ltr",     "native" =>  "чӑваш чӗлхи"),
    "kw" => array("name" => "Cornish",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Kernewek"),
    "co" => array("name" => "Corsican",         "script" => "Latin",        "dir" => "ltr",     "native" =>  "Corsu"),
    "cr" => array("name" => "Cree",             "script" => "Latin",        "dir" => "ltr",     "native" =>  "ᓀᐦᐃᔭᐍᐏᐣ"),
    "hr" => array("name" => "Croatian",         "script" => "Latin",        "dir" => "ltr",     "native" =>  "Hrvatski jezik"),
    "cs" => array("name" => "Czech",            "script" => "Latin",        "dir" => "ltr",     "native" =>  "čeština"),
    "da" => array("name" => "Danish",           "script" => "Latin",        "dir" => "ltr",     "native" =>  "Dansk"),
    "nl" => array("name" => "Dutch",            "script" => "Latin",        "dir" => "ltr",     "native" =>  "Nederlands"),
    "dz" => array("name" => "Dzongkha",         "script" => "Tibetan",      "dir" => "ltr",     "native" =>  "རྫོང་ཁ"),
    "en" => array("name" => "English",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "English"),
    "eo" => array("name" => "Esperanto",        "script" => "Latin",        "dir" => "ltr",     "native" =>  "Esperanto"),
    "et" => array("name" => "Estonian",         "script" => "Latin",        "dir" => "ltr",     "native" =>  "Eesti"),
    "ee" => array("name" => "Ewe",              "script" => "Latin",        "dir" => "ltr",     "native" =>  "Eʋegbe"),
    "fo" => array("name" => "Faroese",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Føroyskt"),
    "fj" => array("name" => "Fijian",           "script" => "Latin",        "dir" => "ltr",     "native" =>  "Vosa Vakaviti"),
    "fi" => array("name" => "Finnish",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Suomi"),
    "fr" => array("name" => "French",           "script" => "Latin",        "dir" => "ltr",     "native" =>  "Français"),
    "ff" => array("name" => "Fula",             "script" => "Latin",        "dir" => "ltr",     "native" =>  "Fulfulde"),
    "gl" => array("name" => "Galician",         "script" => "Latin",        "dir" => "ltr",     "native" =>  "Galego"),
    "lg" => array("name" => "Ganda",            "script" => "Latin",        "dir" => "ltr",     "native" =>  "Luganda"),
    "ka" => array("name" => "Georgian",         "script" => "Georgian",     "dir" => "ltr",     "native" =>  "ქართული"),
    "de" => array("name" => "German",           "script" => "Latin",        "dir" => "ltr",     "native" =>  "Deutsch"),
    "el" => array("name" => "Greek, Modern",    "script" => "Greek",        "dir" => "ltr",     "native" =>  "ελληνικά"),
    "gn" => array("name" => "Guaraní",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Avañe'ẽ"),
    "gu" => array("name" => "Gujarati",         "script" => "Gujarati",     "dir" => "ltr",     "native" =>  "ગુજરાતી"),
    "ha" => array("name" => "Hausa",            "script" => "Latin",        "dir" => "ltr",     "native" =>  "Hausa"),
    "he" => array("name" => "Hebrew (modern)",  "script" => "Aramaic",      "dir" => "rtl",     "native" =>  "עברית"),
    "hz" => array("name" => "Herero",           "script" => "Latin",        "dir" => "ltr",     "native" =>  "Otjiherero"),
    "hi" => array("name" => "Hindi",            "script" => "Devanagari",   "dir" => "ltr",     "native" =>  "हिन्दी"),
    "ho" => array("name" => "Hiri Motu",        "script" => "Latin",        "dir" => "ltr",     "native" =>  "Hiri Motu"),
    "hu" => array("name" => "Hungarian",        "script" => "Latin",        "dir" => "ltr",     "native" =>  "Magyar"),
    "is" => array("name" => "Icelandic",        "script" => "Latin",        "dir" => "ltr",     "native" =>  "Íslenska"),
    "io" => array("name" => "Ido",              "script" => "Latin",        "dir" => "ltr",     "native" =>  "Ido"),
    "ig" => array("name" => "Igbo",             "script" => "Latin",        "dir" => "ltr",     "native" =>  "Asụsụ Igbo"),
    "id" => array("name" => "Indonesian",       "script" => "Latin",        "dir" => "ltr",     "native" =>  "Bahasa Indonesia"),
    "iu" => array("name" => "Inuktitut",        "script" => "Inuktitut",    "dir" => "ltr",     "native" =>  "ᐃᓄᒃᑎᑐᑦ"),
    "ik" => array("name" => "Inupiaq",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Iñupiaq"),
    "ga" => array("name" => "Irish",            "script" => "Latin",        "dir" => "ltr",     "native" =>  "Gaeilge"),
    "it" => array("name" => "Italian",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Italiano"),
    "ja" => array("name" => "Japanese",         "script" => "Chinese",      "dir" => "ltr",     "native" =>  "日本語"),
    "jv" => array("name" => "Javanese",         "script" => "Latin",        "dir" => "ltr",     "native" =>  "Basa Jawa"),
    "kr" => array("name" => "Kanuri",           "script" => "Latin",        "dir" => "ltr",     "native" =>  "कश्मीरी"),
    "ks" => array("name" => "Kashmiri",         "script" => "Arabic",       "dir" => "rtl",     "native" =>  "कश्मीरी"),
    "kk" => array("name" => "Kazakh",           "script" => "Arabic",       "dir" => "rtl",     "native" =>  "қазақ тілі"),
    "km" => array("name" => "Khmer",            "script" => "Khmer",        "dir" => "ltr",     "native" =>  "ខេមរភាសា"),
    "kn" => array("name" => "Kannada",          "script" => "Kannada",      "dir" => "ltr",     "native" =>  "ಕನ್ನಡ"),
    "ki" => array("name" => "Kikuyu",           "script" => "Latin",        "dir" => "ltr",     "native" =>  "Gĩkũyũ"),
    "rw" => array("name" => "Kinyarwanda",      "script" => "Latin",        "dir" => "ltr",     "native" =>  "Ikinyarwanda"),
    "rn" => array("name" => "Kirundi",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Ikirundi"),
    "kv" => array("name" => "Komi",             "script" => "Cyrillic",     "dir" => "ltr",     "native" =>  "коми кыв"),
    "kg" => array("name" => "Kongo",            "script" => "Latin",        "dir" => "ltr",     "native" =>  "KiKongo"),
    "ko" => array("name" => "Korean",           "script" => "Hangul",       "dir" => "ltr",     "native" =>  "한국어"),
    "ku" => array("name" => "Kurdish",          "script" => "Arabic",       "dir" => "rtl",     "native" =>  "Kurdî"),
    "ky" => array("name" => "Kyrgyz",           "script" => "Cyrillic",     "dir" => "ltr",     "native" =>  "Кыргызча"),
    "lo" => array("name" => "Lao",              "script" => "Lao",          "dir" => "ltr",     "native" =>  "ພາສາລາວ"),
    "la" => array("name" => "Latin",            "script" => "Latin",        "dir" => "ltr",     "native" =>  "Latine"),
    "lv" => array("name" => "Latvian",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Latviešu valoda"),
    "ln" => array("name" => "Lingala",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Lingála"),
    "lt" => array("name" => "Lithuanian",       "script" => "Latin",        "dir" => "ltr",     "native" =>  "Lietuvių kalba"),
    "lu" => array("name" => "Luba-Katanga",     "script" => "Latin",        "dir" => "ltr",     "native" =>  "Tshiluba"),
    "mk" => array("name" => "Macedonian",       "script" => "Cyrillic",     "dir" => "ltr",     "native" =>  "македонски јазик"),
    "mg" => array("name" => "Malagasy",         "script" => "Latin",        "dir" => "ltr",     "native" =>  "Fiteny malagasy"),
    "ms" => array("name" => "Malay",            "script" => "Latin",        "dir" => "ltr",     "native" =>  "Bahasa Melayu"),
    "ml" => array("name" => "Malayalam",        "script" => "Malayalam",    "dir" => "ltr",     "native" =>  "മലയാളം"),
    "mt" => array("name" => "Maltese",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Malti"),
    "gv" => array("name" => "Manx",             "script" => "Latin",        "dir" => "ltr",     "native" =>  "Gaelg"),
    "mh" => array("name" => "Marshallese",      "script" => "Latin",        "dir" => "ltr",     "native" =>  "Kajin M̧ajeļ"),
    "mn" => array("name" => "Mongolian",        "script" => "Mongolian",    "dir" => "ltr",     "native" =>  "монгол"),
    "mi" => array("name" => "Māori",            "script" => "Latin",        "dir" => "ltr",     "native" =>  "Te reo Māori"),
    "na" => array("name" => "Nauru",            "script" => "Latin",        "dir" => "ltr",     "native" =>  "Ekakairũ Naoero"),
    "ng" => array("name" => "Ndonga",           "script" => "Latin",        "dir" => "ltr",     "native" =>  "Owambo"),
    "ne" => array("name" => "Nepali",           "script" => "Devanagari",   "dir" => "ltr",     "native" =>  "नेपाली"),
    "nd" => array("name" => "North Ndebele",    "script" => "Latin",        "dir" => "ltr",     "native" =>  "IsiNdebele"),
    "se" => array("name" => "Northern Sami",    "script" => "Latin",        "dir" => "ltr",     "native" =>  "Davvisámegiella"),
    "no" => array("name" => "Norwegian",        "script" => "Latin",        "dir" => "ltr",     "native" =>  "Norsk"),
    "ii" => array("name" => "Nuosu",            "script" => "Yi",           "dir" => "ltr",     "native" =>  "ꆈꌠ꒿ Nuosuhxop"),
    "oc" => array("name" => "Occitan",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Occitan"),
    "or" => array("name" => "Oriya",            "script" => "Oriya",        "dir" => "ltr",     "native" =>  "ଓଡ଼ିଆ"),
    "om" => array("name" => "Oromo",            "script" => "Latin",        "dir" => "ltr",     "native" =>  "Afaan Oromoo"),
    "ps" => array("name" => "Pashto",           "script" => "Arabic",       "dir" => "rtl",     "native" =>  "پښتو"),
    "fa" => array("name" => "Persian",          "script" => "Arabic",       "dir" => "rtl",     "native" =>  "فارسی"),
    "pl" => array("name" => "Polish",           "script" => "Latin",        "dir" => "ltr",     "native" =>  "Język polski"),
    "pt" => array("name" => "Portuguese",       "script" => "Latin",        "dir" => "ltr",     "native" =>  "Português"),
    "qu" => array("name" => "Quechua",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Runa Simi"),
    "ro" => array("name" => "Romanian",         "script" => "Latin",        "dir" => "ltr",     "native" =>  "Limba română"),
    "rm" => array("name" => "Romansh",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Rumantsch grischun"),
    "ru" => array("name" => "Russian",          "script" => "Cyrillic",     "dir" => "ltr",     "native" =>  "русский язык"),
    "sm" => array("name" => "Samoan",           "script" => "Latin",        "dir" => "ltr",     "native" =>  "Gagana fa'a Samoa"),
    "sg" => array("name" => "Sango",            "script" => "Latin",        "dir" => "ltr",     "native" =>  "Yângâ tî sängö"),
    "sa" => array("name" => "Sanskrit",         "script" => "Devanagari",   "dir" => "ltr",     "native" =>  "संस्कृतम्"),
    "sc" => array("name" => "Sardinian",        "script" => "Latin",        "dir" => "ltr",     "native" =>  "Sardu"),
    "sr" => array("name" => "Serbian",          "script" => "Cyrillic",     "dir" => "ltr",     "native" =>  "српски језик"),
    "sn" => array("name" => "Shona",            "script" => "Latin",        "dir" => "ltr",     "native" =>  "ChiShona"),
    "sd" => array("name" => "Sindhi",           "script" => "Arabic",       "dir" => "rtl",     "native" =>  "सिन्धी"),
    "sk" => array("name" => "Slovak",           "script" => "Latin",        "dir" => "ltr",     "native" =>  "Slovenčina"),
    "sl" => array("name" => "Slovene",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Slovenski jezik"),
    "so" => array("name" => "Somali",           "script" => "Latin",        "dir" => "ltr",     "native" =>  "Soomaaliga"),
    "nr" => array("name" => "South Ndebele",    "script" => "Latin",        "dir" => "ltr",     "native" =>  "IsiNdebele"),
    "st" => array("name" => "Southern Sotho",   "script" => "Latin",        "dir" => "ltr",     "native" =>  "Sesotho"),
    "es" => array("name" => "Spanish",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Español"),
    "si" => array("name" => "Sinhala",          "script" => "Sinhala",      "dir" => "ltr",     "native" =>  "සිංහල"),
    "su" => array("name" => "Sundanese",        "script" => "Latin",        "dir" => "ltr",     "native" =>  "Basa Sunda"),
    "sw" => array("name" => "Swahili",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Kiswahili"),
    "ss" => array("name" => "Swati",            "script" => "Latin",        "dir" => "ltr",     "native" =>  "SiSwati"),
    "sv" => array("name" => "Swedish",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Svenska"),
    "tl" => array("name" => "Tagalog",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Wikang Tagalog"),
    "ty" => array("name" => "Tahitian",         "script" => "Latin",        "dir" => "ltr",     "native" =>  "Reo Tahiti"),
    "tg" => array("name" => "Tajik",            "script" => "Cyrillic",     "dir" => "ltr",     "native" =>  "тоҷикӣ"),
    "ta" => array("name" => "Tamil",            "script" => "Tamil",        "dir" => "ltr",     "native" =>  "தமிழ்"),
    "tt" => array("name" => "Tatar",            "script" => "Cyrillic",     "dir" => "ltr",     "native" =>  "татар теле"),
    "te" => array("name" => "Telugu",           "script" => "Telugu",       "dir" => "ltr",     "native" =>  "తెలుగు"),
    "th" => array("name" => "Thai",             "script" => "Thai",         "dir" => "ltr",     "native" =>  "ไทย"),
    "ti" => array("name" => "Tonga",            "script" => "Latin",        "dir" => "ltr",     "native" =>  "Faka Tonga"),
    "ti" => array("name" => "Tigrinya",         "script" => "Ge'ez",        "dir" => "ltr",     "native" =>  "ትግርኛ"),
    "ts" => array("name" => "Tsonga",           "script" => "Latin",        "dir" => "ltr",     "native" =>  "Xitsonga"),
    "tn" => array("name" => "Tswana",           "script" => "Latin",        "dir" => "ltr",     "native" =>  "Setswana"),
    "tr" => array("name" => "Turkish",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Türkçe"),
    "tk" => array("name" => "Turkmen",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Türkmen"),
    "tw" => array("name" => "Twi",              "script" => "Latin",        "dir" => "ltr",     "native" =>  "Twi"),
    "uk" => array("name" => "Ukrainian",        "script" => "Cyrillic",     "dir" => "ltr",     "native" =>  "українська мова"),
    "ur" => array("name" => "Urdu",             "script" => "Arabic",       "dir" => "rtl",     "native" =>  "اردو"),
    "ug" => array("name" => "Uyghur",           "script" => "Arabic",       "dir" => "rtl",     "native" =>  "Uyƣurqə"),
    "uz" => array("name" => "Uzbek",            "script" => "Latin",        "dir" => "ltr",     "native" =>  "O‘zbek"),
    "ve" => array("name" => "Venda",            "script" => "Latin",        "dir" => "ltr",     "native" =>  "Tshivenḓa"),
    "vi" => array("name" => "Vietnamese",       "script" => "Latin",        "dir" => "ltr",     "native" =>  "Tiếng Việt"),
    "vo" => array("name" => "Volapük",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Volapük"),
    "wa" => array("name" => "Walloon",          "script" => "Latin",        "dir" => "ltr",     "native" =>  "Walon"),
    "cy" => array("name" => "Welsh",            "script" => "Latin",        "dir" => "ltr",     "native" =>  "Cymraeg"),
    "fy" => array("name" => "Western Frisian",  "script" => "Latin",        "dir" => "ltr",     "native" =>  "Frysk"),
    "wo" => array("name" => "Wolof",            "script" => "Latin",        "dir" => "ltr",     "native" =>  "Wollof"),
    "xh" => array("name" => "Xhosa",            "script" => "Latin",        "dir" => "ltr",     "native" =>  "IsiXhosa"),
    "yi" => array("name" => "Yiddish",          "script" => "Hebrew",       "dir" => "rtl",     "native" =>  "ייִדיש"),
    "yo" => array("name" => "Yoruba",           "script" => "Latin",        "dir" => "ltr",     "native" =>  "Yorùbá"),
    "za" => array("name" => "Zhuang, Chuang",   "script" => "Chinese",      "dir" => "ltr",     "native" =>  "Saɯ cueŋƅ"),
    "zu" => array("name" => "Zulu",             "script" => "Latin",        "dir" => "ltr",     "native" =>  "IsiZulu"),
*/