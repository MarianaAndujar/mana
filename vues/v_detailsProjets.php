<div id="contenu">
      <h2>Liste des détails Projets</h2>
      <div class="corpsForm">
     <table >
  	   <caption>Descriptif des détails Projets
       </caption>
             <tr>
                 <th >code projet</th>  
                 <th >libellé</th> 
                <th >Nom</th>  
                <th >Prénom</th>              
             </tr>
          
    <?php    
	   foreach ($lesProjetsDetails as $unProjet) {
                        $codeProjet = $unProjet['codeprojet'];
			$nomProjet = $unProjet['nomprojet'];
			$nomEmploye = $unProjet['nom'];
			$prenomEmploye = $unProjet['prenom'];
		?>		
            <tr><td><?php echo $codeProjet ?></td> 
                <td><?php echo $nomProjet ?></td>
                <td><?php echo $nomEmploye ?></td>
                <td><?php echo $prenomEmploye ?></td>
            </tr>
    <?php		 
          
          }
?>	  
                                          
    </table>
      </div>
</div>
     
