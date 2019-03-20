<?php 
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    $to = 'nyyolczas@gmail.com';
    $targy = 'Kontakt Form a Nyolczas.hu-ról!';
    $message = 'Üzenetküldő: '.$name .'\n'
                .'a '. $email .' emailcímről'. '\n'
                .'az alábbi üzenetet küldte:'. '\n'
                .$subject;
    $headers = "Kontakt Form: ".$email;
    
    if(mail($to,$subject,$message,$headers)){
        echo '<h2 class="bighead center"> Sikeres üzenetküldés! </h2>
        <p> Kedves '.$name .'! Köszönöm az üzeneted, hamarosan válszolni fogok. </p>';
    } else {
        echo '<h2 class="bighead center"> Valami hiba lépett fel, az üzenetküldés nem sikerült. </h2>';
    }
}
?>