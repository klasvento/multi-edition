<?php namespace ZN\EncodingSupport;

interface InternalGTInterface
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------------
    // Data
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $message
    //
    //--------------------------------------------------------------------------------------------------------
    public function data(String $message) : String;

    //--------------------------------------------------------------------------------------------------------
    // Locale
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $category : all, collate, ctype, monetary, numeric, time, messages
    // @param mixed  $locale
    //
    //--------------------------------------------------------------------------------------------------------
    public function locale(String $category, $locale) : GT;

    //--------------------------------------------------------------------------------------------------------
    // Datas
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $msgId1
    // @param string $msgId2
    // @param int    $count
    //
    //--------------------------------------------------------------------------------------------------------
    public function datas(String $msgId1, String $msgId2, Int $count = 0) : String;

    //--------------------------------------------------------------------------------------------------------
    // Change
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $domain
    // @param string $message
    //
    //--------------------------------------------------------------------------------------------------------
    public function change(String $domain, String $message) : String;

    //--------------------------------------------------------------------------------------------------------
    // Changes
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $domain
    // @param string $msgId1
    // @param string $msgId2
    // @param int    $count
    //
    //--------------------------------------------------------------------------------------------------------
    public function changes(String $domain, String $msgId1, String $msgId2, Int $count = 0) : String;

    //--------------------------------------------------------------------------------------------------------
    // Search
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $domain
    // @param string $message
    // @param string $category
    //
    //--------------------------------------------------------------------------------------------------------
    public function search(String $domain, String $message, String $category = 'ctype') : String;

    //--------------------------------------------------------------------------------------------------------
    // Searches
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $domain
    // @param string $msgId1
    // @param string $msgId2
    // @param int    $count
    // @param string $category
    //
    //--------------------------------------------------------------------------------------------------------
    public function searches(String $domain, String $msgId1, String $msgId2, Int $count = 0, String $category = 'ctype') : String;

    //--------------------------------------------------------------------------------------------------------
    // Codeset
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $domain
    // @param string $codeset
    //
    //--------------------------------------------------------------------------------------------------------
    public function codeset(String $domain, String $codeset) : GT;

    //--------------------------------------------------------------------------------------------------------
    // Dir
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $domain
    // @param string $directory
    //
    //--------------------------------------------------------------------------------------------------------
    public function dir(String $domain, String $directory) : GT;

    //--------------------------------------------------------------------------------------------------------
    // Name
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $textDomain
    //
    //--------------------------------------------------------------------------------------------------------
    public function name(String $textDomain) : String;
}