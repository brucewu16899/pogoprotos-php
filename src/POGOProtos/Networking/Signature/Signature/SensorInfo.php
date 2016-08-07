<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Envelopes/Signature.proto
 */


namespace POGOProtos\Networking\Signature\Signature;

/**
 * Protobuf message : POGOProtos.Networking.Signature.Signature.SensorInfo
 */
class SensorInfo extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * timestamp_snapshot optional uint64 = 1
     *
     * @var int
     */
    protected $timestamp_snapshot = null;

    /**
     * magnetometer_x optional double = 3
     *
     * @var float
     */
    protected $magnetometer_x = null;

    /**
     * magnetometer_y optional double = 4
     *
     * @var float
     */
    protected $magnetometer_y = null;

    /**
     * magnetometer_z optional double = 5
     *
     * @var float
     */
    protected $magnetometer_z = null;

    /**
     * angle_normalized_x optional double = 6
     *
     * @var float
     */
    protected $angle_normalized_x = null;

    /**
     * angle_normalized_y optional double = 7
     *
     * @var float
     */
    protected $angle_normalized_y = null;

    /**
     * angle_normalized_z optional double = 8
     *
     * @var float
     */
    protected $angle_normalized_z = null;

    /**
     * accel_raw_x optional double = 10
     *
     * @var float
     */
    protected $accel_raw_x = null;

    /**
     * accel_raw_y optional double = 11
     *
     * @var float
     */
    protected $accel_raw_y = null;

    /**
     * accel_raw_z optional double = 12
     *
     * @var float
     */
    protected $accel_raw_z = null;

    /**
     * gyroscope_raw_x optional double = 13
     *
     * @var float
     */
    protected $gyroscope_raw_x = null;

    /**
     * gyroscope_raw_y optional double = 14
     *
     * @var float
     */
    protected $gyroscope_raw_y = null;

    /**
     * gyroscope_raw_z optional double = 15
     *
     * @var float
     */
    protected $gyroscope_raw_z = null;

    /**
     * accel_normalized_x optional double = 16
     *
     * @var float
     */
    protected $accel_normalized_x = null;

    /**
     * accel_normalized_y optional double = 17
     *
     * @var float
     */
    protected $accel_normalized_y = null;

    /**
     * accel_normalized_z optional double = 18
     *
     * @var float
     */
    protected $accel_normalized_z = null;

    /**
     * accelerometer_axes optional uint64 = 19
     *
     * @var int
     */
    protected $accelerometer_axes = null;

    /**
     * Check if 'timestamp_snapshot' has a value
     *
     * @return bool
     */
    public function hasTimestampSnapshot()
    {
        return $this->timestamp_snapshot !== null;
    }

    /**
     * Get 'timestamp_snapshot' value
     *
     * @return int
     */
    public function getTimestampSnapshot()
    {
        return $this->timestamp_snapshot;
    }

    /**
     * Set 'timestamp_snapshot' value
     *
     * @param int $value
     */
    public function setTimestampSnapshot($value = null)
    {
        $this->timestamp_snapshot = $value;
    }

    /**
     * Check if 'magnetometer_x' has a value
     *
     * @return bool
     */
    public function hasMagnetometerX()
    {
        return $this->magnetometer_x !== null;
    }

    /**
     * Get 'magnetometer_x' value
     *
     * @return float
     */
    public function getMagnetometerX()
    {
        return $this->magnetometer_x;
    }

    /**
     * Set 'magnetometer_x' value
     *
     * @param float $value
     */
    public function setMagnetometerX($value = null)
    {
        $this->magnetometer_x = $value;
    }

    /**
     * Check if 'magnetometer_y' has a value
     *
     * @return bool
     */
    public function hasMagnetometerY()
    {
        return $this->magnetometer_y !== null;
    }

    /**
     * Get 'magnetometer_y' value
     *
     * @return float
     */
    public function getMagnetometerY()
    {
        return $this->magnetometer_y;
    }

    /**
     * Set 'magnetometer_y' value
     *
     * @param float $value
     */
    public function setMagnetometerY($value = null)
    {
        $this->magnetometer_y = $value;
    }

    /**
     * Check if 'magnetometer_z' has a value
     *
     * @return bool
     */
    public function hasMagnetometerZ()
    {
        return $this->magnetometer_z !== null;
    }

    /**
     * Get 'magnetometer_z' value
     *
     * @return float
     */
    public function getMagnetometerZ()
    {
        return $this->magnetometer_z;
    }

    /**
     * Set 'magnetometer_z' value
     *
     * @param float $value
     */
    public function setMagnetometerZ($value = null)
    {
        $this->magnetometer_z = $value;
    }

    /**
     * Check if 'angle_normalized_x' has a value
     *
     * @return bool
     */
    public function hasAngleNormalizedX()
    {
        return $this->angle_normalized_x !== null;
    }

    /**
     * Get 'angle_normalized_x' value
     *
     * @return float
     */
    public function getAngleNormalizedX()
    {
        return $this->angle_normalized_x;
    }

    /**
     * Set 'angle_normalized_x' value
     *
     * @param float $value
     */
    public function setAngleNormalizedX($value = null)
    {
        $this->angle_normalized_x = $value;
    }

    /**
     * Check if 'angle_normalized_y' has a value
     *
     * @return bool
     */
    public function hasAngleNormalizedY()
    {
        return $this->angle_normalized_y !== null;
    }

    /**
     * Get 'angle_normalized_y' value
     *
     * @return float
     */
    public function getAngleNormalizedY()
    {
        return $this->angle_normalized_y;
    }

    /**
     * Set 'angle_normalized_y' value
     *
     * @param float $value
     */
    public function setAngleNormalizedY($value = null)
    {
        $this->angle_normalized_y = $value;
    }

    /**
     * Check if 'angle_normalized_z' has a value
     *
     * @return bool
     */
    public function hasAngleNormalizedZ()
    {
        return $this->angle_normalized_z !== null;
    }

    /**
     * Get 'angle_normalized_z' value
     *
     * @return float
     */
    public function getAngleNormalizedZ()
    {
        return $this->angle_normalized_z;
    }

    /**
     * Set 'angle_normalized_z' value
     *
     * @param float $value
     */
    public function setAngleNormalizedZ($value = null)
    {
        $this->angle_normalized_z = $value;
    }

    /**
     * Check if 'accel_raw_x' has a value
     *
     * @return bool
     */
    public function hasAccelRawX()
    {
        return $this->accel_raw_x !== null;
    }

    /**
     * Get 'accel_raw_x' value
     *
     * @return float
     */
    public function getAccelRawX()
    {
        return $this->accel_raw_x;
    }

    /**
     * Set 'accel_raw_x' value
     *
     * @param float $value
     */
    public function setAccelRawX($value = null)
    {
        $this->accel_raw_x = $value;
    }

    /**
     * Check if 'accel_raw_y' has a value
     *
     * @return bool
     */
    public function hasAccelRawY()
    {
        return $this->accel_raw_y !== null;
    }

    /**
     * Get 'accel_raw_y' value
     *
     * @return float
     */
    public function getAccelRawY()
    {
        return $this->accel_raw_y;
    }

    /**
     * Set 'accel_raw_y' value
     *
     * @param float $value
     */
    public function setAccelRawY($value = null)
    {
        $this->accel_raw_y = $value;
    }

    /**
     * Check if 'accel_raw_z' has a value
     *
     * @return bool
     */
    public function hasAccelRawZ()
    {
        return $this->accel_raw_z !== null;
    }

    /**
     * Get 'accel_raw_z' value
     *
     * @return float
     */
    public function getAccelRawZ()
    {
        return $this->accel_raw_z;
    }

    /**
     * Set 'accel_raw_z' value
     *
     * @param float $value
     */
    public function setAccelRawZ($value = null)
    {
        $this->accel_raw_z = $value;
    }

    /**
     * Check if 'gyroscope_raw_x' has a value
     *
     * @return bool
     */
    public function hasGyroscopeRawX()
    {
        return $this->gyroscope_raw_x !== null;
    }

    /**
     * Get 'gyroscope_raw_x' value
     *
     * @return float
     */
    public function getGyroscopeRawX()
    {
        return $this->gyroscope_raw_x;
    }

    /**
     * Set 'gyroscope_raw_x' value
     *
     * @param float $value
     */
    public function setGyroscopeRawX($value = null)
    {
        $this->gyroscope_raw_x = $value;
    }

    /**
     * Check if 'gyroscope_raw_y' has a value
     *
     * @return bool
     */
    public function hasGyroscopeRawY()
    {
        return $this->gyroscope_raw_y !== null;
    }

    /**
     * Get 'gyroscope_raw_y' value
     *
     * @return float
     */
    public function getGyroscopeRawY()
    {
        return $this->gyroscope_raw_y;
    }

    /**
     * Set 'gyroscope_raw_y' value
     *
     * @param float $value
     */
    public function setGyroscopeRawY($value = null)
    {
        $this->gyroscope_raw_y = $value;
    }

    /**
     * Check if 'gyroscope_raw_z' has a value
     *
     * @return bool
     */
    public function hasGyroscopeRawZ()
    {
        return $this->gyroscope_raw_z !== null;
    }

    /**
     * Get 'gyroscope_raw_z' value
     *
     * @return float
     */
    public function getGyroscopeRawZ()
    {
        return $this->gyroscope_raw_z;
    }

    /**
     * Set 'gyroscope_raw_z' value
     *
     * @param float $value
     */
    public function setGyroscopeRawZ($value = null)
    {
        $this->gyroscope_raw_z = $value;
    }

    /**
     * Check if 'accel_normalized_x' has a value
     *
     * @return bool
     */
    public function hasAccelNormalizedX()
    {
        return $this->accel_normalized_x !== null;
    }

    /**
     * Get 'accel_normalized_x' value
     *
     * @return float
     */
    public function getAccelNormalizedX()
    {
        return $this->accel_normalized_x;
    }

    /**
     * Set 'accel_normalized_x' value
     *
     * @param float $value
     */
    public function setAccelNormalizedX($value = null)
    {
        $this->accel_normalized_x = $value;
    }

    /**
     * Check if 'accel_normalized_y' has a value
     *
     * @return bool
     */
    public function hasAccelNormalizedY()
    {
        return $this->accel_normalized_y !== null;
    }

    /**
     * Get 'accel_normalized_y' value
     *
     * @return float
     */
    public function getAccelNormalizedY()
    {
        return $this->accel_normalized_y;
    }

    /**
     * Set 'accel_normalized_y' value
     *
     * @param float $value
     */
    public function setAccelNormalizedY($value = null)
    {
        $this->accel_normalized_y = $value;
    }

    /**
     * Check if 'accel_normalized_z' has a value
     *
     * @return bool
     */
    public function hasAccelNormalizedZ()
    {
        return $this->accel_normalized_z !== null;
    }

    /**
     * Get 'accel_normalized_z' value
     *
     * @return float
     */
    public function getAccelNormalizedZ()
    {
        return $this->accel_normalized_z;
    }

    /**
     * Set 'accel_normalized_z' value
     *
     * @param float $value
     */
    public function setAccelNormalizedZ($value = null)
    {
        $this->accel_normalized_z = $value;
    }

    /**
     * Check if 'accelerometer_axes' has a value
     *
     * @return bool
     */
    public function hasAccelerometerAxes()
    {
        return $this->accelerometer_axes !== null;
    }

    /**
     * Get 'accelerometer_axes' value
     *
     * @return int
     */
    public function getAccelerometerAxes()
    {
        return $this->accelerometer_axes;
    }

    /**
     * Set 'accelerometer_axes' value
     *
     * @param int $value
     */
    public function setAccelerometerAxes($value = null)
    {
        $this->accelerometer_axes = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'timestamp_snapshot' => null,
            'magnetometer_x' => null,
            'magnetometer_y' => null,
            'magnetometer_z' => null,
            'angle_normalized_x' => null,
            'angle_normalized_y' => null,
            'angle_normalized_z' => null,
            'accel_raw_x' => null,
            'accel_raw_y' => null,
            'accel_raw_z' => null,
            'gyroscope_raw_x' => null,
            'gyroscope_raw_y' => null,
            'gyroscope_raw_z' => null,
            'accel_normalized_x' => null,
            'accel_normalized_y' => null,
            'accel_normalized_z' => null,
            'accelerometer_axes' => null
        ], $values);

        $message->setTimestampSnapshot($values['timestamp_snapshot']);
        $message->setMagnetometerX($values['magnetometer_x']);
        $message->setMagnetometerY($values['magnetometer_y']);
        $message->setMagnetometerZ($values['magnetometer_z']);
        $message->setAngleNormalizedX($values['angle_normalized_x']);
        $message->setAngleNormalizedY($values['angle_normalized_y']);
        $message->setAngleNormalizedZ($values['angle_normalized_z']);
        $message->setAccelRawX($values['accel_raw_x']);
        $message->setAccelRawY($values['accel_raw_y']);
        $message->setAccelRawZ($values['accel_raw_z']);
        $message->setGyroscopeRawX($values['gyroscope_raw_x']);
        $message->setGyroscopeRawY($values['gyroscope_raw_y']);
        $message->setGyroscopeRawZ($values['gyroscope_raw_z']);
        $message->setAccelNormalizedX($values['accel_normalized_x']);
        $message->setAccelNormalizedY($values['accel_normalized_y']);
        $message->setAccelNormalizedZ($values['accel_normalized_z']);
        $message->setAccelerometerAxes($values['accelerometer_axes']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'SensorInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'timestamp_snapshot',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'magnetometer_x',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'magnetometer_y',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'magnetometer_z',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'angle_normalized_x',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'angle_normalized_y',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'angle_normalized_z',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'accel_raw_x',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'accel_raw_y',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'accel_raw_z',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 13,
                    'name' => 'gyroscope_raw_x',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 14,
                    'name' => 'gyroscope_raw_y',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 15,
                    'name' => 'gyroscope_raw_z',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 16,
                    'name' => 'accel_normalized_x',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 17,
                    'name' => 'accel_normalized_y',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 18,
                    'name' => 'accel_normalized_z',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 19,
                    'name' => 'accelerometer_axes',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->timestamp_snapshot !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->timestamp_snapshot);
        }

        if ($this->magnetometer_x !== null) {
            $writer->writeVarint($stream, 25);
            $writer->writeDouble($stream, $this->magnetometer_x);
        }

        if ($this->magnetometer_y !== null) {
            $writer->writeVarint($stream, 33);
            $writer->writeDouble($stream, $this->magnetometer_y);
        }

        if ($this->magnetometer_z !== null) {
            $writer->writeVarint($stream, 41);
            $writer->writeDouble($stream, $this->magnetometer_z);
        }

        if ($this->angle_normalized_x !== null) {
            $writer->writeVarint($stream, 49);
            $writer->writeDouble($stream, $this->angle_normalized_x);
        }

        if ($this->angle_normalized_y !== null) {
            $writer->writeVarint($stream, 57);
            $writer->writeDouble($stream, $this->angle_normalized_y);
        }

        if ($this->angle_normalized_z !== null) {
            $writer->writeVarint($stream, 65);
            $writer->writeDouble($stream, $this->angle_normalized_z);
        }

        if ($this->accel_raw_x !== null) {
            $writer->writeVarint($stream, 81);
            $writer->writeDouble($stream, $this->accel_raw_x);
        }

        if ($this->accel_raw_y !== null) {
            $writer->writeVarint($stream, 89);
            $writer->writeDouble($stream, $this->accel_raw_y);
        }

        if ($this->accel_raw_z !== null) {
            $writer->writeVarint($stream, 97);
            $writer->writeDouble($stream, $this->accel_raw_z);
        }

        if ($this->gyroscope_raw_x !== null) {
            $writer->writeVarint($stream, 105);
            $writer->writeDouble($stream, $this->gyroscope_raw_x);
        }

        if ($this->gyroscope_raw_y !== null) {
            $writer->writeVarint($stream, 113);
            $writer->writeDouble($stream, $this->gyroscope_raw_y);
        }

        if ($this->gyroscope_raw_z !== null) {
            $writer->writeVarint($stream, 121);
            $writer->writeDouble($stream, $this->gyroscope_raw_z);
        }

        if ($this->accel_normalized_x !== null) {
            $writer->writeVarint($stream, 129);
            $writer->writeDouble($stream, $this->accel_normalized_x);
        }

        if ($this->accel_normalized_y !== null) {
            $writer->writeVarint($stream, 137);
            $writer->writeDouble($stream, $this->accel_normalized_y);
        }

        if ($this->accel_normalized_z !== null) {
            $writer->writeVarint($stream, 145);
            $writer->writeDouble($stream, $this->accel_normalized_z);
        }

        if ($this->accelerometer_axes !== null) {
            $writer->writeVarint($stream, 152);
            $writer->writeVarint($stream, $this->accelerometer_axes);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->timestamp_snapshot = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->magnetometer_x = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->magnetometer_y = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->magnetometer_z = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->angle_normalized_x = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->angle_normalized_y = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->angle_normalized_z = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->accel_raw_x = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->accel_raw_y = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->accel_raw_z = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 13) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->gyroscope_raw_x = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 14) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->gyroscope_raw_y = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 15) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->gyroscope_raw_z = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 16) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->accel_normalized_x = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 17) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->accel_normalized_y = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 18) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->accel_normalized_z = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 19) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->accelerometer_axes = $reader->readVarint($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->timestamp_snapshot !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->timestamp_snapshot);
        }

        if ($this->magnetometer_x !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->magnetometer_y !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->magnetometer_z !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->angle_normalized_x !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->angle_normalized_y !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->angle_normalized_z !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->accel_raw_x !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->accel_raw_y !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->accel_raw_z !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->gyroscope_raw_x !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->gyroscope_raw_y !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->gyroscope_raw_z !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->accel_normalized_x !== null) {
            $size += 2;
            $size += 8;
        }

        if ($this->accel_normalized_y !== null) {
            $size += 2;
            $size += 8;
        }

        if ($this->accel_normalized_z !== null) {
            $size += 2;
            $size += 8;
        }

        if ($this->accelerometer_axes !== null) {
            $size += 2;
            $size += $calculator->computeVarintSize($this->accelerometer_axes);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->timestamp_snapshot = null;
        $this->magnetometer_x = null;
        $this->magnetometer_y = null;
        $this->magnetometer_z = null;
        $this->angle_normalized_x = null;
        $this->angle_normalized_y = null;
        $this->angle_normalized_z = null;
        $this->accel_raw_x = null;
        $this->accel_raw_y = null;
        $this->accel_raw_z = null;
        $this->gyroscope_raw_x = null;
        $this->gyroscope_raw_y = null;
        $this->gyroscope_raw_z = null;
        $this->accel_normalized_x = null;
        $this->accel_normalized_y = null;
        $this->accel_normalized_z = null;
        $this->accelerometer_axes = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Signature\Signature\SensorInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->timestamp_snapshot = ($message->timestamp_snapshot !== null) ? $message->timestamp_snapshot : $this->timestamp_snapshot;
        $this->magnetometer_x = ($message->magnetometer_x !== null) ? $message->magnetometer_x : $this->magnetometer_x;
        $this->magnetometer_y = ($message->magnetometer_y !== null) ? $message->magnetometer_y : $this->magnetometer_y;
        $this->magnetometer_z = ($message->magnetometer_z !== null) ? $message->magnetometer_z : $this->magnetometer_z;
        $this->angle_normalized_x = ($message->angle_normalized_x !== null) ? $message->angle_normalized_x : $this->angle_normalized_x;
        $this->angle_normalized_y = ($message->angle_normalized_y !== null) ? $message->angle_normalized_y : $this->angle_normalized_y;
        $this->angle_normalized_z = ($message->angle_normalized_z !== null) ? $message->angle_normalized_z : $this->angle_normalized_z;
        $this->accel_raw_x = ($message->accel_raw_x !== null) ? $message->accel_raw_x : $this->accel_raw_x;
        $this->accel_raw_y = ($message->accel_raw_y !== null) ? $message->accel_raw_y : $this->accel_raw_y;
        $this->accel_raw_z = ($message->accel_raw_z !== null) ? $message->accel_raw_z : $this->accel_raw_z;
        $this->gyroscope_raw_x = ($message->gyroscope_raw_x !== null) ? $message->gyroscope_raw_x : $this->gyroscope_raw_x;
        $this->gyroscope_raw_y = ($message->gyroscope_raw_y !== null) ? $message->gyroscope_raw_y : $this->gyroscope_raw_y;
        $this->gyroscope_raw_z = ($message->gyroscope_raw_z !== null) ? $message->gyroscope_raw_z : $this->gyroscope_raw_z;
        $this->accel_normalized_x = ($message->accel_normalized_x !== null) ? $message->accel_normalized_x : $this->accel_normalized_x;
        $this->accel_normalized_y = ($message->accel_normalized_y !== null) ? $message->accel_normalized_y : $this->accel_normalized_y;
        $this->accel_normalized_z = ($message->accel_normalized_z !== null) ? $message->accel_normalized_z : $this->accel_normalized_z;
        $this->accelerometer_axes = ($message->accelerometer_axes !== null) ? $message->accelerometer_axes : $this->accelerometer_axes;
    }


}

