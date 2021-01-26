<?php 
//    php coder hear


?>
    <?php include'header.php'; ?>
        <section class="main-body bg-dark text-white">
    <!-- html code hear -->
        <?php 
        
        $ourfile = fopen("text.txt", "r") or die ("File not found");
        while(!feof($ourfile)){
            echo fgets($ourfile)."<br/>";
        } ;
        fclose($ourfile);
        ?>



        </section>
 <?php include'footer.php'; ?>