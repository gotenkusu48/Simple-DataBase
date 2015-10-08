<?php
/**
 * Created by PhpStorm.
 * User: gurag
 * Date: 2015/10/08
 * Time: 18:33
 */

namespace SimpleDataBase;


public class SimpleDataBase
{
    protected $DBName;
    protected $content;
    private $DatabaseName;

    /**
     * @param $DatabaseName
     * @throws Exception
     */
    public function __construct($DatabaseName)
    {
        if (!empty($DBName)) {
            //$DBName = $DatabaseName;
        }

        //ファイルが見つからなかったら何も返さない
        if(!is_dir("SimpleDB" + $DatabaseName)) return; throw new Exception("ファイルが見つかりません");

        $this->DatabaseName = $DatabaseName;
    }



}
use Exception;