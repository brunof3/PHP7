<?php
require_once 'index.php';
require_once'Pessoa.php';
require_once 'Livro.php';
interface Publicacao {
    function abrir();
    function fechar ();
    function folear();
    function avancarPag();
    function voltarPag();
}
