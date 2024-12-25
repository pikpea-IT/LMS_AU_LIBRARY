<?php

use Illuminate\Support\Str;
use App\Models\BusinessSetting;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

function getBusinessSettings($key, $locale = null)
{
  $model = BusinessSetting::where('key', $key)->first();
  $data = ($model?->translate($key,$locale)) ?? $model?->value;
  try {
    if (@$data && is_array(json_decode($data, true)) && json_last_error() === JSON_ERROR_NONE) {
      return json_decode($data, true);
    }
  } catch (\Throwable $th) {
    throw $th;
  }
  return $data ?? '';
}


function getBusinessSettingsImageUrl($key)
{
  if($image = getBusinessSettings($key)){
    return  asset('storage/business/'.$image);
  }
}

if (!function_exists('create_slug')) {
  /**
   * description
   *
   * @param string $str
   * @return string lowercase
   */
  function create_slug($string)
  {
    $t = $string;
    $specChars = array(
      ' ' => '-',
      '!' => '',
      '"' => '',
      '#' => '',
      '$' => '',
      '%' => '',
      '&' => 'and',
      '\'' => '',
      '(' => '',
      ')' => '',
      '*' => '',
      '+' => '',
      ',' => '',
      '₹' => '',
      '.' => '',
      '/-' => '',
      ':' => '',
      ';' => '',
      '<' => '',
      '=' => '',
      '>' => '',
      '?' => '',
      '@' => '',
      '[' => '',
      '\\' => '',
      ']' => '',
      '^' => '',
      '_' => '',
      '`' => '',
      '{' => '',
      '|' => '',
      '}' => '',
      '~' => '',
      '-----' => '-',
      '----' => '-',
      '---' => '-',
      '/' => '',
      '--' => '-',
      '/_' => '-',
    );
    foreach ($specChars as $k => $v) {
      $t = str_replace($k, $v, $t);
    }
    return Str::lower($t);
  }
}

if (!function_exists('setting')) {
  function setting($key = false, $defaultValue = false)
  {
    $setting = app('Setting');
    if ($key === false) {
      return $setting;
    }

    $value = $setting->get($key);

    return $value ? $value : $defaultValue;
  }
}

if (!function_exists('assetUrl')) {
  function assetUrl()
  {
    $host = $_SERVER['HTTP_HOST'] ?? null;
    $config = request()->getScheme() . "://" . $host;
    $config .= '/lara11_ecom/public/';
    return $config;
  }
}

if (!function_exists('uploadUrl')) {
  function uploadUrl()
  {
    return asset('public/uploads/');
  }
}

if (!function_exists('errorImageUrl')) {
  function errorImageUrl()
  {
    return asset('images/no-image.png');
  }
}





function auto_translator($q, $sl, $tl)
{
  $res = file_get_contents("https://translate.googleapis.com/translate_a/single?client=gtx&ie=UTF-8&oe=UTF-8&dt=bd&dt=ex&dt=ld&dt=md&dt=qca&dt=rw&dt=rm&dt=ss&dt=t&dt=at&sl=" . $sl . "&tl=" . $tl . "&hl=hl&q=" . urlencode($q), $_SERVER['DOCUMENT_ROOT'] . "/transes.html");
  $res = json_decode($res);
  $res = str_replace('_', ' ', $res[0][0][0]);
  return str_replace('។', '', $res);
}

function getLanguageName($key)
{
  $languages = getLanguages();
  return @$languages[$key];
}


