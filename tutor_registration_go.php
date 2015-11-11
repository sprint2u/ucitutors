<?
// 업로드한 파일이 저장될 디렉토리 정의
$target_dir = "pds";  // 서버에 up 이라는 디렉토리가 있어야 한다.

if(strcmp($uci_id_card,"none")) {   // 파일이 업로드되었을 경우

// 업로드 금지 파일 식별 부분
    $filename = explode(".", $uci_id_card_name);
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
    $target = $target_dir . "/" . $uci_id_card_name;
    if(file_exists($target)) {
       echo("동일 파일명 존재");
       exit;
    }

// 지정된 디렉토리에 파일 저장하는 부분
    if(!copy($uci_id_card,$target)) {   // false일 경우
       echo("파일 저장 실패");
       exit;
    }

// 임시 파일을 삭제하는 부분
    if(!unlink($uci_id_card)) { // false일 경우
       echo("임시 파일 삭제 실패");
       exit;
    }

if(strcmp($uci_id_card,"none")) {   // 파일이 업로드되었을 경우

// 업로드 금지 파일 식별 부분
    $filename = explode(".", $kor_id_card_name);
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
    $target = $target_dir . "/" . $kor_id_card_name;
    if(file_exists($target)) {
       echo("동일 파일명 존재");
       exit;
    }

// 지정된 디렉토리에 파일 저장하는 부분
    if(!copy($kor_id_card,$target)) {   // false일 경우
       echo("파일 저장 실패");
       exit;
    }

// 임시 파일을 삭제하는 부분
    if(!unlink($kor_id_card)) { // false일 경우
       echo("임시 파일 삭제 실패");
       exit;
    }
?>   

<html>
<body>
    <table width="500" border="0" cellspacing="1" cellpadding="2" align="center">
    <tr>
       <td colspan="2" align="center" bgColor="#CCCCCC" width="100%"><font size=2><b>>> 
            업로드 성공 <<</b></font></td>   
    </tr>
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

<?
} else {
?>
        <table width="500" border="0" cellspacing="1" cellpadding="2" align="center" bgcolor="#FFCCFF">
    <tr>
       <td width="100%" align="center" bgColor="#CCCCCC"><font size=2><b>업로드 실패!!!</b></font></td>
    </tr>
    </table>
</body>
</html>

<?
}
?>