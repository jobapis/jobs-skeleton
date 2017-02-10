<?php namespace JobApis\Jobs\Client\Providers\Test;

use JobApis\Jobs\Client\Providers\SkeletonProvider as Provider;
use JobApis\Jobs\Client\Queries\SkeletonQuery as Query;
use Mockery as m;

class SkeletonProviderTest extends \PHPUnit_Framework_TestCase
{
    public $client;

    public $query;

    public function setUp()
    {
        $this->query = m::mock(Query::class);

        $this->client = new Provider($this->query);
    }

    public function testItCanTest()
    {
        $this->assertTrue($this->client);
    }
}
