<?php

namespace App\CustomForumPolicy;

class ForumPolicy
{
    public function createCategories($user): bool
    {
        return false;
    }

    public function manageCategories($user): bool
    {
        return $this->moveCategories($user) ||
               $this->renameCategories($user);
    }

    public function moveCategories($user): bool
    {
        return false;
    }

    public function renameCategories($user): bool
    {
        return false;
    }

    public function markThreadsAsRead($user): bool
    {
        return true;
    }

    public function viewTrashedThreads($user): bool
    {
        return true;
    }

    public function viewTrashedPosts($user): bool
    {
        return true;
    }
}
