<?php

/**
 * Returns a sorted list by date (last modified file first).
 *
 * @param array $files
 * @return array $files
 */


function SortFilesByDate(array $files): array
{
    usort($files, function ($x, $y) {
        return filemtime($y) < filemtime($x);
    });

    return $files;
}
