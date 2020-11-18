<?php

namespace srag\DataTableUI\SrAutoMails\Implementation\Data;

use srag\DataTableUI\SrAutoMails\Component\Data\Data as DataInterface;
use srag\DataTableUI\SrAutoMails\Component\Data\Factory as FactoryInterface;
use srag\DataTableUI\SrAutoMails\Component\Data\Fetcher\Factory as FetcherFactoryInterface;
use srag\DataTableUI\SrAutoMails\Component\Data\Row\Factory as RowFactoryInterface;
use srag\DataTableUI\SrAutoMails\Implementation\Data\Fetcher\Factory as FetcherFactory;
use srag\DataTableUI\SrAutoMails\Implementation\Data\Row\Factory as RowFactory;
use srag\DataTableUI\SrAutoMails\Implementation\Utils\DataTableUITrait;
use srag\DIC\SrAutoMails\DICTrait;

/**
 * Class Factory
 *
 * @package srag\DataTableUI\SrAutoMails\Implementation\Data
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
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
    public function data(array $data, int $max_count) : DataInterface
    {
        return new Data($data, $max_count);
    }


    /**
     * @inheritDoc
     */
    public function fetcher() : FetcherFactoryInterface
    {
        return FetcherFactory::getInstance();
    }


    /**
     * @inheritDoc
     */
    public function row() : RowFactoryInterface
    {
        return RowFactory::getInstance();
    }
}
