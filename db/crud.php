<?php
	class crud {
		private $db;

		public function __construct($conn)
		{
			$this->db = $conn;
		}

		public function insert($fname, $lname, $dob, $specialty, $email, $contact): ?bool
		{
			try {
				//Define sql statement to be executed
				$sql = "INSERT INTO attendee (firstname, lastname, dateofbirth,specialty_id, email, contact) VALUES (:fname, :lname, :dob, :email, :specialty, :contact)";
				// Prepare the sql statement for execution
				$stmt = $this->db->prepare($sql);
				// Bind all placeholders to the actual values
				$stmt->bindparam(':fname', $fname);
				$stmt->bindparam(':lname', $lname);
				$stmt->bindparam(':dob', $dob);
				$stmt->bindparam(':email', $email);
				$stmt->bindparam(':specialty', $specialty);
				$stmt->bindparam(':contact', $contact);
				// Execute statement
				$stmt->execute();
				return true;
			} catch (PDOException $e) {
				echo $e->getMessage();
				return false;
			}
		}
	}
