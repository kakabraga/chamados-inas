<?php

/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

// DB table to use
$table = 'setor';

// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array('db' => 'id', 'dt' => 0),
    array(
        'db' => 'sigla',
        'dt' => 1,
        'formatter' => function( $d, $row ) {
            return utf8_encode($d);
        }
    ),
    array(
        'db' => 'descricao',
        'dt' => 2,
        'formatter' => function( $d, $row ) {
            return utf8_encode($d);
        }
    ),            
    array('dx' => 'excluir', 'dt' => 3)
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require_once('./model/ssp.Setor.php');
//perfil de acesso
$perfil = isset($_REQUEST['p']) ? $_REQUEST['p'] : 6;

echo json_encode(
        SSP::simple($_GET, $table, $primaryKey, $columns, $perfil)
);


