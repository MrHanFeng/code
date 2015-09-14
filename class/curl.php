<?php

	/**
     * ģ�������  post
     * @param $url  Ŀ����ַ
     * @param $data  ���͵���������
     * @param $cookie_file  �洢cookie�ļ��ľ���·��
	 * @param $agent �������ʶ[��ѡ]
	 * @param $referer ��Դ[��ѡ]
     * @return mixed
     * ��cookie�ļ������ڣ�����false
     * ��cookie�ļ����ڣ�����Ŀ���������Ӧ����
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
     * ģ������� get
     * @param $url  Ŀ����ַ
     * @param $cookie_file  �洢cookie�ļ��ľ���·��
     * @return bool|mixed
     * ��cookie�ļ������ڣ��򷵻�false
     * ��cookie�ļ���Ч������Ŀ�����������Ӧ����
     * ���ñ�����ǰӦ��ȷ��ʹ��set_config ������cookie_file
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