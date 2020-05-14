<?php if(!defined('KIRBY')) exit ?>

title: Organisation
pages: false
files:
  sortable: true
fields:
  title:
    label: Nom
    type:  text
  logo:
    label: Logo
    type: select
    options: images
    required: true
  text:
    label: Présentation
    type:  textarea
  location:
    label: Adresse
    type:  text
  email:
    label: Email
    type:  email
  tel:
    label: Téléphone
    type:  tel
  web:
    label: Site web
    type:  url
  fb:
    label: Facebook
    type:  url
  tw:
    label: Twitter
    type:  url