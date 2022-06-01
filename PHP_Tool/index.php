<!DOCTYPE html>
<html lang="en">
<head>
	<!-- ENCODING -->
	<meta charset="UTF-8">

	<!-- SCALING -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- STYLES -->
	<link rel="stylesheet" href="style.css">
	<title>JSON Test</title>
</head>
<body>

	<h2>FRONT-END JSON TEST</h2>
	

	<!--DYNAMIC TABLE-->
	<table id="mainTable" >
		<?php
		$json_data = file_get_contents("FakeSample.json");
		$product = json_decode($json_data, true);
		?>
		<!--FIRST ROW-->
		<tr>
			<th colspan="7" align="left" id="one">
			<?php
				foreach($product['CurrentMedications'] as $CurrentMedication) 
				{
					foreach($CurrentMedication['TheraputicArea']  as $TheraputicArea)
					{
						echo $TheraputicArea;
					}		
				}
			?>
			</th>
		</tr>
		<!--SECOND ROW-->
		<tr> 
			<th rowspan="4" colspan="2" align="center" id="twoOne">
			<button onclick="onButton();" id="btn2"> 
			<?php
				foreach($product['CurrentMedications'] as $CurrentMedication) 
				{
					foreach($CurrentMedication['Drugs']  as $Drug)
					{
						foreach($Drug['Generic']  as $Generic)
						{
						echo $Generic;
						}
					}		
				}
			?>
			<br>
				<?php
				foreach($product['CurrentMedications'] as $CurrentMedication) 
				{
					foreach($CurrentMedication['Drugs']  as $Drug)
					{
						foreach($Drug['Trade']  as $Trade)
						{
						echo <<<EOT
						($Trade)
						EOT;
						}
					}		
				}
			?>
			</button>
			</th>
			<th align="center" id="twoTwo">&nbsp&nbsp&nbsp&nbspGene&nbsp&nbsp&nbsp&nbsp</th>
			<th align="center" id="twoThree">Genotype</th>
			<th colspan="2" align="center" id="twoFour">Phenotypes/Patient Impact</th>
			<th rowspan="4" colspan="2" align="center" id="2-5">
			<?php
				foreach($product['CurrentMedications'] as $CurrentMedication) 
				{
					echo $CurrentMedication['Recommendation'];		
				}
			?>
			</th>
		</tr> <!--THIRD ROW-->
			<td align="center" id="threeOne">
			<?php
				foreach($product['CurrentMedications'] as $CurrentMedication) 
				{
					$control = 0;
					foreach($CurrentMedication['GeneInfo']  as $GeneInfo)
					{
						$once = $GeneInfo['Gene'];
						if($control == 0){echo $once;}
						$control++;
					}		
				}
			?>
			</td>
			<td align="center" id="threeTwo">
			<?php
				foreach($product['CurrentMedications'] as $CurrentMedication) 
				{
					$control = 0;
					foreach($CurrentMedication['GeneInfo']  as $GeneInfo)
					{
						$once = $GeneInfo['Genotype'];
						if($control == 0){echo $once;}
						$control++;
					}		
				}
			?>
			</td>
			<td colspan="2" align="center" id="threeThree">
			<?php
				foreach($product['CurrentMedications'] as $CurrentMedication) 
				{
					$control = 0;
					foreach($CurrentMedication['GeneInfo']  as $GeneInfo)
					{
						$once = $GeneInfo['Phenotype'];
						if($control == 0){echo $once;}
						$control++;
					}		
				}
			?>
			</td>
		</tr> <!--FOURTH ROW-->
		</tr>
			<td align="center" id="fourOne">
			<?php
				foreach($product['CurrentMedications'] as $CurrentMedication) 
				{
					$control = 0;
					foreach($CurrentMedication['GeneInfo']  as $GeneInfo)
					{
						$once = $GeneInfo['Gene'];
						if($control == 1){echo $once;}
						$control++;
					}		
				}
			?>
			</td>
			<td align="center" id="fourTwo">
			<?php
				foreach($product['CurrentMedications'] as $CurrentMedication) 
				{
					$control = 0;
					foreach($CurrentMedication['GeneInfo']  as $GeneInfo)
					{
						$once = $GeneInfo['Genotype'];
						if($control == 1){echo $once;}
						$control++;
					}		
				}
			?>
			</td>
			<td colspan="2" align="center" id="fourThree">
			<?php
				foreach($product['CurrentMedications'] as $CurrentMedication) 
				{
					$control = 0;
					foreach($CurrentMedication['GeneInfo']  as $GeneInfo)
					{
						$once = $GeneInfo['Phenotype'];
						if($control == 1){echo $once;}
						$control++;
					}		
				}
			?>
			</td>
		</tr> <!--FIFTH ROW-->
		<tr colspan=>
			<td colspan="2" align="center" id="fiveOne">
			<?php
				foreach($product['CurrentMedications'] as $CurrentMedication) 
				{
					foreach($CurrentMedication['Action']  as $Action)
					{
						echo $Action;
					}		
				}
			?>
			</td>
			<td colspan="2" align="center" id="fiveTwo">
			<?php
				foreach($product['CurrentMedications'] as $CurrentMedication) 
				{
					echo $CurrentMedication['GroupPhenotype'];		
				}
			?>
			</td>
		</tr>

	</table>				
<script type="text/javascript" src ="UI.js">

</script>	
</body>
</html>
