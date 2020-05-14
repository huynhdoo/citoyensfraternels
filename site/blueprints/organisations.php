<?php if(!defined('KIRBY')) exit ?>

title: Organisations
pages:
  template: organisation
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