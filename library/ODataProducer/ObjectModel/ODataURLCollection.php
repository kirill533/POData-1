<?php

namespace ODataProducer\ObjectModel;


/**
 * Class ODataURLCollection represent collection of links for $links request.
 * @package ODataProducer\ObjectModel
 */
class ODataURLCollection
{
    /**
     * 
     * Array of ODataURL
     * @var array<ODataURL>
     */
    public $oDataUrls;
    /**
     * 
     * Enter URL to next page, if pagination is enabled
     * @var ODataLink
     */
    public $nextPageLink;
    /**
     * 
     * Enter url Count if inlineCount is requested
     * @var integer
     */
    public $count;

    /**
     * Constructor for Initialization of LinkCollection.
     */
    function __construct()
    {
        $this->oDataUrls = array();
        $this->nextPageLink = null;
        $this->count = null;
    }
}