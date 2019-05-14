<?php


namespace TheCodingMachine\GraphQLite\Hydrators;

use GraphQL\Type\Definition\InputObjectType;
use GraphQL\Type\Definition\ResolveInfo;


// TODO: we can get rid of Hydrators completely
// TODO: we can get rid of Hydrators completely
// TODO: we can get rid of Hydrators completely
// TODO: we can get rid of Hydrators completely
// TODO: we can get rid of Hydrators completely
// TODO: we can get rid of Hydrators completely
// TODO: we can get rid of Hydrators completely
// TODO: we can get rid of Hydrators completely
// TODO: we can get rid of Hydrators completely
// TODO: we can get rid of Hydrators completely
// TODO: we can get rid of Hydrators completely
// TODO: we can get rid of Hydrators completely
// Because the only input type accepted by TypeMapperInterface is now a RecursiveMutableInputObjectType!!!

/**
 * Hydrates an object given an array and a GraphQL type.
 */
interface HydratorInterface
{
    /**
     * Whether this hydrator can hydrate the passed data.
     *
     * @param mixed[] $data
     * @param InputObjectType $type
     * @return bool
     */
    public function canHydrate(array $data, InputObjectType $type): bool;

    /**
     * Hydrates/returns an object based on a PHP array and a GraphQL type.
     *
     * @param mixed[] $data
     * @param InputObjectType $type
     * @return object
     * @throws CannotHydrateException
     */
    public function hydrate($source, array $data, $context, ResolveInfo $resolveInfo, InputObjectType $type);
}
