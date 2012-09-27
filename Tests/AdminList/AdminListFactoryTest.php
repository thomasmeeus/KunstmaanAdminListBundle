<?php
namespace Kunstmaan\AdminListBundle\Tests\AdminList;

use Kunstmaan\AdminListBundle\AdminList\AdminListFactory;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-09-26 at 13:21:32.
 */
class AdminListFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AdminListFactory
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new AdminListFactory;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Kunstmaan\AdminListBundle\AdminList\AdminListFactory::createList
     */
    public function testCreateList()
    {
        $mockConfig = $this->getMock('Kunstmaan\AdminListBundle\AdminList\AdminListConfiguratorInterface');
        $list = $this->object->createList($mockConfig);

        $this->assertInstanceOf('Kunstmaan\AdminListBundle\AdminList\AdminList', $list);
    }
}
