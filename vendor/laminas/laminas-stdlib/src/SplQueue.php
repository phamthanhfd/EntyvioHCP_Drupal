<?php

declare(strict_types=1);

namespace Laminas\Stdlib;

use ReturnTypeWillChange;
use Serializable;
use UnexpectedValueException;

use function is_array;
use function serialize;
use function sprintf;
use function unserialize;

/**
 * Serializable version of SplQueue
 */
class SplQueue extends \SplQueue implements Serializable
{
    /**
     * Return an array representing the queue
     *
     * @return array
     */
    public function toArray()
    {
        $array = [];
        foreach ($this as $item) {
            $array[] = $item;
        }
        return $array;
    }

    /**
     * Serialize
     *
     * @return string
     */
    #[ReturnTypeWillChange]
    public function serialize()
    {
        return serialize($this->__serialize());
    }

    /**
     * Magic method used for serializing of an instance.
     *
     * @return array
     */
    #[ReturnTypeWillChange]
    public function __serialize()
    {
        return $this->toArray();
    }

    /**
     * Unserialize
     *
     * @param  string $data
     * @return void
     */
    #[ReturnTypeWillChange]
    public function unserialize($data)
    {
        $toUnserialize = unserialize($data);
        if (! is_array($toUnserialize)) {
            throw new UnexpectedValueException(sprintf(
                'Cannot deserialize %s instance; corrupt serialization data',
                self::class
            ));
        }

        $this->__unserialize($toUnserialize);
    }

   /**
    * Magic method used to rebuild an instance.
    *
    * @param array $data Data array.
    * @return void
    */
    #[ReturnTypeWillChange]
    public function __unserialize($data)
    {
        foreach ($data as $item) {
            $this->push($item);
        }
    }
}
