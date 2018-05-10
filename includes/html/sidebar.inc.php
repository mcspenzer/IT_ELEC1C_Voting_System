<div class="ui sidebar vertical left icon inverted menu ">
	<a href="home.php" class="active red item"> <i class="home icon"></i>Home</a>
	<a href="#" class="item"> <i class="sticky note icon"></i>Instructions</a>
	<a href="vote.php" class="item"> <i class="thumbs up icon"></i>Vote</a>
	<a href="createPoll.php" class="item"> <i class="globe icon"></i>Manage</a>
	<a href="#" class="item"> <i class="info icon"></i>About</a>
	<a class="item" id="logout_button"> <i class="power off icon"></i>Logout</a>
</div>

<script>
	$(document).ready(function() {
		$("#logout_button").click(function() {
			var logout_form = $('<form action="includes/logout/logoutProcess.inc.php" method="POST">' +
			'<input type="hidden" name="logout" value="logout">' + 
			'</form>');

			$("body").append(logout_form);
			logout_form.submit();
		});
	});
</script>