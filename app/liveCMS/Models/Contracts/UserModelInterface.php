<?php

namespace App\liveCMS\Models\Contracts;

interface UserModelInterface
{
    public function getInitial();

    public function roles();

    public function getIsSuperAttribute();

    public function getIsAdminAttribute();

    public function getIsBannedAttribute();
}
