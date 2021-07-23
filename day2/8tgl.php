<?php
$tglLahir = "2014-12-22";
echo "$tglLahir <br/>";
$skrng = date('Y-m-d');
$cur_time_arr = explode('-',$skrng);
$birthday_arr = explode('-',$tglLahir);

$cur_year_b_day = $cur_time_arr[0]."-".$birthday_arr[1]."-".$birthday_arr[2];

if(strtotime($cur_year_b_day) < time())
{
    echo "ulang tahunnya udah kelewatan";
}
else
{
    $diff=strtotime($cur_year_b_day)-time();
    echo "Ulang tahunnya masih : " . $days=floor($diff/(60*60*24)) . ' lagi';
}
?>
