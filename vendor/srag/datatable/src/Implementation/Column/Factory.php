<?php

namespace srag\DataTableUI\SrAutoMails\Implementation\Column;

use srag\DataTableUI\SrAutoMails\Component\Column\Column as ColumnInterface;
use srag\DataTableUI\SrAutoMails\Component\Column\Factory as FactoryInterface;
use srag\DataTableUI\SrAutoMails\Component\Column\Formatter\Factory as FormatterFactoryInterface;
use srag\DataTableUI\SrAutoMails\Implementation\Column\Formatter\Factory as FormatterFactory;
use srag\DataTableUI\SrAutoMails\Implementation\Utils\DataTableUITrait;
use srag\DIC\SrAutoMails\DICTrait;

/**
 * Class Factory
 *
 * @package srag\DataTableUI\SrAutoMails\Implementation\Column
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
    public function column(string $key, string $title) : ColumnInterface
    {
        return new Column($key, $title);
    }


    /**
     * @inheritDoc
     */
    public function formatter() : FormatterFactoryInterface
    {
        return FormatterFactory::getInstance();
    }
}
