<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
use BasicApp\String\StringHelper;

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

if (!function_exists('string_quote'))
{
    public function string_quote(string $value) : string
    {
        return StringHelper::quote($value);
    }
}

if (!function_exists('string_is'))
{
    public function string_is($pattern, $value, &$matches = null, $flags = null) : bool
    {
        return StringHelper::is($pattern, $value, $matches, $flags);
    }
}

if (!function_exists('string_replace_first'))
{
    public function string_replace_first(string $search, string $replace, string $subject) : string
    {
        return StringHelper::replaceFirst($search, $replace, $subject);
    }
}

if (!function_exists('string_replace_last'))
{
    public function string_replace_last(string $search, string $replace, string $subject) : string
    {
        return StringHelper::replaceLast($search, $replace, $subject);
    }
}