<?php include('header.php'); ?>
<main class="main">
<table width="850">
<tr height="40">
    <td colspan="2">
         <br><div style="color: #85c04b; font-size: 25px;">Your's Profile<div>
         <br>
    </td>
</tr>
<?php
$tutor_name = addslashes($_POST['tutor_name']);
$uci_id = addslashes($_POST['uci_id']);

$conn = mysql_connect('localhost', 'ucitutorsdba', '6776') or die (mysql_error()); 
$db = mysql_select_db('ucitutors', $conn);

$query = "select * from tutor_profile where uci_id='$uci_id';";
$result = mysql_query($query, $conn) or die (mysql_error()); 
  // reset($result);
?>
<?php
  while ($array=mysql_fetch_array($result)) {
?>
  <tr>
    <td class="tbl_subject">Name</td>
    <td class="tbl_content" colspan="3"><?php echo $array[tutor_name]; ?></td>
  </tr>
  <tr>
    <td class="tbl_subject">UCI Student #</td>
    <td class="tbl_content" colspan="3"><?php echo $array[uci_id]; ?></td>
  </tr>
  <tr>
    <td class="tbl_subject">Major</td>
    <td class="tbl_content" colspan="3"><?php echo $array[uci_major]; ?></td>
  </tr>
  <tr>
    <td class="tbl_subject">Mobile</td>
    <td class="tbl_content" colspan="3"><?php echo $array[mobile]; ?></td>
  </tr>
  <tr>
    <td class="tbl_subject">Email</td>
    <td class="tbl_content" colspan="3"><?php echo $array[email]; ?></td>
  </tr>
  <tr>
    <td class="tbl_subject">English</td>
    <td class="tbl_content" colspan="3"><?php echo $array[english]; ?></td>
  </tr>
  <tr>
    <td class="tbl_subject">Korean</td>
    <td class="tbl_content" colspan="3"><?php echo $array[korean]; ?></td>
  </tr>
  <tr>
    <td class="tbl_subject">Tutoring Subjects</td>
    <td class="tbl_content" colspan="3"><?php echo $array[tutoring_subject]; ?></td>
  </tr>
  <tr>
    <td class="tbl_subject">Tutoring Grades</td>
    <td class="tbl_content" colspan="3"><?php echo $array[tutoring_grade]; ?></td>
  </tr>

  <tr>
    <td class="tbl_subject">출신학교</td>
    <td class="tbl_content" colspan="3"><?php echo $array[kr_univ_name]; ?></td>
  </tr>
  <tr>
    <td class="tbl_subject">전공</td>
    <td class="tbl_content" colspan="3"><?php echo $array[kr_major]; ?></td>
  </tr>
  <tr>
    <td class="tbl_subject">학번</td>
    <td class="tbl_content" colspan="3"><?php echo $array[kr_id]; ?></td>
  </tr>

  <tr>
    <td class="tbl_subject">
      Tutor Photo<br><?php echo "<img src=\"/pds/$array[tutor_photo]\" width=\"200\" />"; ?>
    </td>
    <td class="tbl_subject">
      Tutor Video<br><?php echo "<img src=\"/pds/$array[tutor_video]\" width=\"200\" />"; ?>
    </td>
    <td class="tbl_subject">
      Student Verification<br><?php echo "<img src=\"/pds/$array[uci_id_card]\" width=\"200\" />"; ?>
    </td>
    <td class="tbl_subject">
      출신학교 확인<br><?php echo "<img src=\"/pds/$array[kr_id_card]\" width=\"200\" />"; ?>
    </td>
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