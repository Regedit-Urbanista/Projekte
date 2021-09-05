<div>
    <form action="index.php?page=accountmanagement" method="post">
        <table>
            <tr>
                <th></th>
                <td><button type="submit">Logout!</button></td>
            </tr>
        </table>
    </form>
</div>


<?php

if (isset($_SESSION['userName']) && isset($_SESSION['userID'])) {
    $_SESSION['userName'] = "";
    $_SESSION['userID'] = "";
    session_destroy();

    header("Location: index.php?page=accountmanagement");
}

if (!isset($_SESSION['userName']) && !isset($_SESSION['userID'])) {
    echo "Ausgeloggt!";
}

?>