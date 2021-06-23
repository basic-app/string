<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\StringHelper;

abstract class BaseStringHelper
{

    public static $quoteDelimiter = '/'; 

    public static function quote(string $value) : string
    {
        // Note that / is not a special regular expression character. 
        // The special regular expression characters are: . \ + * ? [ ^ ] $ ( ) { } = ! < > | : - #

        return preg_quote($value, $this->quoteDelimiter);
    }

    public static function is($pattern, $value, &$matches = null, $flags = null)
    {
        if ($pattern == $value) 
        {
            return true;
        }

        if (preg_match(static::$quoteDelimiter . '^' . $pattern . '\z' . static::$quoteDelimiter . 'u', $value, $matches, $flags) === 1) 
        {
            return true;
        }    

        return false;
    }

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

    public static function replaceFirst(string $search, string $replace, string $subject) : string
    {
        if ($search == '')
        {
            return $subject;
        }

        $position = strpos($subject, $search);

        if ($position !== false)
        {
            return substr_replace($subject, $replace, $position, strlen($search));
        }

        return $subject;
    }

    public static function replaceLast(string $search, string $replace, string $subject) : string
    {
        $position = strrpos($subject, $search);

        if ($position !== false)
        {
            return substr_replace($subject, $replace, $position, strlen($search));
        }

        return $subject;
    }

}