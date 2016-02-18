<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 17/02/16
 * Time: 20:56
 */

?>
<form action="index.php" method="get">
<label for="letter">Choissisez une lettre</label>
<select name="letter" id="letter">
        <?php $nbLetters = count($letters);$i=0; for($i=0; $i<$nbLetters; $i++): ?>
            <option value="<?php echo $letters[$i]; ?>"><?php echo $letters[$i]; ?></option>
        <?php endfor; ?>
</select>
<input type="submit" value="Choisir cette lettre">
</form>
<?php
$retLetter;
if(isset($_GET['letter'])){
    $retLetter=$_GET['letter'];
}

echo $retLetter;
 ?>