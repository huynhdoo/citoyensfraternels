<?php if(!defined('KIRBY')) exit ?>

title: Portrait
pages: false
files:
  sortable: true
fields:
  title:
    label: Nom
    type:  text
  cover:
    label: Vignette
    type: select
    options: images
  teaser:
    label: Accroche (40 caractères)
    type:  text
  text:
    label: Présentation
    type:  textarea
  involve:
    label: Organisation
    type: select
    options: query
    query:
      page: organisations
      fetch: children
      value: '{{uid}}'
      text: '{{title}}'
  follow:
    label: Soutien
    type: checkboxes
    options: query
    query:
      page: initiatives
      fetch: children
      value: '{{uid}}'
      text: '{{title}}'