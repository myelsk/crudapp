$(document).ready(function() {
			// Sent data to database by ajax
			$('#save').click(function() {
				var name = $('#name').val();
				var surname = $('#surname').val();
				var email = $('#email').val();
				$.ajax({
					url: 'action.php',
					type: 'post',
					async: false,
					data: {
						'done': 1,
						'name': name,
						'surname': surname,
						'email': email
					},
					success: function(data) {
						displayData();
						$('#name').val('');
						$('#surname').val('');
						$('#email').val('');
					}
				});
			});
		});

		// displaying data
		function displayData() {
			$.ajax({
				url: "action.php",
				type: "post",
				async: false,
				data: {
					"display": 1
				},
				success: function(data) {
					$("#display").html(data);
				}
			});
		}

		//delete data
		$(document).on('click', '.delete', function () {
				var element = $(this);
				var del_id = element.attr('id');
				var info = 'id=' + del_id;
				if(confirm('Are you sure?')) {
					$.ajax({
						type: 'post',
						url: 'action.php',
						data: info,
						success: function() {
							displayData();
						}
					});
				}
				return false;
		});

		// getting id of updating user
		$(document).on('click', '.update-user', function(e) {
			e.preventDefault();
			window.updateid = parseInt($(this).attr('class'));
			$('.update-h1').html('Update for user #' + updateid);
		});
		//updating user
		$('#update').click(function() {
				var name = $('#up-name').val();
				var surname = $('#up-surname').val();
				var email = $('#up-email').val();
				$.ajax({
					url: 'action.php',
					type: 'post',
					async: false,
					data: {
						'updone': 1,
						'name': name,
						'surname': surname,
						'email': email,
						'updateid': updateid
					},
					success: function(data) {
						displayData();
						$('#up-name').val('');
						$('#up-surname').val('');
						$('#up-email').val('');
					}
				});
			});