<?php

namespace AppBundle\Model;

/**
 * Interface Packable.
 *
 * @author Binh Tran <tranthienbinh1989@gmail.com>
 */
interface Packable
{
    /**
     * @param string $item
     * @return boolean
     */
    public function add($item);

    /**
     * @param string $item
     * @return string|null
     */
    public function find($item);

    /**
     * @param string $item
     * @return boolean
     */
    public function remove($item);

    /**
     * @return boolean
     */
    public function isEmpty();

    /**
     * @return integer
     */
    public function count();

    /**
     * @return array
     */
    public function getItems();
}