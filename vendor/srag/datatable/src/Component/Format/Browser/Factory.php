<?php

namespace srag\DataTableUI\SrAutoMails\Component\Format\Browser;

use srag\DataTableUI\SrAutoMails\Component\Format\Browser\Filter\Factory as FilterFactory;

/**
 * Interface Factory
 *
 * @package srag\DataTableUI\SrAutoMails\Component\Format\Browser
 */
interface Factory
{

    /**
     * @return BrowserFormat
     */
    public function default() : BrowserFormat;


    /**
     * @return FilterFactory
     */
    public function filter() : FilterFactory;
}
