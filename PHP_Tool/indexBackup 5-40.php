<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Setting the pages character encoding -->
	<meta charset="UTF-8">

	<!-- The meta viewport will scale my content to any device width -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Link to my stylesheet -->
	<link rel="stylesheet" href="">
	<title>JSON Test</title>
</head>
<body>

	<h2>FRONT-END JSON TEST</h2>
	

	<!-- Lets start with the table element -->
	<!---->
	<table border="2" id="mainTable">
		<?php
		$json_data = file_get_contents("FakeSample.json");
		$product = json_decode($json_data, true);
		?>
		<!--FIRST ROW-->
		<tr>
			<th colspan="7" align="left">
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
			<th rowspan="4" colspan="2" align="center">
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
			</th>
			<th align="center">&nbsp&nbsp&nbsp&nbspGene&nbsp&nbsp&nbsp&nbsp</th>
			<th align="center">Genotype</th>
			<th colspan="2" align="center">Phenotypes/Patient Impact</th>
			<th rowspan="4" colspan="2" align="center">
			<?php
				foreach($product['CurrentMedications'] as $CurrentMedication) 
				{
					echo $CurrentMedication['Recommendation'];		
				}
			?>
			</th>
		</tr> <!--THIRD ROW-->
			<td align="center">
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
			<td align="center">
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
			<td colspan="2" align="center">
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
			<td align="center">
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
			<td align="center">
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
			<td colspan="2" align="center">
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
			<td colspan="2" align="center">
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
			<td colspan="2" align="center">
			<?php
				foreach($product['CurrentMedications'] as $CurrentMedication) 
				{
					echo $CurrentMedication['GroupPhenotype'];		
				}
			?>
			</td>
		</tr>

	</table>
					
			
</body>
</html>
