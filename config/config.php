<?php

namespace App;

class Config
{
    private $config;

    public function __construct()
    {
        $this->config = [
          
            'db' => [
                'host' => 'localhost',
                'name' => 'gestao_servico',
                'user' => 'root',
                'port' => '3306', 
                'password' => '',
            ],
            
            'app' => [
                'name' => 'Gestão de Serviços',
                'debug' => true, 
            ],
        ];
    }

    public function get($key)
    {
        return $this->config[$key] ?? null;
    }
}