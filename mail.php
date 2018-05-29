<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#form").submit(function() {
                var form_data = $(this).serialize();
                $.ajax({
                type: "POST",
                url: "php/form-processing.php",
                data: form_data,
                success: function() {
                       alert("Ваше сообщение отпрвлено!");
                });
        });
    });    
    </script>
</head>
<body>
    <form action="" method="post" id="form">
                      <div class="center modal-body">
                        <p>Пожалуйста заполните поля ниже, чтобы мы могли связатсья с Вами</p>
                        <input type="text" name="name" placeholder="Ваше имя" required="required" /><br/>
                        <input  type="email" name="email" placeholder="Email" required="required" /><br/>
                        <input type="phone" name="phone" placeholder="Телефон" /><br/>
                        <textarea type="text" name="message" placeholder="Комментарий"></textarea><br/>
                      </div>
                      <div class="modal-footer">
                          <input type="submit" class="btn btn-primary center">
                        </div>
    </form>
<div id="result"></div>
</body>