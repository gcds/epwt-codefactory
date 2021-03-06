<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class AbstractToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class AbstractToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'abstract', $lineNumber = null)
    {
        parent::__construct(T_ABSTRACT, $value, $lineNumber);
    }
}
