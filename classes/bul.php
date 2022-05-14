<?php
// This class contains a method that check status of available domains
// This can be use for a personal project to get better understand of OOP in PHP

class getDomain {

  public $domain;

  public function findDomain(){
    if (isset($_POST['domain'])){
      $domain = $_POST['domain'];
      $get_google= 'https://tr.godaddy.com/domains/searchresults.aspx?checkAvail=1&tmskey=&domainToCheck='.$domainName.'';
      if (gethostbyname($domain)!=$domain) {
        $message = $domain." ". 'OOPS! this domain is taken';
      }else {
        $message = $domain. " ". 'Domain is available';
      }
    }
    return $message;
  }
}
