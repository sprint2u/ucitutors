<?php include('header.php'); ?>
<script language="javascript">

function submit() {
        
    if (document.tutor_registration.tutor_name.value == "") {
        alert('Input your name');
        document.tutor_registration.tutor_name.focus();
        return;           
    } else if (document.tutor_registration.uci_id.value == "") {
        alert('Input your student ID');
        document.tutor_registration.uci_id.focus();
        return;
    } else if (document.tutor_registration.mobile.value == "") {
        alert('Input your mobile phone #');
        document.tutor_registration.mobile.focus();
        return;  
    } else if (document.tutor_registration.email.value == "") {
        alert('Input your email');
        document.tutor_registration.email.focus();
        return;    
    } else {
        document.tutor_registration.action = "tutor_registration_go.php";
        document.tutor_registration.submit();
    }       
}

</script>
<!-- Main Starts -->
<main class="main">
<form name="tutor_registration" enctype="multipart/form-data" action="tutor_registration_go.php" method="post">
<table width="850">
<tr height="40">
    <td>
         <br><div style="color: #85c04b; font-size: 25px;">Tutor Application<div>
    </td>
</tr>
<tr>
    <td colspan="3" align="left">
        <h3 style="color:red;">Green items are administrative purpose only, not visible to public.
    </td>
</tr>
<tr>
    <td width="250" align="right" class="tbl_subject">Name</td>
    <td width="250"><input type="text" name="tutor_name" size="40" maxlength="100"></td>
    <td></td>
</tr>
<tr>
    <td width="250" align="right" class="tbl_subject">UCI Student #</td>
    <td><input type="text" name="uci_id" size="40" maxlength="10"></td>
    <td>(e.g. 98765432)</td>
</tr>
<tr>
    <td width="250" align="right" class="tbl_subject_blk">Major</td>
    <td><input type="text" name="uci_major" size="40" maxlength="100"></td>
    <td>(e.g. Computer Science)</td>
</tr>
<tr>
    <td width="250" align="right" class="tbl_subject">Mobile</td>
    <td><input type="text" name="mobile" size="40" maxlength="12"></td>
    <td>(e.g. 949-123-4567)</td>
</tr>
<tr>
    <td width="250" align="right" class="tbl_subject">Email</td>
    <td><input type="text" name="email" size="40" maxlength="100"></td>
    <td>(e.g. anteater@uci.edu)</td>
</tr>
<tr>
    <td width="250" align="right" class="tbl_subject_blk">English</td>
    <td colspan="2">
        <input type="radio" name="english" value="Native">Native &nbsp;
        <input type="radio" name="english" value="Fluent">Fluent &nbsp;
        <input type="radio" name="english" value="Intermediate">Intermediate &nbsp;
        <input type="radio" name="english" value="Beginner">Beginner &nbsp;
        <input type="radio" name="english" value="N/A">N/A &nbsp;
    </td>
</tr>
<tr>
    <td width="250" align="right" class="tbl_subject_blk">Korean</td>
    <td colspan="2">
        <input type="radio" name="korean" value="Native">Native &nbsp;
        <input type="radio" name="korean" value="Fluent">Fluent &nbsp;
        <input type="radio" name="korean" value="Intermediate">Intermediate &nbsp;
        <input type="radio" name="korean" value="Intermediate">Beginner &nbsp;
        <input type="radio" name="korean" value="N/A">N/A &nbsp;
    </td>
</tr>
<tr>
    <td align="right" class="tbl_subject_blk">Subject of Tutoring</td>
    <td colspan="2">
    	<input type="checkbox" name="tutoring_subject[]" value="Math" />Math&nbsp;&nbsp;
        <input type="checkbox" name="tutoring_subject[]" value="English" />English&nbsp;&nbsp;
        <input type="checkbox" name="tutoring_subject[]" value="Physics" />Physics&nbsp;&nbsp;
        <input type="checkbox" name="tutoring_subject[]" value="Chemistry" />Chemistry&nbsp;&nbsp;
        <input type="checkbox" name="tutoring_subject[]" value="Biology" />Biology&nbsp;&nbsp;
        <br>
        <input type="checkbox" name="tutoring_subject[]" value="ESL" />Everyday English&nbsp;&nbsp;
        <input type="checkbox" name="tutoring_subject[]" value="수학" />수학&nbsp;&nbsp;
        <input type="checkbox" name="tutoring_subject[]" value="논술" />논술&nbsp;&nbsp;
        <input type="checkbox" name="tutoring_subject[]" value="한글" />한글
    </td>
</tr>
<tr>
    <td align="right" class="tbl_subject_blk">Tutoring Grade</td>
    <td colspan="2">
    	<input type="checkbox" name="tutoring_grade[]" value="Elementary" />Elementary School&nbsp;&nbsp;
        <input type="checkbox" name="tutoring_grade[]" value="Middle" />Middle School&nbsp;&nbsp;
        <input type="checkbox" name="tutoring_grade[]" value="High" />High School&nbsp;&nbsp;
        <input type="checkbox" name="tutoring_grade[]" value="Adult" />Adult
    </td>
</tr>
<tr>
    <td align="right" class="tbl_subject_blk">Photo</td>
    <td>
        <input type="hidden" name="MAX_FILE_SIZE" value="2048000" />
        <input type="file" name="tutor_photo" size="40" />
    </td>
    <td>(Upload your profile picture, 200x200, 2M Max)</td>
</tr>
<tr>
    <td align="right" class="tbl_subject_blk">Video</td>
    <td>
        <input type="hidden" name="MAX_FILE_SIZE" value="2048000" />
        <input type="file" name="tutor_video" size="40" />
    </td>
    <td>(Upload your introductory video, 2M Max)</td>
</tr>
<tr>
    <td align="right" class="tbl_subject">Student Verification</td>
    <td>
        <input type="hidden" name="MAX_FILE_SIZE" value="2048000" />
        <input type="file" name="uci_id_card" size="40" />
    </td>
    <td>(Upload a photo of your student ID card, 2M Max)</td>
</tr>
<tr>
    <td colspan="3" align="center"><br>(Fill out for Korean school information hereunder, if applicable)
    </td>
</tr>
<tr>
    <td align="right" class="tbl_subject_blk">출신학교명</td>
    <td><input type="text" name="kr_univ_name" size="30" maxlength="100"></td>
    <td>(e.g. 연세대학교)</td>
</tr>
<tr>
    <td align="right" class="tbl_subject_blk">출신학교 전공</td>
    <td><input type="text" name="kr_major" size="40" maxlength="100"></td>
    <td>(e.g. 경영학)</td>
</tr>
<tr>
    <td align="right" class="tbl_subject">출신학교 학번</td>
    <td><input type="text" name="kr_id" size="20" maxlength="10"></td>
    <td>(e.g. 21342024)</td>
</tr>
<tr>
    <td align="right" class="tbl_subject">학생증 사본</td>
    <td>
        <input type="hidden" name="MAX_FILE_SIZE" value="2048000" />
        <input type="file" name="kr_id_card" size="40">
    </td>
    <td>(학생증 사본을 첨부해주세요, 2M Max)</td>
</tr>
<tr>
    <td colspan="3" align="center">
        <br><input type="button" value="Register" onClick="javascript:submit();"><br><br>
    </td>
</tr>
</table>
</main>
<!-- Main Ends -->
<?php include('footer.php'); ?>