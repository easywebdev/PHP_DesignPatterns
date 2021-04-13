<?php


namespace App\Structural\Proxy;


class LicenseServer implements ILicenseServer
{
    private string $license = 'License#';

    public function getLicense()
    {
        return md5($this->license . random_bytes(12));
    }
}