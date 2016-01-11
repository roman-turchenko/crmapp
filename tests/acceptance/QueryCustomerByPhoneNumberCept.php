<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 09.01.2016
 * Time: 0:56
 */

//use Step\Acceptance;

use Step\Acceptance\CRMOperatorSteps as OperatorTest;

$I = new OperatorTest($scenario);
$I->wantTo('add two different customers to database');
$I->amInAddCustomerUi();
$first_customer = $I->imagineCustomer();
$I->fillCustomerDataForm($first_customer);
$I->submitCustomerDataForm();

$I->seeIAmInListCustomersUi();

$I->amInAddCustomerUi();
$second_customer = $I->imagineCustomer();
$I->fillCustomerDataForm($second_customer);
$I->submitCustomerDataForm();

$I->seeIAmInListCustomersUi();


use Step\Acceptance\CRMUserSteps as UserTest;
$I = new UserTest($scenario);
$I->wentTo('query the customer info using his phone number');

$I->amInQueryCustomerUi();
$I->fillInPhoneFieldWithDataForm($first_customer);
$I->clickSearchButton();

$I->seeAmInListCustomersUi();
$I->seeCustomerInList($first_customer);
$I->dontSeeCustomerInList($second_customer);