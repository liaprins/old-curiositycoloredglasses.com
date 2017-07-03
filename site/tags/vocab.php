<?php

kirbytext::$tags['vocab'] = array(
  'attr' => array(
    'url'
  ),
  'html' => function($tag) {

    $url     	 = thisUrl();
    $vocab    	 = $tag->attr('vocab');
    $urlappendix = $tag->attr('url');

	/* Adding an id to these inline words so they can also be anchor-linked BACK up to, from the glossary, but had to preface this id with a "-" so it differs from the glossary anchor links */
    /* return '<dfn><a href="' . $url . '#' . $urlappendix . '" id="' . '-' . $urlappendix . '" class="vocabwordinline s-display yellowhover">' . $vocab . '</a></dfn><span class="inlinevocabcontainer">TEST</span>'; */
    return '<dfn><a id="' . '-' . $urlappendix . '" class="vocabwordinline s-display yellowhover" data-vocab="">' . $vocab . '</a></dfn><span class="inlinevocabcontainer"> TEST </span>';

  }
);


