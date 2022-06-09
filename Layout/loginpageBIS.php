<?php
$result = $connection->query($sql);
while ($rows = $result->fetch()){
    $Name = $rows['Name'];
    $Email = $rows['Email'];
    $Pwd = $rows['Pwd'];
}