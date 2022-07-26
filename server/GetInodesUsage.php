<?php

/**
 * Returns the current diskusage of the server.
 *
 * @return int $usage
 */

function GetDiskUsage(): int
{

    $command = 'df -i /';
    $output = exec($command);

    preg_match('/ (\d+)%/', $output, $matches);

    $usage = 0.0;

    if (is_array($matches) && count($matches) > 0 && is_numeric($matches[1])) {
        $usage = floatval($matches[1]);
    }

    return $usage;
}
