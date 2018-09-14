<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{

	protected $food_particular;
	protected $food_department_staff;
	protected $particular_damage;
	protected $particular_issue;

	public function __construct(){
		$this->food_particular = new Particular();
		$this->food_department_staff = new FoodDepartmentStaff();
		$this->particular_damage = new ParticularDamage();
		$this->particular_issue = new ParticularIssue();
	}
	public function index(Request $request){

		switch($request->action){

			case 'get_department_staffs':

			$data['department_id'] = $request->department_id;
			$staff = $this->food_department_staff->getDepartmentalStaffs($data);
			if($staff['success']){
				$staffs = $staff['data'];

				$res['success'] = true;
				$res['staffs'] = $staffs;
			}
			else{
				$res['success'] = false;
				$res['message'] = "No user Assigned on this department";
			}
			return \Response::json($res);  
			break;

			case 'get_particular_unit':

			$data['particular_id'] = $request->particular_id;
			$unit = $this->food_particular->getUnitByParticularId($data);
			return $unit;
			if($unit['success']){
				$res['success'] = true;
				$res['unit'] = $unit['unit'];
			}else{
				$res['success'] = false;
				$res['message'] = "No Unit Assigned on this Particular";
			}
			
			return \Response::json($res);

			break;

			case 'get_particular_details':

			$data['particular_id'] = $request->particular_id;
			$output = $this->food_particular->getParticularById($data);
			if($output['success']){
				$res['success'] = true;
				$res['particular'] =$output;
			}else{
				$res['success'] = false;
				$res['message'] = "No  Particular available";
			}
			return \Response::json($res);
			break;

			case 'save_damage_record':

			$data['particular_id'] =  $request->particular_id;
			$data['issued_by'] = $request->issued_by;
			$data['checked_by'] = $request->checked_by;
			$data['approved_by'] = $request->approved_by;
			$data['remarks'] = $request->remarks;
			$data['expiry_date'] = $request->expiry_date;
			$data['unit'] = $request->unit;
			$data['quantity'] = $request->quantity;
		      //find the quantity
			$quantity = $this->food_particular->getStockQuanity($data);
			if($quantity['success']){
				$output = $quantity['data'];
				$stock_quantity =  $output['quantity'];

				if($data['quantity'] <= $stock_quantity){
					$output = $this->particular_damage->createParticularDamage($data);
					if($output['success']){
						$res['success'] = true;
						$res['message'] = "The records is successfully saved";
					}else{
						$res['success'] = false;
						$res['message'] = "Stock Quantity is not valid please valid the quantity";
					}
					
				}
				
			}else{
				$res['success'] = false;
				$res['message'] = "Opps! something went wrong.";
			}
			return \Response::json($res);
			break;

			case 'save_issue_record':


			$data['particular_id'] = $request->particular_id;
			$data['issued_by'] = $request->issued_by;
			$data['issued_to'] = $request->issued_to;
			$data['issued_date'] = $request->issued_date;
			$data['quantity'] = $request->quantity;

		      //find the quantity
			$quantity = $this->food_particular->getStockQuanity($data);
			if($quantity['success']){
				$output = $quantity['data'];
				$stock_quantity =  $output['quantity'];

				if($data['quantity'] <= $stock_quantity){
					$output = $this->particular_issue->createParticularIssue($data);
					if($output['success']){
						$res['success'] = true;
						$res['message'] = "The records is successfully saved";
					}else{
						$res['success'] = false;
						$res['message'] = "Stock Quantity is not valid please valid the quantity";
					}
					
				}
				
			}else{
				$res['success'] = false;
				$res['message'] = "Opps! something went wrong.";
			}


			return \Response::json($res);
			break;

			case 'suspend_user':

			$data['id'] =  $request->user_id;
			$data['current_status'] = $request->current_status;
			$output = $this->food_department_staff->toogleSuspension($data);
			if($output['success']){
				$res['success'] = true;
				$res['suspend'] = $output['data'];
			}else{
				$res['success'] = false;
				$res['message'] = "Oops!something went wrong, cannot suspend the user";
			}

			return \Response::json($res);
			break;
				      
		}
	}


	public function getParticular(){
		$particular_detail = Particular::all();
		if($particular_detail){

			$table = '<tr><td><select onFocus-"removeError();" class="custom-select select-particular" name="particular_id[]" >'; //particualr names
			$table .= '<option value="" > Select Particular </option>';
			foreach($particular_detail as $particular)
			{
				$table .='<option data-id="'.$particular->id.'" value="'.$particular->id.'">'.$particular->name.'</option>';
			}
            $table .= '</select></td><td><input onFocus-"removeError();" type="number" required="required" class="form-control" name="quantity[]"></td>'; //QTY
            $table .= '<td><input type="text" onFocus-"removeError();" disabled="disabled" class="form-control particular-unit" name="unit[]"></td>'; //unit
            $table .= '<td><input type="number" onFocus-"removeError();" class="form-control" required="required" placeholder="Rate" name="rate[]"></td>'; //rate
            $table .= '<td><input type="number" onFocus-"removeError();" class="form-control" required="required" placeholder="Discount"  name="discount[]"></td>'; //discount
            $table .= '<td> <button type="button"  class="remove-particular-tr"> <i class="fa fa-trash"></i> </button> </td> </tr>'; //actions
            return $table;
        }
	}
	
	// under contruction
	public function getParticularWithRemarField(){
		$particular_detail = Particular::all();
		if($particular_detail){

			$table = '<tr><td><select onFocus-"removeError();" class="custom-select select-particular" name="particular_id[]" >'; //particualr names
			$table .= '<option value="" > Select Particular </option>';
			foreach($particular_detail as $particular)
			{
				$table .='<option data-id="'.$particular->id.'" value="'.$particular->id.'">'.$particular->name.'</option>';
			}
            $table .= '</select></td><td><input onFocus-"removeError();" type="number" required="required" class="form-control" name="quantity[]"></td>'; //QTY
            $table .= '<td><input type="text" onFocus-"removeError();" disabled="disabled" class="form-control particular-unit" name="unit[]"></td>'; //unit
            $table .= '<td><input type="number" onFocus-"removeError();" class="form-control" required="required" placeholder="Rate" name="rate[]"></td>'; //rate
			$table .= '<td><input type="number" onFocus-"removeError();" class="form-control" required="required" placeholder="Discount"  name="discount[]"></td>'; //discount
            $table .= '<td> <button type="button"  class="remove-particular-tr"> <i class="fa fa-trash"></i> </button> </td> </tr>'; //actions
            return $table;
        }
	}


}
