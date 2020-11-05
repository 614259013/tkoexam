<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Train extends CI_Model {
		function __construct(){
            parent::__construct();
        }

        function train_insert($train_data){
			$this->db->insert('train_id',$train_data);
        }
        function ton_insert($ton_data){
			$this->db->insert('t_ton',$ton_data);
		} 
		function huyrach_insert($huyrach_data){
			$this->db->insert('t_huyrach',$huyrach_data);
		}
		function pray_insert($pray_data){
			$this->db->insert('t_pray',$pray_data);
		}
		
		function select_all(){
			$this->db->select('*');
			$this->db->from('train_id');
			$this->db->join('t_ton', 't_ton.ton_id = train_id.ton_id', 'left');
			$this->db->join('t_huyrach', 't_huyrach.huyrach_id = train_id.huyrach_id', 'left');
			$this->db->join('t_pray', 't_pray.pray_id = train_id.pray_id', 'left');
			$this->db->order_by('t_pray.timeOut','ASC');
			$query = $this->db->get();
			return $query->result();
			}
    }