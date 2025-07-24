<?php

use App\Domain\Repositories\CamperRepositoryInterface;
use App\Infrastructure\repositories\EloquentCamperRepository;
use DI\Container; 

// Clase a reemplazar y valor creado a recibir
$container = new Container();

// El parametro de CamperController es CamperRepositoryInterface, pero recibe las instrucciones de EloquentCamperRepository
$container->set(CamperRepositoryInterface::class, function() {
    return new EloquentCamperRepository();
});

return $container;