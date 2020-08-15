

//获取QQ昵称
function get_qq_nick($qq)
{
    $get_info = file_get_contents(‘https://api.unipay.qq.com/v1/r/1450000186/wechat_query?cmd=1&pf=mds_storeopen_qb-__mds_qqclub_tab_-html5&pfkey=pfkey&from_h5=1&from_https=1&openid=openid&openkey=openkey&session_id=hy_gameid&session_type=st_dummy&qq_appid=&offerId=1450000186&sandbox=&provide_uin=’ . $qq);
    $name = json_decode($get_info, true);
    if(!isset($name[‘nick’])) return false;
    $name = urldecode($name[‘nick’]);
    return $name;
}
