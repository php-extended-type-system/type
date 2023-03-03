<?php

declare(strict_types=1);

namespace ExtendedTypeSystem\Type;

use ExtendedTypeSystem\Type;
use ExtendedTypeSystem\TypeVisitor;

/**
 * @psalm-api
 * @psalm-immutable
 * @template-covariant TReturn
 * @implements Type<\Closure(): TReturn>
 */
final class ClosureType implements Type
{
    /**
     * @param list<Parameter> $parameters
     * @param ?Type<TReturn> $returnType
     */
    public function __construct(
        public readonly array $parameters = [],
        public readonly ?Type $returnType = null,
    ) {
    }

    public function accept(TypeVisitor $visitor): mixed
    {
        return $visitor->visitClosure($this);
    }
}
