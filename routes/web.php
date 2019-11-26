<?php

Route::get("/", "alizoncontroller@index");
Route::get("/productos", "alizoncontroller@productos");
Route::get("/producto/{id}", "alizoncontroller@productoid");
Route::get("/ofertas", "alizoncontroller@ofertas");
Route::get("/centrodeayuda", "alizoncontroller@centrodeayuda");

Route::get("/cerrarsesion", "alizoncontroller@cerrarsesion");
Route::post("/registro", "alizoncontroller@registro");
Route::post("/sesion", "alizoncontroller@sesion");

Route::get("/gestor", "alizoncontroller@gestor");
Route::get("/gestor/calificaciones", "alizoncontroller@gestorcalificaciones");
Route::post("/gestor/calificaciones", "alizoncontroller@gestorcalificacionespost");
Route::get("/gestor/categorias", "alizoncontroller@gestorcategorias");
Route::post("/gestor/categorias", "alizoncontroller@gestorcategoriaspost");
Route::get("/gestor/subcategorias", "alizoncontroller@gestorsubcategorias");
Route::post("/gestor/subcategorias", "alizoncontroller@gestorsubcategoriaspost");
Route::get("/gestor/marcas", "alizoncontroller@gestormarcas");
Route::post("/gestor/marcas", "alizoncontroller@gestormarcaspost");
Route::get("/gestor/ofertas", "alizoncontroller@gestorofertas");
Route::post("/gestor/ofertas", "alizoncontroller@gestorofertaspost");
Route::get("/gestor/productos", "alizoncontroller@gestorproductos");
Route::post("/gestor/productos", "alizoncontroller@gestorproductospost");
Route::get("/gestor/sliderprincipal", "alizoncontroller@gestorsliderprincipal");
Route::post("/gestor/sliderprincipal", "alizoncontroller@gestorsliderprincipalpost");
