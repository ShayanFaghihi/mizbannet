<?php
    error_reporting(0);
    if(isset($_GET['domain'])){
        $domain = $_GET['domain'];
        $godaddycheck = 'https://in.godaddy.com/domains/searchresults.aspx?checkAvail=1&tmskey=&domainToCheck='.$domain.'';
        $namecomcheck = 'https://www.name.com/domain/search/'.$domain.'';
        $registercomcheck = 'http://www.register.com/domain/search/wizard.rcmx?searchDomainName='.$domain.'&searchPath=Default&searchTlds=';

        $unavailable = "<h3> دامنه <span style='color:#C51E39'>$domain</span> قبلا ثبت شده است</h3>";
        $available = "<h3>دامنه $domain آزاد می باشد. هم اکنون <a href='mizbannet.com'>خریداری کنید</a></h3>";

        if ( gethostbyname($domain) != $domain) {
            $response =  $unavailable;
        } else {
            $response = $available;
        }
        echo $response;
    }
?>