<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

/**
* @OA\Info(title="API Usuarios", version="1.0")
*
* @OA\Server(url="http://127.0.0.1:8000")
*/

class UserController extends Controller
{
/**
    * @OA\Get(
    *     path="/api/users",
    *     summary="Mostrar usuarios",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */


    public function index()
    {
        return User::all();
    }
}