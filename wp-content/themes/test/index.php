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

<div id="app-5">
	<p>{{ message }}</p>
	<button v-on:click="reverseMessage">Reverse Message</button>
</div>

<script>
	$('#clickMe').click(function(){

	});

	var app5 = new Vue({
		el: '#app-5',
		data: {
			message: 'Hello Vue.js!'
		},
		methods: {
			reverseMessage: function () {
				this.message = this.message.split('').reverse().join('')
			}
		}
	})

</script>

</body>
</html>