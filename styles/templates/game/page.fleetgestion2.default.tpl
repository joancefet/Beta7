{block name="title" prepend}{$LNG.lm_fleettable_5}{/block}
{block name="content"}

<div id="page_contenu"><h1>{$LNG.lm_fleettable_5}</h1><div class="onglet">
              <ul>
                  <li><a href="?page=fleetTable" title="{$LNG.lm_fleettable_1}">{$LNG.lm_fleettable_2}</a></li>
              <li><a href="?page=fleetTable&mode=manage" title="{$LNG.lm_fleettable_3}">{$LNG.lm_fleettable_4}</a></li>
              </ul>
          </div>
           <div id="div_vaisseau">    <div id="page_vaisseau_equipe">	<div class="categorie explication">		<h2>{$LNG.lm_fleettable_6} <img class="icone_creer" src="/design/image/jeu/icone/blanc/aide.png"></h2>	{$LNG.lm_fleettable_7}	</div>	<div id="liste_equipe">
		   
		   
		   <!----------------------------------flotte equipe 1------------------------------------------------->
		   <div id="emballage_equipe_5551" class="emballage_equipe">  	<div id="equipe_5551" class="equipe">		<h2>Flotte : 
								<span class="orange" onclick="javascript:VaisseauEquipe.modifierNomEquipe('5551', '150');" style="cursor : pointer;">150</span>
								<img class="icone_equipe" src="/design/image/jeu/icone/blanc/tag.png">
								<img class="supprimer" src="/design/image/jeu/icone/couleur/corbeille.png" onclick="javascript:VaisseauEquipe.supprimerEquipe('5551');">
							</h2>		<h3>Vaisseaux</h3>		<div class="liste_vaisseau">		<div class="item">
												<img src="/design/image/jeu/vaisseau/12.jpg">
												<div class="element reel" name="nom_vaisseau_2015">
													<a title="Modifier le nombre" onclick="javascript:VaisseauEquipe.modifierElementEquipe('5551', 'vaisseau', '2015');">
														<span class="couleur_theme">1 500</span> unités<br>
														<span class="nom">Chasseur</span>
													</a>
												</div>
												<img class="supprimer" src="design/image/jeu/icone/couleur/refuser.png" onclick="javascript:VaisseauEquipe.supprimerElementEquipe('5551', 'vaisseau', '2015');">
											</div>		<div class="item ajouter_item" name="vaisseau">
										<img src="/design/image/equipe_plus.png">
										<div class="element">
											<a title="Ajouter un élément à l'équipe" onclick="javascript:VaisseauEquipe.afficherFormulaire('5551', 'vaisseau');">Ajouter un élément</a>
											<form action="javascript:VaisseauEquipe.ajouterElementEquipe('5551', 'vaisseau');">
												<select><option value="9552">Croiseur</option><option value="27297">Transport</option><option value="27405">Tria</option><option value="27406">Aurore</option>					</select>
												<input value="Ok" type="submit">
											</form>
										</div>
									</div>		</div>		<h3>Hangars</h3>		<div class="liste_hangar">		<div class="item ajouter_item" name="hangar">
										<img src="/design/image/equipe_plus.png">
										<div class="element">
											<a title="Ajouter un élément à l'équipe" onclick="javascript:VaisseauEquipe.afficherFormulaire('5551', 'hangar');">Ajouter un élément</a>
											<form action="javascript:VaisseauEquipe.ajouterElementEquipe('5551', 'hangar');">
												<select><option value="2015">Chasseur</option><option value="9552">Croiseur</option><option value="27297">Transport</option><option value="27405">Tria</option><option value="27406">Aurore</option>					</select>
												<input value="Ok" type="submit">
											</form>
										</div>
									</div>		</div>		<h3>Appareils</h3>		<div class="liste_appareil">		<div class="item ajouter_item" name="appareil">
										<img src="/design/image/equipe_plus.png">
										<div class="element">
											<a title="Ajouter un élément à l'équipe" onclick="javascript:VaisseauEquipe.afficherFormulaire('5551', 'appareil');">Ajouter un élément</a>
											<form action="javascript:VaisseauEquipe.ajouterElementEquipe('5551', 'appareil');">
												<select><option value="6">Drone</option>					</select>
												<input value="Ok" type="submit">
											</form>
										</div>
									</div>		</div>		<div class="option">			<a class="modifier_couleur" title="Modifier la couleur de l'équipe" onclick="javascript:VaisseauEquipe.modifierCouleurEquipe('5551');">Modifier la couleur de la flotte</a>		</div>	</div></div>	
									
									<!----------------------------------Flotte equipe 2 ------------------------------------------------->
									<div id="emballage_equipe_5552" class="emballage_equipe">  	<div id="equipe_5552" class="equipe">		<h2>Flotte : 
								<span class="orange" onclick="javascript:VaisseauEquipe.modifierNomEquipe('5552', '150');" style="cursor : pointer;">150</span>
								<img class="icone_equipe" src="/design/image/jeu/icone/blanc/tag.png">
								<img class="supprimer" src="/design/image/jeu/icone/couleur/corbeille.png" onclick="javascript:VaisseauEquipe.supprimerEquipe('5552');">
							</h2>		<h3>Vaisseaux</h3>		<div class="liste_vaisseau">		<div class="item">
												<img src="/design/image/jeu/vaisseau/12.jpg">
												<div class="element reel" name="nom_vaisseau_2015">
													<a title="Modifier le nombre" onclick="javascript:VaisseauEquipe.modifierElementEquipe('5552', 'vaisseau', '2015');">
														<span class="couleur_theme">1 500</span> unités<br>
														<span class="nom">Chasseur</span>
													</a>
												</div>
												<img class="supprimer" src="design/image/jeu/icone/couleur/refuser.png" onclick="javascript:VaisseauEquipe.supprimerElementEquipe('5552', 'vaisseau', '2015');">
											</div>		<div class="item ajouter_item" name="vaisseau">
										<img src="/design/image/equipe_plus.png">
										<div class="element">
											<a title="Ajouter un élément à l'équipe" onclick="javascript:VaisseauEquipe.afficherFormulaire('5552', 'vaisseau');">Ajouter un élément</a>
											<form action="javascript:VaisseauEquipe.ajouterElementEquipe('5552', 'vaisseau');">
												<select><option value="9552">Croiseur</option><option value="27297">Transport</option><option value="27405">Tria</option><option value="27406">Aurore</option>					</select>
												<input value="Ok" type="submit">
											</form>
										</div>
									</div>		</div>		<h3>Hangars</h3>		<div class="liste_hangar">		<div class="item ajouter_item" name="hangar">
										<img src="/design/image/equipe_plus.png">
										<div class="element">
											<a title="Ajouter un élément à l'équipe" onclick="javascript:VaisseauEquipe.afficherFormulaire('5552', 'hangar');">Ajouter un élément</a>
											<form action="javascript:VaisseauEquipe.ajouterElementEquipe('5552', 'hangar');">
												<select><option value="2015">Chasseur</option><option value="9552">Croiseur</option><option value="27297">Transport</option><option value="27405">Tria</option><option value="27406">Aurore</option>					</select>
												<input value="Ok" type="submit">
											</form>
										</div>
									</div>		</div>		<h3>Appareils</h3>		<div class="liste_appareil">		<div class="item ajouter_item" name="appareil">
										<img src="/design/image/equipe_plus.png">
										<div class="element">
											<a title="Ajouter un élément à l'équipe" onclick="javascript:VaisseauEquipe.afficherFormulaire('5552', 'appareil');">Ajouter un élément</a>
											<form action="javascript:VaisseauEquipe.ajouterElementEquipe('5552', 'appareil');">
												<select><option value="6">Drone</option>					</select>
												<input value="Ok" type="submit">
											</form>
										</div>
									</div>		</div>		<div class="option">			<a class="modifier_couleur" title="Modifier la couleur de l'équipe" onclick="javascript:VaisseauEquipe.modifierCouleurEquipe('5552');">Modifier la couleur de la flotte</a>		</div>	</div></div>
									
									<!----------------------------------Nouvel equipe 3------------------------------------------------->
									
									<div id="nouvelle_equipe" class="equipe">		<h2>{$LNG.lm_fleettable_8} <img class="icone_creer" src="/design/image/jeu/icone/blanc/plus.png"></h2>		<a onclick="javascript:VaisseauEquipe.afficherFormulaireCreation();" class="centre">{$LNG.lm_fleettable_8} !</a>		<form id="form_creer_equipe" action="javascript:VaisseauEquipe.creerEquipe();">		<h3>{$LNG.lm_fleettable_10}</h3>			<div class="liste_vaisseau">	

									 {foreach $FleetsOnPlanet as $FleetRow}
		<div class="item">
		<img src="styles/theme/gow/gebaeude/{$FleetRow.id}.gif" title="{$LNG.tech.{$FleetRow.id}}"/>
		<div class="element">
		<input type="text" class="entier" id="ship{$FleetRow.id}" name="ship{$FleetRow.id}" value="0" /> ({$FleetRow.count|number})
		</div>
		</div>	
		{/foreach}

		</div>		<h3>Appareils</h3>					<div class="centre">				<input value="{$LNG.lm_fleettable_9}" type="submit">			</div>		</form>	</div>	</div></div></div></div>                    <!-- Fin du corps -->
      
			
			{/block}
{block name="script" append}<script src="scripts/game/fleetTable.js"></script>{/block}

