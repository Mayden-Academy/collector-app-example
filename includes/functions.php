<?php

function getCollection($db)
{
    $query = $db->query('SELECT * FROM pokemon;');
    $pokemon = $query->fetchAll();
    return $pokemon;
}

function formatId($pokemonId) {
    return str_pad($pokemonId,3, '0',STR_PAD_LEFT );
}

function displayPokemon($pokemon) {
    $pokemon['id'] = formatId($pokemon['id']);

    $output = '<div class="pokemon">';
    $output .= '<div class="box">';
    $output .= '<div>#' . $pokemon['id'] . '</div>';
    $output .= '<h3>' . $pokemon['name'] . '</h3>';
    $output .= '<img src="https://assets.pokemon.com/assets/cms2/img/pokedex/detail/' . $pokemon['id'] . '.png" />';
    $output .= '</div></div>';

    return $output;
}