<?php
namespace app\ctrl;

use app\model\guestbookModel;

class index extends \core\imooc
{
    //所有留言
    public function index()
    {
        $model = new guestbookModel();
        $data = $model->all();
        $this->assign('data', $data);
        $this->display('index/index.html');
    }

    //添加留言
    public function add()
    {
        $this->display('index/add.html');
    }

    //保存留言
    public function save()
    {
        p($_POST);
        $data['title'] = post('title');
        $data['content'] = post('content');
        $data['createtime'] = time();
        $model = new guestbookModel();

        $ret = $model->addOne($data);
        if($ret) {
            jump("/");
        } else {
            p('error');
        }
    }

    public function del()
    {
        p($_GET);
        $id = get('id');
        p($id);
    }

    public function info()
    {
        p($_GET);
        exit();
    }

    public function test()
    {
        //$model = new model();
        //$data = $model->select('ftm_employe',"*");
        //var_dump($data);
        //exit();
        //$temp = new \core\lib\model();
        $model = new \app\model\cModel();

        //$ret = $model->lists();
        //$ret = $model->getOne(1);
        //$data = [];
        //$ret = $model->setOne(4,$data);
        //dump($ret);

        $data = 'Hello World';
        $title = '视图文件';
        $this->assign('title', $title);
        $this->assign('data', $data);
        $this->display('index/index.html');
    }
}