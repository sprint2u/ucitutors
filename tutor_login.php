<?php include('header.php'); ?>
<!-- Main Starts -->
<main class="main">
<table width="850">
<tr height="40">
    <td colspan="5">
         <br><div style="color: #85c04b; font-size: 25px;">Tutor Log In<div>
         <br>
    </td>
</tr>
<form name="tutor_login" method="post">
<tr height="30">
	<td class="tbl_subject">Email</td>
    <td><input type="text" name="email" size="30"></td>
</tr>
<tr height="30">
    <td class="tbl_subject">UCI Student #</td>
    <td><input type="text" name="uci_id" size="30"></td>
</tr>
<tr height="30">
    <td colspan="2" align="center"><input type="button" value="Log In"></td>
</tr>
<tr height="30">
	<td colspan="5"></td>
</tr>
</form>
</table>
</main>
<!-- Main Ends -->
<?php include('footer.php'); ?>