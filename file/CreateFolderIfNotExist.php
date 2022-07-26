<?php

/**
 * Creates a folder.
 *
 * @param string $folderPath
 * @return ?bool
 */


function CreateFolderIfNotExist(string $folderPath): ?bool
{
    if (is_dir($folderPath) == false) {
        return mkdir($folderPath, 0755, true);
    }

    // already exist
    return null;
}
