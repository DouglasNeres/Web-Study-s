var user = document.getElementById('admin').value
var pass = document.getElementById('senha').value

if (user == 'admin') {
    window.location.href = 'tabela.php';
}else{
    window.location.href = "http://pt.stackoverflow.com";
}