<?php
kirbytext::$tags['citation'] = array(
  'html' => function($tag) {
    $html  = '<div class="pullquote">';
    $html .= '"' . $tag->attr('citation') . '"';
    $html .= '</div>';
    return $html;
  }
);
?>