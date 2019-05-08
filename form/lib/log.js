password = prompt("비밀번호를 입력하시오");
if(password == 'ilove3f'){
  location.href = 'form/body.php';
}
else{
  alert('다시 시도하세요');
  location.reload();
}
