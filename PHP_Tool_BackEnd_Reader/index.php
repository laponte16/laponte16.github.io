<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
include "conect.php";

$sql = "select * from json";
$result = mysqli_query($conex,$sql);
$result = mysqli_fetch_array($result);
$id_json = $result[0];
$SampleNumber = $result[1];
$PipelineVersion = $result[2];
$Sequencer = $result[3];
$KnowledgebaseVersion = $result[4];
$DateGenerated = $result[5];

$sql = "select * from currentmedication where id_json='$id_json'";
$result = mysqli_query($conex,$sql);
$result = mysqli_fetch_array($result);
$id_CurrentMedications = $result[0];
$GroupPhenotype = $result[1];
$Recommendation = $result[2];

$sql = "select * from drug where id_CurrentMedication='$id_CurrentMedications'";
$result = mysqli_query($conex,$sql);
$result = mysqli_fetch_array($result);
$id_Drugs = $result[0];

$sql = "select * from generic where id_drug='$id_Drugs'";
$result = mysqli_query($conex,$sql);
$result = mysqli_fetch_array($result);
$Generic1 = $result[1];

$sql = "select * from trade where id_drug='$id_Drugs'";
$result = mysqli_query($conex,$sql);
$result = mysqli_fetch_array($result);
$Trade1 = $result[1];

$sql = "select * from theraputicarea where id_CurrentMedication='$id_CurrentMedications'";
$result = mysqli_query($conex,$sql);
$result = mysqli_fetch_array($result);
$TheraputicArea1 = $result[1];

$sql = "select * from action where id_CurrentMedication='$id_CurrentMedications'";
$result = mysqli_query($conex,$sql);
$result = mysqli_fetch_array($result);
$Action1 = $result[1];

$sql = "select * from geneinfo where id_CurrentMedication='$id_CurrentMedications'";
$result = mysqli_query($conex,$sql);

$a = 0;
$b = 0;
while($data = mysqli_fetch_array($result)){
    $GeneInfo1[$a][$b] = $data[1];
    $GeneInfo2[$a][$b] = $data[2];
    $GeneInfo3[$a][$b] = $data[3];
    $a++;
    $b++;
}

?>

<!--DYNAMIC TABLE-->
<table id="mainTable" >
		
		<!--FIRST ROW-->
		<tr>
			<th colspan="7" align="left" id="one">
			<?php
				echo $TheraputicArea1;
			?>
			</th>
		</tr>
		<!--SECOND ROW-->
		<tr> 
			<th rowspan="4" colspan="2" align="center" id="twoOne">
			<?php
				echo $Generic1;
			?>
			<br>
				<?php
						echo <<<EOT
						($Trade1)
						EOT;
			    ?>
			</th>
			<th align="center" id="twoTwo">&nbsp&nbsp&nbsp&nbspGene&nbsp&nbsp&nbsp&nbsp</th>
			<th align="center" id="twoThree">Genotype</th>
			<th colspan="2" align="center" id="twoFour">Phenotypes/Patient Impact</th>
			<th rowspan="4" colspan="2" align="center" id="2-5">
			<?php
				echo $Recommendation;
			?>
			</th>
		</tr> <!--THIRD ROW-->
			<td align="center" id="threeOne">
			<?php
				echo $GeneInfo1[0][0];
			?>
			</td>
			<td align="center" id="threeTwo">
			<?php
				echo $GeneInfo2[0][0];
			?>
			</td>
			<td colspan="2" align="center" id="threeThree">
			<?php
				echo $GeneInfo3[0][0];
			?>
			</td>
		</tr> <!--FOURTH ROW-->
		</tr>
			<td align="center" id="fourOne">
			<?php
				echo $GeneInfo1[1][1];
			?>
			</td>
			<td align="center" id="fourTwo">
			<?php
				echo $GeneInfo2[1][1];
			?>
			</td>
			<td colspan="2" align="center" id="fourThree">
			<?php
				echo $GeneInfo3[1][1];
			?>
			</td>
		</tr> <!--FIFTH ROW-->
		<tr colspan=>
			<td colspan="2" align="center" id="fiveOne">
			<?php
				echo $Action1;
			?>
			</td>
			<td colspan="2" align="center" id="fiveTwo">
			<?php
				echo $GroupPhenotype;
			?>
			</td>
		</tr>

	</table>


</body>
</html>