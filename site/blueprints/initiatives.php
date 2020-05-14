<?php if(!defined('KIRBY')) exit ?>

title: Initiatives
pages:
  template: initiative
files: true
fields:
  title:
    label: Titre
    type:  text
  text:
    label: Descrition
    type:  textarea
  icon:
    label: Icône
    type: select
    options: images