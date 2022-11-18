<?php

final class ControleurHelloworld
{
    public function defautAction()
    {
        $O_helloworld =  new Helloworld();
        Vue::montrer('helloworld/voir', array('helloworld' =>  $O_helloworld->donneMessage()));

    }

    //exemple
    public function exempleAction()
    {
        Vue::montrer('helloworld/exemple' , array('exemple' =>  'MY EXEMPLE'));
    }

    // http://localhost:8080/index.php?url=helloworld/boat
    public function boatAction()
    {
        Vue::montrer('helloworld/boat');
    }

    // http://localhost:8080/index.php?url=helloworld/database
    public function databaseAction()
    {
        $O_GET =  new Helloworld();
        Vue::montrer('helloworld/boat', array('database' =>  $O_GET->getConnection($xzr = 1)));//getConnection fonction dans le modele helloworld

    }

    //http://localhost:8080/index.php?url=helloworld/testform
    public function testformAction(Array $A_parametres = null, Array $A_postParams = null)
    {
        $O_GET =  new Helloworld();
        Vue::montrer('helloworld/testform', array('ourdata' =>  $O_GET->getConnection($xzr = 2)));//getConnection fonction dans le modele helloworld
    }

    public function postdataAction()
    {
        $O_POST =  new Helloworld();
        Vue::montrer('helloworld/testform', array('salut' =>  $O_POST->postData()));//postData fonction entrer des données dans la bdd
    }

    //http://localhost:8080/index.php?url=helloworld/students
    public function studentAction()
    {
        $O_GET = new Helloworld();
        Vue::montrer('helloworld/student', array('ourStudents' => $O_GET->getStudent()));
    }

    public function poststudentAction()
    {
        $O_POST = new Helloworld();
        Vue::montrer('helloworld/student', array('salut' => $O_POST->postStudent()));
    }
}