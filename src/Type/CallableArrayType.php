<?php

declare(strict_types=1);

namespace ExtendedTypeSystem\Type;

use ExtendedTypeSystem\Type;
use ExtendedTypeSystem\TypeVisitor;

/**
 * @psalm-api
 * @psalm-immutable
 * @implements Type<callable-array>
 */
enum CallableArrayType implements Type
{
    /**
     * @internal
     * @psalm-internal ExtendedTypeSystem
     */
    case self;

    public function accept(TypeVisitor $visitor): mixed
    {
        return $visitor->visitCallableArray($this);
    }
}
