<?php include('header.php'); ?>
<?php
echo '<pre>';
/*
if ($_POST) {
    echo htmlspecialchars(print_r($_POST, true));
}
*/
$tutor_name = addslashes($_POST['tutor_name']);
$uci_id = addslashes($_POST['uci_id']);
$uci_major = addslashes($_POST['uci_major']);
$mobile = addslashes($_POST['mobile']);
$email = addslashes($_POST['email']);
$english = addslashes($_POST['english']);
$korean = addslashes($_POST['korean']);
$subject = $_POST['tutoring_subject'];
for($i=0; $i<count($subject); $i++){
  $tutoring_subject .= $subject[$i]." ";
}
$grade = $_POST['tutoring_grade'];
for($j=0; $j<count($grade); $j++){
  $tutoring_grade .= $grade[$j]." ";
}
$tutor_photo = addslashes($_POST['tutor_photo']);
$tutor_video = addslashes($_POST['tutor_video']);
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
  // in case of dup
  echo "=====dup=====".$array[uci_id]."\n";
} else {
  // no dup
  // file upload
  $uploaddir = '/var/www/html/pds/';
  $uploadfile = $uploaddir . basename($_FILES['uci_id_card']['name']);
  // UCI id card
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
  // KR id card
  if(($_FILES['kr_id_card']['size'])>0) {
    $krfiletype = $_FILES['kr_id_card']['type'];
    $krfilesize = $_FILES['kr_id_card']['size'];
    $krtemp = explode(".", basename($_FILES['kr_id_card']['name']));
    $krfileext = $krtemp[sizeof($krtemp)-1];
    $kr_id_card_file = $uploaddir . "k" . $uci_id . "." . $krfileext;
    $kr_id_card = basename($kr_id_card_file);
  }
  if(!move_uploaded_file($_FILES['kr_id_card']['tmp_name'], $kr_id_card_file)) {   // false일 경우
    echo("파일 저장 실패");
    exit;
  }
  // Photo
  if(($_FILES['tutor_photo']['size'])>0) {
    $photofiletype = $_FILES['tutor_photo']['type'];
    $photofilesize = $_FILES['tutor_photo']['size'];
    $phototemp = explode(".", basename($_FILES['tutor_photo']['name']));
    $photofileext = $phototemp[sizeof($phototemp)-1];
    $tutor_photo_file = $uploaddir . "p" . $uci_id . "." . $photofileext;
    $tutor_photo = basename($tutor_photo_file);
  }
  if(!move_uploaded_file($_FILES['tutor_photo']['tmp_name'], $tutor_photo_file)) {   // false일 경우
    echo("파일 저장 실패");
    exit;
  }
  // Video
  if(($_FILES['tutor_video']['size'])>0) {
    $videofiletype = $_FILES['tutor_video']['type'];
    $videofilesize = $_FILES['tutor_video']['size'];
    $videotemp = explode(".", basename($_FILES['tutor_video']['name']));
    $videofileext = $videotemp[sizeof($videotemp)-1];
    $video_id_card_file = $uploaddir . "v" . $uci_id . "." . $videofileext;
    $tutor_video = basename($video_id_card_file);
  }
  if(!move_uploaded_file($_FILES['tutor_video']['tmp_name'], $video_id_card_file)) {   // false일 경우
    echo("파일 저장 실패");
    exit;
  }

  // DB upload
  $sql = "insert into tutor_profile
          (tutor_name, uci_id, uci_major, mobile, email, english, korean, tutoring_subject, tutoring_grade, 
          tutor_photo, tutor_video, uci_id_card, kr_univ_name, kr_major, kr_id, kr_id_card)
          values ('$tutor_name','$uci_id','$uci_major','$mobile','$email','$english','$korean','$tutoring_subject','$tutoring_grade',
          '$tutor_photo','$tutor_video','$uci_id_card','$kr_univ_name','$kr_major','$kr_id','$kr_id_card');";

//  echo "$sql";

  mysql_query($sql, $conn) or die (mysql_error());

  // confirm
  $query = "select * from tutor_profile where uci_id='$uci_id';";
  $result = mysql_query($query, $conn) or die (mysql_error()); 
  // reset($result);
?>
<?php
  while ($array=mysql_fetch_array($result)) {
?>
<main class="main">
<table width="850">
  <tr>
    <td>Name</td>
    <td><?php echo $array[tutor_name]; ?></td>
  </tr>
  <tr>
    <td>UCI ID</td>
    <td><?php echo $array[uci_id]; ?></td>
  </tr>
  <tr>
    <td>Major</td>
    <td><?php echo $array[uci_major]; ?></td>
  </tr>
  <tr>
    <td>Mobile</td>
    <td><?php echo $array[mobile]; ?></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><?php echo $array[email]; ?></td>
  </tr>
  <tr>
    <td>English</td>
    <td><?php echo $array[english]; ?></td>
  </tr>
  <tr>
    <td>Korean</td>
    <td><?php echo $array[korean]; ?></td>
  </tr>
  <tr>
    <td>Tutoring Subjects</td>
    <td><?php echo $array[tutoring_subject]; ?></td>
  </tr>
  <tr>
    <td>Tutoring Grades</td>
    <td><?php echo $array[tutoring_grade]; ?></td>
  </tr>
  <tr>
    <td>UCI Student Verification</td>
    <td><?php echo "<img src=\"/pds/$array[uci_id_card]\" width=\"200\" />"; ?></td>
  </tr>
  <tr>
    <td>Tutor Photo</td>
    <td><?php echo "<img src=\"/pds/$array[tutor_photo]\" width=\"200\" />"; ?></td>
  </tr>
  <tr>
    <td>Tutor Video</td>
    <td><?php echo "<img src=\"/pds/$array[tutor_video]\" width=\"200\" />"; ?></td>
  </tr>
  <tr>
    <td>출신학교</td>
    <td><?php echo $array[kr_univ_name]; ?></td>
  </tr>
  <tr>
    <td>전공</td>
    <td><?php echo $array[kr_major]; ?></td>
  </tr>
  <tr>
    <td>학번</td>
    <td><?php echo $array[kr_id]; ?></td>
  </tr>
  <tr>
    <td>출신학교 확인</td>
    <td><?php echo "<img src=\"/pds/$array[kr_id_card]\" width=\"200\" />"; ?></td>
  </tr>
<?php
  }
  mysql_free_result($result);
}
mysql_free_result($cup_chk);
?>
</table>

<?php
print "</pre>";
?>
<?php include('footer.php'); ?>