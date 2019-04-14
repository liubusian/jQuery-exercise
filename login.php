<?php


$data = $_POST;


if(!empty($data['account']) && !empty($data['password']))
{

    if($data['account'] === 'Elmer' && $data['password'] === '1234')
    {
        echo json_encode([
            "name" => 'Liubusian'
        ]);

    }else{
        header('帳號或密碼錯誤', true, 403);
        echo '帳號或密碼錯誤';
    }


}else{

    header('帳號密碼不能為空', true, 503);
    echo '帳號密碼不能為空';
}


?>