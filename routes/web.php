<?php

Route::get("/", "alizoncontroller@index");
Route::get("/ofertas", "alizoncontroller@ofertas");
Route::get("/centrodeayuda", "alizoncontroller@centrodeayuda");

Route::get("/cerrarsesion", "alizoncontroller@cerrarsesion");
Route::post("/registro", "alizoncontroller@registro");
Route::post("/sesion", "alizoncontroller@sesion");

Route::get("/gestor", "alizoncontroller@gestor");
Route::get("/gestor/sliderprincipal", "alizoncontroller@gestorsliderprincipal");
Route::post("/gestor/sliderprincipal", "alizoncontroller@gestorsliderprincipalpost");
