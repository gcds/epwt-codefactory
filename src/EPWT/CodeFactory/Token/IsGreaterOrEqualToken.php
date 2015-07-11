<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class IsGreaterOrEqualToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class IsGreaterOrEqualToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '>=', $lineNumber = null)
    {
        parent::__construct(T_IS_GREATER_OR_EQUAL, $value, $lineNumber);
    }
}
