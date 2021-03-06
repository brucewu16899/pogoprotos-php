<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Responses/IncenseEncounterResponse.proto
 */


namespace POGOProtos\Networking\Responses\IncenseEncounterResponse;

/**
 * Protobuf enum : POGOProtos.Networking.Responses.IncenseEncounterResponse.Result
 */
class Result extends \Protobuf\Enum
{

    /**
     * INCENSE_ENCOUNTER_UNKNOWN = 0
     */
    const INCENSE_ENCOUNTER_UNKNOWN_VALUE = 0;

    /**
     * INCENSE_ENCOUNTER_SUCCESS = 1
     */
    const INCENSE_ENCOUNTER_SUCCESS_VALUE = 1;

    /**
     * INCENSE_ENCOUNTER_NOT_AVAILABLE = 2
     */
    const INCENSE_ENCOUNTER_NOT_AVAILABLE_VALUE = 2;

    /**
     * POKEMON_INVENTORY_FULL = 3
     */
    const POKEMON_INVENTORY_FULL_VALUE = 3;

    /**
     * @var \POGOProtos\Networking\Responses\IncenseEncounterResponse\Result
     */
    protected static $INCENSE_ENCOUNTER_UNKNOWN = null;

    /**
     * @var \POGOProtos\Networking\Responses\IncenseEncounterResponse\Result
     */
    protected static $INCENSE_ENCOUNTER_SUCCESS = null;

    /**
     * @var \POGOProtos\Networking\Responses\IncenseEncounterResponse\Result
     */
    protected static $INCENSE_ENCOUNTER_NOT_AVAILABLE = null;

    /**
     * @var \POGOProtos\Networking\Responses\IncenseEncounterResponse\Result
     */
    protected static $POKEMON_INVENTORY_FULL = null;

    /**
     * @return \POGOProtos\Networking\Responses\IncenseEncounterResponse\Result
     */
    public static function INCENSE_ENCOUNTER_UNKNOWN()
    {
        if (self::$INCENSE_ENCOUNTER_UNKNOWN !== null) {
            return self::$INCENSE_ENCOUNTER_UNKNOWN;
        }

        return self::$INCENSE_ENCOUNTER_UNKNOWN = new self('INCENSE_ENCOUNTER_UNKNOWN', self::INCENSE_ENCOUNTER_UNKNOWN_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\IncenseEncounterResponse\Result
     */
    public static function INCENSE_ENCOUNTER_SUCCESS()
    {
        if (self::$INCENSE_ENCOUNTER_SUCCESS !== null) {
            return self::$INCENSE_ENCOUNTER_SUCCESS;
        }

        return self::$INCENSE_ENCOUNTER_SUCCESS = new self('INCENSE_ENCOUNTER_SUCCESS', self::INCENSE_ENCOUNTER_SUCCESS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\IncenseEncounterResponse\Result
     */
    public static function INCENSE_ENCOUNTER_NOT_AVAILABLE()
    {
        if (self::$INCENSE_ENCOUNTER_NOT_AVAILABLE !== null) {
            return self::$INCENSE_ENCOUNTER_NOT_AVAILABLE;
        }

        return self::$INCENSE_ENCOUNTER_NOT_AVAILABLE = new self('INCENSE_ENCOUNTER_NOT_AVAILABLE', self::INCENSE_ENCOUNTER_NOT_AVAILABLE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\IncenseEncounterResponse\Result
     */
    public static function POKEMON_INVENTORY_FULL()
    {
        if (self::$POKEMON_INVENTORY_FULL !== null) {
            return self::$POKEMON_INVENTORY_FULL;
        }

        return self::$POKEMON_INVENTORY_FULL = new self('POKEMON_INVENTORY_FULL', self::POKEMON_INVENTORY_FULL_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Networking\Responses\IncenseEncounterResponse\Result
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::INCENSE_ENCOUNTER_UNKNOWN();
            case 1: return self::INCENSE_ENCOUNTER_SUCCESS();
            case 2: return self::INCENSE_ENCOUNTER_NOT_AVAILABLE();
            case 3: return self::POKEMON_INVENTORY_FULL();
            default: return null;
        }
    }


}

