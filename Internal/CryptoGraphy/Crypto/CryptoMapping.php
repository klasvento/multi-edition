<?php namespace ZN\CryptoGraphy;

use CLController;

class CryptoMapping extends CLController
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2017, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------------
    // Consts
    //--------------------------------------------------------------------------------------------------------
    //
    // @const string
    //
    //--------------------------------------------------------------------------------------------------------
    const config = 'Project';

    //--------------------------------------------------------------------------------------------------------
    // Encrypt
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function encrypt($data, $settings)
    {
        return false;
    }

    //--------------------------------------------------------------------------------------------------------
    // Decrypt
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function decrypt($data, $settings)
    {
        return false;
    }

    //--------------------------------------------------------------------------------------------------------
    // Keygen
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function keygen($length)
    {
        return false;
    }
}
