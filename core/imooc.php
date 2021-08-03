<?php
namespace core;

use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;


class imooc
{
    private $assign = [];
    public static $classMap = array();

    static public function run()
    {
        //p('ok');
        \core\lib\log::init();
        $route = new \core\lib\route();
        $ctrlClass = $route->ctrl;
        $action = $route->action;
        $ctrlfile = APP.'/ctrl/'.$ctrlClass.'.php';
        $cltrClass = '\\'.MODULE.'\ctrl\\'.$ctrlClass;
        if(is_file($ctrlfile)) {
            include $ctrlfile;
            $ctrl = new $cltrClass();
            $ctrl->$action();
            \core\lib\log::log('ctrl:'.$ctrlClass.'   '.'action:'.$action);
        } else {
            throw new \Exception('找不到控制器'.$ctrlClass);
        }
    }

    static public function load($class)
    {
        //自动加载类库
        if(isset($classMap[$class])) {
            return true;
        }
        $class = str_replace('\\','/', $class);
        $file = IMOOC.'/'.$class.'.php';
        if(is_file($file)) {
            include $file;
            self::$classMap[$class];
        } else {
            return false;
        }
    }

    /**
     * 变量参数绑定
     * @param  [type] $var   变量
     * @param  [type] $value 值
     *
     */
    public function assign($var,$value=null)
    {
        if(is_array($var)) {
            foreach($var as $key => $val) {
                $this->assign[$key] = $val;
            }
        } else {
            $this->assign[$var] = $value;
        }
    }

    public function display($file)
    {
        //$file = ;
        if(is_file(APP.'/views/'.$file)) {
            extract($this->assign);
            //include $file;
            $loader = new FilesystemLoader(APP.'/views');
            $twig = new Environment($loader, array(
                'cache' => IMOOC.'/cache',
                'debug' => DEBUG
            ));

            echo $twig->render($file, $this->assign?$this->assign:array());
        }
    }
}