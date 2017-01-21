<?php
namespace AppBundle\Model;

/**
 * Represents a Backpack model.
 *
 * @author Binh Tran <tranthienbinh1989@gmail.com>
 */
class Backpack extends Bag
{
    public function __constructor() {
        $this->items = [];
    }

    /**
     * @param string $item
     * @return boolean
     */
    public function add($item)
    {
        if ($this->find($item) === null) {
            $this->items[] = $item;
            return true;
        }

        return false;
    }

    /**
     * @param string $item
     * @return string|null
     */
    public function find($item)
    {
        foreach ($this->items as $i) {
            if($i === $item) {
                return $i;
            }
        }

        return null;
    }

    /**
     * @param string $item
     * @return boolean
     */
    public function remove($item)
    {
        foreach ($this->items as $k => $v) {
            if($v === $item) {
                unset($this->items[$k]);
                return true;
            }
        }

        return false;
    }

    /**
     * @return boolean
     */
    public function isEmpty()
    {
        return count($this->items) === 0;
    }

    /**
     * @return integer
     */
    public function count()
    {
        return count($this->items);
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }
}