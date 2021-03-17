<?php

// https://stackoverflow.com/questions/11873990/create-preg-match-for-password-validation-allowing

$senha = "Tiago@2021";

$padrao_complexidade = "/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{3,12}$/";


if(preg_match($padrao_complexidade, $senha))
    echo "senha complexa o suficiente";
else
    echo "a senha não atendente os critérios de complexidade";