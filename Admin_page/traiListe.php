<style>
	td,th
	{
		border: 1px solid black;
		width: 150px;
	}
	
	table
	{
		border: 1px solid black;
	}
	
	
	h1
	{
		border: 1px solid blue;
		border-radius: 10px 10px;
		/*box-shadow: 10px 2px 10px #000000;*/
		width: 80%;
	}
	
	a
	{
	    font-style: italic;
		font-size: x-large;
	}
</style>
	
<meta charset="utf-8"/>
	
	<?php
	session_start();
		try { 

    				$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
				} catch (Exception $e) {
   					die('Erreur:'.$e->getMessage());
				}
		$option = $_POST['option'];
		$niveau = $_POST['niveau'];
		?>
		<?php if ($option == '') {
			$req=$bdd->query("SELECT matEtud,UPPER(nomEtud)  AS nom ,UPPER(prenomEtud) AS prenom, DAY(dateNaissEtud) AS jour,MONTH(dateNaissEtud) AS mois,
										YEAR(dateNaissEtud) AS annee ,sexeEtud, codeOption
							  FROM etudiant
								  WHERE codeNiv= $niveau");
		$rep = $req->fetch();
		?>
		<center>
			<a href="liste.php">ACCUEIL</a>
			<table cellspacing="0">
					<caption><h1>Liste des Etudiants</h1></caption>
					 <br/>
					 <tr>
						 <th>Matricule</th>
						<th>Nom</th>
						<th>Prénom</th>
						<th>Sexe</th>
						<th>Date de naissance</th> 
						<th>Option</th>
						<th>Niveau</th>
					 </tr>
		<?php
				 	
					while($rep = $req->fetch())
					{
						$etudiant = $rep['codeOption'];
						$req1=$bdd->query("SELECT nomOption FROM formation WHERE codeOption  = $etudiant ");
						$rep1 = $req1->fetch();
						$req2=$bdd->query("SELECT nomNiv FROM niveau WHERE codeNiv  = $niveau ");					  
						$rep2 = $req2->fetch();
					?> 	
						  <tr>
						<td align="center" ><?php echo $rep['matEtud'];?></td>
						<td><?php echo $rep['nom'];?></td>
						<td><?php echo $rep['prenom']?></td>
						<td align="center"><?php echo $rep['sexeEtud'];?></td>
						<td align="center"><?php echo $rep['jour'].'/'.$rep['mois'].'/'.$rep['annee']; ?></td>
						<td align="center"><?php echo $rep1['nomOption'];?></td>
						<td align="center"><?php echo $rep2['nomNiv'];?></td>
						</tr>
		 					<?php 
					}
				 ?> 
				
			</table> 
		</center>
		<?php
		
		}
		else{
	
			$req=$bdd->query("SELECT matEtud,UPPER(nomEtud)  AS nom ,UPPER(prenomEtud) AS prenom, DAY(dateNaissEtud) AS jour,MONTH(dateNaissEtud) AS mois,
										YEAR(dateNaissEtud) AS annee ,sexeEtud, codeOption
							  FROM etudiant
								  WHERE codeOption = $option AND codeNiv= $niveau");
		$rep = $req->fetch();
		
	?>
	<center>
			<a href="liste.php">ACCUEIL</a>
			<table cellspacing="0">
					<caption><h1>Liste des Etudiants</h1></caption>
					 <br/>
					 <tr>
						 <th>Matricule</th>
						<th>Nom</th>
						<th>Prénom</th>
						<th>Sexe</th>
						<th>Date de naissance</th> 
						<th>Option</th>
						<th>Niveau</th>
					 </tr>
		<?php
				 	
					while($rep = $req->fetch())
					{
						$etudiant = $rep['codeOption'];
						$req1=$bdd->query("SELECT nomOption FROM formation WHERE codeOption  = $option ");
						$rep1 = $req1->fetch();
						$req2=$bdd->query("SELECT nomNiv FROM niveau WHERE codeNiv  = $niveau ");					  
						$rep2 = $req2->fetch();
					?> 	
						  <tr>
						<td align="center" ><?php echo $rep['matEtud'];?></td>
						<td><?php echo $rep['nom'];?></td>
						<td><?php echo $rep['prenom']?></td>
						<td align="center"><?php echo $rep['sexeEtud'];?></td>
						<td align="center"><?php echo $rep['jour'].'/'.$rep['mois'].'/'.$rep['annee']; ?></td>
						<td align="center"><?php echo $rep1['nomOption'];?></td>
						<td align="center"><?php echo $rep2['nomNiv'];?></td>
						</tr>
		 					<?php 
					}
				 ?> 
				
			</table> 
		</center>
		<?php
	}
	?>
		<?php
		$req->closeCursor();
		$req1->closeCursor();
		$req2->closeCursor();
		?>