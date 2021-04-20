<?php
/**
 * FLoC Block plugin for Craft CMS 3.x
 *
 * Sets the HTTP response header Permissions-Policy: interest-cohort=() on all requests
 *
 * @link      https://www.refinedpractice.com
 * @copyright Copyright (c) 2021 Paul Ratcliffe
 */

namespace refinedpractice\flocblocktests\unit;

use Codeception\Test\Unit;
use UnitTester;
use Craft;
use refinedpractice\flocblock\FlocBlock;

/**
 * ExampleUnitTest
 *
 *
 * @author    Paul Ratcliffe
 * @package   FlocBlock
 * @since     1.0.0
 */
class ExampleUnitTest extends Unit
{
    // Properties
    // =========================================================================

    /**
     * @var UnitTester
     */
    protected $tester;

    // Public methods
    // =========================================================================

    // Tests
    // =========================================================================

    /**
     *
     */
    public function testPluginInstance()
    {
        $this->assertInstanceOf(
            FlocBlock::class,
            FlocBlock::$plugin
        );
    }

    /**
     *
     */
    public function testCraftEdition()
    {
        Craft::$app->setEdition(Craft::Pro);

        $this->assertSame(
            Craft::Pro,
            Craft::$app->getEdition()
        );
    }
}
