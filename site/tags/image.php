<?php
kirbytext::$tags['image'] = array(
  'html' => function($tag) {
    $html  = '<div class="artimg">';
    $html .= '<div class="c1"></div>';
    $html .= '<div class="c2"></div>';
    $html .= '<img src="' . $tag->file($tag->attr('image'))->url() . '">';
    $html .= '</div>';
    return $html;
  }
);
?>