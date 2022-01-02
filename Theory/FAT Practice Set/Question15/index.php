<!DOCTYPE html>
<html lang="en" ng-app="myModule">
	<head>
		<title>Angular JS - MySQL</title>
	</head>
<body ng-controller="myController">

	<div>
		<h3>Insert Data</h3> <br>
		<div>
			<form>
				<div>
					First Name : <input type="text" ng-model="firstname" placeholder="Firstname"/> <br><br>
					Last Name : <input type="text" ng-model="lastname" placeholder="Lastname"/> <br><br>
					Address : <input type="text" ng-model="address" placeholder="Address"/> <br><br>
					<button type = "button" ng-click = "insertData()">Add</button>
					<button type = "button" ng-click = "del()">Delete</button>
				</div>
			</form>
		</div> <hr>
		<div>
			<table>
				<thead>
					<tr>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Address</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat = "x in members">
						<td>{{x.firstname}}</td>
						<td>{{x.lastname}}</td>
						<td>{{x.address}}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
<script src = "script.js"></script>
</body>	
</html>