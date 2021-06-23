<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\StringHelper;

abstract class BaseStringHelper
{

    public static function startsWith(string $haystack, string $needle) : bool
    {
        if ((string) $needle !== '' && strncmp($haystack, $needle, strlen($needle)) === 0)
        {
            return true;
        }
    
        return false;
    }

    public static function endsWith(string $haystack, string $needle) : bool
    {
        if ($needle !== '' && substr($haystack, -strlen($needle)) === (string) $needle)
        {
            return true;
        }
        
        return false;
    }

}