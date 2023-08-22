<?php
require_once 'connection.php';
$sql1="DROP PROCEDURE IF EXISTS procedura1";
$sql2="CREATE PROCEDURE procedura1(
    IN strNume varchar(30),
    IN strCuloare varchar(30),
    IN strMarime varchar(30),
    IN intPret int
    )
    BEGIN
        INSERT INTO flori
        (nume, culoare, marime, pret)
    VALUES(strNume, strCuloare, strMarime, intPret);
    END;";
$stmt1=$con->prepare($sql1);
$stmt2=$con->prepare($sql2);
$stmt1->execute();
$stmt2->execute();
$nume="trandafiri";
$culoare="rosii";
$marime="mari";
$pret=445;
///////////////////////////////////////////////////
$sql3="DROP PROCEDURE IF EXISTS MysqlTrigger5";
$sql4="CREATE TRIGGER MysqlTrigger5 BEFORE INSERT ON flori FOR EACH ROW
    BEGIN
    INSERT INTO flower_update(nume, status, edtime) VALUES(NEW.nume,'INSERTED', NOW());
    END;";
$stmt3=$con->prepare($sql3);
$stmt4=$con->prepare($sql4);
$stmt3->execute();
$stmt4->execute();
///////////////////////////////////////////////////

$sql4="CALL procedural('{$nume}','{$culoare}','{$marime}','{$pret}')";
$q=$con->query($sql3);
if($q){
    echo "Data was successfully inserted";
}else {
echo "vai vai vai!!!";
}
?>
<a href="admin2.php">Back</a>