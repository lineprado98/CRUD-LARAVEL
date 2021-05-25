<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servico;


class ServicoController extends Controller
{


    public function create(Request $request) {

            try {
                    error_log($request);
                $user = Servico::create([
                    'titulo' => $request->titulo,
                    'descricao'=>$request->descricao,
                    'valor' => $request->valor,
                    'id_categoria' => $request->id_categoria,
                    'id_user'=>  $request->id_user
                    ]);

                if($user) {
                    return response()->json(['message'=>'Servico anúncidado com sucessso!','status'=> 200]);
                }
                else {
                    return response()->json(['message'=>'Falha, seu anúncio não foi salvo!','status'=> 422]);
                }

            } catch(Throwable $e) {
                report($e);

                return false;
            }
    }

       public function list(Request $request) {

            try {
             $listServicos = Servico::with('categorias')->get();
error_log('---');
                if($listServicos) {
                    return response()->json(['listServicos'=>$listServicos]);
                }
                else {
                    return response()->json(['listServicos'=>[],'message'=>'Não há serviços']);
                }

            } catch(Throwable $e) {
                report($e);

                return false;
            }
    }



}
