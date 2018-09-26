<?php
class Applicant extends ORM {

    var $table = 'applicants';

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>