$(document).ready(function() {
  $('.btn-entrar').on('click', entrar);

  // var user=$('#inputUser');
  // var pass=$('#inputPassword');
});
    function entrar(){
      var mail=$('#inputMail');
      var pass=$('#inputPassword');
      var html=''
    if (mail.val() !='' && pass.val()!='') {
      if (mail.val().indexOf('@')!=-1) {
        $('#form1').attr('action', 'inicio_sesion.php');
// correo.val().indexOf('@')!=-1
      }else{
        // console.log("llenos");
        alert("El correo debe de llevar '@'");
      }
    // action="recibe.php" method="post"
    }else{
      $(document).each( function() {
        // html += '<form id="form1" ffffff class="form-signin">'
        //   $('#form1').append(html);
        // console.log("vacios");
          $('#form1').attr('action', 'index.php');
        alert("Campos vacios");
        // $("a").attr("target","_blank");
      });
    }
  }
