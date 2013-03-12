<div id="contenu">
      <h2>Liste des Employés </h2>
      <div class="corpsForm">
     <table >
  	   <caption>Descriptif des employés
       </caption>
             <tr>
                <th >Nom</th>  
                <th >Prénom</th>              
             </tr>
          
    <?php    
	   foreach ($lesEmployes as $unEmploye) {
			$nomEmploye = $unEmploye['nom'];
			$prenomEmploye = $unEmploye['prenom'];
		?>		
            <tr> <td><?php echo $nomEmploye ?></td>
                <td><?php echo $prenomEmploye ?></td>
    <?php		 
          
          }
?>	  
                                          
    </table>
      </div>
</div>
     
