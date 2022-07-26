<?php

/**
 * Returns file size to human readable format.
 *
 * @param int $bytes
 * @param int $decimals
 * @return string $size
 */

function HumanFileSize(int $bytes, int $decimals = 2): string
{
    $sz = 'BKMGTP';
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor];
}
