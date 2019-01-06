<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Classmodel
 *
 * @author lokesh
 */
class Classmodel{
    public function get_connection(){
        $connection = mysqli_connect("localhost", "root", "root", "jspdb");
        return $connection;
    }
}
