<?php
class Subdistrict extends ORM {

    var $table = 'st_subdistricts';

    var $has_many = array("applicant","province","district");

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>