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

    if(!function_exists('sweetFlashMessageShow')) {

        /**
         * @return void
         * @param string $position
         * @param string $type
         * @param string $title
         * @param boolean $showConfirmButton
         * @param integer $timer
         *
        */
        function sweetFlashMessageShow($position = 'top-end',$type,$title,$showConfirmButton, $timer = 1500)
        {
            echo '
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
                <script type="text/javascript">
                
                $(document).ready(function(){
                    swal({
                        position: "'.$position.'",
                        type: "'.$type.'",
                        title: "'.$title.'",
                        showConfirmButton: "'.$showConfirmButton.'",
                        timer: "'.$timer.'"
                    })
                });
                
                </script>
                ';
        }
    }


    if(!function_exists('sweetFlashIsDelete')) {

        /**
         * @return void
         *
        */
        function sweetFlashIsDelete()
        {
            echo '
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
                <script type="text/javascript">
                
                $(document).ready(function(){
                    Swal.fire({
                    title: "Are you sure?",
                    text: "You will not be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                    })
                })
                
                </script>
                ';
        }
    }


    if(!function_exists('sweetFlashIsConfirmOrError')) {

        /**
         * @return void
         * @param string $title
         * @param string $message
         * @param string $type
         *
        */
        function sweetFlashIsConfirmOrError($title,$message,$type = 'success')
        {
            echo '
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
                <script type="text/javascript">
                
                $(document).ready(function(){
                    Swal.fire(
                                "'.$title.'",
                                "'.$message.'",
                                "'.$type.'"
                            )
                })
                
                </script>
                ';
        }
    }








}

