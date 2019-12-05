<?php

namespace JTL\phpQuery;

/**
 * Callback type which on execution returns value passed during creation.
 *
 * @author Tobiasz Cudnik <tobiasz.cudnik/gmail.com>
 */
class CallbackReturnValue extends Callback
{
    /**
     * @var
     */
    protected $value;

    /**
     * @var null
     */
    public $name;

    /**
     * CallbackReturnValue constructor.
     * @param      $value
     * @param null $name
     */
    public function __construct($value, $name = null)
    {
        $this->value    =& $value;
        $this->name     = $name;
        $this->callback = [$this, 'callback'];
    }

    /**
     * @return mixed
     */
    public function callback()
    {
        return $this->value;
    }

    /**
     * @return mixed|string
     */
    public function __toString()
    {
        return $this->getName();
    }
}
