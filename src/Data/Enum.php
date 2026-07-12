<?php

$toCharCode = function($c) {
    if (\function_exists('mb_ord')) {
        return \mb_ord($c, "UTF-8");
    }
    // Very rudimentary fallback
    return \ord($c);
};

$fromCharCode = function($c) {
    if (\function_exists('mb_chr')) {
        return \mb_chr($c, "UTF-8");
    }
    return \chr($c);
};

$exports['toCharCode'] = $toCharCode;
$exports['fromCharCode'] = $fromCharCode;
return $exports;
