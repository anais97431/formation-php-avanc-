<?php

namespace app;

class ServiceContainer
{
    private $serviceInstances = [];
    private $config = [];

    public function __construct()
    {
        $this->loadConfig();
    }

    private  function loadConfig()
    {
        $this->config = [
            'mailer' => [
                'factory'=> 'app\\MailerFactory::create',
                'dependencies' => [],
                'parameters' => [
                    'smtp' => 'mail.dawan.fr'
                ],
            ],
            'newsletter' =>[
                'factory' => 'app\\NewsletterFactory::create',
                'dependencies' => [
                    'mailer',
                ],
                'parameters' => [],
            ] , 
          ];
    }

    public function get(string $serviceName)
    {
        if (!key_exists($serviceName, $this->serviceInstances)){
            if (!key_exists($serviceName, $this->config)){ 
                throw new \Exception('Nom de service inconnu');
            }
            $this->serviceInstances[$serviceName] = $this->callFactory($serviceName);
        }

        return $this->serviceInstances[$serviceName];
    }

    public function callFactory(string $serviceName)
    {
        $config = $this->config[$serviceName];
        list($class, $method) = explode('::', $config['factory']);

        foreach($config['dependencies'] as $dependency){
            $this->get($dependency);
        }

        $dependentInstancies = array_intersect_key(
            $this->serviceInstances,
            array_flip($config['dependencies'])

        );

        $arguments = array_merge($dependentInstancies, $config['parameters']);
        
        return call_user_func_array([new $class(), $method], $arguments);
    }
}