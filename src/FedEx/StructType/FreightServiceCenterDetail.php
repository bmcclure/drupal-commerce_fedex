<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightServiceCenterDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: This class describes the relationship between a customer-specified address and the FedEx Freight / FedEx National Freight Service Center that supports that address.
 * @subpackage Structs
 */
class FreightServiceCenterDetail extends AbstractStructBase
{
    /**
     * The InterlineCarrierCode
     * Meta informations extracted from the WSDL
     * - documentation: Freight Industry standard non-FedEx carrier identification
     * - minOccurs: 0
     * @var string
     */
    public $InterlineCarrierCode;
    /**
     * The InterlineCarrierName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the Interline carrier.
     * - minOccurs: 0
     * @var string
     */
    public $InterlineCarrierName;
    /**
     * The AdditionalDays
     * Meta informations extracted from the WSDL
     * - documentation: Additional time it might take at the origin or destination to pickup or deliver the freight. This is usually due to the remoteness of the location. This time is included in the total transit time.
     * - minOccurs: 0
     * @var int
     */
    public $AdditionalDays;
    /**
     * The LocalService
     * Meta informations extracted from the WSDL
     * - documentation: Service branding which may be used for local pickup or delivery, distinct from service used for line-haul of customer's shipment.
     * - minOccurs: 0
     * @var string
     */
    public $LocalService;
    /**
     * The LocalDistance
     * Meta informations extracted from the WSDL
     * - documentation: Distance between customer address (pickup or delivery) and the supporting Freight / National Freight service center.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Distance
     */
    public $LocalDistance;
    /**
     * The LocalDuration
     * Meta informations extracted from the WSDL
     * - documentation: Time to travel between customer address (pickup or delivery) and the supporting Freight / National Freight service center.
     * - minOccurs: 0
     * @var string
     */
    public $LocalDuration;
    /**
     * The LocalServiceScheduling
     * Meta informations extracted from the WSDL
     * - documentation: Specifies when/how the customer can arrange for pickup or delivery.
     * - minOccurs: 0
     * @var string
     */
    public $LocalServiceScheduling;
    /**
     * The LimitedServiceDays
     * Meta informations extracted from the WSDL
     * - documentation: Specifies days of operation if localServiceScheduling is LIMITED.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $LimitedServiceDays;
    /**
     * The GatewayLocationId
     * Meta informations extracted from the WSDL
     * - documentation: Freight service center that is a gateway on the border of Canada or Mexico.
     * - minOccurs: 0
     * @var string
     */
    public $GatewayLocationId;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - documentation: Alphabetical code identifying a Freight Service Center
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The ContactAndAddress
     * Meta informations extracted from the WSDL
     * - documentation: Freight service center Contact and Address
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress
     */
    public $ContactAndAddress;
    /**
     * Constructor method for FreightServiceCenterDetail
     * @uses FreightServiceCenterDetail::setInterlineCarrierCode()
     * @uses FreightServiceCenterDetail::setInterlineCarrierName()
     * @uses FreightServiceCenterDetail::setAdditionalDays()
     * @uses FreightServiceCenterDetail::setLocalService()
     * @uses FreightServiceCenterDetail::setLocalDistance()
     * @uses FreightServiceCenterDetail::setLocalDuration()
     * @uses FreightServiceCenterDetail::setLocalServiceScheduling()
     * @uses FreightServiceCenterDetail::setLimitedServiceDays()
     * @uses FreightServiceCenterDetail::setGatewayLocationId()
     * @uses FreightServiceCenterDetail::setLocation()
     * @uses FreightServiceCenterDetail::setContactAndAddress()
     * @param string $interlineCarrierCode
     * @param string $interlineCarrierName
     * @param int $additionalDays
     * @param string $localService
     * @param \Drupal\commerce_fedex\FedEx\StructType\Distance $localDistance
     * @param string $localDuration
     * @param string $localServiceScheduling
     * @param string[] $limitedServiceDays
     * @param string $gatewayLocationId
     * @param string $location
     * @param \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $contactAndAddress
     */
    public function __construct($interlineCarrierCode = null, $interlineCarrierName = null, $additionalDays = null, $localService = null, \Drupal\commerce_fedex\FedEx\StructType\Distance $localDistance = null, $localDuration = null, $localServiceScheduling = null, array $limitedServiceDays = array(), $gatewayLocationId = null, $location = null, \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $contactAndAddress = null)
    {
        $this
            ->setInterlineCarrierCode($interlineCarrierCode)
            ->setInterlineCarrierName($interlineCarrierName)
            ->setAdditionalDays($additionalDays)
            ->setLocalService($localService)
            ->setLocalDistance($localDistance)
            ->setLocalDuration($localDuration)
            ->setLocalServiceScheduling($localServiceScheduling)
            ->setLimitedServiceDays($limitedServiceDays)
            ->setGatewayLocationId($gatewayLocationId)
            ->setLocation($location)
            ->setContactAndAddress($contactAndAddress);
    }
    /**
     * Get InterlineCarrierCode value
     * @return string|null
     */
    public function getInterlineCarrierCode()
    {
        return $this->InterlineCarrierCode;
    }
    /**
     * Set InterlineCarrierCode value
     * @param string $interlineCarrierCode
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail
     */
    public function setInterlineCarrierCode($interlineCarrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($interlineCarrierCode) && !is_string($interlineCarrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($interlineCarrierCode)), __LINE__);
        }
        $this->InterlineCarrierCode = $interlineCarrierCode;
        return $this;
    }
    /**
     * Get InterlineCarrierName value
     * @return string|null
     */
    public function getInterlineCarrierName()
    {
        return $this->InterlineCarrierName;
    }
    /**
     * Set InterlineCarrierName value
     * @param string $interlineCarrierName
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail
     */
    public function setInterlineCarrierName($interlineCarrierName = null)
    {
        // validation for constraint: string
        if (!is_null($interlineCarrierName) && !is_string($interlineCarrierName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($interlineCarrierName)), __LINE__);
        }
        $this->InterlineCarrierName = $interlineCarrierName;
        return $this;
    }
    /**
     * Get AdditionalDays value
     * @return int|null
     */
    public function getAdditionalDays()
    {
        return $this->AdditionalDays;
    }
    /**
     * Set AdditionalDays value
     * @param int $additionalDays
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail
     */
    public function setAdditionalDays($additionalDays = null)
    {
        // validation for constraint: int
        if (!is_null($additionalDays) && !is_numeric($additionalDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($additionalDays)), __LINE__);
        }
        $this->AdditionalDays = $additionalDays;
        return $this;
    }
    /**
     * Get LocalService value
     * @return string|null
     */
    public function getLocalService()
    {
        return $this->LocalService;
    }
    /**
     * Set LocalService value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ServiceType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $localService
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail
     */
    public function setLocalService($localService = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\ServiceType::valueIsValid($localService)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $localService, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ServiceType::getValidValues())), __LINE__);
        }
        $this->LocalService = $localService;
        return $this;
    }
    /**
     * Get LocalDistance value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Distance|null
     */
    public function getLocalDistance()
    {
        return $this->LocalDistance;
    }
    /**
     * Set LocalDistance value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Distance $localDistance
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail
     */
    public function setLocalDistance(\Drupal\commerce_fedex\FedEx\StructType\Distance $localDistance = null)
    {
        $this->LocalDistance = $localDistance;
        return $this;
    }
    /**
     * Get LocalDuration value
     * @return string|null
     */
    public function getLocalDuration()
    {
        return $this->LocalDuration;
    }
    /**
     * Set LocalDuration value
     * @param string $localDuration
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail
     */
    public function setLocalDuration($localDuration = null)
    {
        // validation for constraint: string
        if (!is_null($localDuration) && !is_string($localDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($localDuration)), __LINE__);
        }
        $this->LocalDuration = $localDuration;
        return $this;
    }
    /**
     * Get LocalServiceScheduling value
     * @return string|null
     */
    public function getLocalServiceScheduling()
    {
        return $this->LocalServiceScheduling;
    }
    /**
     * Set LocalServiceScheduling value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\FreightServiceSchedulingType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\FreightServiceSchedulingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $localServiceScheduling
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail
     */
    public function setLocalServiceScheduling($localServiceScheduling = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\FreightServiceSchedulingType::valueIsValid($localServiceScheduling)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $localServiceScheduling, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\FreightServiceSchedulingType::getValidValues())), __LINE__);
        }
        $this->LocalServiceScheduling = $localServiceScheduling;
        return $this;
    }
    /**
     * Get LimitedServiceDays value
     * @return string[]|null
     */
    public function getLimitedServiceDays()
    {
        return $this->LimitedServiceDays;
    }
    /**
     * Set LimitedServiceDays value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\DayOfWeekType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\DayOfWeekType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $limitedServiceDays
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail
     */
    public function setLimitedServiceDays(array $limitedServiceDays = array())
    {
        $invalidValues = array();
        foreach ($limitedServiceDays as $freightServiceCenterDetailLimitedServiceDaysItem) {
            if (!\Drupal\commerce_fedex\FedEx\EnumType\DayOfWeekType::valueIsValid($freightServiceCenterDetailLimitedServiceDaysItem)) {
                $invalidValues[] = var_export($freightServiceCenterDetailLimitedServiceDaysItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\DayOfWeekType::getValidValues())), __LINE__);
        }
        $this->LimitedServiceDays = $limitedServiceDays;
        return $this;
    }
    /**
     * Add item to LimitedServiceDays value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\DayOfWeekType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\DayOfWeekType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail
     */
    public function addToLimitedServiceDays($item)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\DayOfWeekType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\DayOfWeekType::getValidValues())), __LINE__);
        }
        $this->LimitedServiceDays[] = $item;
        return $this;
    }
    /**
     * Get GatewayLocationId value
     * @return string|null
     */
    public function getGatewayLocationId()
    {
        return $this->GatewayLocationId;
    }
    /**
     * Set GatewayLocationId value
     * @param string $gatewayLocationId
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail
     */
    public function setGatewayLocationId($gatewayLocationId = null)
    {
        // validation for constraint: string
        if (!is_null($gatewayLocationId) && !is_string($gatewayLocationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gatewayLocationId)), __LINE__);
        }
        $this->GatewayLocationId = $gatewayLocationId;
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($location)), __LINE__);
        }
        $this->Location = $location;
        return $this;
    }
    /**
     * Get ContactAndAddress value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress|null
     */
    public function getContactAndAddress()
    {
        return $this->ContactAndAddress;
    }
    /**
     * Set ContactAndAddress value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $contactAndAddress
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail
     */
    public function setContactAndAddress(\Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $contactAndAddress = null)
    {
        $this->ContactAndAddress = $contactAndAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
