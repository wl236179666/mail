<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if(IS_POST){
            $url = I('post.email');
            empty($url) && $this->error('请输入目标Email地址');
            $name=I('post.name');
            $address=I('post.address');
            $phone=I('post.phone',0,'intval');

            // 拼接字符串方式
//            $str='姓名：'.$name.'<br>'.'地址：'.$address.'<br>'.'手机号：'.$phone.'<br>';
            // 或者更直观的使用定界符：
            $str=<<<html
            姓名：$name <br>
            地址：$address <br>
            手机号：$phone
html;
            // 发送单条邮件
            $result = send_email($url,'邮件标题',$str);

            // 如果群发邮件 则传入数组即可--------------------------------
//            $emails=array('b1@baijunyao.com','b2@baijunyao.com');
//            send_email($emails,'邮件标题','邮件内容');
            // -----------------------------------------------------------

            if ($result['error']==1) {
                var_dump($result);die;
            }
            $this->success('发送完成',U('Home/Index/index'));

        }else{
            $this -> display();
        }
    }
}