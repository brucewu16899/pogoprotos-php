<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Enums/Gender.proto
 */


namespace POGOProtos\Enums;

/**
 * Protobuf enum : POGOProtos.Enums.Gender
 */
class Gender extends \Protobuf\Enum
{

    /**
     * MALE = 0
     */
    const MALE_VALUE = 0;

    /**
     * FEMALE = 1
     */
    const FEMALE_VALUE = 1;

    /**
     * @var \POGOProtos\Enums\Gender
     */
    protected static $MALE = null;

    /**
     * @var \POGOProtos\Enums\Gender
     */
    protected static $FEMALE = null;

    /**
     * @return \POGOProtos\Enums\Gender
     */
    public static function MALE()
    {
        if (self::$MALE !== null) {
            return self::$MALE;
        }

        return self::$MALE = new self('MALE', self::MALE_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\Gender
     */
    public static function FEMALE()
    {
        if (self::$FEMALE !== null) {
            return self::$FEMALE;
        }

        return self::$FEMALE = new self('FEMALE', self::FEMALE_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Enums\Gender
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::MALE();
            case 1: return self::FEMALE();
            default: return null;
        }
    }


}

