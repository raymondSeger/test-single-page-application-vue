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

<div id="clickMe" style="margin-bottom: 50px;">Something happens</div>

<div id="app-9">

	<simple-counter message="hello!"></simple-counter>
	<simple-counter message="hello2!"></simple-counter>
	<simple-counter message="hello3!"></simple-counter>

</div>

<script>
	$('#clickMe').click(function(){

	});

	Vue.component('simple-counter', {
		props: ['message'],
		template: '<div><span>{{ message }}</span> <button v-on:click="counter += 1">{{ counter }}</button></div>',
		data: function () {
			return {
				counter: 0
			}
		}
	});

	// design pattern for SPA, show the global json object and make it into the front-end
	var mainData = {
		message: ''
	};

	var app9 = new Vue({
		el		: '#app-9',
		data	: mainData,
		methods : {
		},
		computed: {
		}
	});

</script>

</body>
</html>