<?php include('header.php'); ?>
<?php
$tutor_name = addslashes($_POST['tutor_name']);
$uci_id = addslashes($_POST['uci_id']);
?>
<main class="main">
<table width="850">
<tr height="40">
    <td colspan="4">
         <br><div style="color: #85c04b; font-size: 25px;">Tutor Manager<div>
         <br>
    </td>
</tr>
<?php
$conn = mysql_connect('localhost', 'ucitutorsdba', '6776') or die (mysql_error()); 
$db = mysql_select_db('ucitutors', $conn);

$query = "select * from tutor_profile 
          where uci_id like '%$uci_id%'
          or tutor_name like '%$tutor_name%';";
$result = mysql_query($query, $conn) or die (mysql_error()); 
  // reset($result);
?>
<tr>
  <td class="mgr_subject">Name</td>
  <td class="mgr_subject">Student #</td>
  <td class="mgr_subject">Major</td>
  <td class="mgr_subject">Mobile</td>
  <td class="mgr_subject">Email</td>
  <td class="mgr_subject">English</td>
  <td class="mgr_subject">Korean</td>
  <td class="mgr_subject">Subjects</td>
  <td class="mgr_subject">Grades</td>
  <td class="mgr_subject">출신학교</td>
  <td class="mgr_subject">전공</td>
  <td class="mgr_subject">학번</td>
  <td class="mgr_subject">사진</td>
  <td class="mgr_subject">동영상</td>
  <td class="mgr_subject">ID Card</td>
  <td class="mgr_subject">학생증</td>
</tr>
<?php
  while ($array=mysql_fetch_array($result)) {
?>
<tr>
  <td class="mgr_content"><?php echo $array[tutor_name]; ?></td>
  <td class="mgr_content"><?php echo $array[uci_id]; ?></td>
  <td class="mgr_content"><?php echo $array[uci_major]; ?></td>
  <td class="mgr_content"><?php echo $array[mobile]; ?></td>
  <td class="mgr_content"><?php echo $array[email]; ?></td>
  <td class="mgr_content"><?php echo $array[english]; ?></td>
  <td class="mgr_content"><?php echo $array[korean]; ?></td>
  <td class="mgr_content"><?php echo $array[tutoring_subject]; ?></td>
  <td class="mgr_content"><?php echo $array[tutoring_grade]; ?></td>
  <td class="mgr_content"><?php echo $array[kr_univ_name]; ?></td>
  <td class="mgr_content"><?php echo $array[kr_major]; ?></td>
  <td class="mgr_content"><?php echo $array[kr_id]; ?></td>
  <td><?php echo "<img src=\"/pds/$array[tutor_photo]\" width=\"100\" height=\"100\" />"; ?></td>
  <td><?php echo "<img src=\"/pds/$array[tutor_video]\" width=\"100\" height=\"100\" />"; ?></td>
  <td><?php echo "<img src=\"/pds/$array[uci_id_card]\" width=\"100\" height=\"100\" />"; ?></td>
  <td><?php echo "<img src=\"/pds/$array[kr_id_card]\" width=\"100\" height=\"100\" />"; ?></td>
</tr>
<?php
  }
  mysql_free_result($result);

?>
</table>

<?php
print "</pre>";
?>
<?php include('footer.php'); ?>