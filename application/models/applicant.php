<?php
class Applicant extends ORM {

    var $table = 'applicants';

    var $has_one = array("province",'district','subdistrict');

    var $has_many = array("status");

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>