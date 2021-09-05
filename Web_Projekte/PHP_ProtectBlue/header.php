<!-- 
    Woche: Tag04 
    Datum: 14.05.2021
    Datei: header.php
    Autor: Lapis
    Beschreibung: Headerfile der dynamischen Webseite
-->

<header>
    <nav>
        <ul>
            <li><a href="index.php?page=default">LOGO und Anderes</a></li>
            <li><a href="index.php?page=newsletter">Newsletter</a></li>
            <li><a href="index.php?page=review">Reviews</a></li>
            <li><a href="index.php?page=luftverschmutzung">Luftverschmutzung</a></li>
            <li><a href="index.php?page=login">Login!</a></li>
            <li><a href="index.php?page=register">Register!</a></li>
            <?php
            if (isset($_SESSION['userName']) && isset($_SESSION['userID'])) {
                echo "<li><a href='index.php?page=accountmanagement'>MyAccount!</a></li>";
            }
            ?>
        </ul>
    </nav>
</header>