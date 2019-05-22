
<script>
   let routeName = "<?php echo URLROOT .''. $_GET['url'] ?>";

    getNode("bar", "[href='"+ routeName +"']").parentNode.style.background = "rgba(0,0,0,0.3)";

    // Incase route name login OR register
     getNode("registration", "[href='"+ routeName +"']").style.color = "red";
    //  getNode("registration", "[href='"+ routeName +"']").parentNode.style.background = "rgba(0,0,0,0.3)";

    function getNode(byId , quertSelector){
        return document.getElementById(byId).querySelector(quertSelector);
    }
    
    function getClassName(className){
        return document.getElementsByClassName(className);
    }

</script>

</body>

</html> 