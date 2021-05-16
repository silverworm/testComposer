<?php

namespace testComposer\ClickThroughRate;

/**
 *
 */
class ClickThroughRate
{


  function calculateCTR($numOfClicks,$numOfimpression){
    return $numOfClicks/$numOfimpression*100;
  }

}