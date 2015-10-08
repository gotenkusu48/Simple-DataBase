<?php
/**
 * Created by PhpStorm.
 * User: gurag
 * Date: 2015/10/08
 * Time: 18:33
 */

namespace SimpleDataBase;


class SimpleDataBase
{
    protected $DBName;
    protected $Data;
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
        if (!is_dir("SimpleDB" + $DatabaseName)) return;
        throw new Exception("ファイルが見つかりません");

        $this->DatabaseName = $DatabaseName;
    }

    public function Create($TableName, $TagList)
    {

    }

    public function SELECT()
    {

    }

    public function FROM()
    {
    }

    public function WHERE()
    {
    }


}
use Exception;