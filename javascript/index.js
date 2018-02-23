//EXERCICE 1
var exo1 = document.getElementById('lol');

let arr= [["Javascript","Ruby"],["Php","Html"],["CSS","Python"]];
let together = arr[0].concat(arr[1]).concat(arr[2]);
together.sort();
console.log(together);

exo1.innerHTML = "1)"+ "  " + together;

//EXERCICE 2
let obj = {
    "guadeloupe": 971,
    "martinique": 972,
    "guyane": 973,
    "reunion": 974
}
for (var i in obj){
    console.log(obj[i]);
}


var exo2 = document.getElementById('exo2');
exo2.innerHTML = "2)"+" "+ obj['guadeloupe']+" , "+ obj['martinique']+" , "+obj["guyane"]+" , "+obj['reunion'];

//EXERCICE 3 
var exo3 = document.getElementById('exo3');

var country = ['France','Angleterre','Espagne','Italie'];
console.log(country);
exo3.innerHTML = '3)'+ country;
country.push('Marie-Galante');
console.log(country);
var exo3bis = document.getElementById('exo3bis');
exo3bis.innerHTML = country;
//EXERCICE 4
var exo4 = document.getElementById('exo4');
var exo4bis = document.getElementById('exo4bis');

var newcountry = ['France','Angleterre','Espagne','Italie','Portugal'];
console.log(newcountry);
exo4.innerHTML = '4)'+ newcountry;
newcountry.shift();
console.log(newcountry);
exo4bis.innerHTML = newcountry;

//EXERCICE 5
let Obj = {
    'yo': 1,
    'foo': 9,
    'bar':4
}
var i = Obj.yo;
var d = Obj.foo;
Obj.yo = d;
Obj.foo = i;
console.log(Obj);
var exo5 = document.getElementById('exo5');
exo5.innerHTML ='5)'+' '+'yo:'+Obj.yo+' '+'foo:'+Obj.foo+' '+'bar:'+Obj.bar;