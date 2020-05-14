<?php if(!defined('KIRBY')) exit ?>

title: Portraits
pages:
  template: portrait
files: true
fields:
  title:
    label: Titre
    type:  text
  text:
    label: Description
    type:  textarea
  icon:
    label: Icône
    type: select
    options: images