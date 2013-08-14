<?php

namespace ODataProducer\ObjectModel;

/**
 * Class ODataLink represents an OData Navigation Link.
 * @package ODataProducer\ObjectModel
 */
class ODataLink
{
    /**
     * 
     * Name of the link. This becomes last segment of rel attribute value.
     * @var string
     */
    public $name;
    /**
     * 
     * Title of the link. This become value of title attribute
     * @var string
     */
    public $title;
    /**
     * 
     * Type of link
     * @var string
     */
    public $type;
    /**
     * 
     * Url to the navigation property. This become value of href attribute
     * @var string
     */
    public $url;
    /**
     * 
     * Checks is Expand result contains single entity or collection of 
     * entities i.e. feed.
     * 
     * @var boolean
     */
    public $isCollection;
    /**
     * 
     * The expanded result. This become the inline content of the link
     * @var ODataEntry/ODataFeed
     */
    public $expandedResult;
    /**
     * 
     * True if Link is Expanded, False if not.
     * @var Boolean
     */
    public $isExpanded;

    /**
     * Constructor for Initialization of Link. 
     */
    function __construct()
    {
    }
}