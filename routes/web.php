<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConectarController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\FotoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ConectarController::class, 'inicioAnonimo']);

// Acciones Supervisor
Route::get('inicio-supervisor', [UsuarioController::class, 'inicioSupervisor']);
Route::get('crud-categorias', [UsuarioController::class, 'crudCategorias']);
Route::get('crud-usuarios', [UsuarioController::class, 'crudUsuarios']);
Route::get('formulario-crear-usuario', [UsuarioController::class, 'formularioCrearUsuario']);
Route::post('crear-usuario', [UsuarioController::class, 'crearUsuario']);
Route::get('formulario-crear-categoria', [UsuarioController::class, 'formularioCrearCategoria']);
Route::post('crear-categoria', [CategoriaController::class, 'crearCategoria']);
Route::get('formulario-editar-categoria/{id}', [UsuarioController::class, 'formularioEditarCategoria']);
Route::put('editar-categoria/{id}', [CategoriaController::class, 'editarCategoria']);
Route::delete('eliminar-categoria/{id}', [CategoriaController::class, 'eliminarCategoria']);
Route::get('formulario-editar-usuario/{id}', [UsuarioController::class, 'formularioEditarUsuario']);
Route::put('editar-usuario/{id}', [UsuarioController::class, 'editarUsuario']);
Route::get('listar-solicitud-password', [UsuarioController::class, 'listarSolicitudPassword']);
Route::get('restablecer-password/{id}', [UsuarioController::class, 'restablecerPassword']);
Route::get('listar-vendedores', [UsuarioController::class, 'listarVendedores']);
Route::get('historial-vendedor/{id}', [UsuarioController::class, 'historialVendedor']);
Route::get('kardex-producto/{id}', [ProductoController::class, 'kardexProducto']);

// Acciones Encargado
Route::get('inicio-encargado', [UsuarioController::class, 'inicioEncargado']);
Route::post('filtro-producto-encargado', [UsuarioController::class, 'filtroProductoEncargado']);
Route::post('filtro-producto-consignado-encargado', [UsuarioController::class, 'filtroProductoConsignadoEncargado']);
Route::get('ver-no-consignado/{id}', [ProductoController::class, 'verNoConsignado']);
Route::put('consignar-producto/{id}', [ProductoController::class, 'consignarProducto']);
Route::put('no-consignar-producto/{id}', [ProductoController::class, 'noConsignarProducto']);
Route::get('encargado-consignados', [ProductoController::class, 'encargadoConsignados']);
Route::get('ver-consignado/{id}', [ProductoController::class, 'verConsignado']);
Route::get('desconsignar-producto/{id}', [ProductoController::class, 'desconsignarProducto']);
Route::get('restablecer-password-encargado', [UsuarioController::class, 'restablecerPasswordEncargado']);

// Acciones Cliente
Route::get('inicio-cliente', [UsuarioController::class, 'inicioCliente']);
Route::put('comentar-producto/{id}', [ComentarioController::class, 'comentarProducto']);

Route::get('mis-productos', [ProductoController::class, 'misProductos']);
Route::get('ver-producto-vendedor/{id}', [ProductoController::class, 'verProductoVendedor']);
Route::put('responder-comentario/{id}', [ComentarioController::class, 'responderComentario']);
Route::get('formulario-crear-producto', [ProductoController::class, 'formularioCrearProducto']);
Route::post('crear-producto', [ProductoController::class, 'crearProducto']);
Route::get('formulario-editar-producto/{id}', [ProductoController::class, 'formularioEditarProducto']);
Route::put('editar-producto/{id}', [ProductoController::class, 'editarProducto']);
Route::delete('eliminar-producto/{id}', [ProductoController::class, 'eliminarProducto']);

// Contador
Route::get('inicio-contador', [UsuarioController::class, 'inicioContador']);
Route::get('compras-contador', [CompraController::class, 'comprasContador']); 
Route::get('vendedores-contador', [CompraController::class, 'vendedoresContador']);
Route::get('detalle-vendedor/{id}', [UsuarioController::class, 'detalleVendedor']);
Route::put('crear-pago/{id}', [UsuarioController::class, 'crearPago']);
Route::get('editar-pago/{id}', [UsuarioController::class, 'editarPago']);
Route::put('actualizar-pago/{id}', [UsuarioController::class, 'actualizarPago']);
Route::get('ver-pago/{id}', [UsuarioController::class, 'verPago']);
Route::get('pagar-vendedor/{id}', [UsuarioController::class, 'pagarVendedor']);
Route::get('detalle-compra-contador/{id}', [UsuarioController::class, 'detalleCompraContador']);
Route::get('validar-compra/{id}', [UsuarioController::class, 'validarCompra']);

// Conectar
Route::get('login', [ConectarController::class, 'obtenerLogin']);
Route::get('crear-cuenta', [ConectarController::class, 'nuevaCuenta']);
Route::post('crear-cuenta', [ConectarController::class, 'crearCuenta']);
Route::get('obtener-cliente/{emailUsuario}', [ConectarController::class, 'obtenerCliente']);
Route::post('iniciar-sesion', [ConectarController::class, 'iniciarSesion']);
Route::get('formulario-solicitar-password', [ConectarController::class, 'formularioSolicitarPassword']);
Route::post('solicitar-password', [ConectarController::class, 'solicitarPassword']);
Route::get('cerrar-sesion', [ConectarController::class, 'cerrarSesion']);

// Categoría
Route::get('obtener-categorias', [CategoriaController::class, 'obtenerCategorias']);

// Producto
Route::post('buscar-producto', [ProductoController::class, 'buscarProducto']);
Route::get('listar-productos-categoria/{id}', [ProductoController::class, 'listarPorCategoria']);
Route::get('ver-producto/{id}', [ProductoController::class, 'verProducto']);

// Compra
Route::get('mis-compras', [CompraController::class, 'misCompras']);
Route::get('ver-compra/{id}', [CompraController::class, 'verCompra']);
Route::put('formulario-compra/{id}', [CompraController::class, 'formularioCompra']);
Route::get('compra-en-linea/{id}/{cantidad}', [CompraController::class, 'compraEnLinea']);
Route::get('compra-por-banco/{id}/{cantidad}', [CompraController::class, 'compraPorBanco']);
Route::put('calificar-compra/{id}', [CompraController::class, 'calificarCompra']);
Route::put('subir-voucher/{id}', [CompraController::class, 'subirVoucher']);

//Foto
Route::put('guardar-foto/{id}', [FotoController::class, 'guardarFoto']);
Route::delete('eliminar-foto/{id}', [FotoController::class, 'eliminarFoto']);

