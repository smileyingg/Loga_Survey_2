<?php
include 'dbconfig.php';

$dNow = date("Y-m-d H:i:s");

$q11 = $_POST['q11'];
$q12 = $_POST['q12'];
$q21 = $_POST['q21'];
$q22 = $_POST['q22'];
$q23 = $_POST['q23'];
$q24 = $_POST['q24'];
$q31 = $_POST['q31'];
$q32 = $_POST['q32'];
$q33 = $_POST['q33'];
$q34 = $_POST['q34'];
$q41 = $_POST['q41'];
$q42 = $_POST['q42'];
$q43 = $_POST['q43'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];


$q7 = $_POST['q7'];

function getUserIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function detectDevice()
{
    $deviceName = "";
    $userAgent = $_SERVER["HTTP_USER_AGENT"];
    $devicesTypes = array(
        "computer" => array("msie 10", "msie 9", "msie 8", "windows.*firefox", "windows.*chrome", "x11.*chrome", "x11.*firefox", "macintosh.*chrome", "macintosh.*firefox", "opera"),
        "tablet"   => array("tablet", "android", "ipad", "tablet.*firefox"),
        "mobile"   => array("mobile ", "android.*mobile", "iphone", "ipod", "opera mobi", "opera mini"),
        "bot"      => array("googlebot", "mediapartners-google", "adsbot-google", "duckduckbot", "msnbot", "bingbot", "ask", "facebook", "yahoo", "addthis")
    );
    foreach ($devicesTypes as $deviceType => $devices) {
        foreach ($devices as $device) {
            if (preg_match("/" . $device . "/i", $userAgent)) {
                $deviceName = $deviceType;
            }
        }
    }
    return ucfirst($deviceName);
}

$IP = getUserIpAddr();
$device = detectDevice();
$agent = $_SERVER["HTTP_USER_AGENT"];


$sql = "INSERT INTO survey_form (userTime, q11, q12, q21, q22, q23, q24, q31, q32, q33, q34, q41, q42, q43, q5, q6, q8, q9, IP, device, agent) VALUES ('$dNow', '$q11', '$q12', '$q21', '$q22', '$q23', '$q24', '$q31', '$q32', '$q33', '$q34', '$q41', '$q42', '$q43', '$q5', '$q6', '$q8', '$q9', '$IP', '$device', '$agent')";
$result = mysqli_query($mysqli, $sql);

foreach ($q7 as $value) {
    $text = "";
    if ($value == "อื่นๆ") {
        $text = $_POST['q7text'];
    }
    $sql = "INSERT INTO q7 (userTime, q7_detail, q7_text) VALUES ('$dNow', '$value', '$text')";
    $result = mysqli_query($mysqli, $sql);
}

if ($result) {

    echo '1';
} else {

    echo '0';
}
