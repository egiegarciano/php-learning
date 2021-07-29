<?php

// Responsible for fetching information about the current browser request:
class Request
{
    public static function uri()
    {
        // $_SERVER is a PHP super global array containing information about
        // headers, paths, and script locations.  trim() is a PHP function
        // that normally removes blank spaces from the beginning and end of
        // a string, but the character(s) to be removed can be specified as
        // the second argument:
        return $uri = trim($_SERVER['REQUEST_URI'], '/');
    }
}