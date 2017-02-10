<?php namespace JobApis\Jobs\Client\Test;

use JobApis\Jobs\Client\Queries\SkeletonQuery as Query;
use Mockery as m;

class SkeletonQueryTest extends \PHPUnit_Framework_TestCase
{
    public $query;

    public function setUp()
    {
        $this->query = new Query();
    }

    public function testItCanTest()
    {
        $this->assertTrue($this->query);
    }
}
