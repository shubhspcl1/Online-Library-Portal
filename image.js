var j = require("jimp");
j.read("images/l3.jpg", function(err,lenna){
	console.log("executing");
	if(err) throw err;
	lenna.resize(1400, 670)
		.write("l3.jpg");
		console.log("done");
});