<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor :
 * POGOProtos/Networking/Responses/SetContactSettingsResponse.proto
 */


namespace POGOProtos\Networking\Responses;

/**
 * Protobuf message : POGOProtos.Networking.Responses.SetContactSettingsResponse
 */
class SetContactSettingsResponse extends \Protobuf\AbstractMessage
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
     * status optional enum = 1
     *
     * @var \POGOProtos\Networking\Responses\SetContactSettingsResponse\Status
     */
    protected $status = null;

    /**
     * player_data optional message = 2
     *
     * @var \POGOProtos\Data\PlayerData
     */
    protected $player_data = null;

    /**
     * Check if 'status' has a value
     *
     * @return bool
     */
    public function hasStatus()
    {
        return $this->status !== null;
    }

    /**
     * Get 'status' value
     *
     * @return \POGOProtos\Networking\Responses\SetContactSettingsResponse\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set 'status' value
     *
     * @param \POGOProtos\Networking\Responses\SetContactSettingsResponse\Status $value
     */
    public function setStatus(\POGOProtos\Networking\Responses\SetContactSettingsResponse\Status $value = null)
    {
        $this->status = $value;
    }

    /**
     * Check if 'player_data' has a value
     *
     * @return bool
     */
    public function hasPlayerData()
    {
        return $this->player_data !== null;
    }

    /**
     * Get 'player_data' value
     *
     * @return \POGOProtos\Data\PlayerData
     */
    public function getPlayerData()
    {
        return $this->player_data;
    }

    /**
     * Set 'player_data' value
     *
     * @param \POGOProtos\Data\PlayerData $value
     */
    public function setPlayerData(\POGOProtos\Data\PlayerData $value = null)
    {
        $this->player_data = $value;
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
            'status' => null,
            'player_data' => null
        ], $values);

        $message->setStatus($values['status']);
        $message->setPlayerData($values['player_data']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'SetContactSettingsResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'status',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Networking.Responses.SetContactSettingsResponse.Status'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'player_data',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.PlayerData'
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

        if ($this->status !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->status->value());
        }

        if ($this->player_data !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->player_data->serializedSize($sizeContext));
            $this->player_data->writeTo($context);
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

                $this->status = \POGOProtos\Networking\Responses\SetContactSettingsResponse\Status::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\PlayerData();

                $this->player_data = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

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

        if ($this->status !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->status->value());
        }

        if ($this->player_data !== null) {
            $innerSize = $this->player_data->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
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
        $this->status = null;
        $this->player_data = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Responses\SetContactSettingsResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->status = ($message->status !== null) ? $message->status : $this->status;
        $this->player_data = ($message->player_data !== null) ? $message->player_data : $this->player_data;
    }


}

