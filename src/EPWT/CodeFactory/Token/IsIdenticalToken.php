<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class IsIdenticalToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class IsIdenticalToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '===', $lineNumber = null)
    {
        parent::__construct(T_IS_IDENTICAL, $value, $lineNumber);
    }
}
