<?php
namespace Kunstmaan\AdminListBundle\Tests\AdminList;

use Kunstmaan\AdminListBundle\AdminList\Filter;
use Symfony\Component\HttpFoundation\Request;
use Kunstmaan\AdminListBundle\AdminList\Filters\DBAL\StringFilter;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-09-26 at 13:21:32.
 */
class FilterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Filter
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $filterDef = array('type' => new StringFilter('string', 'b'), 'options' => array(), 'filtername' => 'filterName');
        $this->object = new Filter('columnName', $filterDef, 'string');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Kunstmaan\AdminListBundle\AdminList\Filter::__construct
     * @covers Kunstmaan\AdminListBundle\AdminList\Filter::getColumnName
     * @covers Kunstmaan\AdminListBundle\AdminList\Filter::getType
     * @covers Kunstmaan\AdminListBundle\AdminList\Filter::getUniqueId
     */
    public function test__construct()
    {
        $filterDef = array('type' => new StringFilter('string', 'b'), 'options' => array(), 'filtername' => 'filterName');
        $object = new Filter('columnName', $filterDef, 'string');

        $this->assertEquals('columnName', $object->getColumnName());
        $this->assertEquals('string', $object->getUniqueId());
        $this->assertInstanceOf('Kunstmaan\AdminListBundle\AdminList\Filters\AdminListFilterInterface', $object->getType());
    }

    /**
     * @covers Kunstmaan\AdminListBundle\AdminList\Filter::bindRequest
     * @covers Kunstmaan\AdminListBundle\AdminList\Filter::getData
     */
    public function testBindRequest()
    {
        $request = new Request(array('filter_comparator_string' => 'equals', 'filter_value_string' => 'TheStringValue'));
        $this->object->bindRequest($request);

        $this->assertEquals(array('comparator' => 'equals', 'value' => 'TheStringValue'), $this->object->getData());
    }
}
