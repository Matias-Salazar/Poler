<?php

    abstract class RepoUser
    {
        protected $repo;

        public function getRepo (User $user) {
            return $user;
        }
        abstract public function save(User $user);
        abstract public function getUserByEmail($email);
    }