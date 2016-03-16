<?php namespace App;

class Application extends \Consolle\Application implements \Consolle\Contracts\Kernel
{
    /**
     * Name Application
     * @var string
     */
    public $name   = 'serverstatus';

    /**
     * Title Application
     * @var string
     */
    public $title   = 'Server Status';
}