<?php

    function withEmpty($list)
    {
        return [''=>'-- select --']+$list;
    }


    function bloodGroups()
    {
        $list=[
            "A+"=>"A+",
            "B+"=>"B+",
            "O+"=>"O+",
            "AB+"=>"AB+",
            "A-"=>"A-",
            "B-"=>"B-",
            "O-"=>"O-",
            "AB-"=>"AB-"
        ];

        return $list;
        
    }


?>