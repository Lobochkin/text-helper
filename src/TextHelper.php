<?php

namespace Lobochkin\TextHelper;

class TextHelper
{
    public static function slug(string $text): string
    {
        $text = trim($text);
        $text = strtolower($text);
        $text = preg_replace('/[^a-z0-9]+/', '-', $text);
        $text = trim($text, '-');

        return $text;
    }
}