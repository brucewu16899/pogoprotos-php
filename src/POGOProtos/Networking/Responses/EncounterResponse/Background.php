<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Responses/EncounterResponse.proto
 */


namespace POGOProtos\Networking\Responses\EncounterResponse;

/**
 * Protobuf enum : POGOProtos.Networking.Responses.EncounterResponse.Background
 */
class Background extends \Protobuf\Enum
{

    /**
     * PARK = 0
     */
    const PARK_VALUE = 0;

    /**
     * DESERT = 1
     */
    const DESERT_VALUE = 1;

    /**
     * @var \POGOProtos\Networking\Responses\EncounterResponse\Background
     */
    protected static $PARK = null;

    /**
     * @var \POGOProtos\Networking\Responses\EncounterResponse\Background
     */
    protected static $DESERT = null;

    /**
     * @return \POGOProtos\Networking\Responses\EncounterResponse\Background
     */
    public static function PARK()
    {
        if (self::$PARK !== null) {
            return self::$PARK;
        }

        return self::$PARK = new self('PARK', self::PARK_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\EncounterResponse\Background
     */
    public static function DESERT()
    {
        if (self::$DESERT !== null) {
            return self::$DESERT;
        }

        return self::$DESERT = new self('DESERT', self::DESERT_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Networking\Responses\EncounterResponse\Background
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::PARK();
            case 1: return self::DESERT();
            default: return null;
        }
    }


}

