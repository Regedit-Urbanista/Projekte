<!-- 
    Woche: Tag04 
    Datum: 28.05.2021
    Datei: ErneuerbareEnergien.php
    Autor: Darius
    Beschreibung: Funktion abrufen USERID, Angabe Usernamens 
-->
<?php
    function getUserID($userName, $dataBase, $userID){
        $getUser = $dataBase->prepare('SELECT userID FROM userlogin WHERE userName = :userName');
        $getUser->execute([
            ':userName' => $userName
        ]);
        $userName = $getUser->fetch(PDO::FETCH_ASSOC);


        if($userName['userID'] != $userID){
            $userID = $userName['userID'];
        }
        return $userID;
    }
?>