function getLanguageImageUrl($languageCode)
{
  return asset('images/flags/country-'.getCountryCode($languageCode).'.svg');
}
function getLanguages()
{
  return  array(
    "af" => "Afrikaans",
    "sq" => "Albanian - shqip",
    "am" => "Amharic - አማርኛ",
    "ar" => "Arabic - العربية",
    "an" => "Aragonese - aragonés",
    "hy" => "Armenian - հայերեն",
    "ast" => "Asturian - asturianu",
    "az" => "Azerbaijani - azərbaycan dili",
    "eu" => "Basque - euskara",
    "be" => "Belarusian - беларуская",
    "bn" => "Bengali - বাংলা",
    "bs" => "Bosnian - bosanski",
    "br" => "Breton - brezhoneg",
    "bg" => "Bulgarian - български",
    "ca" => "Catalan - català",
    "ckb" => "Central Kurdish - کوردی (دەستنوسی عەرەبی)",
    "zh" => "Chinese - 中文",
    "zh-HK" => "Chinese (Hong Kong) - 中文（香港）",
    "zh-CN" => "Chinese (Simplified) - 中文（简体）",
    "zh-TW" => "Chinese (Traditional) - 中文（繁體）",
    "co" => "Corsican",
    "hr" => "Croatian - hrvatski",
    "cs" => "Czech - čeština",
    "da" => "Danish - dansk",
    "nl" => "Dutch - Nederlands",
    "en" => "English",
    "en-AU" => "English (Australia)",
    "en-CA" => "English (Canada)",
    "en-IN" => "English (India)",
    "en-NZ" => "English (New Zealand)",
    "en-ZA" => "English (South Africa)",
    "en-GB" => "English (United Kingdom)",
    "en-US" => "English (United States)",
    "eo" => "Esperanto - esperanto",
    "et" => "Estonian - eesti",
    "fo" => "Faroese - føroyskt",
    "fil" => "Filipino",
    "fi" => "Finnish - suomi",
    "fr" => "French - français",
    "fr-CA" => "French (Canada) - français (Canada)",
    "fr-FR" => "French (France) - français (France)",
    "fr-CH" => "French (Switzerland) - français (Suisse)",
    "gl" => "Galician - galego",
    "ka" => "Georgian - ქართული",
    "de" => "German - Deutsch",
    "de-AT" => "German (Austria) - Deutsch (Österreich)",
    "de-DE" => "German (Germany) - Deutsch (Deutschland)",
    "de-LI" => "German (Liechtenstein) - Deutsch (Liechtenstein)",
    "de-CH" => "German (Switzerland) - Deutsch (Schweiz)",
    "el" => "Greek - Ελληνικά",
    "gn" => "Guarani",
    "gu" => "Gujarati - ગુજરાતી",
    "ha" => "Hausa",
    "haw" => "Hawaiian - ʻŌlelo Hawaiʻi",
    "he" => "Hebrew - עברית",
    "hi" => "Hindi - हिन्दी",
    "hu" => "Hungarian - magyar",
    "is" => "Icelandic - íslenska",
    "id" => "Indonesian - Indonesia",
    "ia" => "Interlingua",
    "ga" => "Irish - Gaeilge",
    "it" => "Italian - italiano",
    "it-IT" => "Italian (Italy) - italiano (Italia)",
    "it-CH" => "Italian (Switzerland) - italiano (Svizzera)",
    "ja" => "Japanese - 日本語",
    "kn" => "Kannada - ಕನ್ನಡ",
    "kk" => "Kazakh - қазақ тілі",
    "km" => "Khmer - ខ្មែរ",
    "ko" => "Korean - 한국어",
    "ku" => "Kurdish - Kurdî",
    "ky" => "Kyrgyz - кыргызча",
    "lo" => "Lao - ລາວ",
    "la" => "Latin",
    "lv" => "Latvian - latviešu",
    "ln" => "Lingala - lingála",
    "lt" => "Lithuanian - lietuvių",
    "mk" => "Macedonian - македонски",
    "ms" => "Malay - Bahasa Melayu",
    "ml" => "Malayalam - മലയാളം",
    "mt" => "Maltese - Malti",
    "mr" => "Marathi - मराठी",
    "mn" => "Mongolian - монгол",
    "ne" => "Nepali - नेपाली",
    "no" => "Norwegian - norsk",
    "nb" => "Norwegian Bokmål - norsk bokmål",
    "nn" => "Norwegian Nynorsk - nynorsk",
    "oc" => "Occitan",
    "or" => "Oriya - ଓଡ଼ିଆ",
    "om" => "Oromo - Oromoo",
    "ps" => "Pashto - پښتو",
    "fa" => "Persian - فارسی",
    "pl" => "Polish - polski",
    "pt" => "Portuguese - português",
    "pt-BR" => "Portuguese (Brazil) - português (Brasil)",
    "pt-PT" => "Portuguese (Portugal) - português (Portugal)",
    "pa" => "Punjabi - ਪੰਜਾਬੀ",
    "qu" => "Quechua",
    "ro" => "Romanian - română",
    "mo" => "Romanian (Moldova) - română (Moldova)",
    "rm" => "Romansh - rumantsch",
    "ru" => "Russian - русский",
    "gd" => "Scottish Gaelic",
    "sr" => "Serbian - српски",
    "sh" => "Serbo-Croatian - Srpskohrvatski",
    "sn" => "Shona - chiShona",
    "sd" => "Sindhi",
    "si" => "Sinhala - සිංහල",
    "sk" => "Slovak - slovenčina",
    "sl" => "Slovenian - slovenščina",
    "so" => "Somali - Soomaali",
    "st" => "Southern Sotho",
    "es" => "Spanish - español",
    "es-AR" => "Spanish (Argentina) - español (Argentina)",
    "es-419" => "Spanish (Latin America) - español (Latinoamérica)",
    "es-MX" => "Spanish (Mexico) - español (México)",
    "es-ES" => "Spanish (Spain) - español (España)",
    "es-US" => "Spanish (United States) - español (Estados Unidos)",
    "su" => "Sundanese",
    "sw" => "Swahili - Kiswahili",
    "sv" => "Swedish - svenska",
    "tg" => "Tajik - тоҷикӣ",
    "ta" => "Tamil - தமிழ்",
    "tt" => "Tatar",
    "te" => "Telugu - తెలుగు",
    "th" => "Thai - ไทย",
    "ti" => "Tigrinya - ትግርኛ",
    "to" => "Tongan - lea fakatonga",
    "tr" => "Turkish - Türkçe",
    "tk" => "Turkmen",
    "tw" => "Twi",
    "uk" => "Ukrainian - українська",
    "ur" => "Urdu - اردو",
    "ug" => "Uyghur",
    "uz" => "Uzbek - o‘zbek",
    "vi" => "Vietnamese - Tiếng Việt",
    "wa" => "Walloon - wa",
    "cy" => "Welsh - Cymraeg",
    "fy" => "Western Frisian",
    "xh" => "Xhosa",
    "yi" => "Yiddish",
    "yo" => "Yoruba - Èdè Yorùbá",
    "zu" => "Zulu - isiZulu",
  );
}


