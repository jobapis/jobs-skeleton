<?php namespace JobApis\Jobs\Client\Providers;

use JobApis\Jobs\Client\Job;

class SkeletonProvider extends AbstractProvider
{
    /**
     * Returns the standardized job object
     *
     * @param array $payload
     *
     * @return \JobApis\Jobs\Client\Job
     */
    public function createJobObject($payload)
    {
        // return $job;
    }

    /**
     * Job response object default keys that should be set
     *
     * @return  array
     */
    public function getDefaultResponseFields()
    {
        return [];
    }

    /**
     * Get listings path
     *
     * @return  string
     */
    public function getListingsPath()
    {
        return '';
    }
}
