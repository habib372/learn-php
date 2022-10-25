<?php

    $domain="vcampus.co";
    $any=checkdnsrr($domain,"ANY");
    if($any){
        echo "the domain $domain has as DNS record!";
    }else{
        echo "the domain $domain does not appear to have a DNS record!";
    }