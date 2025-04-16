<?php
require('vendor/autoload.php');
$con=mysqli_connect('localhost','root','','complaint');
$res=mysqli_query($con,"select * from admin");
if(mysqli_num_rows($res)>0)
{
	$html.='<tr><td>ID</td><td>Name</td><td>Complaint</td></tr>';
	while($row=mysqli_fetch_assoc($res))
	{
		$html.='<tr><td>'.$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['complaint'].'</td></tr>';
	}
	$html.='</table>';
	echo $html;
}
else
{
	$html="data not found";
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file=time().'.pdf';
$mpdf->output($file,'D');
?>