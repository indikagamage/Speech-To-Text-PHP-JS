<script type="text/javascript">
    var recognition = new webkitSpeechRecognition();
    recognition.lang = "en"; // Don't forget, you must add your lang this line.
    recognition.onresult = function(event) {
      if (event.results.length > 0) {
        yourtextareaid.value = event.results[0][0].transcript; //Don't forget, add your textarea id in this line.
        document.forms["myform"].submit(); // Don't Forget, you must add your form name this line.
      }
    }
 </script>
<form name="myform" action="" method="post">
        <center><textarea hidden id="yourtextareaid" placeholder="Click start button and speak." name="word" style="width:60%; height:15%;"></textarea></center>
        <input hidden type="submit">
</form>
<?php
if($_POST){
echo $_POST["word"];
}
?>