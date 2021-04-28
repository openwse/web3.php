<?php

/**
 * This file is part of web3.php package.
 *
 * (c) Kuan-Cheng,Lai <alk03073135@gmail.com>
 *
 * @author Peter Lai <alk03073135@gmail.com>
 * @license MIT
 */

namespace Web3\Methods\Personal;

use Web3\Formatters\AddressFormatter;
use Web3\Methods\EthMethod;
use Web3\Validators\AddressValidator;
use Web3\Validators\StringValidator;
use Web3\Formatters\StringFormatter;

class EcRecover extends EthMethod
{
    /**
     * validators
     *
     * @var array
     */
    protected $validators = [
        StringValidator::class,
        StringValidator::class,
    ];

    /**
     * inputFormatters
     *
     * @var array
     */
    protected $inputFormatters = [
        StringFormatter::class,
        StringFormatter::class,
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
}
