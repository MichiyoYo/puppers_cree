<?php

use Puppers\User;
use Puppers\Pup;

$app->get('/dev', function($req, $res, $args){
	$users = User::all();
	return $res->withStatus(200)->withJson($users);
});

$app->get('/dev/dogs',function($req, $res, $args){
	$pups = Pup::all();
	return $res->withStatus(200)->withJson($pups);
});

$app->get('/dev/dogs/{pup_id}',function($req, $res, $args){
	/*$pups = Pup::find($args['pup_id']);*/
	$pups = Pup::where('age',2)->get();
	return $res->withStatus(200)->withJson($pups);
});

$app->post('/dev/dogs',function($req, $res, $args){
	$post = $req->getParsedBody();
	$dog = Pup::create($post);
	return $res->withStatus(200)->withJson($post);
});

$app->delete('/dev/dogs/{pup_id}',function($req, $res, $args){
	$dog = Pup::destroy($args['pup_id']);
	return $res->withStatus(200)->withJson($post);
});

$app->put('/dev/dogs/edit/{pup_id}/{dog_name}',function($req, $res, $args){
	$dog = Pup::find($args['pup_id']);
	$dog->name = $args["dog_name"];
	$dog->save();
	return $res->withStatus(200)->withJson($dog);
});

?>
