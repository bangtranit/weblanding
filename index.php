<?php

public function checklogin{
    if ($prefix != 'WORKFLOW' || $prefix != 'SALARY'){
        return next($request);
    }
    if ($employee.joined_on < date("Y/m/d")){
        return $response;
    }
}