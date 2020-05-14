<?php if(!defined('KIRBY')) exit ?>

title: Site
pages:
  template:
    - organisations
    - actions
    - portraits
    - events
    - defaults
fields:
  title:
    label: Titre
    type:  text
  cover:
    label: Logo
    type: select
    options: images
  subtitle:
    label: Accroche
    type:  text
  author:
    label: Auteur
    type:  text
  description:
    label: Description
    type:  textarea
  keywords:
    label: Mots-clés
    type:  tags
  copyright:
    label: Crédits
    type:  textarea
  email:
    label: Adresse mél
    type:  email
    width: 1/2
  hashtag:
    label: Hashtag
    type: text
    width: 1/2
    icon: hashtag
  facebook:
    label: Compte Facebook
    type:  text
    width: 1/2
    icon:facebook
  twitter:
    label: Compte Twitter
    type:  text
    width: 1/2
    icon:twitter
  vimeo:
    label: Compte Vimeo
    type:  text
    width: 1/2
    icon:vimeo
  mailchimp:
    label: Adresse mailchimp
    type:  text
    width: 1/2
    icon:url