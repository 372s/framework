<?php


/**
 * Determine whether the current environment is Windows based.
 *
 * @return bool
 */
function windows_os()
{
    return strtolower(substr(PHP_OS, 0, 3)) === 'win';
}

/**
 * 导入视图
 * @throws \InvalidArgumentException
 * @param mixed $name
 * @return object
 */
function view($name = null)
{
    return View::make($name);
}