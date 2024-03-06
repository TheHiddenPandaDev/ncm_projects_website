<?php

declare (strict_types=1);
namespace Barn2\Plugin\WC_Product_Options\Dependencies\Doctrine\Inflector\Rules;

/** @internal */
class Word
{
    /** @var string */
    private $word;
    public function __construct(string $word)
    {
        $this->word = $word;
    }
    public function getWord() : string
    {
        return $this->word;
    }
}
