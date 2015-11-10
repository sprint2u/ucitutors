<?php include('header.php'); ?>
<!-- Main Starts -->
<main class="main">
<form name="tutor_application" action="tutor_application_go.php" method="post">
<table width="90%">
<tr height="40">
    <td>
         <br><div style="color: #85c04b; font-size: 25px;">Tutor Application<div>
         <br>
    </td>
</tr>
<tr>
    <td width="150" align="right">Name</td>
    <td width="250"><input type="text" name="tutor_name" size="40" maxlength="100"></td>
    <td></td>
</tr>
<tr>
    <td width="150" align="right">UCI Student ID</td>
    <td><input type="text" name="uci_id" size="40" maxlength="10"></td>
    <td>(e.g. 98765432)</td>
</tr>
<tr>
    <td width="150" align="right">Major</td>
    <td><input type="text" name="uci_major" size="40" maxlength="100"></td>
    <td>(e.g. Computer Engineering)</td>
</tr>

<tr>
    <td width="150" align="right">Subject of Tutoring</td>
    <td>
    	<select name="tutoring_subject" size="5" multiple>
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
    <td width="150" align="right">Tutoring Grade</td>
    <td>
    	<select name="tutoring_grade" size="3" multiple>
    		<option value="elementary">Elementary School</option>
    		<option value="middle">Middle School</option>
    		<option value="high">High School</option>
    	</select>
    </td>
    <td>(Press shift and click for multiple choice)</td>
</tr>
<tr>
    <td colspan="3" align="left">(Fill out for Korean school information hereunder, if applicable)
    </td>
</tr>
<tr>
    <td width="150" align="right">Korean School Name</td>
    <td><input type="text" name="kor_univ_name" size="30" maxlength="100"></td>
    <td>(e.g. 연세대학교)</td>
</tr>
<tr>
    <td width="150" align="right">Korean School Major</td>
    <td><input type="text" name="kor_major" size="40" maxlength="100"></td>
    <td>(e.g. 경영학)</td>
</tr>
<tr>
    <td width="150" align="right">Korean School Student ID</td>
    <td><input type="text" name="kor_id" size="20" maxlength="10"></td>
    <td>(e.g. 21342024)</td>
</tr>

</table>
</main>
<!-- Main Ends -->
<?php include('footer.php'); ?>