<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class ConstantEncapsedStringToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class ConstantEncapsedStringToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '\'\'', $lineNumber = null)
    {
        parent::__construct(T_CONSTANT_ENCAPSED_STRING, $value, $lineNumber);
    }
}
