<?php 
@header('Content-Type: text/html; charset=UTF-8');
//exe 실행
//안된다.

$pyWeather = shell_exec("naver_weather_crawling.exe");
echo $pyWeather."</br>"; 
//파일 읽기
$array_lines = file("weather.txt");
// for($i=0; $i<count($array_lines); $i++){
//     echo $array_lines[$i];
// }

//시간정보
$weather_time_list = substr($array_lines[0],19,-3);
$weather_time_list = str_replace("'",'',$weather_time_list);
echo $weather_time_list;
echo "<br />-----<br />";

$weather_time_array = explode(',', $weather_time_list);

for($i=0; $i<count($weather_time_array); $i++){
    echo $weather_time_array[$i];
}


//시간별 온도 정보
$weather_temp_list = substr($array_lines[1],29,-3);
$weather_temp_list = str_replace("'",'',$weather_temp_list);
echo $weather_temp_list;
echo "<br /><br />";
$weather_temp_array = explode(',', $weather_temp_list);
 
//강수 확률 정보
$rain_percent_list = substr($array_lines[3],26,-3);
$rain_percent_list = str_replace("'",'',$rain_percent_list);
echo $rain_percent_list;
echo "<br /><br />";
$rain_percent_array = explode(',', $rain_percent_list);

//강수량 정보
$rain_amount_list = substr($array_lines[3],26,-3);
$rain_amount_list = str_replace("'",'',$rain_amount_list);
echo $rain_amount_list;
echo "<br /><br />";
$rain_amount_array = explode(',', $rain_amount_list);

#이미지 가져오기---------------------------------------------------
#$weather_img_path = 'today_weather.png';
// $im = imagecreatefrompng("today_weather.png");

// header('Content-Type: image/png');

// imagepng($im);
// imagedestroy($im);

echo "<img src='today_weather.png'/>"
?>    
