<?php
return array(
	//'配置项'=>'配置值'

    'EMAIL_FROM_NAME'        => '',   // 发件人
    'EMAIL_SMTP'             => 'smtp.163.com',   // smtp
    'EMAIL_USERNAME'         => '',   // 邮箱账号
    'EMAIL_PASSWORD'         => '',   // 密码 163和QQ邮箱是授权码；不是登录的密码
    'EMAIL_SMTP_SECURE'      => 'ssl',   // 链接方式 如果使用QQ\163邮箱；需要把此项改为  ssl
    'EMAIL_PORT'             => '465', // 端口 如果使用QQ邮箱和163邮箱；需要把此项改为  465    其他 25
);