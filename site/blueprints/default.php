<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  title:
    label: Titre
    type:  text
  cover:
    label: Vignette
    type: select
    options: images
  text:
    label: Texte
    type:  textarea