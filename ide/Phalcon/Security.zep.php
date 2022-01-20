<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon;

use Phalcon\Di\DiInterface;
use Phalcon\Di\AbstractInjectionAware;
use Phalcon\Http\RequestInterface;
use Phalcon\Security\Random;
use Phalcon\Security\Exception;
use Phalcon\Session\ManagerInterface as SessionInterface;

/**
 * This component provides a set of functions to improve the security in Phalcon
 * applications
 *
 * ```php
 * $login    = $this->request->getPost("login");
 * $password = $this->request->getPost("password");
 *
 * $user = Users::findFirstByLogin($login);
 *
 * if ($user) {
 *     if ($this->security->checkHash($password, $user->password)) {
 *         // The password is valid
 *     }
 * }
 * ```
 */
class Security extends AbstractInjectionAware
{

    const CRYPT_DEFAULT = 0;


    const CRYPT_BLOWFISH = 4;


    const CRYPT_BLOWFISH_A = 5;


    const CRYPT_BLOWFISH_X = 6;


    const CRYPT_BLOWFISH_Y = 7;


    const CRYPT_EXT_DES = 2;


    const CRYPT_MD5 = 3;


    const CRYPT_SHA256 = 8;


    const CRYPT_SHA512 = 9;


    const CRYPT_STD_DES = 1;

    /**
     * @var int|null
     */
    protected $defaultHash = null;

    /**
     * @var int
     */
    protected $numberBytes = 16;

    /**
     * @var Random
     */
    protected $random;

    /**
     * @var string|null
     */
    protected $requestToken = null;

    /**
     * @var string|null
     */
    protected $token = null;

    /**
     * @var string|null
     */
    protected $tokenKey = null;

    /**
     * @var string
     */
    protected $tokenKeySessionId = '$PHALCON/CSRF/KEY$';

    /**
     * @var string
     */
    protected $tokenValueSessionId = '$PHALCON/CSRF$';

    /**
     * @var int
     */
    protected $workFactor = 10;

    /**
     * @var SessionInterface|null
     */
    private $localSession = null;

    /**
     * @var RequestInterface|null
     */
    private $localRequest = null;


    /**
     * @return int
     */
    public function getWorkFactor(): int
    {
    }

    /**
     * Phalcon\Security constructor
     *
     * @param \Phalcon\Session\ManagerInterface $session
     * @param \Phalcon\Http\RequestInterface $request
     */
    public function __construct(\Phalcon\Session\ManagerInterface $session = null, \Phalcon\Http\RequestInterface $request = null)
    {
    }

    /**
     * Checks a plain text password and its hash version to check if the
     * password matches
     *
     * @param string $password
     * @param string $passwordHash
     * @param int $maxPassLength
     * @return bool
     */
    public function checkHash(string $password, string $passwordHash, int $maxPassLength = 0): bool
    {
    }

    /**
     * Check if the CSRF token sent in the request is the same that the current
     * in session
     *
     * @param mixed $tokenKey
     * @param mixed $tokenValue
     * @param bool $destroyIfValid
     * @return bool
     */
    public function checkToken($tokenKey = null, $tokenValue = null, bool $destroyIfValid = true): bool
    {
    }

    /**
     * Computes a HMAC
     *
     * @param string $data
     * @param string $key
     * @param string $algo
     * @param bool $raw
     * @return string
     */
    public function computeHmac(string $data, string $key, string $algo, bool $raw = false): string
    {
    }

    /**
     * Removes the value of the CSRF token and key from session
     *
     * @return Security
     */
    public function destroyToken(): Security
    {
    }

    /**
     * Returns the default hash
     *
     * @return int|null
     */
    public function getDefaultHash(): ?int
    {
    }

    /**
     * Returns a secure random number generator instance
     *
     * @return Random
     */
    public function getRandom(): Random
    {
    }

    /**
     * Returns a number of bytes to be generated by the openssl pseudo random
     * generator
     *
     * @return int
     */
    public function getRandomBytes(): int
    {
    }

    /**
     * Returns the value of the CSRF token for the current request.
     *
     * @return string|null
     */
    public function getRequestToken(): ?string
    {
    }

    /**
     * Returns the value of the CSRF token in session
     *
     * @return string|null
     */
    public function getSessionToken(): ?string
    {
    }

    /**
     * Generate a >22-length pseudo random string to be used as salt for
     * passwords
     *
     * @param int $numberBytes
     * @return string
     */
    public function getSaltBytes(int $numberBytes = 0): string
    {
    }

    /**
     * Generates a pseudo random token value to be used as input's value in a
     * CSRF check
     *
     * @return string
     */
    public function getToken(): string
    {
    }

    /**
     * Generates a pseudo random token key to be used as input's name in a CSRF
     * check
     *
     * @return string
     */
    public function getTokenKey(): string
    {
    }

    /**
     * Creates a password hash using bcrypt with a pseudo random salt
     *
     * @param string $password
     * @param int $workFactor
     * @return string
     */
    public function hash(string $password, int $workFactor = 0): string
    {
    }

    /**
     * Checks if a password hash is a valid bcrypt's hash
     *
     * @param string $passwordHash
     * @return bool
     */
    public function isLegacyHash(string $passwordHash): bool
    {
    }

    /**
     * Sets the default hash
     *
     * @param int $defaultHash
     * @return Security
     */
    public function setDefaultHash(int $defaultHash): Security
    {
    }

    /**
     * Sets a number of bytes to be generated by the openssl pseudo random
     * generator
     *
     * @param int $randomBytes
     * @return Security
     */
    public function setRandomBytes(int $randomBytes): Security
    {
    }

    /**
     * Sets the work factor
     *
     * @param int $workFactor
     * @return Security
     */
    public function setWorkFactor(int $workFactor): Security
    {
    }

    /**
     * @return RequestInterface|null
     */
    private function getLocalRequest(): ?RequestInterface
    {
    }

    /**
     * @return SessionInterface|null
     */
    private function getLocalSession(): ?SessionInterface
    {
    }

}
