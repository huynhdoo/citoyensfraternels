<?php if(!defined('KIRBY')) exit ?>

title: Evénement
pages: false
files:
  sortable: true
fields:
  title:
    label: Titre
    type:  text
  cover:
    label: Vignette
    type: select
    options: images
  place:
    label: Localisation
    type:  text
  time:
    label: Date
    type:  date
    required : true
  text:
    label: Description
    type:  textarea
  tags:
    label: Tags
    type:  tags