<?php 
namespace App\Http\Controllers\Backend;
  use Illuminate\Http\Request;
  use App\Http\Requests;
  use App\Http\Controllers\Controller;
  use Exception;
  use App\Models\User;
  use App\Models\Profile;
  use App\Models\UserRoles;
  use App\Models\UserAccounts;


  class UserAjaxController extends Controller
  {

    public function index(Request $request){

     switch($request->form_action){
        case 'create_user':
        $res =  $this->registerProcess($request);     
        return \Response::json($res);    
        break;
     }
	}
	
	public function registerProcess(Request $request){
        try{
		$input = $request->all(); 
		$v = \Validator::make($input,[
			'name' => 'required|min:3|max:10|alpha',
			'email' => 'required|email|unique:users,email',
			'password' => 'required',
			'first_name' => 'required|min:3|max:10|alpha',
			'last_name' => 'required|min:3|max:10|alpha',
			'phone' => 'required',
			'mobile' => 'required'
			]);
		if($v->fails()){
			return \Response::json([
				'validation_error' => true,
				'message' => $v->errors(),
			], 422); 
		 	}
		$new_user = User::create(array(
            'name' => $request->name,
			'email' => $request->email,
			'password' => bcrypt($request->password),
			'status' => 'live',
			'type' => '2',
			));

	   Profile::create(array(
			    'user_id' => $new_user->id,
				'first_name' => $request->first_name,
				'last_name' => $request->last_name,
				'phone' => $request->phone,
				'mobile' => $request->mobile,
				));

				UserRoles::create(array(
					'role_id' => 1,
					'user_id' => $new_user->id,
					));

	   UserAccounts::create(array(
					'account_id' => $request->account_id,
					'user_id' => $new_user->id,
					));
	   return \Response::json("Successfully Created");    
				}catch(\Exception $ex){
					throw new Exception($ex->getMessage());
				}





			
		}





 } 
