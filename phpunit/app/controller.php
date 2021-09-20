<?php
error_reporting(0);

session_start();
$username = "";
$email = "";
$errors = [];
$page = 0;
$sucess = [];
$title="";
$qsn = "";
$qnum="";
$sdate = "";
$sh = "";
$sm = "";
$ss = "";
$edate = "";
$eh = "";
$em = "";
$es = "";
$wait = 0;
$key = 0;
// $model = new model();
// $conn = $model->connect();

// Data Passed by the users go here
$_POST['username'] = "Ilmi";
$_POST['email']= "ilmi@gmail.com";
$_POST['password']= "123";
$_POST['number']= "17101130";
$_POST['DofB']= "1996-02-07";

$_POST['country']= "Bangladesh";

$_POST['password']= "123";
$_POST['passwordConf']= "123";

$_POST['signup'] = 1;
$_POST['comments'] = array('We want to go for funding');
$_POST['signup-key'] = 1;

$_POST['title'] = "FakeInformation";
$_FILES["qsn"]["name"] = "./app/FakeInformation.png";
$_POST['qnum'] = 10;
$_POST['sdate'] = "2020-10-27";
$_POST['sh'] = 13;
$_POST['sm'] = 1;
$_POST['ss'] = 1;
$_POST['edate'] = "2020-10-27";
$_POST['eh'] = 14;
$_POST['em'] = 1;
$_POST['es'] = 1;

// Data Passed by the user's result go here
$_POST['commentcheck'] = array('We want to go for funding');




