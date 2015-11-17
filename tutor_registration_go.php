<?php include('header.php'); ?>
<?php
echo '<pre>';
if ($_POST) {
    echo htmlspecialchars(print_r($_POST, true));
}
$tutor_name = addslashes($_POST['tutor_name']);
$uci_id = addslashes($_POST['uci_id']);
$uci_major = addslashes($_POST['uci_major']);
$mobile = addslashes($_POST['mobile']);
$email = addslashes($_POST['email']);
$english = addslashes($_POST['english']);
$korean = addslashes($_POST['korean']);
//$tutoring_subject = addslashes($_POST['tutoring_subject[]']);
while ($_POST['tutoring_subject[]']) {
  $tutoring_subject = $tutoring_subject." ".$_POST['tutoring_subject[]'];
  echo $_POST['tutoring_subject[]']."|";
}
echo "\n".$tutoring_subject."\n";
$tutoring_grade = addslashes($_POST['tutoring_grade']);
$uci_id_card = addslashes($_POST['uci_id_card']);
$kr_univ_name = addslashes($_POST['kr_univ_name']);
$kr_major = addslashes($_POST['kr_major']);
$kr_id = addslashes($_POST['kr_id']);
$kr_id_card = addslashes($_POST['kr_id_card']);

$conn = mysql_connect('localhost', 'ucitutorsdba', '6776') or die (mysql_error()); 
$db = mysql_select_db('ucitutors', $conn);

// 중복 확인
$query_dup_chk = "select * from tutor_profile where uci_id='$uci_id';";
$cup_chk = mysql_query($query_dup_chk, $conn) or die (mysql_error()); 
if (mysql_fetch_row($cup_chk)) {
  echo "=====dup=====".$array[kr_univ_name]."\n";
}
mysql_free_result($cup_chk);

// 업로드한 파일이 저장될 디렉토리 정의
$uploaddir = "pds";  // 서버에 up 이라는 디렉토리가 있어야 한다.

$uploaddir = '/var/www/html/pds/';
$uploadfile = $uploaddir . basename($_FILES['uci_id_card']['name']);

if(($_FILES['uci_id_card']['size'])>0) {
  $ucifiletype = $_FILES['uci_id_card']['type'];
  $ucifilesize = $_FILES['uci_id_card']['size'];
  $ucitemp = explode(".", basename($_FILES['uci_id_card']['name']));
  $ucifileext = $ucitemp[sizeof($ucitemp)-1];
  //echo "uci id card: ".$ucifiletype."\n";
  //echo $ucifilesize."\n";
  $uci_id_card_file = $uploaddir . "u" . $uci_id . "." . $ucifileext;
  //echo $uci_id_card_file."\n";
  $uci_id_card = basename($uci_id_card_file);
  //echo $uci_id_card."\n";
}
if(!move_uploaded_file($_FILES['uci_id_card']['tmp_name'], $uci_id_card_file)) {   // false일 경우
  echo("파일 저장 실패");
  exit;
}
if(($_FILES['kr_id_card']['size'])>0) {
  $krfiletype = $_FILES['kr_id_card']['type'];
  $krfilesize = $_FILES['kr_id_card']['size'];
  $krtemp = explode(".", basename($_FILES['kr_id_card']['name']));
  $krfileext = $krtemp[sizeof($krtemp)-1];
  //echo "kr id card: ".$krfiletype."\n";
  //echo $krfilesize."\n";
  $kr_id_card_file = $uploaddir . "k" . $uci_id . "." . $krfileext;
  //echo $kr_id_card_file."\n";
  $kr_id_card = basename($kr_id_card_file);
  //echo $kr_id_card."\n";
}
if(!move_uploaded_file($_FILES['kr_id_card']['tmp_name'], $kr_id_card_file)) {   // false일 경우
  echo("파일 저장 실패");
  exit;
}

$sql = "insert into tutor_profile
        (tutor_name, uci_id, uci_major, mobile, email, english, korean, tutoring_subject, tutoring_grade, 
        uci_id_card, kr_univ_name, kr_major, kr_id, kr_id_card)
        values ('$tutor_name','$uci_id','$uci_major','$mobile','$email','$english','$korean','$tutoring_subject','$tutoring_grade',
        '$uci_id_card','$kr_univ_name','$kr_major','$kr_id','$kr_id_card');";

echo "$sql";

mysql_query($sql, $conn) or die (mysql_error());

$query = "select * from tutor_profile;";
$result = mysql_query($query, $conn) or die (mysql_error()); 
$row = mysql_fetch_row($result);
$total_no = $row[0];
echo "\n".$row[0];
while ($array=mysql_fetch_array($result)) {
  echo $array[uci_id]."=====".$array[kr_univ_name]."\n";
}

mysql_free_result($result);

print "</pre>";
