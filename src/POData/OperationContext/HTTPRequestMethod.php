<?php


namespace POData\OperationContext;

use SplEnum;

/**
 * Class HTTPRequestMethod
 * @package POData\OperationContext
 *
 * @method static \POData\OperationContext\HTTPRequestMethod GET
 * @method static \POData\OperationContext\HTTPRequestMethod POST
 * @method static \POData\OperationContext\HTTPRequestMethod PUT
 * @method static \POData\OperationContext\HTTPRequestMethod DELETE
 * @method static \POData\OperationContext\HTTPRequestMethod PATCH
 * @method static \POData\OperationContext\HTTPRequestMethod MERGE
 */
class HTTPRequestMethod extends SplEnum {

    const GET = "GET";
    const POST = "POST";
    const PUT = "PUT";
    const DELETE = "DELETE";
    const PATCH = "PATCH";
    const MERGE = "MERGE";
}