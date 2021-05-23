<h1>user login</h1>
<form action ="request" method="POST">
@csrf
@method_field('PUT')
<input type="text" name="username" placeholder="username"> <br><br>
<input type="text" name="passsword" placeholder="password"><br><br>
<button>Submit</button>
</form>
<!-- in this we apply all the methods like get,post,put,delete  -->