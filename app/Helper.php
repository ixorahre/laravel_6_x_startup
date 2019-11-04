<?php

/**
 * This is a helper file having some utility function for reuse
 *
 * @author     Habibur Rahman
 * @copyright  Copyright © 2019 ixora solution
 * @license    https://ixorasolution.com/
 * @version    0.0.1
 *
 * FileName Helper.php
 *
 */


if(!function_exists('pageLoader')) {
    /**
     * data bind to the query
     *
     * @param $status
     *
     * @return void
     */
    function pageLoader($status)
    {
        if($status)
        {
            //Load start
            echo    '<style>
                        .center-loader{ display: block !important;
                                        margin-left: 40%;
                                        max-height: 150px;
                                        max-width: 150px;}
                    </style>';
        }
        elseif (!$status)
        {
            //Load end
            echo    '<style>
                        .center-loader{ display: none !important;
                                        margin-left: 40%;
                                        max-height: 150px;
                                        max-width: 150px;}
                    </style>';
        }
    }
}

