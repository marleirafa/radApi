<?php

namespace App\Models;

final class TokenObjModel {
    
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $token;
    /**
     * @var string
     */
    private $refresh_token;
    /**
     * @var string
     */
    private $expired_at_date;
    /**
     * @var int
     */
    private $user_id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return self
     */
    public function setToken(string $token): self
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefresh_token(): string
    {
        return $this->refresh_token;
    }

    /**
     * @param string $refresh_token
     * @return self
     */
    public function setRefresh_token(string $refresh_token): self
    {
        $this->refresh_token = $refresh_token;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpired_at_date(): string
    {
        return $this->expired_at_date;
    }

    /**
     * @param string $expired_at
     * @return self
     */
    public function setExpired_at(string $expired_at_date): self
    {
        $this->expired_at_date = $expired_at_date;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     * @return self
     */
    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;
        return $this;
    }    
}
