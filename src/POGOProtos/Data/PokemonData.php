<?php
// Generated by https://github.com/bramp/protoc-gen-php
namespace POGOProtos\Data {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufMessage;


  // message POGOProtos.Data.PokemonData
  final class PokemonData extends ProtobufMessage {

    private $_unknown;
    private $id = 0; // optional fixed64 id = 1
    private $pokemonId = PokemonId::MISSINGNO; // optional .POGOProtos.Enums.PokemonId pokemon_id = 2
    private $cp = 0; // optional int32 cp = 3
    private $stamina = 0; // optional int32 stamina = 4
    private $staminaMax = 0; // optional int32 stamina_max = 5
    private $move1 = PokemonMove::MOVE_UNSET; // optional .POGOProtos.Enums.PokemonMove move_1 = 6
    private $move2 = PokemonMove::MOVE_UNSET; // optional .POGOProtos.Enums.PokemonMove move_2 = 7
    private $deployedFortId = 0; // optional int32 deployed_fort_id = 8
    private $ownerName = ""; // optional string owner_name = 9
    private $isEgg = false; // optional bool is_egg = 10
    private $eggKmWalkedTarget = 0; // optional double egg_km_walked_target = 11
    private $eggKmWalkedStart = 0; // optional double egg_km_walked_start = 12
    private $origin = 0; // optional int32 origin = 14
    private $heightM = 0; // optional float height_m = 15
    private $weightKg = 0; // optional float weight_kg = 16
    private $individualAttack = 0; // optional int32 individual_attack = 17
    private $individualDefense = 0; // optional int32 individual_defense = 18
    private $individualStamina = 0; // optional int32 individual_stamina = 19
    private $cpMultiplier = 0; // optional float cp_multiplier = 20
    private $pokeball = ItemId::ITEM_UNKNOWN; // optional .POGOProtos.Inventory.Item.ItemId pokeball = 21
    private $capturedCellId = 0; // optional uint64 captured_cell_id = 22
    private $battlesAttacked = 0; // optional int32 battles_attacked = 23
    private $battlesDefended = 0; // optional int32 battles_defended = 24
    private $eggIncubatorId = ""; // optional string egg_incubator_id = 25
    private $creationTimeMs = 0; // optional uint64 creation_time_ms = 26
    private $numUpgrades = 0; // optional int32 num_upgrades = 27
    private $additionalCpMultiplier = 0; // optional float additional_cp_multiplier = 28
    private $favorite = 0; // optional int32 favorite = 29
    private $nickname = ""; // optional string nickname = 30
    private $fromFort = 0; // optional int32 from_fort = 31

    public function __construct($in = null, &$limit = PHP_INT_MAX) {
      parent::__construct($in, $limit);
    }

