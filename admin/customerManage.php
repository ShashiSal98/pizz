
<div class="container-fluid" style="margin-top:98px">
	
	
	<div class="row">
		<div class="card col-lg-12">
			<div class="card-body">
				<table class="table-striped table-bordered col-md-12 text-center">
                    <thead style="background-color: rgb(111 202 203);">
                        <tr>
                            <th>Customer Id</th>
                            <th style="width:7%">Photo</th>
                            <th>Username</th>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Phone No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM customer"; 
                            $result = mysqli_query($conn, $sql);
                            
                            while($row=mysqli_fetch_assoc($result)) {
                                $Id = $row['id'];
                                $username = $row['username'];
                                $firstName = $row['firstName'];
                                $lastName = $row['lastName'];
                                $email = $row['email'];
                                $phone = $row['phone'];

                                echo '<tr>
                                    <td>' .$Id. '</td>
                                    <td><img src="/pizz/img/person-' .$Id. '.jpg" alt="image for this user" onError="this.src =\'/pizz/img/profilePic.jpg\'" width="100px" height="100px"></td>
                                    <td>' .$username. '</td>
                                    <td>
                                        <p>First Name : <b>' .$firstName. '</b></p>
                                        <p>Last Name : <b>' .$lastName. '</b></p>
                                    </td>
                                    <td>' .$email. '</td>
                                    <td>' .$phone. '</td>
                                   
                                </tr>';
                            }
                        ?>
                    </tbody>
		        </table>
			</div>
		</div>
	</div>
</div>
