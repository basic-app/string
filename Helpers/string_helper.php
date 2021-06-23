<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
use BasicApp\StringHelper\StringHelper;

if (!function_exists('string_starts_with'))
{
    public function string_starts_with(string $haystack, string $needle) : bool
    {
        return StringHelper::startsWith($haystack, $needle);
    }
}

if (!function_exists('string_ends_with'))
{
    public function string_ends_with(string $haystack, string $needle) : bool
    {
        return StringHelper::endsWith($haystack, $needle);
    }
}