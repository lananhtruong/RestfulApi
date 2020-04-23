<?php


require 'restful_api.php';

class api extends restful_api {

    function __construct(){
        parent::__construct();
    }

    function checkyear(){
        if ($this->method == 'GET'){
            $this->response(200, $this->getyear($this->params));
        }
    }

    function checktamgiac()
    {
        if($this->method == 'GET')
        {
            $this->response(200,$this->gettgiac($this->params));
        }
    }

    function gettgiac($params)
    {
        if($params[0]<=0||$params[1]<=0||$params[2]<=0)
        {
            $data = "Nhap sai yeu cau nhap lai";
            return array("status" => false, "data" => array());
        }
        else
        {
            $a=(double)$params[0];
            $b=(double)$params[1];
            $c=(double)$params[2];
            if($a*$a+$b*$b<=$c*$c||$b*$b+$c*$c<=$a*$a||$a*$a+$c*$c<=$b*$b)
            {
                $data = "Khong phai la ba canh tam giac";
                return array("status" => true,"data" => array());
            }
            elseif($a*$a+$b*$b==$c*$c||$b*$b+$c*$c==$a*$a||$a*$a+$c*$c==$b*$b)
            {
                $data = "Day la tam giac vuong";
                return array("status" => true,"data" => array());
            }
            elseif($a==$b&&$b==$c&&$a==$c)
            {
                $data = "Day la tam giac deu";
                return array("status" => true,"data" => array());
            }
            elseif($a==$b||$b==$c||$a==$c)
            {
                $data = "Day la tam giac can";
                return array("status" => true,"data" => array());
            }
            elseif
            {
                $data = "Day la tam giac thuong";
                return array("status" => true,"data" => array());
            }
        }
        
        
       
    function getyear($params)
    {
        if(empty($params[0])||!empty($params[1]))
        {
            $data = array("status" => false, "data" => array());
            return $data;
        }elseif((double)$params[0]-(int)$params[0]!=0||!(int)$params[0]>0)
        {
            $data = array("status" => false, "data" => array());
            return $data;
        }
        else
        {
            $x = (int)$params[0];
            if ($x % 400 == 0 || $x % 4 == 0 && $x % 100 != 0) {
                $data = array("status" => true, "data" => array("result" => "Nam " . $x . " la nam nhuan"));

            } else {
                $data = array("status" => true, "data" => array("result" => "Nam " . $x . " khong phai la nam nhuan"));
            }
            return $data;
        }
    }
}

$user_api = new api();
