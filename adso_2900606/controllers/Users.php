<?php

require_once "models/User.php";
class Users{

    public function main(){}

    public function userRolCreate(){
        $rol = new User;
        $rol->setRolCode(4);
        $rol->setRolName("prueba_eliminación");
        $rol->createRol();
    }

    public function userRolRead(){
        $roles = new User;
        $roles = $roles->readRoles();
    }
    
    public function userRolUpdate(){
        $rolId = new User;
        $rolId = $rolId->getRolById(3);
        
        $rolUp = new User;
        $rolUp->setRolCode($rolId->getRolCode());
        $rolUp->setRolName("seller");
        $rolUp->updateRol();
        
    }

    public function userRolDelete(){
        $rolDel = new User;
        $rolDel->deleteRol(4);
    }

    public function userCreate(){
        $User = new User;
        $User->setRolCode(2);
        $User->setUserName("valentina");
        $User->setUserLastName("Rodríguez");
        $User->setUserId("2314");
        $User->setUserEmail("Prueba@gmail.com");
        $User->setUserPass("1234");
        $User->setUserState(1);
        $User->createUser();
        print_r($User);
    }

    public function userRead(){
        $Users = new User;
        $Users = $Users->getUserById(2);
        print_r($Users);
    }

    public function userUpdate(){
        $UserId = new User;
        $UserId = $UserId->getUserById(3);


        $UserUpdate = new User;
        $UserUpdate->setRolCode(2);
        $UserUpdate->setUserCode($UserId->getUserCode());
        $UserUpdate->setUserName("fabian");
        $UserUpdate->setUserLastName("gomez");
        $UserUpdate->setUserId("2314");
        $UserUpdate->setUserEmail("actualizacion@gmail.com");
        $UserUpdate->setUserPass("1234");
        $UserUpdate->setUserState(1);
        $UserUpdate->updateUser();
        print_r($UserUpdate);
    }

    public function userDelete(){
        $UserDelete = new User;
        $UserDelete->deleteUser(2);
        print_r($UserDelete);
    }
}

?>