﻿
		<h2>Descriptif des éléments hors forfait</h2>
		<table class="listeLegere" border="1">     
		             <tr>
		                <th class="date">Date</th>
						<th class="libelle">Libellé</th>  
		                <th class="montant">Montant</th>  
		                <th class="action">&nbsp;</th>              
		             </tr>
		          
		    <?php    
			    foreach( $lesFraisHorsForfait as $unFraisHorsForfait) 
				{
					$libelle = $unFraisHorsForfait['libelle'];
					$date = $unFraisHorsForfait['date'];
					$montant=$unFraisHorsForfait['montant'];
					$id = $unFraisHorsForfait['id'];
			?>		
		            <tr>
		                <td> <?php echo $date ?></td>
		                <td><?php echo $libelle ?></td>
		                <td><?php echo $montant ?></td>
		                <td><a href="index.php?uc=gererFrais&action=supprimerFrais&idFrais=<?php echo $id ?>" 
						onclick="return confirm('Voulez-vous vraiment supprimer ce frais?');">Supprimer ce frais</a><br /></td>
		             </tr>
			<?php		 
		          
		          }
			?>	  
		                                          
		    </table>
		    <div class="visiteur">
			    <h2>Nouvel élément hors forfait</h2>
			      <form method="POST" action="index.php?uc=gererFrais&action=validerCreationFrais">
					<div class="corpsForm" >
			            <p>
			              <label for="txtDateHF">Date (jj/mm/aaaa): </label>
			              <input type="text" id="txtDateHF" name="dateFrais" size="10" maxlength="10" value=""  />
			            <p>
			              <label for="txtLibelleHF">Libellé</label>
			              <input type="text" id="txtLibelleHF" name="libelle" size="70" maxlength="256" value="" />
			            </p>
			            <p>
			              <label for="txtMontantHF">Montant : </label>
			              <input type="text" id="txtMontantHF" name="montant" size="10" maxlength="10" value="" />
			            </p>
			       </div>     
			      <div class="piedForm">
				      <p>
				        <input id="ajouter" type="submit" value="Ajouter" size="20" />
				        <input id="effacer" type="reset" value="Effacer" size="20" />
				      </p> 
			      </div>
			   </form>
		   </div> 
	</div>
</div>
  

