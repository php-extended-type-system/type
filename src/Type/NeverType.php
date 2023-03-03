<?php

declare(strict_types=1);

namespace ExtendedTypeSystem\Type;

use ExtendedTypeSystem\Type;
use ExtendedTypeSystem\TypeVisitor;

/**
 * @psalm-api
 * @psalm-immutable
 * @implements Type<never>
 */
enum NeverType implements Type
{
    /**
     * @internal
     * @psalm-internal ExtendedTypeSystem
     */
    case self;

    public function accept(TypeVisitor $visitor): mixed
    {
        return $visitor->visitNever($this);
    }
}
