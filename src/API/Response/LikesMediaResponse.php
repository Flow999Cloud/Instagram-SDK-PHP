<?php

namespace Instagram\API\Response;

class LikesMediaResponse extends BaseResponse {

    /**
     * Liker
     * @var Model\User[]
     */
    protected $users;

    /**
     * Liker Count
     * @var int
     */
    protected $user_count;

    /**
     * @param int $user_count
     */
    public function setUserCount($user_count)
    {
        $this->user_count = $user_count;
    }

    /**
     * @param Model\User[] $users
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param Model\User[] $users
     */
    public function setUsers($users)
    {
        $this->users = $users;
    }

}