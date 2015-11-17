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
    <td>(e.g. Computer Science)</td>
</tr>
<tr>
    <td width="250" align="right">Mobile</td>
    <td><input type="text" name="mobile" size="40" maxlength="12"></td>
    <td>(e.g. 949-123-4567)</td>
</tr>
<tr>
    <td width="250" align="right">Email</td>
    <td><input type="text" name="email" size="40" maxlength="100"></td>
    <td>(e.g. anteater@uci.edu)</td>
</tr>
<tr>
    <td width="250" align="right">English</td>
    <td colspan="2">&nbsp;&nbsp;
        <input type="radio" name="english" value="native">Native &nbsp;
        <input type="radio" name="english" value="fluent">Fluent &nbsp;
        <input type="radio" name="english" value="intermediate">Intermediate &nbsp;
        <input type="radio" name="english" value="beginner">Beginner &nbsp;
        <input type="radio" name="english" value="na">N/A &nbsp;
    </td>
</tr>
<tr>
    <td width="250" align="right">Korean</td>
    <td colspan="2">&nbsp;&nbsp;
        <input type="radio" name="korean" value="native">Native &nbsp;
        <input type="radio" name="korean" value="fluent">Fluent &nbsp;
        <input type="radio" name="korean" value="intermediate">Intermediate &nbsp;
        <input type="radio" name="korean" value="beginner">Beginner &nbsp;
        <input type="radio" name="korean" value="na">N/A &nbsp;
    </td>
</tr>
<tr>
    <td align="right">Subject of Tutoring</td>
    <td colspan="2">
    	<input type="checkbox" name="tutoring_subject" value="math">Math
        <input type="checkbox" name="tutoring_subject" value="english">English
        <input type="checkbox" name="tutoring_subject" value="esl">Everyday English
        <br>
        <input type="checkbox" name="tutoring_subject" value="k_math">수학
        <input type="checkbox" name="tutoring_subject" value="k_writing">논술
        <input type="checkbox" name="tutoring_subject" value="k_lang">한글

        <select name="tutoring_subject[]" size="7" multiple>
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
</tr>
<tr>
    <td align="right">Tutoring Grade</td>
    <td colspan="2">
    	<input type="checkbox" name="tutoring_grade" value="elementary">Elementary School
        <input type="checkbox" name="tutoring_grade" value="middle">Middle School
        <input type="checkbox" name="tutoring_grade" value="high">High School
    </td>
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
    <td>(학생증 사본을 첨부해주세요)</td>
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