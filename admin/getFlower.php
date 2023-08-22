<?php
require_once 'connection.php';
$sql1="DROP PROCEDURE IF EXISTS getFlower";
$sql2="CREATE PROCEDURE getFlower(
        IN intID INT,
        OUT strNume varchar(30),
        OUT strMarime varchar(30),
        OUT intPret int)
        BEGIN
        SELECT nume,marime,pret
        INTO strNume, strMarime,intPret
        FROM flori
        WHERE id=intID;
        END;";
$stmt1=$con->prepare($sql1);
$stmt2=$con->prepare($sql2);
$stmt1->execute();
$stmt2->execute();

///////////////////////////////////////////////////

///////////////////////////////////////////////////

$id='6';
$sql3="CALL getFlower('6',@out_nume, @out_marime, @out_pret)";
$sql4="SELECT @out_nume, @out_marime, @out_pret";
$q=$con->query($sql3);
$q=$con->query($sql4);
$q->setFetchMode(PDO::FETCH_ASSOC);
?>
<table>
    <tr>
        <th>Nume</th>
        <th>Marime</th>
        <th>Pret</th>
    </tr>
    <?php
    while($row = $q->fetch())
    {
        echo "<td>".$row["@out_nume"]."</td>";
        echo "<td>".$row["@out_marime"]."</td>";
        echo "<td>".$row["@out_pret"]."</td>";
    }
    ?>
</table>
<a href="admin2.php">Back</a>