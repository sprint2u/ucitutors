<?php include('header.php'); ?>
<?php
echo '<pre>';
echo "Name:" . $_POST['tutor_name'] . "\n";

$tutor_name = addslashes($_POST['tutor_name']);
$uci_id = addslashes($_POST['uci_id']);
$uci_major = addslashes($_POST['uci_major']);
$mobile = addslashes($_POST['mobile']);
$email = addslashes($_POST['email']);
$english = addslashes($_POST['english']);
$korean = addslashes($_POST['korean']);
$tutoring_subject = addslashes($_POST['tutoring_subject']);
$tutoring_grade = addslashes($_POST['tutoring_grade']);
$uci_id_card = addslashes($_POST['uci_id_card']);
$kr_univ_name = addslashes($_POST['kr_univ_name']);
$kr_major = addslashes($_POST['kr_major']);
$kr_id = addslashes($_POST['kr_id']);
$kr_id_card = addslashes($_POST['kr_id_card']);

// 업로드한 파일이 저장될 디렉토리 정의
$uploaddir = "pds";  // 서버에 up 이라는 디렉토리가 있어야 한다.

echo $tutoring_subject . "\n";

$uploaddir = '/var/www/html/pds/';
$uploadfile = $uploaddir . basename($_FILES['uci_id_card']['name']);

if(($_FILES['uci_id_card']['size'])>0) {
  $ucifiletype = $_FILES['uci_id_card']['type'];
  $ucifilesize = $_FILES['uci_id_card']['size'];
  $ucitemp = explode(".", basename($_FILES['uci_id_card']['name']));
  $ucifileext = $ucitemp[sizeof($ucitemp)-1];
  echo "uci id card: ".$ucifiletype."\n";
  echo $ucifilesize."\n";
  $uci_id_card_file = $uploaddir . "u" . $uci_id . "." . $ucifileext;
  echo $uci_id_card_file."\n";
  $uci_id_card = basename($uci_id_card_file);
  echo $uci_id_card."\n";
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
  echo "kr id card: ".$krfiletype."\n";
  echo $krfilesize."\n";
  $kr_id_card_file = $uploaddir . "k" . $uci_id . "." . $krfileext;
  echo $kr_id_card_file."\n";
  $kr_id_card = basename($kr_id_card_file);
  echo $kr_id_card."\n";
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

    /* 동일한 파일이 있는지 확인하는 부분
    if(file_exists($uploadfile)) {
      echo "동일 파일명 존재\n";
      echo $uploadfile . "\n";
      echo $_FILES['uci_id_card']['name'] . "\n";
      $temp_filename = explode(".", basename($_FILES['uci_id_card']['name']));
      echo "파일명: ".$temp_filename[0] . "\n";
      echo "확장자: ".$temp_filename[sizeof($temp_filename)-1] . "\n";
      echo "새이름: ".$temp_filename[0]."1.".$temp_filename[sizeof($temp_filename)-1] . "\n";
      $uploadfile = $uploaddir . $temp_filename[0]."a.".$temp_filename[sizeof($temp_filename)-1];
      echo "새경로: ".$uploadfile;
      echo '</pre>';
    }
    // 지정된 디렉토리에 파일 저장하는 부분
    if(!move_uploaded_file($_FILES['uci_id_card']['tmp_name'], $uploadfile)) {   // false일 경우
       echo("파일 저장 실패");
       exit;
    }
    */


//echo '자세한 디버깅 정보입니다:';
//print_r($_FILES);

print "</pre>";

$conn = mysql_connect('localhost', 'ucitutorsdba', '6776') or die (mysql_error()); 
$db = mysql_select_db('ucitutors', $conn);
mysql_query($sql, $conn) or die (mysql_error());
/*
if(strcmp($kr_id_card, NULL)) {   // 파일이 업로드되었을 경우

// 업로드 금지 파일 식별 부분
    $filename = explode(".", $kr_id_card_name);
    $extension = $filename[sizeof($filename)-1];
        
    if(!strcmp($extension,"html") || 
       !strcmp($extension,"htm") ||
       !strcmp($extension,"php") ||      
       !strcmp($extension,"inc"))
    {
       echo("업로드 금지 파일입니다.");
       exit;
    }

// 동일한 파일이 있는지 확인하는 부분
    $target = $target_dir . "/" . $kr_id_card_name;
    if(file_exists($target)) {
       echo("동일 파일명 존재");
       exit;
    }

// 지정된 디렉토리에 파일 저장하는 부분
    if(!copy($kr_id_card,$target)) {   // false일 경우
       echo("파일 저장 실패");
       exit;
    }

// 임시 파일을 삭제하는 부분
    if(!unlink($kr_id_card)) { // false일 경우
       echo("임시 파일 삭제 실패");
       exit;
    }

$sql = "insert into tutor_profile
        values('$tutor_name','$uci_id','$uci_major','$tutoring_subject','$tutoring_grade',
        '$uci_id_card','$kr_univ_name',$kr_major,'$kr_id','$kr_id_card')";

echo "$sql";

mysql_connect("localhost", "ucitutorsdba", "6776") or die (mysql_error()); 
mysql_select_db("ucitutors");
mysql_query($sql) or die (mysql_error());

?>   
<html>
<body>
    <table width="500" border="0" cellspacing="1" cellpadding="2" align="center">
    <tr>
       <td align="left" bgColor="#EEEEEE" width="120"><font size=2>파일명</font></td>
       <td bgColor="#EEEEEE"><font size=2><?echo("$uci_id_card_name")?></font></td>
    </tr>
    <tr>
       <td align="left" bgColor="#EEEEEE" width="120"><font size=2>임시 저장 파일명</font></td>
       <td bgColor="#EEEEEE"><font size=2><?echo("$uci_id_card")?></font></td>
    </tr>
    <tr>
       <td align="left" bgColor="#EEEEEE" width="120"><font size=2>파일 크기(Bytes)</font></td>
       <td bgColor="#EEEEEE"><font size=2><?echo("$uci_id_card_size")?> Bytes</font></td>
    </tr>
    <tr>
       <td align="left" bgColor="#EEEEEE" width="120"><font size=2>파일의 MIME Type</font></td>
       <td bgColor="#EEEEEE"><font size=2><?echo("$uci_id_card_type")?></font></td>
    </tr>
    </table>

<?php
} else {
?>
        <table width="500" border="0" cellspacing="1" cellpadding="2" align="center" bgcolor="#FFCCFF">
    <tr>
       <td width="100%" align="center" bgColor="#CCCCCC"><font size=2><b>업로드 실패!!!</b></font></td>
    </tr>
    </table>
</body>
</html>

<?php
}

?>