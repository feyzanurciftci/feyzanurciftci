<!DOCTYPE html>
<html lang="tr">
    <head>
        <title>Kişisel Web Sitem</title>
        <style>
            *{
                box-sizing: border-box;
                background-color: rgb(173, 229, 248);
            }
            
            body{
                margin:0%;
            }

            .header{
                background-image: url(background.jpg);
                font-size: x-large;
                text-align: center;
                color: white;
                margin-top: 65px;
            }

            p{
                color: rgb(9, 3, 88);
                text-align:left;
                font-size: x-large;
                margin: 30px;
                
            }
            
         

            .sütun{
                float:left;
                width:33.33%;
                padding: 30px;
            }

            


        </style>
    </head>
    <body>
        
        <div style="background-image: url(background.jpg) ; width:100% ; height:460px ; text-align: center ; color:white ; font-size:60px;">
            Merhaba, Ben Feyza Nur Çiftci<br>Bu benim ilk web sitem.
        </div>

        <p id="demo">Gezmek istediğin yeri seç</p>

        <img id="ANTALYA" src="antalya.jpeg" alt="antalya">
        <button type="button" onclick="myFunction()">ANTALYA</button>

        <img id="MERSİN" src="MERSİN.jpeg" alt="mersin"/>
        <button id="demo-btn">MERSİN</button>

        <img id="ADANA" src="ADANA.jpeg" alt="ADANA"/>
        <button type="button" onclick="myFunction2()">ADANA</button>

        <script>

        function myFunction() {
            document.getElementById("demo").innerHTML = "Antalya: Antalya, Türkiye'nin en popüler tatil yerlerinden biridir. Şehir, tarihi Kaleiçi semti, Düden Şelalesi ve Konyaaltı Plajı gibi birçok turistik yer barındırır. Antalya'nın muhteşem sahillerinde yüzme, sörf yapma ve güneşlenme gibi birçok aktivite yapabilirsiniz.<br>Side, Antalya'nın yaklaşık 75 km doğusunda yer alan antik bir şehirdir. Antik tiyatro, Apollon Tapınağı, Agora gibi yapılar ve antik şehir duvarları Side'nin turistik yerlerindendir.<br> Alanya, Antalya'nın yaklaşık 130 km doğusunda yer alan bir tatil beldesidir. Kaleiçi ve Alanya Kalesi, şehirdeki en popüler turistik yerlerdir. Alanya'da ayrıca, Kleopatra Plajı, Damlataş Mağarası ve Alara Kalesi gibi yerler de ziyaret edilebilir.<br> Kaş, Antalya'nın batısında yer alan bir tatil beldesidir. Şehir, tarihi antik kentler, doğal güzellikler ve eşsiz plajlar ile ünlüdür. Kekova Adası, Kaputaş Plajı ve Patara Plajı Kaş'ın en popüler turistik yerleridir.<br> Kemer, Antalya'nın batısında yer alan bir tatil beldesidir. Şehir, doğal güzellikler, tarihi antik kentler ve plajlar ile ünlüdür. Phaselis Antik Kenti, Olympos Milli Parkı ve Göynük Kanyonu Kemer'deki en popüler turistik yerlerdir";
        
        }


        let demoButton = document.getElementById("demo-btn");
        demoButton.addEventListener("click", changeImage);
        
        function changeImage() {
            let mersinimg = document.getElementById("MERSİN");
            mersinimg.src = "MERSİN 2.jpeg";
            document.getElementById("demo").innerHTML = "Mersin, tarihi kalıntıları ve kültürel zenginlikleriyle dikkat çekmektedir. Mersin ve çevresinde yer alan tarihi kalıntılar arasında Kızkalesi Kalesi, Anemurium Antik Kenti, Kanlıdivane Antik Kenti, Soli-Pompeipolis Antik Kenti, Elaiussa Sebaste Antik Kenti ve Corycus Antik Kenti gibi önemli yerler bulunmaktadır. Ayrıca Mersin'de Atatürk Evi Müzesi, Mersin Müzesi ve Mersin Kent Müzesi gibi müzeler de bulunmaktadır.<br>Mersin, doğal güzellikleriyle de ünlüdür. Tarsus Çamlığı Milli Parkı, Mersin'in en önemli doğal alanlarından biridir. Ayrıca Mersin'in kıyıları boyunca uzanan sahilleri, turistlerin ilgisini çekmektedir. Silifke'de yer alan Akgöl ve Astım Mağarası, Mersin'de ziyaret edilebilecek diğer doğal güzellikler arasındadır."
        }


        function myFunction2() {
            document.getElementById("demo").innerHTML = "Adana, tarihi kalıntıları ve kültürel zenginlikleriyle dikkat çekmektedir. Şehir, tarihi İpek Yolu'nun da geçtiği bir noktada bulunmaktadır. Tarihi yapıları arasında Taşköprü, Büyük Saat Kulesi, Ulu Camii, Ramazanoğlu Medresesi, Bebekli Kilise, Anavarza Antik Kenti ve Karatepe-Aslantaş Milli Parkı gibi önemli yerler bulunmaktadır.<br>Adana, zengin kültürel mirası ile de ön plana çıkmaktadır. Şehir, uzun yıllar boyunca farklı medeniyetlere ev sahipliği yapmıştır. Bu nedenle Adana'nın kültürü, Arap, Ermeni, Rum ve Türk etkilerini taşımaktadır. Adana'nın kültürel zenginliklerinden bazıları ise Adana Etnografya Müzesi, Şakirpaşa Konağı Müzesi, Atatürk Evi Müzesi ve Varda Köprüsü gibi yerlerdir.<br>Adana, doğal güzellikleri ile de ünlüdür. Seyhan Baraj Gölü, Yumurtalık Sahili, Kapıkaya Kanyonu, Kozan Kalesi, Cennet Cehennem Vadisi ve Çukurova Deltası, Adana'daki doğal güzellikler arasındadır";
        
        }


        
            
        alert("Geziyoruz");
        const img = document.querySelector('img');

        </script>


        <h2><?php
        "Akdeniz Bölgesinin Yöresel Yemekleri";
        ?>
        </h2>

        <?php
        print_r(file("text.txt"));
        ?>

        

        


        <br>
        <h1 style="text-align: center; font-size: x-large;">HAKKIMDA</h1>
        <div class="sütun">
            <img src="banü.png" alt="Bandırma Onyedi Eylül Üniversitesi">
          </div>
          
          <div class="sütun">
            <h2>Feyza Nur Çiftci</h2>
            <ul>
                <li>Ad: Feyza Nur</li>
                <li>Soyad: Çiftci</li>
                <li>Numara: 2211502073</li>
                <li>Doğum tarihi: 04.10.2001</li>
                <li>Meslek: Öğrenci</li>
                <li>Bölüm: Bilgisayar Mühendisliği</li>
            </ul>
          </div>
          
          <div class="sütun">
            <br><br>
            <ul>
                <li>Email: feyzanur.ciftci@outlook.com</li>
                <li>Öğrenci Maili: feyza.ciftci@bandirma.edu.tr</li>
                <li>Linkedin: <a href=https://www.linkedin.com/in/feyza-nur-ciftci-3739b8239 target="_blank">Feyza Nur Çiftci</a></li>
                <li>Adres: Antalya</li>
            </ul>
          </div>
    </body>
</html>