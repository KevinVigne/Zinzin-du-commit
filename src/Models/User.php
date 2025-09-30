<?php
    namespace App\Models;

    Class User
    {
        private ?int $id_user;
        private ?string $pseudo;
        private ?string $password;
        private ?string $email;
        private ?string $picture;
        private ?string $description;
        private ?string $creation_date;
        private ?int $id_role;

        public function __construct(?int $id_user,?string $pseudo , ?string $password, ?string $email,?string $picture, ?string $description, ?string $creation_date,?int $id_role)
        {
            $this->id_user = $id_user;
            $this->pseudo = $pseudo ;
            $this->password = $password;
            $this->email = $email;
            $this->picture = $picture;
            $this->description = $description;
            $this->creation_date = $creation_date;
            $this->id_role = $id_role;
        }
        //Set
        public function setIdUser(int $id_user):void
        {
            $this->id_user = $id_user;
        }
        public function setPseudo(string $pseudo):void
        {
            $this->pseudo = $pseudo;
        }
        public function setPassword(string $password):void
        {
            $this->password = $password;
        }
        public function setEmail(string $email):void
        {
            $this->email = $email;
        }
        public function setPicture(string $picture):void
        {
            $this->picture = $picture;
        }
        public function setDescription(string $description):void
        {
            $this->description = $description;
        }
        public function setCreationDate(string $creation_date):void
        {
            $this->creation_date = $creation_date;
        }
         public function setIdRole(int $id_role):void
        {
            $this->id_role = $id_role;
        }
        //Get
        public function getIdUser():int|null|string
        {
            return $this->id_user;
        }
        public function getPseudo():?string
        {
            return $this->pseudo;
        }
        public function getPassword():?string
        {
            return $this->password;
        }
        public function getEmail():?string
        {
            return $this->email;
        }
        public function getPicture(string $picture):?string
        {
            $this->picture = $picture;
            return $this->picture;
        }
        public function getDescription():?string
        {
            return $this->description;
        }
        public function getCreationDate():?string
        {
            $this->creation_date = $creation_date;
            return $this->creation_date;
        }
        public function getIdRole():int|null|string
        {
            return $this->id_role;
        }
        
    }