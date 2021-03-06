<?php

namespace Cocur\Chain\Link;
use Cocur\Chain\Chain;

/**
 * Replace
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Replace
{
    /**
     * @param Chain|array $array
     *
     * @return Chain
     */
    public function replace($array)
    {
        $this->array = array_replace($this->array, $array instanceof Chain ? $chain->array : $array);

        return $this;
    }
}
