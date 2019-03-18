<?php
/**
 * Auto generated from ThirdV2.proto at 2019-03-18 06:20:37
 *
 * ThirdV2 package
 */

namespace ThirdV2 {
/**
 * LocationType enum
 */
final class LocationType
{
    const GPS = 1;
    const NET = 2;
    const OTHER = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'GPS' => self::GPS,
            'NET' => self::NET,
            'OTHER' => self::OTHER,
        );
    }
}
}