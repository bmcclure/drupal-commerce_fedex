Drupal Commerce
===============

Commerce FedEx provides direct FedEx integration with your
Drupal Commerce 2.x e-commerce site on Drupal 8.

Supporting all FedEx shipping services and an increasing number 
of FedEx's special services, such as Hazardous Materials and Dry Ice,
Commerce FedEx is designed to be your one-stop solution 
for all of your FedEx shipping requirements.

Until Commerce FedEx is enters the Beta phase, there will *not* be a 
guaranteed upgrade path between versions. We are doing our best to 
minimize disruption (we're using it in production already!), but pay 
close attention during upgrades as there may be cases where you will 
have to reinstall the module.

Please report bugs in the [issue queue]
(https://www.drupal.org/project/issues/commerce_fedex?version=8.x).

## Requirements

* A FedEx shipping account from [FedEx.com](http://www.fedex.com/)
* Drupal 8
* Drupal Commerce 2.x-dev (latest version)
* Commerce Shipping 2.x-dev (latest version)

## Installation

Use [Composer](https://getcomposer.org/) to get Commerce FedEx and all of its
dependencies installed on your Drupal 8 site:

```
composer require drupal/commerce_fedex
```

Then simply enable the "FedEx (Commerce Shipping)" module and visit 
`Commerce > Configuration > Shipping Methods` to configure FedEx.
