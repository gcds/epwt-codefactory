<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class StringVarnameToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class StringVarnameToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = null, $lineNumber = null)
    {
        parent::__construct(T_STRING_VARNAME, $value, $lineNumber);
    }
}
