<?php include('header.php'); ?>
<!-- Main Starts -->
<main class="main">
<table width="90%">
<tr height="40">
    <td>
         <br><div style="color: #85c04b; font-size: 25px;">Tutor Application<div>
         <br>
    </td>
</tr>
<tr>
    <td colspan="2" width="100%">
        <h3 style="color:black;">Are you eligible to join UCI Tutors?<br>
        Try to get tutoring jobs through ucitutors.com<br>
        </h3>
    </td>
</tr>
<tr>
    <td width="150" align="right">Name</td>
    <td><input type="text" name="tutor_name" size="20" maxlength="10"></td>
</tr>
<tr>
    <td width="150" align="right">UCI Student ID</td>
    <td><input type="text" name="uci_id" size="20" maxlength="10"></td>
</tr>
<tr>
    <td width="150" align="right">Major</td>
    <td><input type="text" name="uci_major" size="20" maxlength="100"></td>
</tr>
<tr>
    <td width="150" align="right">Korean School Name (if applicable)</td>
    <td><input type="text" name="kor_univ_name" size="20" maxlength="100"></td>
</tr>
<tr>
    <td width="150" align="right">Korean School Major (if applicable)</td>
    <td><input type="text" name="kor_major" size="20" maxlength="100"></td>
</tr>
<tr>
    <td width="150" align="right">Korean School Student ID (if applicable)</td>
    <td><input type="text" name="kor_id" size="20" maxlength="10"></td>
</tr>

<tr>
    <td width="150" align="right">Subject of Tutoring</td>
    <td>
    	<select name="tutoring_subject1" size="5" multiple>
    		<option value="math">Math</option>
    		<option value="reading">Reading</option>
    		<option value="writing">Writing</option>
    		<option value="voca">Vocabulary</option>
    		<option value="grammar">Grammar</option>
    		<option value="esl">Everyday English</option>
    		<option value="k_math">수학</option>
    		<option value="k_writing">논술</option>
    		<option value="k_lang">한글</option>
    	</select>
    </td>
</tr>
<tr>
    <td width="150" align="right"></td>
    <td>
    	<select name="tutoring_subject2" size="5" multiple>
    		<option value="math">Math</option>
    		<option value="reading">Reading</option>
    		<option value="writing">Writing</option>
    		<option value="voca">Vocabulary</option>
    		<option value="grammar">Grammar</option>
    		<option value="esl">Everyday English</option>
    		<option value="k_math">수학</option>
    		<option value="k_writing">논술</option>
    		<option value="k_lang">한글</option>
    	</select>
    </td>
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
</tr>
</table>
</main>
<!-- Main Ends -->
<?php include('footer.php'); ?>