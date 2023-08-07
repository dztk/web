<!doctype html>
<html>
<head></head>
<style>
body {
    background-color: #a9a9a956;  
}
tr{
    color: #990000;
}
th{
    color: black;
}
table{
    height: 600px;
    width: 900px;
    text-align: left;
    margin: auto;
}
</style>
</head>
 
<body>
<?php 
    $kullanici =$_POST["kullanici"];
    $mail =$_POST["mail"];
    $telefon =$_POST["telefon"];
    $tarihi =$_POST["tarih"];
    $mesaj =$_POST["mesaj"];
    $dosya =$_POST["resimekle"];
    $haber =$_POST["haber"];
    $cinsiyet =$_POST["cinsiyet"];


    $formİller=$_POST['iller'];

    //il seçimi için liste
    $iller=array("","Adana","Adıyaman", "Afyon", "Ağrı", "Amasya", "Ankara", "Antalya", "Artvin",
    "Aydın", "Balıkesir","Bilecik", "Bingöl", "Bitlis", "Bolu", "Burdur", "Bursa", "Çanakkale",
    "Çankırı", "Çorum","Denizli","Diyarbakır", "Edirne", "Elazığ", "Erzincan", "Erzurum ", "Eskişehir",
    "Gaziantep", "Giresun","Gümüşhane", "Hakkari", "Hatay", "Isparta", "Mersin", "İstanbul", "İzmir",
    "Kars", "Kastamonu", "Kayseri","Kırklareli", "Kırşehir", "Kocaeli", "Konya", "Kütahya ", "Malatya",
    "Manisa", "Kahramanmaraş", "Mardin", "Muğla", "Muş", "Nevşehir", "Niğde", "Ordu", "Rize", "Sakarya",
    "Samsun", "Siirt", "Sinop", "Sivas", "Tekirdağ", "Tokat", "Trabzon  ", "Tunceli", "Şanlıurfa", "Uşak",
    "Van", "Yozgat", "Zonguldak", "Aksaray", "Bayburt ", "Karaman", "Kırıkkale", "Batman", "Şırnak",
    "Bartın", "Ardahan", "Iğdır", "Yalova", "Karabük ", "Kilis", "Osmaniye ", "Düzce");
    
    for($i=0;$i<count($iller);$i++)
    {
        $formİller[$i]=$iller[$i];
    }
    
    
    echo "<table border='1px'>";
    echo "<tr>";
    echo "<th colspan='2' style='text-align:center;'>İLETİŞİM BİLGİLERİ</th>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<th style='padding:6px;width: px;'>KULLANICI ADI</th>";
    echo "<td style='padding:6px;'>$kullanici</td>";
    echo "</tr>";
    
    
    echo "<tr>";
    echo "<th style='padding:6px;'>E-MAİIL </th>";
    echo "<td style='padding:6px;'>$mail</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<th style='padding:6px;'>KULLANICI TELEFON </th>";
    echo "<td style='padding:6px;'>$telefon</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<th style='padding:6px;'>DOĞUM TARİHİ :</th>";
    echo "<td style='padding:6px;'>$tarihi</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<th style='padding:6px;'>YAŞADIĞI İL </th>";
    echo "<td style='padding:6px;'>";
    foreach($_POST['iller'] as $selected) {
        echo $formİller[$selected]." ";
    };echo"</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<th style='padding:6px;'>MESAJ </th>";
    echo "<td style='padding:6px;'>$mesaj</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<th style='padding:6px;'>CİNSİYET</th>";
    echo "<td style='padding:6px;'>$cinsiyet</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<th style='padding:6px;'>BİZİ NEREDEN DUYDUNUZ </th>";
    echo "<td style='padding:6px;'>";
    foreach($haber as $sos) { 
        echo $sos . ',';
    };echo"</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<th style='padding:6px;'>BELGE</th>";
    echo "<td style='padding:6px;'>$dosya</td>";
    echo "</tr>";
    
    echo "</table>";



?>
</body>
</html>