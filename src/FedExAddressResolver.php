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
      $address->getAdministrativeArea() . ', ' . $address->getLocality(),
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
   * Resolve Addresses in Barbodos.
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

  /**
   * Resolve Addresses in Ireland.
   *
   * @param \Drupal\address\AddressInterface $address
   *   The address to resolve.
   *
   * @return \NicholasCreativeMedia\FedExPHP\Structs\Party
   *   A Fedex Compatible party.
   */
  public static function addressResolveIE(AddressInterface $address) {

    $provinces = [
      'Co. Carlow' => 'N0',
      'Co. Cavan' => 'N1',
      'Co.  Clare' => 'N2',
      'Co. Cork' => ' N3',
      'Co.  Donegal' => 'N4',
      'Co. Dublin' => 'N5',
      'Co. Galway' => 'N6',
      'Co. Kerry' => 'N7',
      'Co. Kildare' => 'N8',
      'Co. Kilkenny' => 'N9',
      'Co. Laois' => 'NA',
      'Co. Leitrim' => 'NG',
      'Co. Limerick' => 'NI',
      'Co. Longford' => 'NK',
      'Co. Louth' => 'NL',
      'Co. Mayo' => 'NM',
      'Co. Meath' => 'NO',
      'Co. Monaghan' => 'NP',
      'Co. Offaly' => 'NQ',
      'Co. Roscommon' => 'NR',
      'Co. Sligo' => 'NW',
      'Co. Tipperary' => 'NX',
      'Co. Tipperary' => 'NY',
      'Co. Waterford' => 'NZ',
      'Co. Westmeath' => '10',
      'Co. Wexford' => '11',
      'Co. Wicklow' => '12',

    ];

    $party = new Party();

    $party->setAddress(new Address(
      array_filter([$address->getAddressLine1(), $address->getAddressLine2()]),
      $address->getAdministrativeArea(),
      $provinces[$address->getAdministrativeArea()],
      $address->getPostalCode(),
      NULL,
      $address->getCountryCode(),
      NULL,
      FALSE
    ));

    return $party;
  }

}
