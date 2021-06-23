<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
if (!function_exists('string_starts_with'))
{
    public function string_starts_with(string $haystack, string $needle) : bool
    {
        if ((string) $needle !== '' && strncmp($haystack, $needle, strlen($needle)) === 0)
        {
            return true;
        }
    
        return false;
    }
}