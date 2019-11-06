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
        if ($status) {
            //Load start
            echo '<style>
                        .center-loader{ display: block !important;
                                        margin-left: 40%;
                                        max-height: 150px;
                                        max-width: 150px;}
                    </style>';
        } elseif (!$status) {
            //Load end
            echo '<style>
                        .center-loader{ display: none !important;
                                        margin-left: 40%;
                                        max-height: 150px;
                                        max-width: 150px;}
                    </style>';
        }
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


if(!function_exists('isConfirm')) {

    /**
     * @return void
     *
    */
    function isConfirm($confirmText, $action = null)
    {
        echo '
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
            <script type="text/javascript">
            
            $(document).ready(function(){
                var theAction = "'.$action.'"
                const swalWithBootstrapButtons = Swal.mixin({
                  customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger"
                  },
                  buttonsStyling: false
                })
                
                swalWithBootstrapButtons.fire({
                  title: "Are you sure?",
                  text: "You won\'t be able to revert this!",
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonText: "Yes, delete it!",
                  cancelButtonText: "No, cancel!",
                  reverseButtons: true
                }).then((result) => {
                  if (result.value) {
                      //Call the next method or action 
                      if(theAction != null || theAction != "")
                          {
                              theAction;
                          }
                    swalWithBootstrapButtons.fire(
                      "Done!",
                      "Your request has been successfully done",
                      "success"
                    )
                  } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                  ) {
                    
                    swalWithBootstrapButtons.fire(
                        "Cancelled",
                        "Your request has been cancelled",
                        "error"
                    )
                  }
                })
            })
            
            </script>
            ';
    }
}








