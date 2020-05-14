<?php if(!defined('KIRBY')) exit ?>

title: Initiative
pages: false
files:
  sortable: true
fields:
  title:
    label: Nom de l'initiative
    type:  text
  cover:
    label: Vignette
    type: select
    options: images
    required: true
  place:
    label: Localisation
    type:  select
    required: true
    options :
      Antony	:	Antony
      Asnières-sur-Seine	:	Asnières-sur-Seine
      Bagneux	:	Bagneux
      Bois-Colombes	:	Bois-Colombes
      Boulogne-Billancourt	:	Boulogne-Billancourt
      Bourg-la-Reine	:	Bourg-la-Reine
      Châtenay-Malabry	:	Châtenay-Malabry
      Châtillon	:	Châtillon
      Chaville	:	Chaville
      Clamart	:	Clamart
      Clichy	:	Clichy
      Colombes	:	Colombes
      Courbevoie	:	Courbevoie
      Fontenay-aux-Roses	:	Fontenay-aux-Roses
      Garches	:	Garches
      La Garenne-Colombes	:	La Garenne-Colombes
      Gennevilliers	:	Gennevilliers
      Issy-les-Moulineaux	:	Issy-les-Moulineaux
      Levallois-Perret	:	Levallois-Perret
      Malakoff	:	Malakoff
      Marnes-la-Coquette	:	Marnes-la-Coquette
      Meudon	:	Meudon
      Montrouge	:	Montrouge
      Nanterre	:	Nanterre
      Neuilly-sur-Seine	:	Neuilly-sur-Seine
      Le Plessis-Robinson	:	Le Plessis-Robinson
      Puteaux	:	Puteaux
      Rueil-Malmaison	:	Rueil-Malmaison
      Saint-Cloud	:	Saint-Cloud
      Sceaux	:	Sceaux
      Sèvres	:	Sèvres
      Suresnes	:	Suresnes
      Vanves	:	Vanves
      Vaucresson	:	Vaucresson
      Ville-d’Avray	:	Ville-d’Avray
      Villeneuve-la-Garenne	:	Villeneuve-la-Garenne
      Toutes villes	:	Toutes villes
  text:
    label: Description
    type:  textarea
  tags:
    label: Tags
    type:  tags