class user{
public function login_user(){
if (empty($_POST['email'])) {
$GLOBALS['errors']['email'] = 'Email required';
}
if (empty($_POST['password'])) {
$GLOBALS['errors']['password'] = 'Password required';
}
$email = $_POST['email'];
$password = $_POST['password'];
if (count($GLOBALS['errors']) === 0) {

    //Fake data to mock DataBase
$user = array(
    "id" => "1",
    "username" => "Ilmi",
    "email" => "ilmi@gmail.com",
    "number" => "17101130",
    "dofb" => "1996-02-07",
    "country" => "Bangladesh",
    "verified" => false,
    "password" => '$2y$10$uAfxj2ebk9V/zcPFcbDI/OavBdRGoMPZpbBbXWOYCQ5AvQjxti0Hy',
);


if (password_verify($password, $user['password'])) { // if password matches
$_SESSION['id'] = $user['id'];
$_SESSION['username'] = $user['username'];
$_SESSION['email'] = $user['email'];
$_SESSION['number'] = $user['number'];
$_SESSION['DofB'] = $user['dofb'];
$_SESSION['country'] = $user['country'];
$_SESSION['verified'] = $user['verified'];
$_SESSION['message'] = 'You are logged in!';
$_SESSION['type'] = 'alert-success';
return true;

} else { // if password does not match
$GLOBALS['errors']['login_fail'] = "Wrong Email / password";
return false;
}
}
}
public function signup_user(){
if (empty($_POST['username'])) {
$GLOBALS['errors']['username'] = 'Username required';
}
if (empty($_POST['email'])) {
$GLOBALS['errors']['email'] = 'Email required';
}
if (empty($_POST['number'])) {
$GLOBALS['errors']['number'] = 'Contact required';
}
if (empty($_POST['DofB'])) {
$GLOBALS['errors']['DofB'] = 'Date of Brith required';
}
if (empty($_POST['country'])) {
$GLOBALS['errors']['country'] = 'country name required';
}
if (empty($_POST['password'])) {
$GLOBALS['errors']['password'] = 'Password required';
}
if (empty($_POST['passwordConf']) && $_POST['password'] !== $_POST['passwordConf']) {
$GLOBALS['errors']['passwordConf'] = 'The two passwords do not match';
}
$username = $_POST['username'];
$email = $_POST['email'];
$number = $_POST['number'];
$DofB = $_POST['DofB'];
$country = $_POST['country'];
$token = bin2hex(random_bytes(50)); // generate unique token
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); //encrypt password
// Check if email already exists
// $result = $GLOBALS['model']->select("users", "email='".$email."'");;
// MOCK
$mysqli_num_rows = 0;
if ($mysqli_num_rows > 0) {
$GLOBALS['errors']['email'] = "Email already exists";
}
if (count($GLOBALS['errors']) === 0) {
// $result = $GLOBALS['model']->insert("users", "username='$username', email='$email', number='$number', dofb='$DofB', country='$country', token='$token', password='$password'");
// mocking DB result
$result = true;
if ($result) {
$_SESSION['id'] = 0;
$_SESSION['username'] = $username;
$_SESSION['email'] = $email;
$_SESSION['number'] = $number;
$_SESSION['DofB'] = $DofB;
$_SESSION['country'] = $country;
$_SESSION['verified'] = false;
$_SESSION['message'] = 'You are logged in!';
$_SESSION['type'] = 'alert-success';
// header('location: ../index.php');
return true;
} else {
$_SESSION['error_msg'] = "Database error: Could not register user";
}
}
return false;
}
public function logout_user(){
session_destroy();
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['number']);
unset($_SESSION['DofB']);
unset($_SESSION['country']);
unset($_SESSION['verifiedr']);
unset($_SESSION['message']);
unset($_SESSION['type']);
// header("location: ./view/login.php");
return true;
}
}
class information{
public function save_info(){
$GLOBALS['title'] = $_SESSION['ext'];
$GLOBALS['qnum']  = $_SESSION['tq'];
if(!empty($_POST['comments'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['comments']);
// print_r($_POST);
if(strval($checked_count) === $GLOBALS['qnum']){ 
$submit = $_POST['comments'];
$commstring = "";
for($i=1;$i<$GLOBALS['qnum']+1;$i++){
$commstring = $commstring. $submit[$i];
}


$result = true;
if($result){
$GLOBALS['sucess']['s1']= "Information is recorded.";}
return true;

}
else{
$GLOBALS['errors']['s1'] = "Sorry wrong info try again";
}
} else { $GLOBALS['errors']['s1'] = "Sorry wrong info try again";}
$GLOBALS['page'] =1;
return false;
}
public function add(){
if (empty($_POST['signup'])) {
$GLOBALS['errors']['es'] = 'Signup-Key required.';
}
if (count($GLOBALS['errors']) === 0) {
$_SESSION['information_id'] = $signupkey = $_POST['signup'];

$res = array(
    "title" => "FakeInformation",
    "qnum" => "10",
);
$row_exist=true;
while($row_exist) { 
$_SESSION['ext']  = $GLOBALS['title'] = $res['title'];
$_SESSION['tq'] = $GLOBALS['qnum'] = $res['qnum'];
$row_exist=false;
}
$GLOBALS['page'] =1;
return true;
}
return false;
}
public function delete(){
$signup = $_POST['signup'];

$mysqli_num_rows = 1;
if ($mysqli_num_rows > 0) {
// output data of each row
$row_exist = true;
$row = array(
    "title" => "FakeInformation",
    "qnum" => "10",
    "qsn" => "FakeInformation.png",
);
while($row_exist) {
$qw = $row["qsn"];
$row_exist = false;
}
$path = "info/". $qw;

if (true){

$res = true;
if($res){
$GLOBALS['sucess']['es'] = 'Information Removed from our Database';
return true;
} else{
$GLOBALS['errors']['es'] = "Some errors occured";
} 
return false;  
}
else{
$GLOBALS['errors']['es'] = "Some errors occured";
}     
}
return false;
}
public function signup(){
$GLOBALS['key'] = $signupkey = $_POST['signup-key'];

$res = array(
    "title" => "FakeInformation",
    "qnum" => "10",
    "qsn" => "FakeInformation.png",
    "sdate" => "2020-10-27",
    "sh" => 13,
    "sm" => 1,
    "ss" => 1,
    "edate" => "2020-10-27",
    "eh" => 14,
    "em" => 1,
    "es" => 1,
);
$row_exist = true;
while($row_exist) { 
$_SESSION['title'] = $GLOBALS['title'] = $res['title'];
$_SESSION['qsn'] = $GLOBALS['qsn'] = $res['qsn'];
$_SESSION['qnum'] = $GLOBALS['qnum'] = $res['qnum'];
$_SESSION['sdate'] = $GLOBALS['sdate'] = $res['sdate'];
$_SESSION['sh'] = $GLOBALS['sh'] = $res['sh'];
$_SESSION['sm'] = $GLOBALS['sm'] = $res['sm'];
$_SESSION['ss'] = $GLOBALS['ss'] = $res['ss'];
$_SESSION['edate'] = $GLOBALS['edate'] = $res['edate'];
$_SESSION['eh'] = $GLOBALS['eh'] = $res['eh'];
$_SESSION['em'] = $GLOBALS['em'] = $res['em'];
$_SESSION['es'] = $GLOBALS['es'] = $res['es'];
$row_exist = false;
}
$GLOBALS['email'] = $_SESSION['email'];

$mysqli_num_rows = 0;
if ($mysqli_num_rows > 0) { 
$GLOBALS['errors']['es'] = 'You already SignUp once.';
}
if (empty($_POST['signup-key'])) {
$GLOBALS['errors']['es'] = 'Signup-Key required.';
}
if (count($GLOBALS['errors']) === 0) {
$st= strtotime($GLOBALS['sdate']." ".$GLOBALS['sh'].":".$GLOBALS['sm'].":".$GLOBALS['ss']) * 1000;
$et= strtotime($GLOBALS['edate']." ".$GLOBALS['eh'].":".$GLOBALS['em'].":".$GLOBALS['es']) * 1000;
$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
$nt= strtotime($dt->format('F j, Y, g:i:s a')) * 1000;
$distance = $st - $nt;
$distance1 = $et - $nt;

if ($distance1 < 0){
$GLOBALS['errors']['es'] = $GLOBALS['title'] . "information has already deleted";
}
if ($distance > 0 ){
$GLOBALS['wait'] =1;
}
if ($distance < 0 && $distance1 > 0){
$GLOBALS['page'] = 1;
}
return true;
}
return false;
}

public function post(){
if (empty($_POST['title']) || empty($_POST['qnum']) || empty($_FILES["qsn"]["name"]) || empty($_POST['sdate']) || empty($_POST['sh']) || empty($_POST['sm']) || empty($_POST['ss']) || empty($_POST['edate']) || empty($_POST['eh']) || empty($_POST['em']) || empty($_POST['es'])) {
if($_POST['sh'] === '0' || $_POST['sm'] === '0' ||$_POST['ss'] === '0' || $_POST['eh'] === '0' || $_POST['em'] === '0' ||$_POST['es'] === '0'){}
else{
$GLOBALS['errors']['es'] = 'One or more information is empty';
}
}
$GLOBALS['title'] = $_POST['title'];
$GLOBALS['qsn'] = $_FILES["qsn"]["name"];
$GLOBALS['qnum'] = $_POST['qnum'];
$GLOBALS['sdate'] = $_POST['sdate'];
$GLOBALS['sh'] = $_POST['sh'];
$GLOBALS['sm'] = $_POST['sm'];
$GLOBALS['ss'] = $_POST['ss'];
$GLOBALS['edate'] =$_POST['edate'];
$GLOBALS['eh'] = $_POST['eh'];
$GLOBALS['em'] = $_POST['em'];
$GLOBALS['es'] = $_POST['es'];

if (0 > 0) {
$GLOBALS['errors']['es0'] = "post with same title already exists";
}
$st= strtotime($GLOBALS['sdate']." ".$GLOBALS['sh'].":".$GLOBALS['sm'].":".$GLOBALS['ss']) * 1000;
$et= strtotime($GLOBALS['edate']." ".$GLOBALS['eh'].":".$GLOBALS['em'].":".$GLOBALS['es']) * 1000;
$d = $et - $st;
if($d<0) {
$GLOBALS['errors']['es0'] = "Try again.";
}
$target_dir = "post";
$target_file = $target_dir . basename($_FILES["qsn"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
$GLOBALS['errors']['es4'] = "Only JPG, JPEG, PNG & GIF files are allowed.";
}

if (count($GLOBALS['errors']) === 0) {

$result = true;
if ($result) {
if (true) {
$GLOBALS['sucess']['es'] = 'information added to our Database';
return true;
} else {
$GLOBALS['model']->delete("information", "title='".$GLOBALS['title']."'");
$GLOBALS['errors']['es'] = "Sorry, there was an error uploading your file.";
} 
} else {$GLOBALS['errors']['es'] = "Database Error."; }
} 
return false;
}
}
class result{
public function check_duplicate(){
$GLOBALS['email'] = $_SESSION['email'];
$GLOBALS['title'] = $_SESSION['title'];
$result = true;

return $result;
}
public function has_no_solve(){
$submit="";
$GLOBALS['title'] = $_SESSION['title'];

$row_exist = true;
$rows = array('comms' => 'We want to go for funding' );
while($row_exist) {
$submit = $rows['comms'];
$row_exist = false;
}
return $submit;
}
public function cal_result($submit){
$GLOBALS['counter'] = 0;
$GLOBALS['qnum'] = $_SESSION['qnum'];
$GLOBALS['username'] = $_SESSION['username'];
$GLOBALS['email'] = $_SESSION['email'];
$GLOBALS['title'] = $_SESSION['title'];
$GLOBALS['checked_count'] = 0;
if(!empty($_POST['commentcheck'])) {

$GLOBALS['checked_count'] = count($_POST['commentcheck']);
$selected = $_POST['commentcheck'];
$commsc = str_split($submit);
for($i=0;$i<$GLOBALS['qnum'];$i++){
if($commsc[$i] === $selected[$i+1]){ $GLOBALS['counter'] = $GLOBALS['counter'] + 1;}
}
}

$result = true;
return $result;
}
}

?>
