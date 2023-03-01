<?php

declare(strict_types=1);

namespace ExtendedTypeSystem;

/**
 * This interface must not be implemented outside ExtendedTypeSystem!
 *
 * @psalm-internal ExtendedTypeSystem
 * @psalm-api
 * @psalm-immutable
 * @template-covariant T
 */
interface Type
{
    /**
     * @template TReturn
     * @param TypeVisitor<TReturn> $visitor
     * @return TReturn
     */
    public function accept(TypeVisitor $visitor): mixed;
}
