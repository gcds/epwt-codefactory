<?php

namespace EPWT\CodeFactory;

/**
 * Class Tokenizer
 * @package EPWT\CodeFactory
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class Tokenizer
{
    const T_NEW_LINE = 10001;
    const T_TAB = 10002;
    const T_LEFT_SQUARE_BRACKET = 10003;
    const T_RIGHT_SQUARE_BRACKET = 10004;
    const T_EQUALS_SIGN = 10005;
    const T_SEMICOLON = 10006;
    const T_LEFT_PARENTHESIS = 10007;
    const T_RIGHT_PARENTHESIS = 10008;
    const T_RIGHT_CURLY_BRACKET = 10009;
    const T_LEFT_CURLY_BRACKET = 10010;
    const T_COMMA = 10011;
    const T_HYPHEN = 10012;
    const T_EXCLAMATION_MARK = 10013;
    const T_DOT = 10014;
    const T_LESS_THAN = 10015;
    const T_GREATER_THAN = 10016;

    /**
     * @var int
     */
    protected $currentLine;

    public function __construct()
    {
        $this->currentLine = 0;
    }

    public function tokenGetAll($code)
    {
        $this->currentLine = 0;
        $phpTokens = token_get_all($code);
        $tokens = [];

        foreach ($phpTokens as $token) {
            if (is_array($token)) {
                $this->currentLine = $token[2];

                if (T_WHITESPACE === $token[0]) {
                    $tokens = array_merge($tokens, $this->parseWhitespaceToken($token));
                    continue;
                }

                $tokens[] = $token;
            } else {
                $tokens[] = $this->parseCharacterToToken($token);
            }
        }

        return $tokens;
    }

    protected function parseCharacterToToken($character)
    {
        if (1 === strlen($character)) {
            switch($character) {
                case '[':
                    return [self::T_LEFT_SQUARE_BRACKET, '[', $this->currentLine];
                case ']':
                    return [self::T_RIGHT_SQUARE_BRACKET, ']', $this->currentLine];
                case '(':
                    return [self::T_LEFT_PARENTHESIS, '(', $this->currentLine];
                case ')':
                    return [self::T_RIGHT_PARENTHESIS, ')', $this->currentLine];
                case '{':
                    return [self::T_LEFT_CURLY_BRACKET, '{', $this->currentLine];
                case '}':
                    return [self::T_RIGHT_CURLY_BRACKET, '}', $this->currentLine];
                case '<':
                    return [self::T_LESS_THAN, '<', $this->currentLine];
                case '>':
                    return [self::T_GREATER_THAN, '>', $this->currentLine];
                case '=':
                    return [self::T_EQUALS_SIGN, '=', $this->currentLine];
                case ';':
                    return [self::T_SEMICOLON, ';', $this->currentLine];
                case ',':
                    return [self::T_COMMA, ',', $this->currentLine];
                case '-':
                    return [self::T_HYPHEN, '-', $this->currentLine];
                case '!':
                    return [self::T_EXCLAMATION_MARK, '!', $this->currentLine];
                case '.':
                    return [self::T_DOT, '.', $this->currentLine];
                default:
                    throw new \Exception('Found undocumented character "' . $character . '"');
            }
        } else {
            throw new \Exception('Found undocumented character "' . $character . '"');
        }
    }

    protected function parseWhitespaceToken($token)
    {
        $tokens = [];

        $splitData = preg_split('/(\r\n|\n|\t)/', $token[1], -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);

        foreach ($splitData as $data) {
            if ($data === "\r\n" || $data === "\n") {
                $tokens[] = [self::T_NEW_LINE, $data, $this->currentLine++];
            } else if ($data === "\t") {
                $tokens[] = [self::T_TAB, $data, $this->currentLine];
            } else {
                $tokens[] = [$token[0], $data, $this->currentLine];
            }
        }

        return $tokens;
    }
}
