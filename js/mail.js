<script type="text/javascript">
$(document).ready(function(){
    $("#form").submit(function() {
            var form_data = $(this).serialize();
            $.ajax({
            type: "POST",
            url: "../php/send.php",
            data: form_data,
            success: function() {
                   alert("Ваше сообщение отпрвлено!");
            });
    });
});    
</script>