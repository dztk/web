<html>
    <head>

    </head>

<body style="background-color:palegreen;">
 <div >
   <p>
       <?php
         $adsoyad =$_POST["Username"];
         $sifre =$_POST["Password"];
         if($adsoyad && $sifre) // veriler boş değilse buradan devam eder
         {
            if($adsoyad == "b211200026@sakarya.edu.tr" && $sifre=="b211200026")
            {  
                echo "HOŞGELDİNİZ! ". $adsoyad;
        
            }
            else
            {
                header("location:giris.html"); 
        
            }
         } 
         else 
         {
          header("location:giris.html"); // veriler boşsa sayfaya geri gönderir
         }
       ?>
   </p>

 </div>


</body>
</html>