<?php

namespace ExampleBlock;

use Psr\Log\LoggerInterface;

/**
 * The MIT License (MIT)
 * Copyright (c) 2017 maciejpaprocki
 */
class Block
{
    /**
     * @var string
     */
    public $src;
    /**
     * @var LoggerInterface
     */
    private $_logger;

    /**
     * Block constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->_logger = $logger;
    }

    public function render()
    {

    }

    public function getCacheKey()
    {
    }


}