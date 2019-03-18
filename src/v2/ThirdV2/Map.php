<?php
/**
 * Auto generated from ThirdV2.proto at 2019-03-18 06:20:37
 *
 * ThirdV2 package
 */

namespace ThirdV2 {
/**
 * Map message
 */
class Map extends \ProtobufMessage
{
    /* Field index constants */
    const UID = 1;
    const LNG = 2;
    const LAT = 3;
    const SPEED = 4;
    const LOC_TYPE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::UID => array(
            'name' => 'uid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LNG => array(
            'name' => 'lng',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_DOUBLE,
        ),
        self::LAT => array(
            'name' => 'lat',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_DOUBLE,
        ),
        self::SPEED => array(
            'name' => 'speed',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_DOUBLE,
        ),
        self::LOC_TYPE => array(
            'name' => 'loc_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::UID] = null;
        $this->values[self::LNG] = null;
        $this->values[self::LAT] = null;
        $this->values[self::SPEED] = null;
        $this->values[self::LOC_TYPE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'uid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUid($value)
    {
        return $this->set(self::UID, $value);
    }

    /**
     * Returns value of 'uid' property
     *
     * @return string
     */
    public function getUid()
    {
        $value = $this->get(self::UID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'uid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUid()
    {
        return $this->get(self::UID) !== null;
    }

    /**
     * Sets value of 'lng' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setLng($value)
    {
        return $this->set(self::LNG, $value);
    }

    /**
     * Returns value of 'lng' property
     *
     * @return double
     */
    public function getLng()
    {
        $value = $this->get(self::LNG);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Returns true if 'lng' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLng()
    {
        return $this->get(self::LNG) !== null;
    }

    /**
     * Sets value of 'lat' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setLat($value)
    {
        return $this->set(self::LAT, $value);
    }

    /**
     * Returns value of 'lat' property
     *
     * @return double
     */
    public function getLat()
    {
        $value = $this->get(self::LAT);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Returns true if 'lat' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLat()
    {
        return $this->get(self::LAT) !== null;
    }

    /**
     * Sets value of 'speed' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setSpeed($value)
    {
        return $this->set(self::SPEED, $value);
    }

    /**
     * Returns value of 'speed' property
     *
     * @return double
     */
    public function getSpeed()
    {
        $value = $this->get(self::SPEED);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Returns true if 'speed' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSpeed()
    {
        return $this->get(self::SPEED) !== null;
    }

    /**
     * Sets value of 'loc_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLocType($value)
    {
        return $this->set(self::LOC_TYPE, $value);
    }

    /**
     * Returns value of 'loc_type' property
     *
     * @return integer
     */
    public function getLocType()
    {
        $value = $this->get(self::LOC_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'loc_type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLocType()
    {
        return $this->get(self::LOC_TYPE) !== null;
    }
}
}