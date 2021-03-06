<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Data/Player/PlayerAvatar.proto
 */


namespace POGOProtos\Data\Player;

/**
 * Protobuf message : POGOProtos.Data.Player.PlayerAvatar
 */
class PlayerAvatar extends \Protobuf\AbstractMessage
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
     * skin optional int32 = 2
     *
     * @var int
     */
    protected $skin = null;

    /**
     * hair optional int32 = 3
     *
     * @var int
     */
    protected $hair = null;

    /**
     * shirt optional int32 = 4
     *
     * @var int
     */
    protected $shirt = null;

    /**
     * pants optional int32 = 5
     *
     * @var int
     */
    protected $pants = null;

    /**
     * hat optional int32 = 6
     *
     * @var int
     */
    protected $hat = null;

    /**
     * shoes optional int32 = 7
     *
     * @var int
     */
    protected $shoes = null;

    /**
     * gender optional enum = 8
     *
     * @var \POGOProtos\Enums\Gender
     */
    protected $gender = null;

    /**
     * eyes optional int32 = 9
     *
     * @var int
     */
    protected $eyes = null;

    /**
     * backpack optional int32 = 10
     *
     * @var int
     */
    protected $backpack = null;

    /**
     * Check if 'skin' has a value
     *
     * @return bool
     */
    public function hasSkin()
    {
        return $this->skin !== null;
    }

    /**
     * Get 'skin' value
     *
     * @return int
     */
    public function getSkin()
    {
        return $this->skin;
    }

    /**
     * Set 'skin' value
     *
     * @param int $value
     */
    public function setSkin($value = null)
    {
        $this->skin = $value;
    }

    /**
     * Check if 'hair' has a value
     *
     * @return bool
     */
    public function hasHair()
    {
        return $this->hair !== null;
    }

    /**
     * Get 'hair' value
     *
     * @return int
     */
    public function getHair()
    {
        return $this->hair;
    }

    /**
     * Set 'hair' value
     *
     * @param int $value
     */
    public function setHair($value = null)
    {
        $this->hair = $value;
    }

    /**
     * Check if 'shirt' has a value
     *
     * @return bool
     */
    public function hasShirt()
    {
        return $this->shirt !== null;
    }

    /**
     * Get 'shirt' value
     *
     * @return int
     */
    public function getShirt()
    {
        return $this->shirt;
    }

    /**
     * Set 'shirt' value
     *
     * @param int $value
     */
    public function setShirt($value = null)
    {
        $this->shirt = $value;
    }

    /**
     * Check if 'pants' has a value
     *
     * @return bool
     */
    public function hasPants()
    {
        return $this->pants !== null;
    }

    /**
     * Get 'pants' value
     *
     * @return int
     */
    public function getPants()
    {
        return $this->pants;
    }

    /**
     * Set 'pants' value
     *
     * @param int $value
     */
    public function setPants($value = null)
    {
        $this->pants = $value;
    }

    /**
     * Check if 'hat' has a value
     *
     * @return bool
     */
    public function hasHat()
    {
        return $this->hat !== null;
    }

    /**
     * Get 'hat' value
     *
     * @return int
     */
    public function getHat()
    {
        return $this->hat;
    }

    /**
     * Set 'hat' value
     *
     * @param int $value
     */
    public function setHat($value = null)
    {
        $this->hat = $value;
    }

    /**
     * Check if 'shoes' has a value
     *
     * @return bool
     */
    public function hasShoes()
    {
        return $this->shoes !== null;
    }

    /**
     * Get 'shoes' value
     *
     * @return int
     */
    public function getShoes()
    {
        return $this->shoes;
    }

    /**
     * Set 'shoes' value
     *
     * @param int $value
     */
    public function setShoes($value = null)
    {
        $this->shoes = $value;
    }

    /**
     * Check if 'gender' has a value
     *
     * @return bool
     */
    public function hasGender()
    {
        return $this->gender !== null;
    }

    /**
     * Get 'gender' value
     *
     * @return \POGOProtos\Enums\Gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set 'gender' value
     *
     * @param \POGOProtos\Enums\Gender $value
     */
    public function setGender(\POGOProtos\Enums\Gender $value = null)
    {
        $this->gender = $value;
    }

    /**
     * Check if 'eyes' has a value
     *
     * @return bool
     */
    public function hasEyes()
    {
        return $this->eyes !== null;
    }

    /**
     * Get 'eyes' value
     *
     * @return int
     */
    public function getEyes()
    {
        return $this->eyes;
    }

    /**
     * Set 'eyes' value
     *
     * @param int $value
     */
    public function setEyes($value = null)
    {
        $this->eyes = $value;
    }

    /**
     * Check if 'backpack' has a value
     *
     * @return bool
     */
    public function hasBackpack()
    {
        return $this->backpack !== null;
    }

    /**
     * Get 'backpack' value
     *
     * @return int
     */
    public function getBackpack()
    {
        return $this->backpack;
    }

    /**
     * Set 'backpack' value
     *
     * @param int $value
     */
    public function setBackpack($value = null)
    {
        $this->backpack = $value;
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
            'skin' => null,
            'hair' => null,
            'shirt' => null,
            'pants' => null,
            'hat' => null,
            'shoes' => null,
            'gender' => null,
            'eyes' => null,
            'backpack' => null
        ], $values);

        $message->setSkin($values['skin']);
        $message->setHair($values['hair']);
        $message->setShirt($values['shirt']);
        $message->setPants($values['pants']);
        $message->setHat($values['hat']);
        $message->setShoes($values['shoes']);
        $message->setGender($values['gender']);
        $message->setEyes($values['eyes']);
        $message->setBackpack($values['backpack']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'PlayerAvatar',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'skin',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'hair',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'shirt',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'pants',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'hat',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'shoes',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'gender',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Enums.Gender'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'eyes',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'backpack',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
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

        if ($this->skin !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->skin);
        }

        if ($this->hair !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->hair);
        }

        if ($this->shirt !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->shirt);
        }

        if ($this->pants !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->pants);
        }

        if ($this->hat !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->hat);
        }

        if ($this->shoes !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->shoes);
        }

        if ($this->gender !== null) {
            $writer->writeVarint($stream, 64);
            $writer->writeVarint($stream, $this->gender->value());
        }

        if ($this->eyes !== null) {
            $writer->writeVarint($stream, 72);
            $writer->writeVarint($stream, $this->eyes);
        }

        if ($this->backpack !== null) {
            $writer->writeVarint($stream, 80);
            $writer->writeVarint($stream, $this->backpack);
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

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->skin = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->hair = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->shirt = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->pants = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->hat = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->shoes = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->gender = \POGOProtos\Enums\Gender::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->eyes = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->backpack = $reader->readVarint($stream);

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

        if ($this->skin !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->skin);
        }

        if ($this->hair !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->hair);
        }

        if ($this->shirt !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->shirt);
        }

        if ($this->pants !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->pants);
        }

        if ($this->hat !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->hat);
        }

        if ($this->shoes !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->shoes);
        }

        if ($this->gender !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->gender->value());
        }

        if ($this->eyes !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->eyes);
        }

        if ($this->backpack !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->backpack);
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
        $this->skin = null;
        $this->hair = null;
        $this->shirt = null;
        $this->pants = null;
        $this->hat = null;
        $this->shoes = null;
        $this->gender = null;
        $this->eyes = null;
        $this->backpack = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Data\Player\PlayerAvatar) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->skin = ($message->skin !== null) ? $message->skin : $this->skin;
        $this->hair = ($message->hair !== null) ? $message->hair : $this->hair;
        $this->shirt = ($message->shirt !== null) ? $message->shirt : $this->shirt;
        $this->pants = ($message->pants !== null) ? $message->pants : $this->pants;
        $this->hat = ($message->hat !== null) ? $message->hat : $this->hat;
        $this->shoes = ($message->shoes !== null) ? $message->shoes : $this->shoes;
        $this->gender = ($message->gender !== null) ? $message->gender : $this->gender;
        $this->eyes = ($message->eyes !== null) ? $message->eyes : $this->eyes;
        $this->backpack = ($message->backpack !== null) ? $message->backpack : $this->backpack;
    }


}

