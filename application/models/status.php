<?php
class Status extends ORM {

    var $table = 'statuses';

    var $has_one = array("applicant","user");

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>