<?php

require_once "vendor/autoload.php";

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as Handler;
use Slim\Factory\AppFactory;

$app = AppFactory::create();

$app->get('/', function(Request $req, Response $res, array $args){
    $res->getBody()->write(json_encode(["mensaje" =>"Hola desde Slim"]));
    return $res;
});

//middleware
//Global -> aplicado a todas las rutas
$app->add(function(Request $req,Handler $than): Response{
    $response = $than->handle($req);
    return $response->withHeader('content-type', 'application/json');
});



//Get /campers
//POST /campers
//PUT /campers/{id}
//PATCH /campers/{id}
//DELETE /campers/{id}

$app->get("/campers/{name}/{skill}", function(Request $req, Response $res, array $args){
    $name = $args["name"];
    $skill = $args["skill"]; 
    $res->getBody()->write(json_encode([$name,$skill]));
    return $res;
})->$app->add(function(Request $req,Handler $than): Response{
    $response = $than->handle($req);
    return $response->withHeader('X-Powered-by', 'Slim Framework');
});;

//get
$app->get("/campers", function(Request $req, Response $res, array $args){
    $params = $req->getQueryparams();
    $name = $params["name"] ?? "no hay nombre";
    $skill = $params["skill"] ?? "no hay skill";
    $res->getBody()->write(json_encode([$name,  $skill]));
    return $res;
});

//post
$app->get("/campers", function(Request $req, Response $res, array $args){
    
    $data = $req->getParsedBody();
    var_dump($data['name'] ?? ["no encontre"]);
    $res->withStatus(201);
    $res->getBody()->write(json_encode($data));
    return $res;

});




$app->run();