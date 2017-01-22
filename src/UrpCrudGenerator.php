<?php 
namespace oteroweb\UrpCrudGenerator;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
/**
 * Class UrpCrudGenerator
 */
class UrpCrudGenerator {
    /**
     * @var string
     */
    protected $public_key;
	
    /**
     * @var string
     */
    protected $private_key;
	
	
    public function __construct()
	{ 
// para cargar variables del archivo config/UrpCrudGenerator 
		// $this->private_key = config('UrpCrudGenerator.var');
    }
	
    /**
     * get the balance for the wallet
     *
     * @return array
     */
	public function test() 	{

		echo "function de prueba";
	}

	

}