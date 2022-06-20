<?php 
include "templete/header.php"; ?>
if ( !isset($_SESSION['email']) ) {
    header("Location: login.php");
}
?>
<section class="container">
    <aside class="lectures">
        <h1>HTML Tutorial</h1>
        <nav>
        <?php 
        $sql = "SELECT * FROM lecture WHERE courseId = '$_GET[id]'";
        //die($sql);
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) { ?>
            <a href="course.php?id=<?=$_GET['id']?>&url=<?=$row['url']?>"><?=$row['name']?></a>
            <?php }
        } else {
            echo "0 results";
        } ?>
        </nav>
    </aside>
    <section class="lecture">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?=$_GET['url']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>
</section>

<?php include "templete/footer.php";
 ?>