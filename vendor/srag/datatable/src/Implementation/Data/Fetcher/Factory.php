<?php

namespace srag\DataTableUI\SrAutoMails\Implementation\Data\Fetcher;

use srag\DataTableUI\SrAutoMails\Component\Data\Fetcher\DataFetcher;
use srag\DataTableUI\SrAutoMails\Component\Data\Fetcher\Factory as FactoryInterface;
use srag\DataTableUI\SrAutoMails\Implementation\Utils\DataTableUITrait;
use srag\DIC\SrAutoMails\DICTrait;

/**
 * Class Factory
 *
 * @package srag\DataTableUI\SrAutoMails\Implementation\Data\Fetcher
 */
class Factory implements FactoryInterface
{

    use DICTrait;
    use DataTableUITrait;

    /**
     * @var self|null
     */
    protected static $instance = null;


    /**
     * Factory constructor
     */
    private function __construct()
    {

    }


    /**
     * @return self
     */
    public static function getInstance() : self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    /**
     * @inheritDoc
     */
    public function staticData(array $data, string $id_key) : DataFetcher
    {
        return new StaticDataFetcher($data, $id_key);
    }
}
