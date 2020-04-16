<?php
if (isset($_POST['submit'])) {
    $leeftijd = $_POST['leeftijd'];
}
echo "wat is je leeftijd?";
?>

<form method="post">
    leeftijd: <input type="number" name="leeftijd" onfocus="this.value=''" value="leeftijd">
    <input type="submit" name="submit" class="btn btn-success mt-2" value="klik hier">
</form>
<?php
// ik weet dat er een foutmelding komt omdat de twee post vriabelen niet worden gedefinieert in deze PHP tag
if ($leeftijd >= 16.5) {
    echo "je mag beginnen met rijlessen";
} else
    echo "helaas, je bent te jong";
?>