<html>
   
   <head>
      <title>Tìm giá trị lớn nhất nhỏ nhất trong PHP</title>
   </head>
   <body>
   
       <?php
        $mang1 = array(360,310,310,330,313,375,456,111,256);   
		$mang2 = array(350,340,356,330,321);   
		$mang3 = array(630,340,570,635,434,255,298);   
		$gia_tri_lon_nhat = max(max($mang1),max($mang2),max($mang3));   
		$gia_tri_nho_nhat = min(min($mang1),min($mang2),min($mang3));   
		echo "Giá trị lớn nhất: ".$gia_tri_lon_nhat."<br>";  
		echo "Giá trị nhỏ nhất: ".$gia_tri_nho_nhat."<br>";
       ?>
       
   </body>
</html>