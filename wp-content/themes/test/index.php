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

<div id="app-8">
	Name: {{ name }} <br />
	Age: {{ age }} <br />
	Like Seafood: {{ likeSeaFood }} <br />

	{{ reversedName }}
</div>

<script>
	$('#clickMe').click(function(){
		mainData.name = "Gabriel";
	});

	// design pattern for SPA, show the global json object and make it into the front-end
	var mainData = {
		name				: "raymond",
		age					: 26,
		likeSeaFood			: true
	};

	var app8 = new Vue({
		el		: '#app-8',
		data	: mainData,
		methods : {
			doSomething : function() {
				alert('a');
			}
		},
		computed: {
			reversedName: function () {
				return this.name.split('').reverse().join('')
			}
		}
	});

</script>

</body>
</html>