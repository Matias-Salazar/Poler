<?php
    abstract class  Validation {
        abstract public function validate(Array $data, RepoUser $repo);
    }