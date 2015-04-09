<?php
/**
*The Grade Point--GP_Calc. 
*Description: Calculator for ease of usage by a geek for geeks and nerds.
*
*
* @author Akinsola Ademola, A. http://geekerbyte.blogspot.com (07062671144: triplekinsola@gmail.com)
*Powerfully powered in my mummy's kitcken.
*/
?>
<?php
/**
* The form class
*/

class Form{
	private $param;
	private $error;
	private $comment;
	function __construct(){
		if (isset($_POST['var'])) {
			$this->param = trim($_POST['var']);
			if (empty($this->param) || $this->param < 1) {
				$this->error = urlencode("<h4>Ooops!</h4>That was tested and not accepted.<br />Please fill out appropriately.");
				header('Location: index.php?msg=' . $this->error);
			}elseif (is_numeric($this->param) && $this->param > 0) {
				$con = "We will be Calculating <b>";
				$conner = " Please make sure you select all units with appropriate grade for easy calculations.";
				if ($this->param == 1) {
					$this->comment = $con.$this->param.""." course.</b> {$conner}";
				}else{
					$this->comment = $con.$this->param.""." courses.</b>{$conner}";
				}
				$this->gradePoint();
				echo $this->comment;
				echo $this->planner($this->param);
				echo $this->t_cos();
				echo $this->action();
			}
		}
	}
	private function s_select($a, $b, $c, $d, $e, $f, $aa){
		$output = "<select id=\"selectError\" data-rel=\"chosen\"  name = \"$aa\" required= 'required'>";
		$output .= "<option value =\"\">--select--</option>";
		$output .= "<option value =\"1\">$a</option>";
		$output .= "<option value =\"2\">$b</option>";
		$output .= "<option value =\"3\">$c</option>";
		$output .= "<option value =\"4\">$d</option>";
		$output .= "<option value =\"5\">$e</option>";
		$output .= "<option value =\"6\">$f</option>";
		$output .= "</select>";
		return $output;
	}
	public function gradePoint($value='5'){
		$out = "<form action = 'index.php?samp=make' method = 'POST'>Be reminded that the <b>Total Grade Point</b> is defaultly <b>{$value}</b>. Please fill out here: ";
		$out .= "<input type = 'text' name ='tgp' placeholder = ' your TGP...' disabled /> if yours is different.<br />";
		echo $out;
	}
	private function t_cos($value=''){
		if (isset($_POST['var'])) {
			return "<input type='hidden' name='tnoc' value="."'".$_POST['var']."' />";
		}
	}
	private function action($value=''){
		$out = "<a href='index.php'><span class=\"btn btn-primary\">Cancel this calculation!</span></a>";
		$out .= "<button type=\"reset\" class=\"btn btn-danger\">Reset all fills</button>";
		$out .= "<button type=\"submit\" class=\"btn btn-success\" name='result'>Get Result</button></form>";
		return $out;
	}
	private function f_select($a, $b, $c, $d, $e, $f, $aa){
		$output = "<select id=\"selectError\" data-rel=\"chosen\" name = \"$aa\" required= 'required'>";
		$output .= "<option value =\"\">--select--</option>";
		$output .= "<option value =\"5\">$a</option>";
		$output .= "<option value =\"4\">$b</option>";
		$output .= "<option value =\"3\">$c</option>";
		$output .= "<option value =\"2\">$d</option>";
		$output .= "<option value =\"1\">$e</option>";
		$output .= "<option value =\"0\">$f</option>";
		$output .= "</select>";
		return $output;
	}
	private function title(){
		return "<input type='text' placeholder =\"Course title (optional)\" />";
	}
	private function cons(){
		return "<table class=\"table table-striped table-hover responsive\"><tr><th>Course(s)</th><th>Number of Unit(s)</th><th>Grade</th></tr>";
	}
	private function planner($var){
		$u = " unit(s) for Course ";
		$g = " grade for Course ";
		echo $this->cons();
		for ($i=1; $i < $var+1; $i++) { 
			echo "<tr><td>".$i.$this->title()."</td>";
			echo "<td>".$this->s_select(1, 2, 3, 4, 5, 6, "unit{$i}").$u." ".$i."</td>";
			echo "<td>".$this->f_select("A", "B", "C", "D", "E", "F", "grade{$i}").$g." ".$i."</td></tr>";
		}
		echo "</table>";
	}
}
$action = new Form;

/**
* The form Calculator
*/
class Calc{
	private static $tgp = 5, $all_cos, $product, $multiply, $sum, $statement;
	public static function getVal($value=''){
		if (isset($_POST['tnoc'])) {
			self::$all_cos = $_POST['tnoc'];
		}
		if (isset($_POST['tgp'])) {
			self::$tgp = $_POST['tgp'];
		}
		$gr = array();
		for ($i=1; $i < self::$all_cos+1; $i++) { 
			$gr['gr'.$i] = $_POST['unit'. $i];
		}
		self::$sum = array_sum($gr);
		self::$multiply = array();
		for ($i=1; $i < self::$all_cos+1; $i++) { 
			$$i = $_POST['unit'. $i] * $_POST['grade'. $i];
			$multiply[] = $$i;
		}
		self::$product = array_sum($multiply);
		return round(self::$product/self::$sum, 2);
	}
	public static function result($value=''){
		echo "<h1><center>".self::getVal()."/".self::$tgp.".00</center></h1>";
	}
	public static function remark($value=''){
		$result = self::getVal();
		if ($result >= 4.50) {
			$out = "<div class=\"alert alert-success\"><h2><center>A First Class Student!</center></h2></div>";
			$out .= "Keep making your fingers on the board, geek; you gat no prob with school.";
			echo $out;
		}elseif ($result >= 3.50) {
			$out = "<div class=\"alert alert-success\"><h2><center>A Second Class Upper Student!</center></h2></div>";
			$out .= "Make sure you attend classes and read more.";
			echo $out;
		}elseif ($result >= 2.50) {
			$out = "<div class=\"alert alert-success\"><h2><center>A Second Class Lower Student!</center></h2></div>";
			$out .= "Don't only attend classes alone, try meet a senior friend for extra tutorials.";
			echo $out;
		}elseif ($result >= 1.50) {
			$out = "<div class=\"alert alert-success\"><h2><center>A Third Class Student!</center></h2></div>";
			$out .= "Please, try and make the library as your first office.";
			echo $out;
		}elseif ($result <= 0.99) {
			$out = "<div class=\"alert alert-danger\"><h2><center>Chi!!!</center></h2></div>";
			$out .= "Sorry, we can't help out in any recommendations in terms of school, but THERE IS GOD O!";
			echo $out;
		}elseif ($result >= 1.00) {
			$out = "<div class=\"alert alert-danger\"><h2><center>A Pass Degree!</center></h2></div>";
			$out .= "Hope you have an extra work apart from the school thing?";
			echo $out;
		}
	}
}
?>