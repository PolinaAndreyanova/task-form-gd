<?php
function textHandler(string $text): array
{
    $arStrings = [];
    $str = $text[0];

    for ($i = 1; $i < strlen($text); $i++) {
        if ($i % 25 !== 0) {
            $str .= $text[$i];
        } else {
            $arStrings[] = $str;
            $str = $text[$i];
        }
    }

    $arStrings[] = $str;

    return $arStrings;
}
