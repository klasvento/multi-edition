<?php namespace ZN\EncodingSupport\MultiLanguage;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

use ZN\FileSystem\File;
use ZN\FileSystem\Folder;

class Delete extends MLExtends
{
    //--------------------------------------------------------------------------------------------------------
    // Delete
    //--------------------------------------------------------------------------------------------------------
    //
    // Silinecek dil dosyası.
    // @param string $app
    // @param mixed  $key
    //
    // @return bool
    //
    //--------------------------------------------------------------------------------------------------------
    public function do(String $app, $key) : Bool
    {
        $datas = [];

        $createFile = $this->_langFile($app);

        if( is_file($createFile) )
        {
            $datas = json_decode(file_get_contents($createFile), true);
        }

        if( ! empty($datas) )
        {
            $json = $datas;
        }

        if( ! is_array($key) )
        {
            unset($json[$key]);
        }
        else
        {
            foreach($key as $v)
            {
                unset($json[$v]);
            }
        }

        return file_put_contents($createFile, json_encode($json, JSON_UNESCAPED_UNICODE));
    }

    //--------------------------------------------------------------------------------------------------------
    // Delete All
    //--------------------------------------------------------------------------------------------------------
    //
    // Silinecek dil dosyası.
    // @param string $app
    //
    //--------------------------------------------------------------------------------------------------------
    public function all($app = NULL) : Bool
    {
        if( ! is_string($app) )
        {
            if( $app === NULL )
            {
                $MLFiles = Folder\FileList::files($this->appdir, 'ml');
            }
            elseif( is_array($app) )
            {
                $MLFiles = $app;
            }
            else
            {
                return false;
            }

            $allMLFiles = [];

            if( ! empty($MLFiles) ) foreach( $MLFiles as $file )
            {
                $removeExtension = str_replace('.ml', '', $file);
                $this->all($removeExtension);
            }

            return true;
        }
        else
        {
            $createFile = $this->_langFile($app);
      
            if( is_file($createFile) )
            {
                return unlink($createFile);
            }

            return false;
        }
    }
}
