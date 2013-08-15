<?php

use ODataProducer\Configuration\EntitySetRights;
require_once 'ODataProducer\IDataService.php';
require_once 'ODataProducer\IRequestHandler.php';
require_once 'ODataProducer\DataService.php';
require_once 'ODataProducer\IServiceProvider.php';
use ODataProducer\Configuration\DataServiceProtocolVersion;
use ODataProducer\Configuration\DataServiceConfiguration;
use ODataProducer\IServiceProvider;
use ODataProducer\DataService;
use ODataProducer\OperationContext\DataServiceHost;
use ODataProducer\Common\ODataException;
use ODataProducer\Common\ODataConstants;
use ODataProducer\Common\Messages;
use ODataProducer\UriProcessor\UriProcessor;
require_once 'WordPressMetadata.php';
require_once 'WordPressQueryProvider.php';
require_once 'WordPressDSExpressionProvider.php';


class WordPressDataService extends DataService implements IServiceProvider
{
    private $_wordPressMetadata = null;
    private $_wordPressQueryProvider = null;
    private $_wordPressExpressionProvider = null;
    
    /**
     * This method is called only once to initialize service-wide policies
     * 
     * @param DataServiceConfiguration &$config Data service configuration object
     * 
     * @return void
     */
    public function initializeService(DataServiceConfiguration &$config)
    {
        $config->setEntitySetPageSize('*', 5);
        $config->setEntitySetAccessRule('*', EntitySetRights::ALL);
        $config->setAcceptCountRequests(true);
        $config->setAcceptProjectionRequests(true);
        $config->setMaxDataServiceVersion(DataServiceProtocolVersion::V3);
    }

    /**
     * Get the service like IDataServiceMetadataProvider, IDataServiceQueryProvider,
     * IDataServiceStreamProvider
     * 
     * @param String $serviceType Type of service IDataServiceMetadataProvider, 
     *                            IDataServiceQueryProvider,
     *                            IDataServiceStreamProvider
     * 
     * @see library/ODataProducer/ODataProducer.IServiceProvider::getService()
     * @return object
     */
    public function getService($serviceType)
    {
      if(($serviceType === 'IDataServiceMetadataProvider') || 
        ($serviceType === 'IDataServiceQueryProvider2') ||
        ($serviceType === 'IDataServiceStreamProvider')) {
        if (is_null($this->_wordPressExpressionProvider)) {
        $this->_wordPressExpressionProvider = new WordPressDSExpressionProvider();    			
        }    	
      }
        if ($serviceType === 'IDataServiceMetadataProvider') {
            if (is_null($this->_wordPressMetadata)) {
                $this->_wordPressMetadata = CreateWordPressMetadata::create();
                // $this->_wordPressMetadata->mappedDetails = CreateWordPressMetadata::mappingInitialize();
            }
            return $this->_wordPressMetadata;
        } else if ($serviceType === 'IDataServiceQueryProvider2') {
            if (is_null($this->_wordPressQueryProvider)) {
                $this->_wordPressQueryProvider = new WordPressQueryProvider();
            }
            return $this->_wordPressQueryProvider;
        } else if ($serviceType === 'IDataServiceStreamProvider') {
            return new WordPressStreamProvider();
        }
        return null;
    }
}
