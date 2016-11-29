<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script
		src="https://code.jquery.com/jquery-3.1.1.min.js"
		integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
		crossorigin="anonymous">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
			integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
			crossorigin="anonymous">
	</script>
	<script src="https://unpkg.com/vue/dist/vue.js"></script>
</head>
<body>

<div id="clickMe">Something happens</div>

<div id="app-4">
	<ol>
		<li v-for="todo in todos">
			{{ todo.text }}
		</li>
	</ol>
</div>

<script>
	$('#clickMe').click(function(){
		app4.todos.push( { text: 'New Value' } );
	});

	var app4 = new Vue({
		el: '#app-4',
		data: {
			todos: [
				{ text: 'Learn JavaScript' },
				{ text: 'Learn Vue' },
				{ text: 'Build something awesome' }
			]
		}
	})

</script>

</body>
</html>