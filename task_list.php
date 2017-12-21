<!DOCTYPE html>
<main>
	<div class="container" align="center">
	<h1> Task List </h1>

	<aside>
		<h2>Tasks</h2>
		<nav>
		<ul>
		<?php foreach ($task as $tasks) : ?>
			<li>
			<a href= "?action=<?php echo $taskList['tasks']; ?>">
				<?php echo $action['task']; ?>
			</a>
		    </li>
		<?php endforeach; ?>
	</ul>
</nav>
</aside>

<section>
	<h2><?php echo $task_list; ?></h2>
	
	<table>
		<tr>
		 
			<div>
				<label><b>ID</b></label>
			<input type="text" name="code"/>
			</div>

			<div>
				<label><b>Owner Email</b></label>
			<input type="text" name="name"/>
			</div>

			<div>
				<label><b>Owner ID</b></label>
			<input type="text" name="code"/>
			</div>

			<div>
				<label><b>Created Date</b></label>
			<input id="date" type="date"/>
			</div>

			<div>
				<label><b>Due Date</b></label>
			<input id="date" type="date"/>
			</div>

			<div>
				<label><b>Message</b></label>
			<input type="text" name="name"/>
			</div>

			<div>
				<label><b>Is Done?</b></label>
			<input type="text" name="name"/>
			</div>

			<input type="submit" value="Submit Task">
		</tr>
	</table>
</div>
</section>
</main>

			
