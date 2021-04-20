<?php
/**
 * FLoC Block plugin for Craft CMS 3.x
 *
 * Sets the HTTP response header Permissions-Policy: interest-cohort=() on all requests
 *
 * @link      https://www.refinedpractice.com
 * @copyright Copyright (c) 2021 Paul Ratcliffe
 */

use Codeception\Actor;
use Codeception\Lib\Friend;

/**
 * Inherited Methods
 *
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method Friend haveFriend($name, $actorClass = null)
 *
 * @SuppressWarnings(PHPMD)
 *
 */
class FunctionalTester extends Actor
{
    use _generated\FunctionalTesterActions;

}
