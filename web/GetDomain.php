<?php

/**
 * Returns the domain of the host.
 *
 * @return string $domain
 */


function GetDomain(): string
{
    $host = $_SERVER['HTTP_HOST'];
    preg_match("/[^\.\/]+\.[^\.\/]+$/", $host, $matches);
    return $matches[0];
}
