<?php

class User{
    private $id;
    private $name;
    private  $prenom;
    private $email;
    private $password;
    private $passwordCOonfig;
    private Role $role;


    public function setId( int $id): void{
        $this->id=$id;
    }
    public function setName(string $name): void{
        $this->name=$name;
    }
    public function setPrenom(string $prenom): void{
        $this->prenom=$prenom;
    }
    public function setEmail(string $email): void{
        $this->email=$email;
    }
    public function setPassword(string $password): void{
        $this->password=$password;
    }
    public function setPasswordCOonfig(string $passwordCOonfig): void{  
        $this->passwordCOonfig=$passwordCOonfig;
    }

    public function getID(): int{
        return $this->id;
    }
    public function getName(): string{
        return $this->name;
    }
    public function getPrenom(): string{
        return $this->prenom;
    }
    public function getEmail(): string{
        return $this->email;
    }
    public function getPasswordCOonfig(): string{
        return $this->passwordCOonfig;
    }
    public function getRole(): Role{    
        return $this->role;
    }
     



}

?>