<?php

namespace Barn2\Plugin\WC_Product_Options\Dependencies\Illuminate\Database\Events;

/** @internal */
class NoPendingMigrations
{
    /**
     * The migration method that was called.
     *
     * @var string
     */
    public $method;
    /**
     * Create a new event instance.
     *
     * @param  string  $method
     * @return void
     */
    public function __construct($method)
    {
        $this->method = $method;
    }
}