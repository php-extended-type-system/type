<?php

declare(strict_types=1);

namespace ExtendedTypeSystem\Type;

use ExtendedTypeSystem\Type;

/**
 * @psalm-api
 * @psalm-immutable
 * @template-covariant TType
 */
final class Parameter
{
    /**
     * @param Type<TType> $type
     */
    public function __construct(
        public readonly Type $type = MixedType::self,
        public readonly bool $hasDefault = false,
        public readonly bool $variadic = false,
    ) {
        \assert(!($hasDefault && $variadic), 'Parameter can be either default or variadic.');
    }
}
