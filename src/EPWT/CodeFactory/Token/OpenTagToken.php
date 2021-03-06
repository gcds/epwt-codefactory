<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class OpenTagToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class OpenTagToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = "<?php\n", $lineNumber = null)
    {
        parent::__construct(T_OPEN_TAG, $value, $lineNumber);
    }
}
