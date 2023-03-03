<?php

declare(strict_types=1);

namespace ExtendedTypeSystem\Type;

use ExtendedTypeSystem\Type;
use ExtendedTypeSystem\TypeVisitor;

/**
 * @psalm-api
 * @psalm-immutable
 * @template-covariant TObject of object
 * @implements Type<TObject>
 */
final class StaticType implements Type
{
    /**
     * @no-named-arguments
     * @param class-string<TObject> $declaringClass
     * @param list<Type> $templateArguments
     */
    public function __construct(
        public readonly string $declaringClass,
        public readonly array $templateArguments = [],
    ) {
    }

    public function accept(TypeVisitor $visitor): mixed
    {
        return $visitor->visitStatic($this);
    }
}
