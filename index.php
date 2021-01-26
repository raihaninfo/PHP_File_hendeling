<?php 
//    php coder hear


?>
    <?php include'header.php'; ?>
        <section class="main-body bg-dark text-white">
    <!-- html code hear -->
        <?php 
        
        // file read


        $ourfile = fopen("text.txt", "r") or die ("File not found");
        while(!feof($ourfile)){
            echo fgets($ourfile)."<br/>";
        } ;
        fclose($ourfile);


        // file create

        $filecreate = fopen("new.txt" , "w") or die ("File not found");
        
        $one = "My name is Raihan\n";
        fwrite($filecreate, $one);

        $one = "I'm Web Developer\n";
        fwrite($filecreate, $one);

        $one = "I Love Php\n";
        fwrite($filecreate, $one);

        fclose($filecreate);


        ?>



        </section>
 <?php include'footer.php'; ?>