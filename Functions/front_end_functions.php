<?php

function getnav(){
  return '<div class="nav">
          <input type="checkbox">
            <span></span>
            <span></span>
            <div class="menu">
              <li><a href="#gmeTrack">GME</a></li>
              <li><a href="#">about</a></li>
              <li><a href="#">Work</a></li>
              <li><a href="#">Contanct</a></li>
            </div>
        </div>';
}

function trackStock( $ticker ){
  $key = 'WDY2HA0NKNCNUBOV';
  $url = 'https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=' . $ticker . '&apikey=' . $key;


  $curl = curl_init();
    // set our url with curl_setopt()
  curl_setopt($curl, CURLOPT_URL, $url);

  // return the transfer as a string, also with setopt()
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

  // curl_exec() executes the started curl session
  // $output contains the output string
  $output = curl_exec($curl);

   // close curl resource to free up system resources
   // (deletes the variable made by curl_init)
   curl_close($curl);

   return $output;

}
