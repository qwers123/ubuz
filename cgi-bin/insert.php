<?php 
$bn = $_POST['bn'];
$ln = $_POST['ln'];
$fn = $_POST['fn'];
$mn = $_POST['mn'];
$blgn = $_POST['blgn'];
$usf = $_POST['usf'];
$sn1 = $_POST['sn1'];
$brgy1 = $_POST['brgy1'];
$dis1 = $_POST['dis1'];
$hn = $_POST['hn'];
$sn2 = $_POST['sn2'];
$brgy2 = $_POST['brgy2'];
$dis2 = $_POST['dis2'];
$dti = $_POST['dti'];
$di = $_POST['di'];
$tin = $_POST['tin'];
$l_line = $_POST['l_line'];
$mo = $_POST['mo'];
$ea = $_POST['ea'];
$sss = $_POST['sss'];
$ne = $_POST['ne'];
$dsr = $_POST['dsr'];
$rfw = $_POST['rfw'];
$mr = $_POST ['mr'];
$sqm = $_POST ['sqm'];

if (!emmpty($bn) || !empty($ln) || !empty($fn) || !empty($mn) || !empty($blgn) || !empty($usf) || !empty($sn1) || !empty($brgy1) || !empty($dis1) || !empty($hn) || !empty($sn2) || !empty($brgy2) || !empty($dis2) || !empty($dti) || !empty($di) || !empty($tin) || !empty($l_line) || !empty($mo) || !empty($ea) || !empty($sss) || !empty($ne) || !empty($dsr) || !empty($rfw) || !empty($mr) || !empty($sqm)) {
	
	$servername = "localhost";
	$username = "outcastp_oop";
	$dbname = "outcastp_ubuz";
	$password = "Nagmamadalina";


	$conn = new mysqli($servername, $username, $password, $dbname);
	if(mysqli_connect_error())
		{
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		}
		
			$sql = "INSERT INTO tbl_infomation (bn, ln, fn, mn, blgn, usf, sn1, brgy1, dis1, hn, sn2, brgy2, dis2, dti, di, tin, l_line, mo, ea, sss, ne, dsr, rfw, mr, sqm) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        
            if($stmt = mysqli_prepare($conn, $sql)) {
                mysqli_stmt_bind_param($stmt,"sssssssssssssssssssssssss",$bn,$ln,$fn,$mn,$blgn,$usf,$sn1,$brgy1,$dis1,$hn,$sn2,$brgy2,$dis2,$dti,$di,$tin,$l_line,$mo,$ea,$sss,$ne,$dsr,$rfw,$mr,$sqm);
                mysqli_stmt_execute($stmt);
                echo "Info saved.";
            } else {
                echo "ERROR: $sql." .mysqli_error($link);
            }
            /*
            	$stmt = $conn->prepare($sql);
				$stmt->bind_param("sssssssssssssssssssssssss",$bn,$ln,$fn,$mn,$blgn,$usf,$sn1,$brgy1,$dis1,$hn,$sn2,$brgy2,$dis2,$dti,$di,$tin,$l_line,$mo,$ea,$sss,$ne,$dsr,$rfw,$mr,$sqm);
				$stmt->execute();
				echo "Info saved.";
			*/
			
			$stmt->close();
			$conn->close();
		
	

    } else {
	    echo "All field are required";
	    die();
    }
 ?>