<?php

include "template/header.php";
if ( !isset($_SESSION['email']) ) {
    header("Location: login.php");
}

?>

</section>
<section class="">
    <?php
    $sql = "SELECT * FROM course ";
    if ( isset($_GET['cat']) ) {
        $sql = $sql . "WHERE cat = '$_GET[cat]'";
    }
    //die($sql);
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <section class="course col-4">
                <img src="html.png" alt="course" width="100%" height="150px" />
                <h3><a href="course.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></a></h3>
                <p><?= substr($row['description'], 0, 50) ?></p>

            </section>
    <?php }
    } else {
        echo "0 results";
    } ?>
</section>

<?php include "template/footer.php" ?>