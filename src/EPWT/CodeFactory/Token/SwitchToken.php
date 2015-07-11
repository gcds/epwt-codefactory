<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class SwitchToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class SwitchToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'switch', $lineNumber = null)
    {
        parent::__construct(T_SWITCH, $value, $lineNumber);
    }
}