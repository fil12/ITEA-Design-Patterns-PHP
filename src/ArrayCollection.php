<?php

namespace App;

class ArrayCollection implements \Iterator, \Countable, \ArrayAccess
{
    private $items;
    private $index = 0;

    public function __construct($items = [])
    {
        $this->items = $items;
    }

    public function current()
    {
        return $this->items[$this->index];
    }

    public function next()
    {
        ++$this->index;
    }

    public function key()
    {
        return $this->index;
    }

    public function valid()
    {
        return isset($this->items[$this->index]);
    }

    public function rewind()
    {
        $this->index = 0;
    }

    public function count()
    {
        return \count($this->items);
    }

    public function sort()
    {
        \sort($this->items);
    }

    public function offsetExists($offset)
    {
        $keys = \explode('.', $offset);
        $item = $this->items[\array_shift($keys)];

        foreach ($keys as $key) {
            $item = $item[$key];
        }

        return true;

//        return isset($this->items[$offset]);
    }

    public function offsetGet($offset)
    {
        $keys = \explode('.', $offset);
        $item = $this->items[\array_shift($keys)];

        foreach ($keys as $key) {
            $item = $item[$key];
        }

        return $item;

//        return $this->items[$offset];
    }

    public function offsetSet($offset, $value)
    {
//        return $this->items[$offset] = $value;
        throw $this->createNotSupportedException();
    }

    public function offsetUnset($offset)
    {
//        unset($this->items[$offset]);
        throw $this->createNotSupportedException();
    }

    private function createNotSupportedException()
    {
        return new \LogicException('Array read only');
    }
}
