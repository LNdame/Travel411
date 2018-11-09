var mailgun = require("./node_modules/mailgun-js");
var api_key = 'key-aeb2e567d182fb62de638dce6a8dde6a';
var DOMAIN = 'sandbox1f7664facb124426bb64f1eafe048755.mailgun.org';

var mailgun = require('./node_modules/mailgun-js')({apiKey: api_key, domain: DOMAIN});

var data = {
		from: 'Exister User <ansteph09@gmail.com>',
		to: 'ls20045@gmail.com, loicn@cicte.co.za',
		subject: "hello",
		text: 'testing mailgun'
};

mailgun.messages().send(data, function(error, body){
	console.log(body);
});
