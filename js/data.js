var app = app || {};

// Leon_Years = Âîçðàñò ïîêóïàòåëåé New Leon

app.init = function(){
	$('#download').on('click', $.proxy(app.download, this)); // button download
	$('body').on('click', '.toDataUrl', $.proxy(app.toDataUrl, this));
};

app.toDataUrl = function(e){
	e.preventDefault();
	var id = $(e.target).attr('data-id');
	var image = document.getElementById(id).toDataURL("image/png").replace("image/png", "image/octet-stream");
	window.location.href = image;
}

app.download = function(e){
	e.preventDefault();

	var data = [];

	$('.content').html('');
	$('#category option:selected').map(function(){
		data.push($(this).val());
	});

	$.get('scripts/make.php', {data : data}, $.proxy(app.responde, this));
};

app.responde = function(res){
	try{
		app.data = $.parseJSON(res);
	} catch(e){
		console.log( 'Json error' );
	}
	app.choseDiagram();
};

app.choseDiagram = function(){
	for(var key in app.data){
		var value = app.data[key];
		switch (key){
			case 'Leon_Years' :
				app.LeonYears(value); 
				break;
			case 'Leon_Years_By_Model' :
				app.LeonYearsByModel(value); 
				break;
		}
	}
};
// Leon Years
app.LeonYears = function(val){
	var id = 'LeonYears';
	var canvas, data, arrays, s, m, l;

	app.buildHTML('Âîçðàñò ïîêóïàòåëåé New Leon', id);

	canvas = document.getElementById(id).getContext('2d');
	val = _.map(val, function(string) { return parseInt(string);  });
	arrays = {
		small : app.find(val, 18, 24),
		middle : app.find(val, 25, 34),
		large : app.find(val, 35)
	};
	data = [
		{
			value: arrays.small,
			color: "#F38630"
		},
		{
			value : arrays.middle,
			color : "#E0E4CC"
		},
		{
			value : arrays.large,
			color : "#69D2E7"
		}
	];
	var count = [arrays.small, arrays.middle, arrays.large];
	app.addDescriptionLeonYears(id, count);
	new Chart(canvas).Pie(data);
};

//  add description Leon Years
app.addDescriptionLeonYears = function(id, count){
	var stage = new createjs.Stage(id),
		colors = ['#F38630', '#E0E4CC', '#69D2E7'],
		labels = ['18-24', '25-34', '35 > '],
		y = 400,
		g = 0;

	_.each(colors, function(i){
		var shape = new createjs.Shape();
		var text = new createjs.Text('- ' + labels[g] + ' ('+count[g]+')', '14px Arial', '#000');
		shape.graphics.beginFill(i).drawRect(0,y,60,20);
		text.x = 64;
		text.y = y;
		y += 25;
		g++;
		stage.addChild(text);
		stage.addChild(shape);
	});
	stage.update();

};
//  end leon yers
app.LeonYearsByModel = function(data){ //Leon_Years_By_Model
	var id = 'LeonYearsByModel', canvas,
	newLeon, newLeonSc, newLeonSt,
	yearsLeon, yearsSc, yearsSt;

	app.buildHTML('Âîçðàñò ïîêóïàòåëåé New Leon ïî ìîäåëÿì (New Leon, New Leon SC, New Leon ST)', id);
	canvas = document.getElementById(id).getContext('2d');

	newLeon = _.map(data['NEW LEON'], function(value){
		return parseInt(value);
	});

	newLeonSc = _.map(data['NEW LEON SC'], function(value){
		return parseInt(value);
	});

	newLeonSt = _.map(data['NEW LEON ST'], function(value){
		return parseInt(value);
	});
	yearsLeon = {
		small : app.find(newLeon, 18, 24),
		middle : app.find(newLeon, 25, 34),
		large : app.find(newLeon, 35)
	};

	yearsSc = {
		small : app.find(newLeonSc, 18, 24),
		middle : app.find(newLeonSc, 25, 34),
		large : app.find(newLeonSc, 35)
	};

	yearsSt = {
		small : app.find(newLeonSt, 18, 24),
		middle : app.find(newLeonSt, 25, 34),
		large : app.find(newLeonSt, 35)
	};

	var bars = {
		labels : ['NEW LEON','NEW LEON SC','NEW LEON ST'],
		datasets : [
			{
				fillColor : "#F38630",
				strokeColor : "rgba(220,220,220,1)",
				data : [yearsLeon.small, yearsSc.small, yearsSt.small]
			},
			{
				fillColor : "#E0E4CC",
				strokeColor : "rgba(151,187,205,1)",
				data : [yearsLeon.middle, yearsSc.middle, yearsSt.middle]
			},
			{
				fillColor : "#69D2E7",
				strokeColor : "rgba(151,187,205,1)",
				data : [yearsLeon.large, yearsSc.large, yearsSt.large]
			}
		]
	};
	new Chart(canvas).Bar(bars);
	app.addDescriptionLeonYearsByModel(id, yearsLeon, yearsSc, yearsSt)
};

