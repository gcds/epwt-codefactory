<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class PublicToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class PublicToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'public', $lineNumber = null)
    {
        parent::__construct(T_PUBLIC, $value, $lineNumber);
    }
}
