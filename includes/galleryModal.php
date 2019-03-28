<?php
    function myModal ($idName, $idNumber, $imagePath, $imageArray, $imageAltArray){
        // nyitó div
        echo "<div id=$idName class=\"modal\">
        <span class=\"close cursor\" onclick=\"closeModal($idName)\">&times;</span>
        <div class=\"modal-content\">";

        // nagyképek
        $imgNum=count($imageArray);
        for($i = 0; $i < $imgNum; $i++) {
           echo "<div class=\"mySlides mySlides-.$idNumber.\">
           <div class=\"numbertext\">.$i.+1 / .$imgNum.</div>
           <img src=.$imagePath .$imageArray($i). alt=.$imageAltArray($i).>
       </div>"; 
        }

        // navigáció és képfelirat
        echo "<a class=\"prev\" onclick=\"plusSlides(.$idNumber.,-1)\">&#10094;</a>
                <a class=\"next\" onclick=\"plusSlides(.$idNumber.,1)\">&#10095;</a>
            </div>
            
            <div class=\"caption-container\">
                <p id=\"caption.$idNumber.\"></p>
            </div>"
            ;
        // kisképek
        for($i = 0; $i < $imgNum; $i++){
            echo "<div class=\"bottom--img-container\">
            <img class=\"demo$idNumber demo cursor\" src=.$imagePath. smalls/.$imageArray($i). onclick=\"currentSlide(.$idNumber.,1)\"
                alt=.$imageAltArray($i).>
        </div>";
        }

        // záró div
        echo "</div>
        </div>
        </div>";
    }
?>