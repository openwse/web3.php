<?php

/**
 * This file is part of web3.php package.
 *
 * (c) Kuan-Cheng,Lai <alk03073135@gmail.com>
 *
 * @author Peter Lai <alk03073135@gmail.com>
 * @license MIT
 */

namespace Web3\Methods\Eth;

use Web3\Formatters\StringFormatter;
use Web3\Formatters\TransactionFormatter;
use Web3\Methods\EthMethod;
use Web3\Formatters\HexFormatter;
use Web3\Validators\TransactionValidator;

class SignTransaction extends EthMethod
{
    /**
     * validators
     *
     * @var array
     */
    protected $validators = [
        TransactionValidator::class
    ];

    /**
     * inputFormatters
     *
     * @var array
     */
    protected $inputFormatters = [
        TransactionFormatter::class
    ];

    /**
     * outputFormatters
     *
     * @var array
     */
    protected $outputFormatters = [];

    /**
     * defaultValues
     *
     * @var array
     */
    protected $defaultValues = [];

    /**
     * construct
     *
     * @param string $method
     * @param array $arguments
     * @return void
     */
    // public function __construct($method='', $arguments=[])
    // {
    //     parent::__construct($method, $arguments);
    // }
}
