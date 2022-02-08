<?php

function curlByGet($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json;charset=utf-8']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

function getLessonList($lessonId)
{
    $url = "https://app.gongyi.edu.com/api/resource/lesson" . "?lesson=" . $lessonId."&page=1&page_size=100";

    return curlByGet($url);
}

function getLessonDetail($videoId)
{
    $url = "https://app.gongyi.edu.com/api/v2/resource/detail" . "?video_id=" . $videoId;
    return curlByGet($url);
}

function fail()
{

}

function run()
{
    $result    = [];
    $lessonIds = [
        1,
        10,
        19,
        207,
        208,
        213,
        264,
        340,
        350,
        351,
        353,
        353,
        358,
        381,
        733,
        735,
        908,
        915,
        932,
        996,
        997,
        1003,
    ];

    foreach ($lessonIds as $lessonId) {
        $count = 0;
        $lessonDataJson = getLessonList($lessonId);
        $lessonDataAll  = json_decode($lessonDataJson, true);
        if ($lessonDataAll['error_code'] == 0) {
            $lessonDatas = $lessonDataAll['data']['list'];
            foreach ($lessonDatas as $lessonData) {
                $lessonDetailJson = getLessonDetail($lessonData['id']);
                $lessonDetail     = json_decode($lessonDetailJson, true);
                if ($lessonDetail['error_code'] == 0) {
                    $lessonDetailData = $lessonDetail['data'];
                    $tempData         = [
                        '成功与否' => 1,
                        '课程Id' => $lessonId,
                        '讲次ID' => $lessonData['id'],
                        '课程名字' => $lessonDetailData['lesson_title'],
                        '讲次名字' => $lessonDetailData['cla_name'],
                        'url'  => $lessonDetailData['video'],
                        'snapshot' => $lessonDetailData['snapshot'],
                    ];
                    $result[]         = $tempData;
                    echo $lessonId.'-'.$lessonData['id'].'--'.++$count.'success'.PHP_EOL;
                } else {
                    $tempData = [
                        '成功与否' => 0,
                        '课程Id' => $lessonId,
                        '课程名字' => $lessonData['id'],
                        '讲次名字' => 0,
                        'url'  => 0,
                    ];
                    $result[] = $tempData;
                    echo $lessonId.'-'.$lessonData['id'].'failed'.PHP_EOL;
                }
                echo $lessonId.'--'.$count.'success'.PHP_EOL;
            }

        } else {
            $tempData = [
                '成功与否' => 0,
                '课程Id' => $lessonId,
                '课程名字' => 0,
                '讲次名字' => 0,
                'url'  => 0,
            ];
            $result[] = $tempData;
            echo $lessonId.'failed'.PHP_EOL;
        }
    }
    file_put_contents('./curl.log',json_encode($result,JSON_UNESCAPED_UNICODE)."\r\n",FILE_APPEND);
    return NULL;
}

run();