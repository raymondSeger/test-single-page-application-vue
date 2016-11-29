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

<div id="app-7">
	<ol>
		<!-- get item object from groceryList, put item object to to-do, which will be taken by the template -->
		<todo-item v-for="item in groceryList" v-bind:todo="item"></todo-item>
	</ol>
</div>
<script>
	$('#clickMe').click(function(){
		app7.groceryList.push({text: "new value"});
	});

	// global component with property of to do, with template inline, to-do object will from from v-bind
	Vue.component('todo-item', {
		props: ['todo'],
		template: '<li>{{ todo.text }}</li>'
	})

	var app7 = new Vue({
		el: '#app-7',
		data: {
			groceryList: [
				{ text: 'Vegetables' },
				{ text: 'Cheese' },
				{ text: 'Whatever else humans are supposed to eat' }
			]
		}
	})

</script>

</body>
</html>