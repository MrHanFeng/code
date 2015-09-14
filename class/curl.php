<?php

	/**
     * 模拟访问用  post
     * @param $url  目标网址
     * @param $data  传送的数据内容
     * @param $cookie_file  存储cookie文件的绝对路径
	 * @param $agent 浏览器标识[可选]
	 * @param $referer 来源[可选]
     * @return mixed
     * 若cookie文件不存在，返回false
     * 若cookie文件存在，返回目标服务器响应内容
     */
	function imitate_post($url,$data,$cookie_file,$agent='',$referer=""){
        if(!file_exists($cookie_file)){
            return false;
        }
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER,0);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,FALSE);
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,FALSE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch,CURLOPT_NOPROGRESS,0);
        if($agent){
            curl_setopt($ch,CURLOPT_USERAGENT,$agent);
        }
        if($referer){
            curl_setopt($ch,CURLOPT_REFERER,$referer);
        }
        curl_setopt($ch,CURLOPT_COOKIEJAR,$cookie_file);
        curl_setopt($ch,CURLOPT_COOKIEFILE,$cookie_file);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

    /**
     * 模拟访问用 get
     * @param $url  目标网址
     * @param $cookie_file  存储cookie文件的绝对路径
     * @return bool|mixed
     * 若cookie文件不存在，则返回false
     * 若cookie文件有效，返回目标服务器的响应内容
     * 调用本方法前应先确认使用set_config 设置了cookie_file
     */
    function imitate_get($url,$cookie_file){
        if(!file_exists($cookie_file)){
            return false;
        }
        $ch=curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER,0);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch,CURLOPT_NOPROGRESS,0);
        curl_setopt($ch,CURLOPT_TIMEOUT,5);
        curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"GET");
        curl_setopt($ch,CURLOPT_COOKIEJAR,$ookie_file);  //write
        curl_setopt($ch,CURLOPT_COOKIEFILE,$cookie_file);  //include
        $data=curl_exec($ch);
        curl_close($ch);
        return $data;
    }


?>