//  add description Leon Years
app.addDescriptionLeonYearsByModel = function(id, leon, st, sc){
	var stage = new createjs.Stage(id),
	colors = ['#F38630', '#E0E4CC', '#69D2E7'],
	labels = ['18-24', '25-34', '35 > '],
	y = 400,
	g = 0,
	count = function(g, object){
		switch (g){
			case 0 :
				return object.small;
				break;
			case 1 :
				return object.middle;
				break;
			case 2 :
				return object.large;
				break;
		}
	};
	
	// new leon
	var text = new createjs.Text(('New Leon').toUpperCase(), '18px Arial', '#000');
	text.y = y;
	text.x = 0;
	stage.addChild(text);
	_.each(colors, function(i){
		y += 27;
		var shape = new createjs.Shape();
		var text = new createjs.Text('- ' + labels[g] + ' ('+count(g, leon)+')', '14px Arial', '#000');
		shape.graphics.beginFill(i).drawRect(0,y,60,20);
		text.x = 64;
		text.y = y;
		g++;
		stage.addChild(text);
		stage.addChild(shape);
	});

	// new leon sc
	g = 0;
	y = 400;
	var text2 = new createjs.Text(('New Leon SC').toUpperCase(), '18px Arial', '#000'),
	x = text2.getBounds().width/2;
	text2.y = y;
	text2.x = 600/2 - x;
	stage.addChild(text2);
	console.log( x );
	_.each(colors, function(i){
		y += 27;
		var shape = new createjs.Shape();
		var text = new createjs.Text('- ' + labels[g] + ' ('+count(g, st)+')', '14px Arial', '#000');
		shape.graphics.beginFill(i).drawRect(text2.x,y,60,20);
		text.x = text2.x + 63;
		text.y = y;
		g++;
		stage.addChild(text);
		stage.addChild(shape);
	});
	// new leon st
	g = 0;
	y = 400;
	var text3 = new createjs.Text(('New Leon ST').toUpperCase(), '18px Arial', '#000'),
	x = text3.getBounds().width;
	text3.y = y;
	text3.x = 590 - x;
	stage.addChild(text3);
	_.each(colors, function(i){
		y += 27;
		var shape = new createjs.Shape();
		var text = new createjs.Text('- ' + labels[g] + ' ('+count(g, sc)+')', '14px Arial', '#000');
		shape.graphics.beginFill(i).drawRect(text3.x,y,60,20);
		text.x = text3.x + 63;
		text.y = y;
		g++;
		stage.addChild(text);
		stage.addChild(shape);
	});

	stage.update();

};
app.buildHTML = function(title, id){
	var html = '';
	html += '<h3>' + title;
	html += '<a href="#" class="toDataUrl btn btn-primary" data-id=' + id + '>Êàðòèíêà</a>';
	html += '</h3>';
	html += '<canvas width="600" height="500" id='+id+'></canvas>';
	$('.content').append(html);
};

app.find = function(array, v1, v2){
	var result = [];
	if( !array ) return console.log( 'err' );

	if( v1 && v2 ){
		_.each(array, function(i){
			if( i >= v1 && i <= v2 ){
				result.push(i);
			};
		});

	}
	else if( v1 && !v2 ){
		_.each(array, function(i){
			if( i >= v1 ) result.push(i);
		});
	}
	else{
		return console.log( 'err' );
	}
	return result.length;
}

$(function(){
	app.init();
});