function getCountryCode($languageCode)
{
  $languages = array(
    "af" => "ZA",
    "sq" => "AL",
    "am" => "ET",
    "ar" => "SA",
    "an" => "ES",
    "hy" => "AM",
    "ast" => "ES",
    "az" => "AZ",
    "eu" => "ES",
    "be" => "BY",
    "bn" => "BD",
    "bs" => "BA",
    "br" => "FR",
    "bg" => "BG",
    "ca" => "ES",
    "ceb" => "PH",
    "zh" => "CN",
    "zh-TW" => "TW",
    "co" => "FR",
    "hr" => "HR",
    "cs" => "CZ",
    "da" => "DK",
    "nl" => "NL",
    "en" => "US",
    "eo" => "UN",
    "et" => "EE",
    "fo" => "FO",
    "fil" => "PH",
    "fi" => "FI",
    "fr" => "FR",
    "fy" => "NL",
    "gl" => "ES",
    "ka" => "GE",
    "de" => "DE",
    "el" => "GR",
    "gu" => "IN",
    "ht" => "HT",
    "ha" => "NG",
    "haw" => "US",
    "he" => "IL",
    "hi" => "IN",
    "hmn" => "CN",
    "hu" => "HU",
    "is" => "IS",
    "ig" => "NG",
    "id" => "ID",
    "ga" => "IE",
    "it" => "IT",
    "ja" => "JP",
    "jv" => "ID",
    "kn" => "IN",
    "kk" => "KZ",
    "km" => "KH",
    "rw" => "RW",
    "ko" => "KR",
    "ku" => "TR",
    "ky" => "KG",
    "lo" => "LA",
    "la" => "VA",
    "lv" => "LV",
    "lt" => "LT",
    "lb" => "LU",
    "mk" => "MK",
    "mg" => "MG",
    "ms" => "MY",
    "ml" => "IN",
    "mt" => "MT",
    "mi" => "NZ",
    "mr" => "IN",
    "mn" => "MN",
    "ne" => "NP",
    "no" => "NO",
    "ny" => "MW",
    "or" => "IN",
    "ps" => "AF",
    "fa" => "IR",
    "pl" => "PL",
    "pt" => "PT",
    "pa" => "IN",
    "ro" => "RO",
    "ru" => "RU",
    "sm" => "WS",
    "gd" => "GB",
    "sr" => "RS",
    "st" => "LS",
    "sn" => "ZW",
    "sd" => "PK",
    "si" => "LK",
    "sk" => "SK",
    "sl" => "SI",
    "so" => "SO",
    "es" => "ES",
    "su" => "ID",
    "sw" => "TZ",
    "sv" => "SE",
    "tl" => "PH",
    "tg" => "TJ",
    "ta" => "IN",
    "tt" => "RU",
    "te" => "IN",
    "th" => "TH",
    "tr" => "TR",
    "tk" => "TM",
    "uk" => "UA",
    "ur" => "PK",
    "ug" => "CN",
    "uz" => "UZ",
    "vi" => "VN",
    "cy" => "GB",
    "fy" => "NL",
    "xh" => "ZA",
    "yi" => "IL",
    "yo" => "NG",
    "zu" => "ZA"
);
    return isset($languages[$languageCode]) ? strtolower($languages[$languageCode]) : null;
}


