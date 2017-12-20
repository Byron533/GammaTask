<main>
	<h1> Task List </h1>

	<aside>
		<h2>Tasks</h2>
		<nav>
		<ul>
		<?php foreach ($taskList as $addTask) : ?>
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
			<th> ID</th>
			<input type="text" name="code"/>
			<br>

			<th> Owner Email </th>
			<input type="text" name="name"/>
			<br>

			<th> Owner ID </th>
			<input type="text" name="code"/>
			<br>

			<th> Created Date </th>
			<input id="date" type="date"/>
			<br>

			<th> Due Date </th>
			<input id="date" type="date"/>
			<br>

			<th> Message </th>
			<input type="text" name="name"/>
			<br>

			<th> Is Done? </th>
			<input type="text" name="name"/>
			<br>

			<input type="submit" value="Submit Task">

		</tr>
	</table>
</section>
</main>

			
