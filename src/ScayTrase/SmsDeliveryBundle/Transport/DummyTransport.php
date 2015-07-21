<?php
/**
 * Created by PhpStorm.
 * User: Pavel Batanov <pavel@batanov.me>
 * Date: 30.06.2014
 * Time: 13:10
 */

namespace ScayTrase\SmsDeliveryBundle\Transport;


use ScayTrase\SmsDeliveryBundle\Exception\DeliveryFailedException;
use ScayTrase\SmsDeliveryBundle\Service\ShortMessageInterface;

class DummyTransport implements TransportInterface
{
    private $debug = true;

    /**
     * DummyTransport constructor.
     * @param bool $debug
     */
    public function __construct($debug = true)
    {
        $this->debug = $debug;
    }

    /**
     * @param ShortMessageInterface $message
     * @return boolean
     *
     * @throws DeliveryFailedException
     */
    public function send(ShortMessageInterface $message)
    {
        throw new DeliveryFailedException('Sending not configured');
    }
}
