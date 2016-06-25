<?php
namespace ObviousORM;

interface Repository
{
    public function get();

    public function createObjectFromData($d);

}
