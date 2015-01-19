<?php
namespace MyModule\Service;

use Zend\Authentication\Storage\Session;
use Zend\Authentication\Storage\StorageInterface;

class SessionService
{

    /**
     * @var \Zend\Authentication\Storage\Session
     */
    protected $storage;

    /**
     * @param StorageInterface $storage
     */
    function __construct(
        StorageInterface $storage = null
    )
    {
        $this->storage = $storage ? : new Session('MyStorageName');
    }

    /**
     * @param $dataName
     * @param $dataValue
     */
    public function setData($dataName, $dataValue)
    {
        $currentData = $this->getData();

        $newData = [
            $dataName => $dataValue
        ];

        /**
         * Note the latter array overwrites the former
         */
        $appendedData = array_merge( $currentData , $newData );

        $this->updateSessionData($appendedData);

    }

    /**
     * @return bool|mixed
     */
    public function getData()
    {
        if ($this->storage->isEmpty()) {
            return [];
        }

        return $this->storage->read();

    }

    /**
     * @param $newData
     */
    public function updateSessionData($newData)
    {

        $this->storage->write($newData);
    }

    /**
     * @param $key
     * @return bool
     */
    public function getDataValue($key)
    {
        $data = $this->getData();

        if (isset($data[$key]))
        {
            return $data[$key];
        }

        return false;
    }

}
