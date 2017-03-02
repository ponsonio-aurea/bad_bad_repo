<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Governor\Framework\Common;

use Governor\Framework\Domain\MessageInterface;
/**
 * Description of PayloadParameterResolver
 *
 * @author    "David Kalosi" <david.kalosi@gmail.com>  
 * @license   <a href="http://www.opensource.org/licenses/mit-license.php">MIT License</a> 
 */
class PayloadParameterResolver implements ParameterResolverInterface
{
    private $payloadType;
    
    public function __construct($payloadType) 
    {
        $this->payloadType = $payloadType;
    }
   
    public function matches(MessageInterface $message) 
    {
        return $this->payloadType === $message->getPayloadType();
    }

    public function resolveParameterValue(MessageInterface $message) 
    {
        return $message->getPayload();
    }


}
