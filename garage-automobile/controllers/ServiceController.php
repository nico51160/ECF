<?php
class ServiceController
{

    public function createService()
    {
        $service = array(
            'nom' => $_POST['nom'],
            'description' => $_POST['description'],
        );
        $result = Service::create($service);
        if ($result === 'ok') {
            header('location: gestion-services');
        } else {
            echo $result;
        }
    }

    public function readService($id)
    {
        $service = Service::read($id);
        return $service;
    }

    public function readAllServices()
    {
        $Services = Service::readAll();
        return $Services;
    }

    public function updateService()
    {
        $service = array(
            'id'          => $_POST['id'],
            'nom'         => $_POST['nom'],
            'description' => $_POST['description'],
        );
        $result = Service::update($service);
        if ($result == 'ok') {
            header('location: gestion-services');
        }
    }

    public function deleteService($id)
    {
        if (isset($id)) {
            $result = Service::delete($id);
            if ($result === 'ok') {
                header('location: gestion-services');
            }
        }
    }
}
