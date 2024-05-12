<?php
function textHandler(string $text): array
{
    $strings = [];
    $str = $text[0];

    for ($i = 1; $i < strlen($text); $i++) {
        if ($i % 25 !== 0) {
            $str .= $text[$i];
        } else {
            $strings[] = $str;
            $str = $text[$i];
        }
    }

    $strings[] = $str;

    return $strings;
}
