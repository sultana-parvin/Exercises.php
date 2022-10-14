
<?php
$prixht = $_POST["prixht"];
$tva = $_POST["tva"];
?>


<fieldset>
    <legend><b>Saisissez le prix HT et le taux de TVA </b>
</legend>
<table>
<tr>
    <td>Prix Hors Taxes : </td>
    <td><?php echo $_POST['prixht']?></td>
</tr> 

<td>Taux de TVA (en %) : </td>
<td><?php echo $_POST['tva']?></td>
</tr>

<?php
if(!empty($_POST['prixht']) 
AND !empty($_POST['tva']) )
{echo "<tr>
    <td>Montant de la TVA : </td>
    <td>
    <input type=\"text\"value=\"".round($_POST['prixht']*$_POST['tva']/100,2)."\"/>
    </td>
    </tr>";
    echo "<tr><td>Prix TTC : </td>
    <td>
    <input type=\"text\"value=\"".round($_POST['prixht']*(1+$_POST['tva']/100),2)."\"/>
    </td>
</tr>";
}
else{echo "<b>Le formulaire est incomplet!</b>";}?>

</table>
</fieldset>