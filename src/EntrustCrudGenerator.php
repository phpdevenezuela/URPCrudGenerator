<?php
namespace oteroweb\EntrustCrudGenerator;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
/**
 * Class EntrustCrudGenerator
 */
class EntrustCrudGenerator {
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
// para cargar variables del archivo config/EntrustCrudGenerator 
		// $this->private_key = config('EntrustCrudGenerator.var');
    }
	
    /**
     * get the balance for the wallet
     *
     * @return array
     */
	public function NewBalance() 	{

		echo "function de prueba";
	}

	

}