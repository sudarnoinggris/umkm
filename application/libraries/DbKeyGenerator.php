<?php
if (! defined ( 'BASEPATH' )) {
	defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
}
class DbKeyGenerator {
	private $CI;
	public function __construct() {
		$this->CI = & get_instance ();
	}
	public function getNewKey($tableName, $field, $prefix, $digitLen = 4, $pad = "0") {
		$dateFormat = date ( 'ymd' );
		$keySearch = $prefix . $dateFormat;
		$suffixIndex = strlen ( $keySearch ) + 1;
		$this->CI->db->select_max ( "CAST(SUBSTRING($field, $suffixIndex) as signed)", 'code' );
		$this->CI->db->like ( $field, $keySearch );
		$this->CI->db->limit ( 1 );
		$rowResult = $this->CI->db->get ( $tableName )->row_array ();
		$codeField = $rowResult ['code'];
		$suffixValue = str_pad ( $codeField + 1, $digitLen, $pad, STR_PAD_LEFT );
		$resultCode = $keySearch . $suffixValue;
		return $resultCode;
	}
}
