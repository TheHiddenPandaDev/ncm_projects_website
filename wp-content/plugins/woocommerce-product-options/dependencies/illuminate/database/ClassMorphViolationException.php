<?php

namespace Barn2\Plugin\WC_Product_Options\Dependencies\Illuminate\Database;

use RuntimeException;
/** @internal */
class ClassMorphViolationException extends RuntimeException
{
    /**
     * The name of the affected Eloquent model.
     *
     * @var string
     */
    public $model;
    /**
     * Create a new exception instance.
     *
     * @param  object  $model
     */
    public function __construct($model)
    {
        $class = \get_class($model);
        parent::__construct("No morph map defined for model [{$class}].");
        $this->model = $class;
    }
}
