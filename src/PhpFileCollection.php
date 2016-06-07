<?php

declare (strict_types = 1);

namespace Mihaeu\PhpDependencies;

class PhpFileCollection extends AbstractCollection
{
    public function add(PhpFile $file) : PhpFileCollection
    {
        $clone = clone $this;
        $clone->collection[] = $file;

        return $clone;
    }

    public function get(int $i) : PhpFile
    {
        if (!array_key_exists($i, $this->collection)) {
            throw new IndexOutOfBoundsException();
        }

        return $this->collection[$i];
    }

    public function equals(PhpFileCollection $other) : bool
    {
        return $this->collection === $other->collection;
    }
}
