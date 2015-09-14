<?php
if (!isset($_COOKIE['hideCookieAlert'])) {
?>

    <style>
    #cookie-alert {
        background: #f5f5f5;
        position: fixed;
        width: 100%;
        bottom: 0%;
        border-top: 1px solid #e8eaeb;
        font-size: 0.76rem;
        text-align: center;
        padding: 12px;
        z-index: 3999;
    }
    </style>

    <script>
    function acceptCookie(obj) {
        var expiryDate=new Date();
        expiryDate.setMonth(expiryDate.getMonth()+1);
        document.cookie="hideCookieAlert=1; path=/; expires="+expiryDate.toUTCString();
        document.getElementById("cookie-alert").style.display = "none";
    }
    </script>

    <div id="cookie-alert">
        Cookies help us deliver our services.
        By using our services, you agree to our use of cookies. 
         <a href="/privacy">Learn more </a>  
         <a href="javascript:acceptCookie();">OK </a> 
    </div>

<?php
}
?>
