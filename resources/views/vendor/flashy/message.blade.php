<style>
.flashy {
    font-family: Arial, sans-serif;
    padding: 11px 30px;
    border-radius: 4px;
    font-weight: 400;
    position: fixed;
    float: left;
    bottom: 71%;
    right: 20px;
    font-size: 16px;
    color: #fff;
}

.flashy--success {
    background-color: #99c93d;
    color: #fff;
}

.flashy--warning {
    color: #fff;
    background-color: #f68a1e;
    border-color: #f68a1e;
}

.flashy--muted {
    background: #eee;
    color: #3a3a3a;
    border: 1px solid #e2e2e2;
}

.flashy--muted-dark {
    background: #133259;
    color: #e2e1e7;
}

.flashy--info a,
.flashy--primary-dark a {
    color: #fff;
}

.flashy--error {
    background: #d14130;
    color: #fff;
}

.flashy--primary {
    background: #573e81;
}

.flashy--primary-dark {
    background: linear-gradient(to right, #133259 30%, #0d233e);
}

.flashy--info {
    background: #00baf3;
}

.flashy > ul {
    padding-left: 15px;
}

.flashy > p:only-of-type {
    margin-bottom: 50;
}

.flashy i {
    margin-right: 8px;
    position: relative;
    top: 6px;
}

.flashy .flashy__body {
    color: inherit;
}

</style>

<script>
    function flashy(message, link) {
        var template = $($("#flashy-template").html());
        $(".flashy").remove();
        template.find(".flashy__body").html(message).attr("href", link || "#").end()
         .appendTo("body").hide().fadeIn(300).delay(2800).animate({
            marginRight: "-100%"
        }, 300, "swing", function() {
            $(this).remove();
        });
    }
</script>

@if(Session::has('flashy_notification.message'))
<script id="flashy-template" type="text/template">
    <div class="flashy flashy--{{ Session::get('flashy_notification.type') }}">
        <a href="#" class="flashy__body" target="_blank"></a>
    </div>
</script>

<script>
    flashy("{{ Session::get('flashy_notification.message') }}", "{{ Session::get('flashy_notification.link') }}");
</script>
@endif