<?php

namespace JTL\phpQuery;

/**
 * Callback type which on execution returns reference passed during creation.
 *
 * @author Tobiasz Cudnik <tobiasz.cudnik/gmail.com>
 */
class CallbackReturnReference extends Callback
{
    /**
     * @var
     */
    protected $reference;

    /**
     * CallbackReturnReference constructor.
     * @param      $reference
     * @param null $name
     */
    public function __construct(&$reference, $name = null)
    {
        $this->reference =& $reference;
        $this->callback  = [$this, 'callback'];
    }

    /**
     * @return mixed
     */
    public function callback()
    {
        return $this->reference;
    }
}
