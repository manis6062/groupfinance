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
use Config;


class UserAjaxController extends Controller
{

	public function index(Request $request)
	{

		switch ($request->action) {
			case 'create-user':
				$res = $this->registerProcess($request);
				return \Response::json($res);
				break;
			case 'show_users':
				$res = $this->getAllUsers();
				return \Response::json($res);
				break;
			case 'check-email-exists':
				$res = $this->checkEmailExists($request);
				return \Response::json($res);
				break;
		}
	}

	public function registerProcess(Request $request)
	{
		try {
			$input = $request->all();
			$v = \Validator::make($input, [
				'name' => 'required|min:3|max:10',
				'email' => 'required|email|unique:users,email',
				'password' => 'required',
				'first_name' => 'required|min:3|max:10|alpha',
				'last_name' => 'required|min:3|max:10|alpha',
				'phone' => 'required',
				'mobile' => 'required'
			]);
			if ($v->fails()) {
				return json_encode(array(
					"error" => true,
					"code" => Config::get('constants.validation_status_code'),
					"message" => $v->errors()
				));
			}
			$user = User::create(array(
				'name' => $request->name,
				'email' => $request->email,
				'password' => bcrypt($request->password),
				'status' => 'live',
				'type' => '2',
			));

			Profile::create(array(
				'user_id' => $user->id,
				'first_name' => $request->first_name,
				'last_name' => $request->last_name,
				'phone' => $request->phone,
				'mobile' => $request->mobile,
			));

			UserRoles::create(array(
				'role_id' => 1,
				'user_id' => $user->id,
			));

			UserAccounts::create(array(
				'account_id' => $request->account_id,
				'user_id' => $user->id,
			));

		//get all user details
			$user_details = User::getUserDetails($user->id);
			$page = view("backend.user.ajaxView", compact('user_details'))->render();
			return json_encode(array(
				"error" => false,
				"statuscode" => 200,
				"msg " => "Successfully Inserted",
				"page" => $page
			));

		} catch (\Exception $ex) {
			throw new Exception($ex->getMessage());
		}

	}



	public function getAllUsers()
	{
		try {
			$input = $request->all();
			$users = User::all();
			if ($users) {
				return json_encode(array(
					"error" => false,
					"statuscode" => 200,
					"message " => "insert_success",
					"data" => $users
				));
			} else {
				return false;
			}


		} catch (\Exception $ex) {
			throw new Exception($ex->getMessage());
		}






	}


	public function checkEmailExists(Request $request)
	{

		if (User::where('email', '=', $request->email)->count() > 0) {
			return false;
		}
		return true;


	}





} 
