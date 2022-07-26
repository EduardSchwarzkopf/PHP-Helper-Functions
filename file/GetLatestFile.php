<?php

/**
 * Returns the most recent file by filetime.
 *
 * @param array $files
 * @return string $recentFile
 */

function GetLatestFile(array $files)
{
    $files = array_combine($files, array_map('filemtime', $files));
    arsort($files);
    $recentFile = key($files);
    return $recentFile;
}