    public function read($fp, &$limit = PHP_INT_MAX) {
      $fp = ProtobufIO::toStream($fp, $limit);
      while(!feof($fp) && $limit > 0) {
        $tag = Protobuf::read_varint($fp, $limit);
        if ($tag === false) break;
        $wire  = $tag & 0x07;
        $field = $tag >> 3;
        switch($field) {
          case 1: // optional fixed64 id = 1
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_uint64($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_unint64 returned false');
            $this->id = $tmp;

            break;
          case 2: // optional .POGOProtos.Enums.PokemonId pokemon_id = 2
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->pokemonId = $tmp;

            break;
          case 3: // optional int32 cp = 3
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->cp = $tmp;

            break;
          case 4: // optional int32 stamina = 4
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->stamina = $tmp;

            break;
          case 5: // optional int32 stamina_max = 5
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->staminaMax = $tmp;

            break;
          case 6: // optional .POGOProtos.Enums.PokemonMove move_1 = 6
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->move1 = $tmp;

            break;
          case 7: // optional .POGOProtos.Enums.PokemonMove move_2 = 7
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->move2 = $tmp;

            break;
          case 8: // optional int32 deployed_fort_id = 8
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->deployedFortId = $tmp;

            break;
          case 9: // optional string owner_name = 9
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->ownerName = $tmp;

            break;
          case 10: // optional bool is_egg = 10
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->isEgg = ($tmp > 0) ? true : false;

            break;
          case 11: // optional double egg_km_walked_target = 11
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_double($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_double returned false');
            $this->eggKmWalkedTarget = $tmp;

            break;
          case 12: // optional double egg_km_walked_start = 12
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_double($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_double returned false');
            $this->eggKmWalkedStart = $tmp;

            break;
          case 14: // optional int32 origin = 14
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->origin = $tmp;

            break;
          case 15: // optional float height_m = 15
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->heightM = $tmp;

            break;
          case 16: // optional float weight_kg = 16
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->weightKg = $tmp;

            break;
          case 17: // optional int32 individual_attack = 17
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->individualAttack = $tmp;

            break;
          case 18: // optional int32 individual_defense = 18
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->individualDefense = $tmp;

            break;
          case 19: // optional int32 individual_stamina = 19
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->individualStamina = $tmp;

            break;
          case 20: // optional float cp_multiplier = 20
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->cpMultiplier = $tmp;

            break;
          case 21: // optional .POGOProtos.Inventory.Item.ItemId pokeball = 21
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->pokeball = $tmp;

            break;
          case 22: // optional uint64 captured_cell_id = 22
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_UINT64 || $tmp > Protobuf::MAX_UINT64) throw new \Exception('uint64 out of range');$this->capturedCellId = $tmp;

            break;
          case 23: // optional int32 battles_attacked = 23
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->battlesAttacked = $tmp;

            break;
          case 24: // optional int32 battles_defended = 24
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->battlesDefended = $tmp;

            break;
          case 25: // optional string egg_incubator_id = 25
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->eggIncubatorId = $tmp;

            break;
          case 26: // optional uint64 creation_time_ms = 26
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_UINT64 || $tmp > Protobuf::MAX_UINT64) throw new \Exception('uint64 out of range');$this->creationTimeMs = $tmp;

            break;
          case 27: // optional int32 num_upgrades = 27
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->numUpgrades = $tmp;

            break;
          case 28: // optional float additional_cp_multiplier = 28
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->additionalCpMultiplier = $tmp;

            break;
          case 29: // optional int32 favorite = 29
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->favorite = $tmp;

            break;
          case 30: // optional string nickname = 30
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->nickname = $tmp;

            break;
          case 31: // optional int32 from_fort = 31
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->fromFort = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->id !== 0) {
        fwrite($fp, "\x09", 1);
        Protobuf::write_uint64($fp, $this->id);
      }
      if ($this->pokemonId !== PokemonId::MISSINGNO) {
        fwrite($fp, "\x10", 1);
        Protobuf::write_varint($fp, $this->pokemonId);
      }
      if ($this->cp !== 0) {
        fwrite($fp, "\x18", 1);
        Protobuf::write_varint($fp, $this->cp);
      }
      if ($this->stamina !== 0) {
        fwrite($fp, " ", 1);
        Protobuf::write_varint($fp, $this->stamina);
      }
      if ($this->staminaMax !== 0) {
        fwrite($fp, "(", 1);
        Protobuf::write_varint($fp, $this->staminaMax);
      }
      if ($this->move1 !== PokemonMove::MOVE_UNSET) {
        fwrite($fp, "0", 1);
        Protobuf::write_varint($fp, $this->move1);
      }
      if ($this->move2 !== PokemonMove::MOVE_UNSET) {
        fwrite($fp, "8", 1);
        Protobuf::write_varint($fp, $this->move2);
      }
      if ($this->deployedFortId !== 0) {
        fwrite($fp, "@", 1);
        Protobuf::write_varint($fp, $this->deployedFortId);
      }
      if ($this->ownerName !== "") {
        fwrite($fp, "J", 1);
        Protobuf::write_varint($fp, strlen($this->ownerName));
        fwrite($fp, $this->ownerName);
      }
      if ($this->isEgg !== false) {
        fwrite($fp, "P", 1);
        Protobuf::write_varint($fp, $this->isEgg ? 1 : 0);
      }
      if ($this->eggKmWalkedTarget !== 0) {
        fwrite($fp, "Y", 1);
        Protobuf::write_double($fp, $this->eggKmWalkedTarget);
      }
      if ($this->eggKmWalkedStart !== 0) {
        fwrite($fp, "a", 1);
        Protobuf::write_double($fp, $this->eggKmWalkedStart);
      }
      if ($this->origin !== 0) {
        fwrite($fp, "p", 1);
        Protobuf::write_varint($fp, $this->origin);
      }
      if ($this->heightM !== 0) {
        fwrite($fp, "}", 1);
        Protobuf::write_float($fp, $this->heightM);
      }
      if ($this->weightKg !== 0) {
        fwrite($fp, "\x85\x01", 2);
        Protobuf::write_float($fp, $this->weightKg);
      }
      if ($this->individualAttack !== 0) {
        fwrite($fp, "\x88\x01", 2);
        Protobuf::write_varint($fp, $this->individualAttack);
      }
      if ($this->individualDefense !== 0) {
        fwrite($fp, "\x90\x01", 2);
        Protobuf::write_varint($fp, $this->individualDefense);
      }
      if ($this->individualStamina !== 0) {
        fwrite($fp, "\x98\x01", 2);
        Protobuf::write_varint($fp, $this->individualStamina);
      }
      if ($this->cpMultiplier !== 0) {
        fwrite($fp, "\xa5\x01", 2);
        Protobuf::write_float($fp, $this->cpMultiplier);
      }
      if ($this->pokeball !== ItemId::ITEM_UNKNOWN) {
        fwrite($fp, "\xa8\x01", 2);
        Protobuf::write_varint($fp, $this->pokeball);
      }
      if ($this->capturedCellId !== 0) {
        fwrite($fp, "\xb0\x01", 2);
        Protobuf::write_varint($fp, $this->capturedCellId);
      }
      if ($this->battlesAttacked !== 0) {
        fwrite($fp, "\xb8\x01", 2);
        Protobuf::write_varint($fp, $this->battlesAttacked);
      }
      if ($this->battlesDefended !== 0) {
        fwrite($fp, "\xc0\x01", 2);
        Protobuf::write_varint($fp, $this->battlesDefended);
      }
      if ($this->eggIncubatorId !== "") {
        fwrite($fp, "\xca\x01", 2);
        Protobuf::write_varint($fp, strlen($this->eggIncubatorId));
        fwrite($fp, $this->eggIncubatorId);
      }
      if ($this->creationTimeMs !== 0) {
        fwrite($fp, "\xd0\x01", 2);
        Protobuf::write_varint($fp, $this->creationTimeMs);
      }
      if ($this->numUpgrades !== 0) {
        fwrite($fp, "\xd8\x01", 2);
        Protobuf::write_varint($fp, $this->numUpgrades);
      }
      if ($this->additionalCpMultiplier !== 0) {
        fwrite($fp, "\xe5\x01", 2);
        Protobuf::write_float($fp, $this->additionalCpMultiplier);
      }
      if ($this->favorite !== 0) {
        fwrite($fp, "\xe8\x01", 2);
        Protobuf::write_varint($fp, $this->favorite);
      }
      if ($this->nickname !== "") {
        fwrite($fp, "\xf2\x01", 2);
        Protobuf::write_varint($fp, strlen($this->nickname));
        fwrite($fp, $this->nickname);
      }
      if ($this->fromFort !== 0) {
        fwrite($fp, "\xf8\x01", 2);
        Protobuf::write_varint($fp, $this->fromFort);
      }
    }

    public function size() {
      $size = 0;
      if ($this->id !== 0) {
        $size += 9;
      }
      if ($this->pokemonId !== PokemonId::MISSINGNO) {
        $size += 1 + Protobuf::size_varint($this->pokemonId);
      }
      if ($this->cp !== 0) {
        $size += 1 + Protobuf::size_varint($this->cp);
      }
      if ($this->stamina !== 0) {
        $size += 1 + Protobuf::size_varint($this->stamina);
      }
      if ($this->staminaMax !== 0) {
        $size += 1 + Protobuf::size_varint($this->staminaMax);
      }
      if ($this->move1 !== PokemonMove::MOVE_UNSET) {
        $size += 1 + Protobuf::size_varint($this->move1);
      }
      if ($this->move2 !== PokemonMove::MOVE_UNSET) {
        $size += 1 + Protobuf::size_varint($this->move2);
      }
      if ($this->deployedFortId !== 0) {
        $size += 1 + Protobuf::size_varint($this->deployedFortId);
      }
      if ($this->ownerName !== "") {
        $l = strlen($this->ownerName);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->isEgg !== false) {
        $size += 2;
      }
      if ($this->eggKmWalkedTarget !== 0) {
        $size += 9;
      }
      if ($this->eggKmWalkedStart !== 0) {
        $size += 9;
      }
      if ($this->origin !== 0) {
        $size += 1 + Protobuf::size_varint($this->origin);
      }
      if ($this->heightM !== 0) {
        $size += 5;
      }
      if ($this->weightKg !== 0) {
        $size += 6;
      }
      if ($this->individualAttack !== 0) {
        $size += 2 + Protobuf::size_varint($this->individualAttack);
      }
      if ($this->individualDefense !== 0) {
        $size += 2 + Protobuf::size_varint($this->individualDefense);
      }
      if ($this->individualStamina !== 0) {
        $size += 2 + Protobuf::size_varint($this->individualStamina);
      }
      if ($this->cpMultiplier !== 0) {
        $size += 6;
      }
      if ($this->pokeball !== ItemId::ITEM_UNKNOWN) {
        $size += 2 + Protobuf::size_varint($this->pokeball);
      }
      if ($this->capturedCellId !== 0) {
        $size += 2 + Protobuf::size_varint($this->capturedCellId);
      }
      if ($this->battlesAttacked !== 0) {
        $size += 2 + Protobuf::size_varint($this->battlesAttacked);
      }
      if ($this->battlesDefended !== 0) {
        $size += 2 + Protobuf::size_varint($this->battlesDefended);
      }
      if ($this->eggIncubatorId !== "") {
        $l = strlen($this->eggIncubatorId);
        $size += 2 + Protobuf::size_varint($l) + $l;
      }
      if ($this->creationTimeMs !== 0) {
        $size += 2 + Protobuf::size_varint($this->creationTimeMs);
      }
      if ($this->numUpgrades !== 0) {
        $size += 2 + Protobuf::size_varint($this->numUpgrades);
      }
      if ($this->additionalCpMultiplier !== 0) {
        $size += 6;
      }
      if ($this->favorite !== 0) {
        $size += 2 + Protobuf::size_varint($this->favorite);
      }
      if ($this->nickname !== "") {
        $l = strlen($this->nickname);
        $size += 2 + Protobuf::size_varint($l) + $l;
      }
      if ($this->fromFort !== 0) {
        $size += 2 + Protobuf::size_varint($this->fromFort);
      }
      return $size;
    }

    public function clearId() { $this->id = 0; }
    public function getId() { return $this->id;}
    public function setId($value) { $this->id = $value; }

    public function clearPokemonId() { $this->pokemonId = PokemonId::MISSINGNO; }
    public function getPokemonId() { return $this->pokemonId;}
    public function setPokemonId($value) { $this->pokemonId = $value; }

    public function clearCp() { $this->cp = 0; }
    public function getCp() { return $this->cp;}
    public function setCp($value) { $this->cp = $value; }

    public function clearStamina() { $this->stamina = 0; }
    public function getStamina() { return $this->stamina;}
    public function setStamina($value) { $this->stamina = $value; }

    public function clearStaminaMax() { $this->staminaMax = 0; }
    public function getStaminaMax() { return $this->staminaMax;}
    public function setStaminaMax($value) { $this->staminaMax = $value; }

    public function clearMove1() { $this->move1 = PokemonMove::MOVE_UNSET; }
    public function getMove1() { return $this->move1;}
    public function setMove1($value) { $this->move1 = $value; }

    public function clearMove2() { $this->move2 = PokemonMove::MOVE_UNSET; }
    public function getMove2() { return $this->move2;}
    public function setMove2($value) { $this->move2 = $value; }

    public function clearDeployedFortId() { $this->deployedFortId = 0; }
    public function getDeployedFortId() { return $this->deployedFortId;}
    public function setDeployedFortId($value) { $this->deployedFortId = $value; }

    public function clearOwnerName() { $this->ownerName = ""; }
    public function getOwnerName() { return $this->ownerName;}
    public function setOwnerName($value) { $this->ownerName = $value; }

    public function clearIsEgg() { $this->isEgg = false; }
    public function getIsEgg() { return $this->isEgg;}
    public function setIsEgg($value) { $this->isEgg = $value; }

    public function clearEggKmWalkedTarget() { $this->eggKmWalkedTarget = 0; }
    public function getEggKmWalkedTarget() { return $this->eggKmWalkedTarget;}
    public function setEggKmWalkedTarget($value) { $this->eggKmWalkedTarget = $value; }

    public function clearEggKmWalkedStart() { $this->eggKmWalkedStart = 0; }
    public function getEggKmWalkedStart() { return $this->eggKmWalkedStart;}
    public function setEggKmWalkedStart($value) { $this->eggKmWalkedStart = $value; }

    public function clearOrigin() { $this->origin = 0; }
    public function getOrigin() { return $this->origin;}
    public function setOrigin($value) { $this->origin = $value; }

    public function clearHeightM() { $this->heightM = 0; }
    public function getHeightM() { return $this->heightM;}
    public function setHeightM($value) { $this->heightM = $value; }

    public function clearWeightKg() { $this->weightKg = 0; }
    public function getWeightKg() { return $this->weightKg;}
    public function setWeightKg($value) { $this->weightKg = $value; }

    public function clearIndividualAttack() { $this->individualAttack = 0; }
    public function getIndividualAttack() { return $this->individualAttack;}
    public function setIndividualAttack($value) { $this->individualAttack = $value; }

    public function clearIndividualDefense() { $this->individualDefense = 0; }
    public function getIndividualDefense() { return $this->individualDefense;}
    public function setIndividualDefense($value) { $this->individualDefense = $value; }

    public function clearIndividualStamina() { $this->individualStamina = 0; }
    public function getIndividualStamina() { return $this->individualStamina;}
    public function setIndividualStamina($value) { $this->individualStamina = $value; }

    public function clearCpMultiplier() { $this->cpMultiplier = 0; }
    public function getCpMultiplier() { return $this->cpMultiplier;}
    public function setCpMultiplier($value) { $this->cpMultiplier = $value; }

    public function clearPokeball() { $this->pokeball = ItemId::ITEM_UNKNOWN; }
    public function getPokeball() { return $this->pokeball;}
    public function setPokeball($value) { $this->pokeball = $value; }

    public function clearCapturedCellId() { $this->capturedCellId = 0; }
    public function getCapturedCellId() { return $this->capturedCellId;}
    public function setCapturedCellId($value) { $this->capturedCellId = $value; }

    public function clearBattlesAttacked() { $this->battlesAttacked = 0; }
    public function getBattlesAttacked() { return $this->battlesAttacked;}
    public function setBattlesAttacked($value) { $this->battlesAttacked = $value; }

    public function clearBattlesDefended() { $this->battlesDefended = 0; }
    public function getBattlesDefended() { return $this->battlesDefended;}
    public function setBattlesDefended($value) { $this->battlesDefended = $value; }

    public function clearEggIncubatorId() { $this->eggIncubatorId = ""; }
    public function getEggIncubatorId() { return $this->eggIncubatorId;}
    public function setEggIncubatorId($value) { $this->eggIncubatorId = $value; }

    public function clearCreationTimeMs() { $this->creationTimeMs = 0; }
    public function getCreationTimeMs() { return $this->creationTimeMs;}
    public function setCreationTimeMs($value) { $this->creationTimeMs = $value; }

    public function clearNumUpgrades() { $this->numUpgrades = 0; }
    public function getNumUpgrades() { return $this->numUpgrades;}
    public function setNumUpgrades($value) { $this->numUpgrades = $value; }

    public function clearAdditionalCpMultiplier() { $this->additionalCpMultiplier = 0; }
    public function getAdditionalCpMultiplier() { return $this->additionalCpMultiplier;}
    public function setAdditionalCpMultiplier($value) { $this->additionalCpMultiplier = $value; }

    public function clearFavorite() { $this->favorite = 0; }
    public function getFavorite() { return $this->favorite;}
    public function setFavorite($value) { $this->favorite = $value; }

    public function clearNickname() { $this->nickname = ""; }
    public function getNickname() { return $this->nickname;}
    public function setNickname($value) { $this->nickname = $value; }

    public function clearFromFort() { $this->fromFort = 0; }
    public function getFromFort() { return $this->fromFort;}
    public function setFromFort($value) { $this->fromFort = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('id', $this->id, 0)
           . Protobuf::toString('pokemon_id', $this->pokemonId, PokemonId::MISSINGNO)
           . Protobuf::toString('cp', $this->cp, 0)
           . Protobuf::toString('stamina', $this->stamina, 0)
           . Protobuf::toString('stamina_max', $this->staminaMax, 0)
           . Protobuf::toString('move_1', $this->move1, PokemonMove::MOVE_UNSET)
           . Protobuf::toString('move_2', $this->move2, PokemonMove::MOVE_UNSET)
           . Protobuf::toString('deployed_fort_id', $this->deployedFortId, 0)
           . Protobuf::toString('owner_name', $this->ownerName, "")
           . Protobuf::toString('is_egg', $this->isEgg, false)
           . Protobuf::toString('egg_km_walked_target', $this->eggKmWalkedTarget, 0)
           . Protobuf::toString('egg_km_walked_start', $this->eggKmWalkedStart, 0)
           . Protobuf::toString('origin', $this->origin, 0)
           . Protobuf::toString('height_m', $this->heightM, 0)
           . Protobuf::toString('weight_kg', $this->weightKg, 0)
           . Protobuf::toString('individual_attack', $this->individualAttack, 0)
           . Protobuf::toString('individual_defense', $this->individualDefense, 0)
           . Protobuf::toString('individual_stamina', $this->individualStamina, 0)
           . Protobuf::toString('cp_multiplier', $this->cpMultiplier, 0)
           . Protobuf::toString('pokeball', $this->pokeball, ItemId::ITEM_UNKNOWN)
           . Protobuf::toString('captured_cell_id', $this->capturedCellId, 0)
           . Protobuf::toString('battles_attacked', $this->battlesAttacked, 0)
           . Protobuf::toString('battles_defended', $this->battlesDefended, 0)
           . Protobuf::toString('egg_incubator_id', $this->eggIncubatorId, "")
           . Protobuf::toString('creation_time_ms', $this->creationTimeMs, 0)
           . Protobuf::toString('num_upgrades', $this->numUpgrades, 0)
           . Protobuf::toString('additional_cp_multiplier', $this->additionalCpMultiplier, 0)
           . Protobuf::toString('favorite', $this->favorite, 0)
           . Protobuf::toString('nickname', $this->nickname, "")
           . Protobuf::toString('from_fort', $this->fromFort, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Data.PokemonData)
  }

}