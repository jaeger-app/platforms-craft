<?php
/**
 * Jaeger
 *
 * @copyright	Copyright (c) 2015-2016, mithra62
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./tests/CraftTest.php
 */
namespace JaegerApp\tests\Platforms;

use JaegerApp\Platforms\Craft;

/**
 * Jaeger - Craft object Unit Tests
 *
 * Contains all the unit tests for the \mithra62\Platforms\Craft object
 *
 * @package Jaeger\tests
 * @author Eric Lamb <eric@mithra62.com>
 */
class CraftTest extends \PHPUnit_Framework_TestCase
{

    public function testInit()
    {
        $craft = new Craft();
        $this->assertTrue(method_exists($craft, 'getDbCredentials'));
        $this->assertTrue(method_exists($craft, 'getEmailConfig'));
        $this->assertTrue(method_exists($craft, 'getCurrentUrl'));
        $this->assertTrue(method_exists($craft, 'getSiteName'));
        $this->assertTrue(method_exists($craft, 'getTimezone'));
        $this->assertTrue(method_exists($craft, 'getSiteUrl'));
        $this->assertTrue(method_exists($craft, 'getEncryptionKey'));
        $this->assertTrue(method_exists($craft, 'getConfigOverrides'));
        $this->assertInstanceOf('JaegerApp\\Platforms\\AbstractPlatform', $craft);
    }
}