<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Data/PlayerData.proto
 */


namespace POGOProtos\Data;

/**
 * Protobuf message : POGOProtos.Data.PlayerData
 */
class PlayerData extends \Protobuf\AbstractMessage
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
     * creation_timestamp_ms optional int64 = 1
     *
     * @var int
     */
    protected $creation_timestamp_ms = null;

    /**
     * username optional string = 2
     *
     * @var string
     */
    protected $username = null;

    /**
     * team optional enum = 5
     *
     * @var \POGOProtos\Enums\TeamColor
     */
    protected $team = null;

    /**
     * tutorial_state repeated enum = 7
     *
     * @var \Protobuf\Collection<\POGOProtos\Enums\TutorialState>
     */
    protected $tutorial_state = null;

    /**
     * avatar optional message = 8
     *
     * @var \POGOProtos\Data\Player\PlayerAvatar
     */
    protected $avatar = null;

    /**
     * max_pokemon_storage optional int32 = 9
     *
     * @var int
     */
    protected $max_pokemon_storage = null;

    /**
     * max_item_storage optional int32 = 10
     *
     * @var int
     */
    protected $max_item_storage = null;

    /**
     * daily_bonus optional message = 11
     *
     * @var \POGOProtos\Data\Player\DailyBonus
     */
    protected $daily_bonus = null;

    /**
     * equipped_badge optional message = 12
     *
     * @var \POGOProtos\Data\Player\EquippedBadge
     */
    protected $equipped_badge = null;

    /**
     * contact_settings optional message = 13
     *
     * @var \POGOProtos\Data\Player\ContactSettings
     */
    protected $contact_settings = null;

    /**
     * currencies repeated message = 14
     *
     * @var \Protobuf\Collection<\POGOProtos\Data\Player\Currency>
     */
    protected $currencies = null;

    /**
     * Check if 'creation_timestamp_ms' has a value
     *
     * @return bool
     */
    public function hasCreationTimestampMs()
    {
        return $this->creation_timestamp_ms !== null;
    }

    /**
     * Get 'creation_timestamp_ms' value
     *
     * @return int
     */
    public function getCreationTimestampMs()
    {
        return $this->creation_timestamp_ms;
    }

    /**
     * Set 'creation_timestamp_ms' value
     *
     * @param int $value
     */
    public function setCreationTimestampMs($value = null)
    {
        $this->creation_timestamp_ms = $value;
    }

    /**
     * Check if 'username' has a value
     *
     * @return bool
     */
    public function hasUsername()
    {
        return $this->username !== null;
    }

    /**
     * Get 'username' value
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set 'username' value
     *
     * @param string $value
     */
    public function setUsername($value = null)
    {
        $this->username = $value;
    }

    /**
     * Check if 'team' has a value
     *
     * @return bool
     */
    public function hasTeam()
    {
        return $this->team !== null;
    }

    /**
     * Get 'team' value
     *
     * @return \POGOProtos\Enums\TeamColor
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set 'team' value
     *
     * @param \POGOProtos\Enums\TeamColor $value
     */
    public function setTeam(\POGOProtos\Enums\TeamColor $value = null)
    {
        $this->team = $value;
    }

    /**
     * Check if 'tutorial_state' has a value
     *
     * @return bool
     */
    public function hasTutorialStateList()
    {
        return $this->tutorial_state !== null;
    }

    /**
     * Get 'tutorial_state' value
     *
     * @return \Protobuf\Collection<\POGOProtos\Enums\TutorialState>
     */
    public function getTutorialStateList()
    {
        return $this->tutorial_state;
    }

    /**
     * Set 'tutorial_state' value
     *
     * @param \Protobuf\Collection<\POGOProtos\Enums\TutorialState> $value
     */
    public function setTutorialStateList(\Protobuf\Collection $value = null)
    {
        $this->tutorial_state = $value;
    }

    /**
     * Add a new element to 'tutorial_state'
     *
     * @param \POGOProtos\Enums\TutorialState $value
     */
    public function addTutorialState(\POGOProtos\Enums\TutorialState $value)
    {
        if ($this->tutorial_state === null) {
            $this->tutorial_state = new \Protobuf\EnumCollection();
        }

        $this->tutorial_state->add($value);
    }

    /**
     * Check if 'avatar' has a value
     *
     * @return bool
     */
    public function hasAvatar()
    {
        return $this->avatar !== null;
    }

    /**
     * Get 'avatar' value
     *
     * @return \POGOProtos\Data\Player\PlayerAvatar
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set 'avatar' value
     *
     * @param \POGOProtos\Data\Player\PlayerAvatar $value
     */
    public function setAvatar(\POGOProtos\Data\Player\PlayerAvatar $value = null)
    {
        $this->avatar = $value;
    }

    /**
     * Check if 'max_pokemon_storage' has a value
     *
     * @return bool
     */
    public function hasMaxPokemonStorage()
    {
        return $this->max_pokemon_storage !== null;
    }

    /**
     * Get 'max_pokemon_storage' value
     *
     * @return int
     */
    public function getMaxPokemonStorage()
    {
        return $this->max_pokemon_storage;
    }

    /**
     * Set 'max_pokemon_storage' value
     *
     * @param int $value
     */
    public function setMaxPokemonStorage($value = null)
    {
        $this->max_pokemon_storage = $value;
    }

    /**
     * Check if 'max_item_storage' has a value
     *
     * @return bool
     */
    public function hasMaxItemStorage()
    {
        return $this->max_item_storage !== null;
    }

    /**
     * Get 'max_item_storage' value
     *
     * @return int
     */
    public function getMaxItemStorage()
    {
        return $this->max_item_storage;
    }

    /**
     * Set 'max_item_storage' value
     *
     * @param int $value
     */
    public function setMaxItemStorage($value = null)
    {
        $this->max_item_storage = $value;
    }

    /**
     * Check if 'daily_bonus' has a value
     *
     * @return bool
     */
    public function hasDailyBonus()
    {
        return $this->daily_bonus !== null;
    }

    /**
     * Get 'daily_bonus' value
     *
     * @return \POGOProtos\Data\Player\DailyBonus
     */
    public function getDailyBonus()
    {
        return $this->daily_bonus;
    }

    /**
     * Set 'daily_bonus' value
     *
     * @param \POGOProtos\Data\Player\DailyBonus $value
     */
    public function setDailyBonus(\POGOProtos\Data\Player\DailyBonus $value = null)
    {
        $this->daily_bonus = $value;
    }

    /**
     * Check if 'equipped_badge' has a value
     *
     * @return bool
     */
    public function hasEquippedBadge()
    {
        return $this->equipped_badge !== null;
    }

    /**
     * Get 'equipped_badge' value
     *
     * @return \POGOProtos\Data\Player\EquippedBadge
     */
    public function getEquippedBadge()
    {
        return $this->equipped_badge;
    }

    /**
     * Set 'equipped_badge' value
     *
     * @param \POGOProtos\Data\Player\EquippedBadge $value
     */
    public function setEquippedBadge(\POGOProtos\Data\Player\EquippedBadge $value = null)
    {
        $this->equipped_badge = $value;
    }

    /**
     * Check if 'contact_settings' has a value
     *
     * @return bool
     */
    public function hasContactSettings()
    {
        return $this->contact_settings !== null;
    }

    /**
     * Get 'contact_settings' value
     *
     * @return \POGOProtos\Data\Player\ContactSettings
     */
    public function getContactSettings()
    {
        return $this->contact_settings;
    }

    /**
     * Set 'contact_settings' value
     *
     * @param \POGOProtos\Data\Player\ContactSettings $value
     */
    public function setContactSettings(\POGOProtos\Data\Player\ContactSettings $value = null)
    {
        $this->contact_settings = $value;
    }

    /**
     * Check if 'currencies' has a value
     *
     * @return bool
     */
    public function hasCurrenciesList()
    {
        return $this->currencies !== null;
    }

    /**
     * Get 'currencies' value
     *
     * @return \Protobuf\Collection<\POGOProtos\Data\Player\Currency>
     */
    public function getCurrenciesList()
    {
        return $this->currencies;
    }

    /**
     * Set 'currencies' value
     *
     * @param \Protobuf\Collection<\POGOProtos\Data\Player\Currency> $value
     */
    public function setCurrenciesList(\Protobuf\Collection $value = null)
    {
        $this->currencies = $value;
    }

    /**
     * Add a new element to 'currencies'
     *
     * @param \POGOProtos\Data\Player\Currency $value
     */
    public function addCurrencies(\POGOProtos\Data\Player\Currency $value)
    {
        if ($this->currencies === null) {
            $this->currencies = new \Protobuf\MessageCollection();
        }

        $this->currencies->add($value);
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
            'creation_timestamp_ms' => null,
            'username' => null,
            'team' => null,
            'tutorial_state' => [],
            'avatar' => null,
            'max_pokemon_storage' => null,
            'max_item_storage' => null,
            'daily_bonus' => null,
            'equipped_badge' => null,
            'contact_settings' => null,
            'currencies' => []
        ], $values);

        $message->setCreationTimestampMs($values['creation_timestamp_ms']);
        $message->setUsername($values['username']);
        $message->setTeam($values['team']);
        $message->setAvatar($values['avatar']);
        $message->setMaxPokemonStorage($values['max_pokemon_storage']);
        $message->setMaxItemStorage($values['max_item_storage']);
        $message->setDailyBonus($values['daily_bonus']);
        $message->setEquippedBadge($values['equipped_badge']);
        $message->setContactSettings($values['contact_settings']);

        foreach ($values['tutorial_state'] as $item) {
            $message->addTutorialState($item);
        }

        foreach ($values['currencies'] as $item) {
            $message->addCurrencies($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'PlayerData',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'creation_timestamp_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'username',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'team',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Enums.TeamColor'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'tutorial_state',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.POGOProtos.Enums.TutorialState'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'avatar',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.Player.PlayerAvatar'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'max_pokemon_storage',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'max_item_storage',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'daily_bonus',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.Player.DailyBonus'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'equipped_badge',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.Player.EquippedBadge'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 13,
                    'name' => 'contact_settings',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.Player.ContactSettings'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 14,
                    'name' => 'currencies',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.POGOProtos.Data.Player.Currency'
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

        if ($this->creation_timestamp_ms !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->creation_timestamp_ms);
        }

        if ($this->username !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->username);
        }

        if ($this->team !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->team->value());
        }

        if ($this->tutorial_state !== null) {
            $innerSize   = 0;
            $calculator  = $sizeContext->getSizeCalculator();

            foreach ($this->tutorial_state as $val) {
                $innerSize += $calculator->computeVarintSize($val);
            }

            $writer->writeVarint($stream, 58);
            $writer->writeVarint($stream, $innerSize);

            foreach ($this->tutorial_state as $val) {
                $writer->writeVarint($stream, $val);
            }
        }

        if ($this->avatar !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeVarint($stream, $this->avatar->serializedSize($sizeContext));
            $this->avatar->writeTo($context);
        }

        if ($this->max_pokemon_storage !== null) {
            $writer->writeVarint($stream, 72);
            $writer->writeVarint($stream, $this->max_pokemon_storage);
        }

        if ($this->max_item_storage !== null) {
            $writer->writeVarint($stream, 80);
            $writer->writeVarint($stream, $this->max_item_storage);
        }

        if ($this->daily_bonus !== null) {
            $writer->writeVarint($stream, 90);
            $writer->writeVarint($stream, $this->daily_bonus->serializedSize($sizeContext));
            $this->daily_bonus->writeTo($context);
        }

        if ($this->equipped_badge !== null) {
            $writer->writeVarint($stream, 98);
            $writer->writeVarint($stream, $this->equipped_badge->serializedSize($sizeContext));
            $this->equipped_badge->writeTo($context);
        }

        if ($this->contact_settings !== null) {
            $writer->writeVarint($stream, 106);
            $writer->writeVarint($stream, $this->contact_settings->serializedSize($sizeContext));
            $this->contact_settings->writeTo($context);
        }

        if ($this->currencies !== null) {
            foreach ($this->currencies as $val) {
                $writer->writeVarint($stream, 114);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
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
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->creation_timestamp_ms = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->username = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->team = \POGOProtos\Enums\TeamColor::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 7) {
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->tutorial_state === null) {
                    $this->tutorial_state = new \Protobuf\EnumCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->tutorial_state->add($reader->readVarint($stream));
                }

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\Player\PlayerAvatar();

                $this->avatar = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->max_pokemon_storage = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->max_item_storage = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\Player\DailyBonus();

                $this->daily_bonus = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\Player\EquippedBadge();

                $this->equipped_badge = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 13) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\Player\ContactSettings();

                $this->contact_settings = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 14) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\Player\Currency();

                if ($this->currencies === null) {
                    $this->currencies = new \Protobuf\MessageCollection();
                }

                $this->currencies->add($innerMessage);

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

        if ($this->creation_timestamp_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->creation_timestamp_ms);
        }

        if ($this->username !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->username);
        }

        if ($this->team !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->team->value());
        }

        if ($this->tutorial_state !== null) {
            $innerSize = 0;

            foreach ($this->tutorial_state as $val) {
                $innerSize += $calculator->computeVarintSize($val);
            }

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->avatar !== null) {
            $innerSize = $this->avatar->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->max_pokemon_storage !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->max_pokemon_storage);
        }

        if ($this->max_item_storage !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->max_item_storage);
        }

        if ($this->daily_bonus !== null) {
            $innerSize = $this->daily_bonus->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->equipped_badge !== null) {
            $innerSize = $this->equipped_badge->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->contact_settings !== null) {
            $innerSize = $this->contact_settings->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->currencies !== null) {
            foreach ($this->currencies as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
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
        $this->creation_timestamp_ms = null;
        $this->username = null;
        $this->team = null;
        $this->tutorial_state = null;
        $this->avatar = null;
        $this->max_pokemon_storage = null;
        $this->max_item_storage = null;
        $this->daily_bonus = null;
        $this->equipped_badge = null;
        $this->contact_settings = null;
        $this->currencies = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Data\PlayerData) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->creation_timestamp_ms = ($message->creation_timestamp_ms !== null) ? $message->creation_timestamp_ms : $this->creation_timestamp_ms;
        $this->username = ($message->username !== null) ? $message->username : $this->username;
        $this->team = ($message->team !== null) ? $message->team : $this->team;
        $this->tutorial_state = ($message->tutorial_state !== null) ? $message->tutorial_state : $this->tutorial_state;
        $this->avatar = ($message->avatar !== null) ? $message->avatar : $this->avatar;
        $this->max_pokemon_storage = ($message->max_pokemon_storage !== null) ? $message->max_pokemon_storage : $this->max_pokemon_storage;
        $this->max_item_storage = ($message->max_item_storage !== null) ? $message->max_item_storage : $this->max_item_storage;
        $this->daily_bonus = ($message->daily_bonus !== null) ? $message->daily_bonus : $this->daily_bonus;
        $this->equipped_badge = ($message->equipped_badge !== null) ? $message->equipped_badge : $this->equipped_badge;
        $this->contact_settings = ($message->contact_settings !== null) ? $message->contact_settings : $this->contact_settings;
        $this->currencies = ($message->currencies !== null) ? $message->currencies : $this->currencies;
    }


}

