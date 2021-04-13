<?php


namespace App\Structural\Proxy;


class SecureLicenseServer
{
    private string $userPassword = '12345';

    private ILicenseServer $licenseServer;

    public function __construct(ILicenseServer $licenseServer)
    {
        $this->licenseServer = $licenseServer;
    }

    /**
     * @param string $pass
     * @return bool
     */
    private function checkPass(string $pass)
    {
        return $pass === $this->userPassword;
    }

    // This method realise Proxy access for getting license. This is a control access to method of class 'License server'
    /**
     * @return string
     */
    public function getLicense(string $pass)
    {
        if($this->checkPass($pass))
        {
            return $this->licenseServer->getLicense();
        }
        else {
            return 'You have no access';
        }
    }
}