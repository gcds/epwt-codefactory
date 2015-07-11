<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class VarToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class VarToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'var', $lineNumber = null)
    {
        parent::__construct(T_VAR, $value, $lineNumber);
    }
}
