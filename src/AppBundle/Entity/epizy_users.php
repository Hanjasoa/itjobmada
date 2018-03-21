<?php

namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * epizy_users
 */
class epizy_users
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $seoname;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var int
     */
    private $mdpChange;

    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $status;

    /**
     * @var int
     */
    private $idRole;

    /**
     * @var int
     */
    private $idLocation;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $lastModified;

    /**
     * @var int
     */
    private $logins;

    /**
     * @var \DateTime
     */
    private $lastLogin;

    /**
     * @var int
     */
    private $lastIp;

    /**
     * @var string
     */
    private $userAgent;

    /**
     * @var string
     */
    private $token;

    /**
     * @var \DateTime
     */
    private $tokenCreated;

    /**
     * @var \DateTime
     */
    private $tokenExpires;

    /**
     * @var string
     */
    private $apiToken;

    /**
     * @var string
     */
    private $hybridauthProviderName;

    /**
     * @var string
     */
    private $hybridauthProviderUid;

    /**
     * @var int
     */
    private $subscriber;

    /**
     * @var float
     */
    private $rate;

    /**
     * @var int
     */
    private $hasImage;

    /**
     * @var int
     */
    private $failedAttempts;

    /**
     * @var \DateTime
     */
    private $notificationDate;

    /**
     * @var string
     */
    private $deviceId;

    /**
     * @var string
     */
    private $stripeUserId;

    /**
     * @var string
     */
    private $googleAuthentificator;
     
    private $demandeur_emploi;

    public function __construct()
    {
        $this->demandeur_emploi = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return epizy_users
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set seoname
     *
     * @param string $seoname
     *
     * @return epizy_users
     */
    public function setSeoname($seoname)
    {
        $this->seoname = $seoname;

        return $this;
    }

    /**
     * Get seoname
     *
     * @return string
     */
    public function getSeoname()
    {
        return $this->seoname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return epizy_users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return epizy_users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set mdpChange
     *
     * @param integer $mdpChange
     *
     * @return epizy_users
     */
    public function setMdpChange($mdpChange)
    {
        $this->mdpChange = $mdpChange;

        return $this;
    }

    /**
     * Get mdpChange
     *
     * @return int
     */
    public function getMdpChange()
    {
        return $this->mdpChange;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return epizy_users
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return epizy_users
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set idRole
     *
     * @param integer $idRole
     *
     * @return epizy_users
     */
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;

        return $this;
    }

    /**
     * Get idRole
     *
     * @return int
     */
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * Set idLocation
     *
     * @param integer $idLocation
     *
     * @return epizy_users
     */
    public function setIdLocation($idLocation)
    {
        $this->idLocation = $idLocation;

        return $this;
    }

    /**
     * Get idLocation
     *
     * @return int
     */
    public function getIdLocation()
    {
        return $this->idLocation;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return epizy_users
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set lastModified
     *
     * @param \DateTime $lastModified
     *
     * @return epizy_users
     */
    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * Get lastModified
     *
     * @return \DateTime
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * Set logins
     *
     * @param integer $logins
     *
     * @return epizy_users
     */
    public function setLogins($logins)
    {
        $this->logins = $logins;

        return $this;
    }

    /**
     * Get logins
     *
     * @return int
     */
    public function getLogins()
    {
        return $this->logins;
    }

    /**
     * Set lastLogin
     *
     * @param \DateTime $lastLogin
     *
     * @return epizy_users
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return \DateTime
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set lastIp
     *
     * @param integer $lastIp
     *
     * @return epizy_users
     */
    public function setLastIp($lastIp)
    {
        $this->lastIp = $lastIp;

        return $this;
    }

    /**
     * Get lastIp
     *
     * @return int
     */
    public function getLastIp()
    {
        return $this->lastIp;
    }

    /**
     * Set userAgent
     *
     * @param string $userAgent
     *
     * @return epizy_users
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * Get userAgent
     *
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return epizy_users
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set tokenCreated
     *
     * @param \DateTime $tokenCreated
     *
     * @return epizy_users
     */
    public function setTokenCreated($tokenCreated)
    {
        $this->tokenCreated = $tokenCreated;

        return $this;
    }

    /**
     * Get tokenCreated
     *
     * @return \DateTime
     */
    public function getTokenCreated()
    {
        return $this->tokenCreated;
    }

    /**
     * Set tokenExpires
     *
     * @param \DateTime $tokenExpires
     *
     * @return epizy_users
     */
    public function setTokenExpires($tokenExpires)
    {
        $this->tokenExpires = $tokenExpires;

        return $this;
    }

    /**
     * Get tokenExpires
     *
     * @return \DateTime
     */
    public function getTokenExpires()
    {
        return $this->tokenExpires;
    }

    /**
     * Set apiToken
     *
     * @param string $apiToken
     *
     * @return epizy_users
     */
    public function setApiToken($apiToken)
    {
        $this->apiToken = $apiToken;

        return $this;
    }

    /**
     * Get apiToken
     *
     * @return string
     */
    public function getApiToken()
    {
        return $this->apiToken;
    }

    /**
     * Set hybridauthProviderName
     *
     * @param string $hybridauthProviderName
     *
     * @return epizy_users
     */
    public function setHybridauthProviderName($hybridauthProviderName)
    {
        $this->hybridauthProviderName = $hybridauthProviderName;

        return $this;
    }

    /**
     * Get hybridauthProviderName
     *
     * @return string
     */
    public function getHybridauthProviderName()
    {
        return $this->hybridauthProviderName;
    }

    /**
     * Set hybridauthProviderUid
     *
     * @param string $hybridauthProviderUid
     *
     * @return epizy_users
     */
    public function setHybridauthProviderUid($hybridauthProviderUid)
    {
        $this->hybridauthProviderUid = $hybridauthProviderUid;

        return $this;
    }

    /**
     * Get hybridauthProviderUid
     *
     * @return string
     */
    public function getHybridauthProviderUid()
    {
        return $this->hybridauthProviderUid;
    }

    /**
     * Set subscriber
     *
     * @param integer $subscriber
     *
     * @return epizy_users
     */
    public function setSubscriber($subscriber)
    {
        $this->subscriber = $subscriber;

        return $this;
    }

    /**
     * Get subscriber
     *
     * @return int
     */
    public function getSubscriber()
    {
        return $this->subscriber;
    }

    /**
     * Set rate
     *
     * @param float $rate
     *
     * @return epizy_users
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set hasImage
     *
     * @param integer $hasImage
     *
     * @return epizy_users
     */
    public function setHasImage($hasImage)
    {
        $this->hasImage = $hasImage;

        return $this;
    }

    /**
     * Get hasImage
     *
     * @return int
     */
    public function getHasImage()
    {
        return $this->hasImage;
    }

    /**
     * Set failedAttempts
     *
     * @param integer $failedAttempts
     *
     * @return epizy_users
     */
    public function setFailedAttempts($failedAttempts)
    {
        $this->failedAttempts = $failedAttempts;

        return $this;
    }

    /**
     * Get failedAttempts
     *
     * @return int
     */
    public function getFailedAttempts()
    {
        return $this->failedAttempts;
    }

    /**
     * Set notificationDate
     *
     * @param \DateTime $notificationDate
     *
     * @return epizy_users
     */
    public function setNotificationDate($notificationDate)
    {
        $this->notificationDate = $notificationDate;

        return $this;
    }

    /**
     * Get notificationDate
     *
     * @return \DateTime
     */
    public function getNotificationDate()
    {
        return $this->notificationDate;
    }

    /**
     * Set deviceId
     *
     * @param string $deviceId
     *
     * @return epizy_users
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;

        return $this;
    }

    /**
     * Get deviceId
     *
     * @return string
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * Set stripeUserId
     *
     * @param string $stripeUserId
     *
     * @return epizy_users
     */
    public function setStripeUserId($stripeUserId)
    {
        $this->stripeUserId = $stripeUserId;

        return $this;
    }

    /**
     * Get stripeUserId
     *
     * @return string
     */
    public function getStripeUserId()
    {
        return $this->stripeUserId;
    }

    /**
     * Set googleAuthentificator
     *
     * @param string $googleAuthentificator
     *
     * @return epizy_users
     */
    public function setGoogleAuthentificator($googleAuthentificator)
    {
        $this->googleAuthentificator = $googleAuthentificator;

        return $this;
    }

    /**
     * Get googleAuthentificator
     *
     * @return string
     */
    public function getGoogleAuthentificator()
    {
        return $this->googleAuthentificator;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $demandeur_emplois;

    /**
     * Add demandeurEmplois
     *
     * @param \AdminBundle\Entity\epizy_demandeur_emplois $demandeurEmplois
     *
     * @return epizy_users
     */
    public function addDemandeurEmplois(\AdminBundle\Entity\epizy_demandeur_emplois $demandeurEmplois)
    {
        $this->demandeur_emplois[] = $demandeurEmplois;

        return $this;
    }

    /**
     * Remove demandeurEmplois
     *
     * @param \AdminBundle\Entity\epizy_demandeur_emplois $demandeurEmplois
     */
    public function removeDemandeurEmplois(\AdminBundle\Entity\epizy_demandeur_emplois $demandeurEmplois)
    {
        $this->demandeur_emplois->removeElement($demandeurEmplois);
    }

    /**
     * Get demandeurEmplois
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDemandeurEmplois()
    {
        return $this->demandeur_emplois;
    }
}
