<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class StringCastToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class StringCastToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '(string)', $lineNumber = null)
    {
        parent::__construct(T_STRING_CAST, $value, $lineNumber);
    }
}