function remove_invalid_characters($str)
{
  return str_ireplace(['\'', '"', ',', ';', '<', '>', '?'], ' ', $str);
}

function translate($key = null, $replace = [], $locale = null)
{
  if (is_null($key)) {
    return null;
  }
  if (
    strpos($key, 'validation.') === 0 ||
    strpos($key, 'passwords.') === 0 ||
    strpos($key, 'pagination.') === 0 ||
    strpos($key, 'auth.') === 0
  ) {
    return app('translator')->get($key, $replace, $locale);
  }
  if ($key) {
    $lang = app()->getLocale();
    try {
      $lang_array = file_get_contents(base_path('resources/lang/' . $lang . '.json'));
      if ($lang_array) {
        $lang_array = json_decode($lang_array, true);
        $processed_key = ucfirst(str_replace('_', ' ', remove_invalid_characters($key)));
        if (!array_key_exists($key, $lang_array)) {
          $lang_array[$key] = $processed_key;
          if ($lang != 'en') {
            $translated = auto_translator($processed_key, 'en', $lang);
            $lang_array[$key] = $translated;
          }
          $flags = JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES;
          $str =  json_encode($lang_array, $flags);
          file_put_contents(base_path('resources/lang/' . $lang . '.json'), $str);
          $result = $processed_key;
        }
      }
    } catch (\Exception $exception) {
    }
  }

  return app('translator')->get($key, $replace, $locale);
}


function uploadImage(string $dir, string $format = 'png', $image = null)
{
  if ($image != null) {
    $imageName = \Carbon\Carbon::now()->toDateString() . "-" . uniqid() . "." . $format;
    if (!Storage::disk('public')->exists($dir)) {
      Storage::disk('public')->makeDirectory($dir);
    }
    Storage::disk('public')->putFileAs($dir, $image, $imageName);
  } else {
    $imageName = 'def.png';
  }

  return $imageName;
}

function uploadImageReplace(string $dir, $old_image, string $format = 'png', $image = null)
{
  if ($image == null) {
    return $old_image;
  }
  if (Storage::disk('public')->exists($dir . $old_image)) {
    Storage::disk('public')->delete($dir . $old_image);
  }
  $imageName = uploadImage($dir, $format, $image);
  return $imageName;
}