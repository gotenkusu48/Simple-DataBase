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

        //�t�@�C����������Ȃ������牽���Ԃ��Ȃ�
        if(!is_dir("SimpleDB" + $DatabaseName)) return; throw new Exception("�t�@�C����������܂���");

        $this->DatabaseName = $DatabaseName;
    }



}
use Exception;