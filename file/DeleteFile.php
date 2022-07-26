<?php

/**
 * Deletes file if exists.
 *
 * @param string $path
 * @return bool
 */

function DeleteFile($path): bool
{
    if (file_exists($path)) {
        unlink($path);
    }

    return !file_exists($path);
}
