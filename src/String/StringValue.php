<?php

/*
 * This file is part of the Eophantasy package.
 *
 * (c) Ilya Sitnikov <sitnikovik@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eophantasy\Types\String;

/**
 * A class representing a string.
 * 
 * This class is immutable, meaning that its value cannot be changed after it is created.
 */
class StringValue
{
    /**
     * The stored value.
     * 
     * @var string
     */
    private $value;

    /**
     * Creates a new String instance.
     * 
     * @param string $value The string value.
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * Concatenates provided string to the current string and returns the new one.
     * 
     * @return StringValue
     */
    public function concat(StringValue $string): StringValue
    {
        return new StringValue($this->value . $string->value);
    }
}