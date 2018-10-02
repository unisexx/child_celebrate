<?php
class District extends ORM {

    var $table = 'st_districts';

    var $has_many = array("applicant","province");

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>