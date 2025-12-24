<?php
session_start();

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','oopscrud');

class DB_con {

    public function __construct() {
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $this->dbh = $con;

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }

    // Data Insertion Function
    public function insert($fname, $lname, $emailid, $contactno, $address) {
        $ret = mysqli_query(
            $this->dbh,
            "INSERT INTO tblusers (FirstName, LastName, EmailId, ContactNumber, Address)
             VALUES ('$fname', '$lname', '$emailid', '$contactno', '$address')"
        );
        return $ret;
    }

    // Data Read Function
    public function fetchdata() {
        $result = mysqli_query($this->dbh, "SELECT * FROM tblusers");
        return $result;
    }

    // Data One Record Read Function
    public function fetchonerecord($userid) {
        $oneresult = mysqli_query(
            $this->dbh,
            "SELECT * FROM tblusers WHERE id = $userid"
        );
        return $oneresult;
    }

    // Data Updation Function
    public function update($fname, $lname, $emailid, $contactno, $address, $userid) {
        $updaterecord = mysqli_query(
            $this->dbh,
            "UPDATE tblusers SET
                FirstName='$fname',
                LastName='$lname',
                EmailId='$emailid',
                ContactNumber='$contactno',
                Address='$address'
             WHERE id='$userid'"
        );
        return $updaterecord;
    }

    // Data Deletion Function
    public function delete($rid) {
        $deleterecord = mysqli_query(
            $this->dbh,
            "DELETE FROM tblusers WHERE id = $rid"
        );
        return $deleterecord;
    }
}
?>
