<?php

namespace Bert86014\LaravelErc20;

use ERC20\ERC20;
use EthereumRPC\API\Eth;
use EthereumRPC\API\Personal;
use EthereumRPC\EthereumRPC;

/**
 * Created by PhpStorm.
 * User: lee
 * Date: 11/12/2017
 * Time: 1:38 PM
 */
class Ethereum
{

    /** @var EthereumRPC */
    public $client;
    /** @var Eth */
    public $eth;
    /** @var ERC20 */
    public $erc20;
    /** @var Personal */
    public $personal;

    /**
     * Eth constructor.
     * @param EthereumRPC $ethereumRPC
     */
    public function __construct(EthereumRPC $ethereumRPC)
    {
        $this->client = $ethereumRPC;
        $this->eth = new Eth($ethereumRPC);
        $this->erc20 = new ERC20($ethereumRPC);
        $this->personal = new Personal($ethereumRPC);
    }

}
