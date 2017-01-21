<?php

namespace AppBundle\Model;

/**
 * Represents a Bag model.
 *
 * @author Binh Tran <tranthienbinh1989@gmail.com>
 */
abstract class Bag implements Packable
{
    /**
     * @var array $items
     */
    protected $items = [];
}