<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class ForeachToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class ForeachToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'foreach', $lineNumber = null)
    {
        parent::__construct(T_FOREACH, $value, $lineNumber);
    }
}
