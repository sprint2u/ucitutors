<?php include('header.php'); ?>
<script language="javascript">

function submit() {
        
    if (document.tutor_registration.tutor_name.value == "") {
        alert('이름을 입력하세요');
        document.tutor_registration.tutor_name.focus();
        return;           
    } else if (document.tutor_registration.uci_id.value == "") {
        alert('ID을 입력하세요');
        document.tutor_registration.uci_id.focus();
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
         <br>
    </td>
</tr>
<tr>
    <td width="250" align="right">Name</td>
    <td width="250"><input type="text" name="tutor_name" size="40" maxlength="100"></td>
    <td></td>
</tr>
<tr>
    <td width="250" align="right">UCI Student ID</td>
    <td><input type="text" name="uci_id" size="40" maxlength="10"></td>
    <td>(e.g. 98765432)</td>
</tr>
<tr>
    <td width="250" align="right">Major</td>
    <td><input type="text" name="uci_major" size="40" maxlength="100"></td>
    <td>(e.g. Computer Engineering)</td>
</tr>
<tr>
    <td width="250" align="right">Languages</td>
    <td>English:
        <select name="english" size="3">
            <option value="native">Native</option>
            <option value="fluent">Fluent</option>
            <option value="intermediate">Intermediate</option>
            <option value="begineer">Beginner</option>
        </select>
    </td>
    <td>Korean:
        <select name="korean" size="3">
            <option value="native">Native</option>
            <option value="fluent">Fluent</option>
            <option value="intermediate">Intermediate</option>
            <option value="begineer">Beginner</option>
        </select>
    </td>
</tr>
<tr>
    <td align="right">Subject of Tutoring</td>
    <td>
    	<select name="tutoring_subject" size="7" multiple>
    		<optgroup label="US Courses">
    			<option value="math">Math</option>
    			<option value="reading">Reading</option>
    			<option value="writing">Writing</option>
    			<option value="voca">Vocabulary</option>
    			<option value="grammar">Grammar</option>
    			<option value="esl">Everyday English</option>
    		</optgroup>
    		<optgroup label="Korean Courses">
    			<option value="k_math">수학</option>
    			<option value="k_writing">논술</option>
    			<option value="k_lang">한글</option>
			</optgroup>
    	</select>
    </td>
    <td>(Press shift and click for multiple choice)</td>
</tr>
<tr>
    <td align="right">Tutoring Grade</td>
    <td>
    	<select name="tutoring_grade" size="2" multiple>
    		<option value="elementary">Elementary School</option>
    		<option value="middle">Middle School</option>
    		<option value="high">High School</option>
    	</select>
    </td>
    <td>(Press shift and click for multiple choice)</td>
</tr>
<tr>
    <td align="right">Student Verification</td>
    <td>
        <input type="hidden" name="MAX_FILE_SIZE" value="2048000" />
        <input type="file" name="uci_id_card" size="40">
    </td>
    <td>(Upload a photo of your student ID card)</td>
</tr>
<tr>
    <td colspan="3" align="center"><br>(Fill out for Korean school information hereunder, if applicable)
    </td>
</tr>
<tr>
    <td align="right">출신학교명</td>
    <td><input type="text" name="kr_univ_name" size="30" maxlength="100"></td>
    <td>(e.g. 연세대학교)</td>
</tr>
<tr>
    <td align="right">출신학교 전공</td>
    <td><input type="text" name="kr_major" size="40" maxlength="100"></td>
    <td>(e.g. 경영학)</td>
</tr>
<tr>
    <td align="right">출신학교 학번</td>
    <td><input type="text" name="kr_id" size="20" maxlength="10"></td>
    <td>(e.g. 21342024)</td>
</tr>
<tr>
    <td align="right">학생증 사본</td>
    <td>
        <input type="hidden" name="MAX_FILE_SIZE" value="2048000" />
        <input type="file" name="kr_id_card" size="40">
    </td>
    <td>(학생증 사진을 첨부해주세요)</td>
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