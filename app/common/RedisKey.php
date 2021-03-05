<?php


namespace App\common;


class RedisKey
{
    //所有站点
    public static $allSites = 'allsites';

    //站点下对应的工作簿
    public static $siteAllWork = 'siteAllWork';

    //工作簿下的报表
    public static $workAllPort = 'workAllPort';


    //更新时间
    public static $updateTime = 'updateTime';
}
