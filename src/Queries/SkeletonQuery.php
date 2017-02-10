<?php namespace JobApis\Jobs\Client\Queries;

class SkeletonQuery extends AbstractQuery
{
    /**
     * Keyword
     *
     * The primary search string
     *
     * @var string
     */
    protected $keyword;

    /**
     * Get baseUrl
     *
     * @return  string Value of the base url to this api
     */
    public function getBaseUrl()
    {
        // return 'http://example.com/api/path';
    }

    /**
     * Get keyword
     *
     * @return  string Attribute being used as the search keyword
     */
    public function getKeyword()
    {
        return $this->keyword;
    }
}
