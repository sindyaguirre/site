<?php

function numeroEmReais($numeros) {
    return "R$ ".number_format($numeros,2,',','.');
    
}
