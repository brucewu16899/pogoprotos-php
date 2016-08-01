<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Data/Player/EquippedBadge.proto
 */


namespace POGOProtos\Data\Player;

/**
 * Protobuf message : POGOProtos.Data.Player.EquippedBadge
 */
class EquippedBadge extends \Protobuf\AbstractMessage
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
     * badge_type optional enum = 1
     *
     * @var \POGOProtos\Enums\BadgeType
     */
    protected $badge_type = null;

    /**
     * level optional int32 = 2
     *
     * @var int
     */
    protected $level = null;

    /**
     * next_equip_change_allowed_timestamp_ms optional int64 = 3
     *
     * @var int
     */
    protected $next_equip_change_allowed_timestamp_ms = null;

    /**
     * Check if 'badge_type' has a value
     *
     * @return bool
     */
    public function hasBadgeType()
    {
        return $this->badge_type !== null;
    }

    /**
     * Get 'badge_type' value
     *
     * @return \POGOProtos\Enums\BadgeType
     */
    public function getBadgeType()
    {
        return $this->badge_type;
    }

    /**
     * Set 'badge_type' value
     *
     * @param \POGOProtos\Enums\BadgeType $value
     */
    public function setBadgeType(\POGOProtos\Enums\BadgeType $value = null)
    {
        $this->badge_type = $value;
    }

    /**
     * Check if 'level' has a value
     *
     * @return bool
     */
    public function hasLevel()
    {
        return $this->level !== null;
    }

    /**
     * Get 'level' value
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set 'level' value
     *
     * @param int $value
     */
    public function setLevel($value = null)
    {
        $this->level = $value;
    }

    /**
     * Check if 'next_equip_change_allowed_timestamp_ms' has a value
     *
     * @return bool
     */
    public function hasNextEquipChangeAllowedTimestampMs()
    {
        return $this->next_equip_change_allowed_timestamp_ms !== null;
    }

    /**
     * Get 'next_equip_change_allowed_timestamp_ms' value
     *
     * @return int
     */
    public function getNextEquipChangeAllowedTimestampMs()
    {
        return $this->next_equip_change_allowed_timestamp_ms;
    }

    /**
     * Set 'next_equip_change_allowed_timestamp_ms' value
     *
     * @param int $value
     */
    public function setNextEquipChangeAllowedTimestampMs($value = null)
    {
        $this->next_equip_change_allowed_timestamp_ms = $value;
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
            'badge_type' => null,
            'level' => null,
            'next_equip_change_allowed_timestamp_ms' => null
        ], $values);

        $message->setBadgeType($values['badge_type']);
        $message->setLevel($values['level']);
        $message->setNextEquipChangeAllowedTimestampMs($values['next_equip_change_allowed_timestamp_ms']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'EquippedBadge',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'badge_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Enums.BadgeType'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'level',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'next_equip_change_allowed_timestamp_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
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

        if ($this->badge_type !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->badge_type->value());
        }

        if ($this->level !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->level);
        }

        if ($this->next_equip_change_allowed_timestamp_ms !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->next_equip_change_allowed_timestamp_ms);
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
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->badge_type = \POGOProtos\Enums\BadgeType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->level = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->next_equip_change_allowed_timestamp_ms = $reader->readVarint($stream);

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

        if ($this->badge_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->badge_type->value());
        }

        if ($this->level !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->level);
        }

        if ($this->next_equip_change_allowed_timestamp_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->next_equip_change_allowed_timestamp_ms);
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
        $this->badge_type = null;
        $this->level = null;
        $this->next_equip_change_allowed_timestamp_ms = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Data\Player\EquippedBadge) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->badge_type = ($message->badge_type !== null) ? $message->badge_type : $this->badge_type;
        $this->level = ($message->level !== null) ? $message->level : $this->level;
        $this->next_equip_change_allowed_timestamp_ms = ($message->next_equip_change_allowed_timestamp_ms !== null) ? $message->next_equip_change_allowed_timestamp_ms : $this->next_equip_change_allowed_timestamp_ms;
    }


}
