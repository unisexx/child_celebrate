<?php
class Province extends ORM {

    var $table = 'st_provinces';

    var $has_many = array("applicant");

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>