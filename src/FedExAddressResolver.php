<?php

namespace Drupal\commerce_fedex;

use Drupal\address\AddressInterface;
use NicholasCreativeMedia\FedExPHP\Structs\Address;
use NicholasCreativeMedia\FedExPHP\Structs\Party;

/**
 * Allow Country level modifications when converting Drupal addresses to fedex.
 */
trait FedExAddressResolver {

  /**
   * Resolve Addresses in Austriaila.
   *
   * @param \Drupal\address\AddressInterface $address
   *   The address to resolve.
   *
   * @return \NicholasCreativeMedia\FedExPHP\Structs\Party
   *   A Fedex Compatible party.
   */
  public static function addressResolveAU(AddressInterface $address) {

    $provinces = [
      'NSW' => 'NS',
      'NT' => 'NT',
      'QL' => 'QL',
      'SA' => 'SA',
      'TAS' => 'TS',
      'VIC' => 'VI',
      'WA' => 'WA',
    ];

    $party = new Party();

    $party->setAddress(new Address(
      array_filter([$address->getAddressLine1(), $address->getAddressLine2()]),
      $address->getLocality(),
      $provinces[$address->getAdministrativeArea()],
      $address->getPostalCode(),
      NULL,
      $address->getCountryCode(),
      NULL,
      FALSE
    ));

    return $party;
  }

  /**
   * Resolve Addresses in Hong Kong.
   *
   * @param \Drupal\address\AddressInterface $address
   *   The address to resolve.
   *
   * @return \NicholasCreativeMedia\FedExPHP\Structs\Party
   *   A Fedex Compatible party.
   */
  public static function addressResolveHK(AddressInterface $address) {
   
    $party = new Party();
    
    $party->setAddress(new Address(
      array_filter([$address->getAddressLine1(), $address->getAddressLine2()]),
      $address->getAdministrativeArea().', '.$address->getLocality(),
      NULL,
      $address->getPostalCode(),
      NULL,
      $address->getCountryCode(),
      NULL,
      FALSE
    ));
    
    return $party;
  }
  
  /**
   * Resolve Addresses in Barbados.
   *
   * @param \Drupal\address\AddressInterface $address
   *   The address to resolve.
   *
   * @return \NicholasCreativeMedia\FedExPHP\Structs\Party
   *   A Fedex Compatible party.
   */
    public static function addressResolveBB(AddressInterface $address) {
 
    $party = new Party();
    
    $party->setAddress(new Address(
      array_filter([$address->getAddressLine1(), $address->getAddressLine2()]),
      $address->getAdministrativeArea(),
      NULL,
      $address->getPostalCode(),
      NULL,
      $address->getCountryCode(),
      NULL,
      FALSE
    ));
    
    return $party;
  }

}
