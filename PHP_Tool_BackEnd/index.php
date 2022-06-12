<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include "conect.php";

$json_data = file_get_contents("FakeSample.json");
$product = json_decode($json_data, true);

$counter = 0;

$SampleNumber = $product['SampleNumber'];
$PipelineVersion = $product['PipelineVersion'];
$Sequencer = $product['Sequencer'];
$KnowledgebaseVersion = $product['KnowledgebaseVersion'];
$DateGenerated = $product['DateGenerated'];

$CurrentMedications = $product['CurrentMedications'];
$Current = $CurrentMedications[0];
$Drugs = $Current['Drugs'];
$Drug = $Drugs[0];
$Generic = $Drug['Generic'];
$Generic1 = $Generic[0];
$Trade = $Drug['Trade'];
$Trade1 = $Trade[0];
$TheraputicArea = $Current['TheraputicArea'];
$TheraputicArea1 = $TheraputicArea[0];
$GeneInfo = $Current['GeneInfo'];
$GeneInfo1 = $GeneInfo[0];
$GeneInfo11 = $GeneInfo1['Gene'];
$GeneInfo12 = $GeneInfo1['Genotype'];
$GeneInfo13 = $GeneInfo1['Phenotype'];
$GeneInfo2 = $GeneInfo[1];
$GeneInfo21 = $GeneInfo2['Gene'];
$GeneInfo22 = $GeneInfo2['Genotype'];
$GeneInfo23 = $GeneInfo2['Phenotype'];
$GroupPhenotype = $Current['GroupPhenotype'];
$Action = $Current['Action'];
$Action1 = $Action[0];
$Recommendation = $Current['Recommendation'];


$sql="insert into json(SampleNumber,PipelineVersion,Sequencer,KnowledgebaseVersion,DateGenerated) values ('$SampleNumber','$PipelineVersion','$Sequencer','$KnowledgebaseVersion','$DateGenerated')";

if(mysqli_query($conex,$sql))
{
print "Success: json";
}
else
{

print "Failure: json";
}
echo "<br>";
echo "<br>";

$sql = "select id from json where SampleNumber='$SampleNumber'";
$id_json = mysqli_query($conex,$sql);
$id_json = mysqli_fetch_array($id_json);
$id_json = $id_json[0];

$sql="insert into currentmedication(GroupPhenotype,Recommendation,id_json) values ('$GroupPhenotype','$Recommendation','$id_json')";
if(mysqli_query($conex,$sql))
{
print "Success: currentmedication";
}
else
{
    print "Failure: currentmedication";
}

echo "<br>";
echo "<br>";

$sql = "select id from currentmedication where id_json='$id_json'";
$id_currentmedication = mysqli_query($conex,$sql);
$id_currentmedication = mysqli_fetch_array($id_currentmedication);
$id_currentmedication = $id_currentmedication[0];

$sql="insert into action(action,id_CurrentMedication) values ('$Action1','$id_currentmedication')";
if(mysqli_query($conex,$sql))
{
print "Success: action";
}
else
{
    print "Failure: action";
}

echo "<br>";
echo "<br>";

$sql="insert into drug(id_CurrentMedication) values ('$id_currentmedication')";
if(mysqli_query($conex,$sql))
{
print "Success: drug";
}
else
{
    print "Failure: drug";
}

echo "<br>";
echo "<br>";

$sql = "select id from drug where id_currentmedication='$id_currentmedication'";
$id_drug = mysqli_query($conex,$sql);
$id_drug = mysqli_fetch_array($id_drug);
$id_drug = $id_drug[0];

$sql="insert into theraputicarea(area,id_CurrentMedication) values ('$TheraputicArea1','$id_currentmedication')";
if(mysqli_query($conex,$sql))
{
print "Success: theraputicarea";
}
else
{
    print "Failure: theraputicarea";
}

echo "<br>";
echo "<br>";

$sql="insert into generic(name,id_drug) values ('$Generic1','$id_drug')";
if(mysqli_query($conex,$sql))
{
print "Success: generic"; 
}
else
{
    print "Failure: generic";
}

echo "<br>";
echo "<br>";

$sql="insert into trade(name,id_drug) values ('$Trade1','$id_drug')";
if(mysqli_query($conex,$sql))
{
print "Success: trade";
}
else
{
    print "Failure: trade";
}

echo "<br>";
echo "<br>";

$sql="insert into geneinfo(gene,genotype,phenotype,id_CurrentMedication) values ('$GeneInfo11','$GeneInfo12','$GeneInfo13','$id_currentmedication')";
if(mysqli_query($conex,$sql))
{
print "Success: geneinfo";
}
else
{
    print "Failure: geneinfo";
}

echo "<br>";
echo "<br>";

$sql="insert into geneinfo(gene,genotype,phenotype,id_CurrentMedication) values ('$GeneInfo21','$GeneInfo22','$GeneInfo23','$id_currentmedication')";
if(mysqli_query($conex,$sql))
{
print "Success: geneinfo";
}
else
{
    print "Failure: geneinfo";
}

echo "<br>";
echo "<br>";

?>
</body>
</html>