<?php

namespace POData\Providers\Query;

use SplEnum;


/**
 * @method static \POData\Providers\Query\QueryType ENTITIES
 * @method static \POData\Providers\Query\QueryType COUNT()
 * @method static \POData\Providers\Query\QueryType ENTITIES_WITH_COUNT()
 */
class QueryType extends SplEnum {

    const ENTITIES = "ENTITIES";
    const COUNT = "COUNT";
    const ENTITIES_WITH_COUNT = "ENTITIES_WITH_COUNT";

}