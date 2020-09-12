<?php
        include("includes/config.php");
        
        //We are referring to value of submit
    
    if (!isset($_POST['searchbar']))
        {
            
            
           header("Location : searchpage.html");
        }

        $query="SELECT * FROM `model` WHERE Name LIKE '%".$_POST['searchbar']."%'";
        $search_query=mysqli_query($con,$query);
        
        
        if(mysqli_num_rows($search_query) !=0 )
        {
            $result=mysqli_fetch_assoc($search_query); 
        }
 //$search_query=0;
?>


<html>
    <head>
        <title>Search results</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="demostyle2.css">
        <script src="script.js"></script>
    </head>
    
    <body>
        
        <header>
            <img src="logo-1561819118194.png" class="mainIcon">
        </header>
        
        
        <div class="models">
        <div class="container">
            <p> MODELS FOUND </p>
        
            
            <?php 
                if(mysqli_num_rows($search_query)!=0 )
                {
                    
                    do 
                    {  $image=$result[?> 
                        
            
            <div class="box"><img src="bmw7series.jpg" height="100px" width="200px"><div class="text"><?php echo $result['Description']; ?></div> </div>
                    
                    <?php }while($result=mysqli_fetch_assoc($search_query));
                    
                }
                else
                {
                    echo "Oops , No results found !";
                }
            ?>
        </div>
        </div>
    </body>
</html>
