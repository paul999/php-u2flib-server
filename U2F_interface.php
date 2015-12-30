<?php
/**
 * Created by PhpStorm.
 * User: sohierp
 * Date: 30-12-2015
 * Time: 10:38
 */
namespace paul999\u2f;

use paul999\u2f\Exceptions\U2fError;

interface U2F_interface
{
    /**
     * Called to get a registration request to send to a user.
     * Returns an array of one registration request and a array of sign requests.
     *
     * @param array $registrations List of current registrations for this
     * user, to prevent the user from registering the same authenticator several
     * times.
     * @return array An array of two elements, the first containing a
     * RegisterRequest the second being an array of SignRequest
     * @throws U2fError
     */
    public function getRegisterData(array $registrations = array());

    /**
     * Called to verify and unpack a registration message.
     *
     * @param RegisterRequest $request this is a reply to
     * @param object $response response from a user
     * @param bool $includeCert set to true if the attestation certificate should be
     * included in the returned Registration object
     * @return Registration
     * @throws U2fError
     */
    public function doRegister($request, $response, $includeCert = true);

    /**
     * Called to get an authentication request.
     *
     * @param array $registrations An array of the registrations to create authentication requests for.
     * @return array An array of SignRequest
     * @throws U2fError
     */
    public function getAuthenticateData(array $registrations);

    /**
     * Called to verify an authentication response
     *
     * @param array $requests An array of outstanding authentication requests
     * @param array $registrations An array of current registrations
     * @param object $response A response from the authenticator
     * @return Registration
     * @throws U2fError
     *
     * The Registration object returned on success contains an updated counter
     * that should be saved for future authentications.
     * If the Error returned is ERR_COUNTER_TOO_LOW this is an indication of
     * token cloning or similar and appropriate action should be taken.
     */
    public function doAuthenticate(array $requests, array $registrations, $response);

    const U2F_VERSION = "U2F_V2";

    /**
     * Public key Length
     */
    const PUBKEY_LEN = 65;
}