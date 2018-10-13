<?php


namespace POData\Writers\Json;


use SplEnum;

/**
 * Class JsonLightMetadataLevel
 * @package POData\Writers\Json
 *
 * @method static \POData\Writers\Json\JsonLightMetadataLevel NONE
 * @method static \POData\Writers\Json\JsonLightMetadataLevel MINIMAL
 * @method static \POData\Writers\Json\JsonLightMetadataLevel FULL()
 */
class JsonLightMetadataLevel extends SplEnum {
    //using these const because it makes them easy to use in writer canHandle..but maybe not such a good idea
    const NONE = "odata=nometadata";

    const MINIMAL = "odata=minimalmetadata";

    const FULL = "odata=fullmetadata";

}