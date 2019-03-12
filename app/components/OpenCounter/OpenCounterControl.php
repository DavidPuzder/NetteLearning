<?php

namespace App\Components\OpenCounter\OpenCounterControl;

use App\Model\OpenCounterManager;
use Nette\Application\UI;

interface OpenCounterControlFactory
{
    /**
     * @return OpenCounterControl
     */
    public function create();
}

class OpenCounterControl extends UI\Control
{

    /** @var OpenCounterManager */
    private $openCounterManager;

    public function __construct
    (
        OpenCounterManager $openCounterManager
    )
    {
        $this->openCounterManager = $openCounterManager;
    }

    public function render()
    {
        $params = [];
        $params['presenter'] = $this->presenter->getName();
        $params['action'] = $this->presenter->getAction();
        $params = implode(":", $params);

        $data = [];

        $data['user_id'] = $this->presenter->getUser()->id ? $this->presenter->getUser()->id : '0';
        $data['user_ip'] = $this->getUserIp();
        $data['user_location'] = $this->getUserLocation();
        $data['params'] = $params;

        $this->openCounterManager->insertOpen($data);
    }

    public function getUserLocation()
    {
        $userIp = $this->getUserIp();
        if ($userIp != 'localhost') {
            $userLocation = file_get_contents("http://ipinfo.io/$userIp/geo");
            $userLocation = json_decode($userLocation ,true);
            return $userLocation['country'] . ';' . $userLocation['region'] . ';' . $userLocation['loc'];
        }
        else {
            return 'localhost';
        }
    }

    public function getUserIp()
    {
        $ip = $this->presenter->getHttpRequest()->getRemoteAddress();
        if ($ip == '::1') {
            return 'localhost';
        }
        else {
            return $ip;
        }
    }
}