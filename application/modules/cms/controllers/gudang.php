<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * User management controller
 * 
 * @package App
 * @category Controller
 * @author Jeff
 */
class Gudang extends Admin_Controller 
{
	/**
	 * Constructor
	 */
    function __construct()
    {
        parent::__construct();
		$this->ci =& get_instance();		
	}	
	function index()
	{
		$this->template->build('gudang_view/index');
	}
	function load(){
		$edit	= site_url('inventory/gudang/form/$1');	
		$link	= '	
					<a title="Edit" class="btn btn-warning btn-m" href="'.$edit.'"><i class="fa fa-pencil"></i></a> 
					<button title="Delete" class="btn btn-danger btn-m" data-id="$1" onclick="del(this);"><i class="fa fa-trash-o"></i></button>
				  ';		
		$this->datatables->select('
			a.id as id,
			a.code as code,
			a.name as name,
			a.active as active,
			a.descr as descr,
			b.name as parent_id,
			');		
		
		$this->datatables->from('tr_wherehouse a');
		$this->datatables->join('tr_wherehouse b','b.id = a.parent_id','left');
		$this->datatables->add_column('show',$link, 'id');		
		echo  $this->datatables->generate();
	}
	/**
	 * Form Add and Update. 
	 */
	function form($id = null)
	{		
		if(!isset($id)){
			$this->data['hr_div']	= $this->mgeneral->GetWhere(array('active'=>1),"tr_wherehouse");
			$this->template->build('gudang_view/add');
		}else{
			$this->data['hr_div']	= $this->mgeneral->GetWhere(array('active'=>1),"tr_wherehouse");
			$this->data['edit']	= $this->mgeneral->GetRow(array('id'=>$id),"tr_wherehouse");
			$this->template->build('gudang_view/edit');
		}
	}
	/**
	 * Function execute add, delete, update, active.
	 * Response json object
	 */
	function execute($method = '',$id = '')
	{		
		$result = array();
		if($method == "update")
		{
			$data =  array(
				"code"		=> $this->input->post('code'),
				"name"		=> $this->input->post('name'),
				"descr"		=> $this->input->post('descr'),
				"active"	=> $this->input->post('active'),			
				"parent_id"	=> $this->input->post('parent_id')
			);		
			//print_r($data);
			//print_r($_POST);
			$this->mgeneral->Update(array('id'=>$id),$data,"tr_wherehouse");			
			$result['code'] 	= "01";
			$result['message']	= "Update Sukses";
		}
		else if ($method == "save")
		{			
			$data =  array(
				"code"		=> $this->input->post('code'),
				"name"		=> $this->input->post('name'),
				"descr"		=> $this->input->post('descr'),
				"active"	=> $this->input->post('active'),			
				"parent_id"	=> $this->input->post('parent_id')			
			);
			$this->mgeneral->save($data,"tr_wherehouse");
			$result['code'] 	= "02";
			$result['message']	= "Save Sukses";
		}
		else if ($method=="delete")
		{
			$var = $this->input->post('data_id');
			$this->mgeneral->delete(array('id'=>$var),"tr_wherehouse");
			$result['code'] 	= "03";
			$result['message']	= "Delete Sukses";
		}
		else if ($method == "active")
		{
			$i= $this->input->post('id');
			$data =  array(
				"active"	=> $this->input->post('active')				
			);			
			$this->mgeneral->update(array('id'=>$i),$data,"tr_wherehouse");
			$result['code'] 	= "04";
			$result['message']	= "Active";
		}
		else
		{
			$result['code'] 	= "05";
			$result['message']	= "Unmethod";
		}
		echo json_encode($result);
	}
	
}