<?php

use JTL\phpQuery\phpQueryObject;
use JTL\phpQuery\phpQuery;

/**
 * Shortcut to phpQuery::pq($arg1, $context)
 * Chainable.
 *
 * @see phpQuery::pq()
 * @param $arg1
 * @param $context
 * @return phpQueryObject
 * @author Tobiasz Cudnik <tobiasz.cudnik/gmail.com>
 * @package phpQuery
 */
function pq($arg1, $context = null)
{
    return \call_user_func_array([phpQuery::class, 'pq'], \func_get_args());
}
