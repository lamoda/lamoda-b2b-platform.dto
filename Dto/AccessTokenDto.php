<?php

namespace LeosPartnerDto\Dto;

class AccessTokenDto
{
     /** @var string */
    public $accessToken;

    /** @var string */
    public $refreshToken;

    /** @var string */
    public $scope;

    /** @var string */
    public $tokenType;

    /** @var \DateTime */
    public $expiredAt;

    /**
     * @param string $accessToken
     * @param int    $expiresIn
     * @param string $refreshToken
     * @param string $scope
     * @param string $tokenType bearer etc.
     */
    public function __construct(
        $accessToken,
        $expiresIn,
        $refreshToken,
        $scope,
        $tokenType
    ) {
        $this->accessToken  = $accessToken;
        $this->expiredAt    = $expiresIn;
        $this->refreshToken = $refreshToken;
        $this->scope        = $scope;
        $this->tokenType    = $tokenType;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param string $accessToken
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * @param string $refreshToken
     */
    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;
    }

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param string $scope
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
    }

    /**
     * @return string
     */
    public function getTokenType()
    {
        return $this->tokenType;
    }

    /**
     * @param string $tokenType
     */
    public function setTokenType($tokenType)
    {
        $this->tokenType = $tokenType;
    }

    /**
     * @return \DateTime
     */
    public function getExpiredAt()
    {
        return $this->expiredAt;
    }

    /**
     * @param \DateTime $expiredAt
     */
    public function setExpiredAt($expiredAt)
    {
        $this->expiredAt = $expiredAt;
    }

    /**
     * @return string
     */
    public function getAuthString()
    {
        return ucfirst($this->getTokenType()) . ' ' . $this->getAccessToken();
    }

}
